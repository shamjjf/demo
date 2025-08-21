 <script>
        document
          .getElementById("newsletter-form")
          .addEventListener("submit", function (e) {
            e.preventDefault();

            const formMessages = document.getElementById("responseMessage");
            const email = this.querySelector(
              'input[name="email"]'
            ).value.trim();

            // Email validation regex
            const emailRegex =
              /^(?!.*\.\.)([a-zA-Z0-9][a-zA-Z0-9._%+-]{5,63})@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            // Validate email format
            if (!emailRegex.test(email)) {
              formMessages.textContent = "Please enter a valid email address.";
              formMessages.style.color = "#fff";
              return; // Stop form submission
            }

            const data = Object.fromEntries(new FormData(this).entries());

            fetch("https://marscms-api.mini91.com/api/newsletter", {
              method: "POST",
              body: JSON.stringify({
                ...data,
                site: "6798f703e5b0d99195ac3ed4",
              }),
              headers: { "Content-Type": "application/json" },
            })
              .then((response) => {
                console.log(response.status);
                return response.json().then((data) => ({
                  status: response.status,
                  body: data,
                }));
              })
              .then(({ status, body }) => {
                console.log(body);
                if (body.error === "List already exists") {
                  formMessages.textContent =
                    "Oops! It looks like you've already subscribed with this email.";
                  formMessages.style.color = "#fff";
                } else if (status === 200 || status === 201) {
                  formMessages.textContent =
                    "You’ve successfully subscribed! Thank you!";
                  formMessages.style.color = "#fff";
                } else {
                  formMessages.textContent =
                    body.message || "An error occurred. Please try again.";
                  formMessages.style.color = "#fff";
                }
              })
              .catch((error) => {
                // Handle error
                console.error(error);
                formMessages.textContent =
                  "There was an issue with your submission. Please try again.";
                formMessages.style.color = "red";
              });
          });
      </script>