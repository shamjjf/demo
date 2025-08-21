document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("newsletter-form")
    .addEventListener("submit", async function (e) {
      e.preventDefault(); // Prevent form default behavior

      const formMessages = document.getElementById("responseMessage");
      const email = this.querySelector('input[name="email"]').value.trim();

      // Clear any previous messages
      formMessages.textContent = "";
      formMessages.style.color = "";

      // Email validation regex
      const emailRegex =
        /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|org|net|edu)$/;

      // Validate email format locally
      if (!emailRegex.test(email)) {
        formMessages.textContent = "Please enter a valid email address.";
        formMessages.style.color = "red";
        hideMessageAfterDelay(formMessages, 10000);
        return;
      }

      // Prepare form data
      const data = Object.fromEntries(new FormData(this).entries());

      // Submit form via API
      try {
        const response = await fetch(
          "https://marscms-api.mini91.com/api/newsletter",
          {
            method: "POST",
            body: JSON.stringify({
              ...data,
              site: "6798f703e5b0d99195ac3ed4",
            }),
            headers: { "Content-Type": "application/json" },
          }
        );

        const responseData = await response.json();
        if (responseData.error === "List already exists") {
          formMessages.textContent =
            "Oops! It looks like you've already subscribed with this email.";
          formMessages.style.color = "#fff";
          formMessages.style.marginLeft = "10px";
        } else if (response.ok) {
          formMessages.textContent =
            "You’ve successfully subscribed! Thank you!";
          formMessages.style.color = "#fff";
          this.reset(); // Clear form only on success
        } else {
          formMessages.textContent =
            responseData.message || "An error occurred. Please try again.";
          formMessages.style.color = "#fff";
        }
      } catch (error) {
        console.error("Form submission error:", error);
        formMessages.textContent =
          "There was an issue with your submission. Please try again.";
        formMessages.style.color = "red";
      }

      hideMessageAfterDelay(formMessages, 10000);
    });

  // Function to hide themessage after a delay
  function hideMessageAfterDelay(element, delay) {
    setTimeout(() => {
      element.textContent = "";
      element.style.color = "";
    }, delay);
  }
});
