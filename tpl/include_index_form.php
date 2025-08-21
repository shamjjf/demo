<script>

    document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const formMessages = document.getElementById("formMessages");

    // Initialize intl-tel-input for the mobile field
    const phoneField = document.getElementById("mobile");
    const ccodeField = document.getElementById("ccode");
    const iti = window.intlTelInput(phoneField, {
        initialCountry: "auto",
        geoIpLookup: function (callback) {
            fetch("https://api.ipdata.co?api-key=a04bad617b9d34e04e4c18cff91f85f37bdba35902a930ee1a4c4774&fields=country_code")
                .then((response) => response.json())
                .then((data) => callback(data.country_code.toLowerCase()))
                .catch(() => callback("us"));
        },
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });

    function setError(inputElement, errorElement, message) {
        if (message) {
            errorElement.textContent = message;
            errorElement.style.color = "red";
            inputElement.classList.add("error-border");
        } else {
            errorElement.textContent = "";
            inputElement.classList.remove("error-border");
        }
    }

    function validateField(inputElement, errorElement, validation, errorMessage) {
        inputElement.addEventListener("blur", function () {
            const value = inputElement.value.trim();
            if (value.length > 0 && !validation(value)) {
                setError(inputElement, errorElement, errorMessage);
            } else {
                setError(inputElement, errorElement, "");
            }
        });
    }

    // Name validation
    const nameField = document.getElementById("name");
    const nameError = document.getElementById("name-error");
    validateField(nameField, nameError, (value) => /^[a-zA-Z\s]{2,50}$/.test(value), "Please enter a valid name.");

    // Email validation
    const emailField = document.getElementById("email");
    const emailError = document.getElementById("email-error");
    validateField(emailField, emailError, (value) => /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9-]+\.(com|org|net|edu|in)$/.test(value), "Please enter a valid Email ID.");

    // Phone validation (special case)
    phoneField.addEventListener("blur", function () {
        const phoneError = document.getElementById("mobile-error");
        const dialCode = iti.getSelectedCountryData().dialCode;
        let rawNumber = phoneField.value.trim().replace(/[^\d]/g, ""); 

        if (rawNumber.startsWith(dialCode)) {
            rawNumber = rawNumber.replace(new RegExp("^" + dialCode), "");
        }

        ccodeField.value = dialCode;
        phoneField.value = rawNumber;

        if (rawNumber.length > 0 && !iti.isValidNumber()) {
            setError(phoneField, phoneError, "Please enter a valid Contact Number.");
        } else {
            setError(phoneField, phoneError, "");
        }

        console.log("Formatted Contact Number:", rawNumber);
        console.log("Country Code:", dialCode);
    });




    // Subject validation
    const subjectField = document.getElementById("subject");
    const subjectError = document.getElementById("subject-error");
    validateField(subjectField, subjectError, (value) => value.length > 0, "Subject cannot be empty.");

    // Message validation
    const messageField = document.getElementById("message");
    const messageError = document.getElementById("message-error");
    validateField(messageField, messageError, (value) => value.length >= 10 && value.length <= 500, "Message must be between 10 and 500 characters.");

    // Form submission validation
    form.addEventListener("submit", function (event) {
        event.preventDefault();

        let isValid = true;

        const fields = [
            { element: nameField, errorElement: nameError, validation: (value) => /^[a-zA-Z\s]{2,50}$/.test(value), errorMessage: "Please enter a valid name (2-50 characters, no special symbols)." },
            { element: emailField, errorElement: emailError, validation: (value) => /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9-]+\.(com|org|net|edu|in)$/.test(value), errorMessage: "Please enter a valid Email ID." },
            { element: phoneField, errorElement: document.getElementById("mobile-error"), validation: () => iti.isValidNumber(), errorMessage: "Please enter a valid Contact Number for these lected country." },
            { element: subjectField, errorElement: subjectError, validation: (value) => value.length > 0, errorMessage: "Please enter a subject." },
            { element: messageField, errorElement: messageError, validation: (value) => value.length >= 10 && value.length <= 500, errorMessage: "Message must be between 10 and 500 characters." },
        ];

        fields.forEach(({ element, errorElement, validation, errorMessage }) => {
            const value = element.value.trim();
            if (!validation(value)) {
                setError(element, errorElement, errorMessage);
                isValid = false;
            } else {
                setError(element, errorElement, "");
            }
        });

        if (!iti.isValidNumber()) {
            formMessages.textContent = "Please enter a valid Contact Number.";
            formMessages.style.color = "red";
            return;
        }

        if (!isValid) {
            formMessages.textContent = "Please fix the errors above.";
            formMessages.style.color = "red";
            return;
        }


        // Submit the form via API if valid
        const data = Object.fromEntries(new FormData(form).entries());
        fetch("https://marscms-api.mini91.com/api/enquiry", {
            method: "POST",
            body: JSON.stringify({ ...data, site: "6798f703e5b0d99195ac3ed4" }),
            headers: { "Content-Type": "application/json" },
        })
            .then((response) => response.json())
            .then((data) => {
                formMessages.textContent = data.message + "!" || "Form submitted successfully!";
                formMessages.style.color = "green";
                form.reset();
                setTimeout(() => {
                    formMessages.textContent = "";
                }, 5000);
            })
            .catch((error) => {
                console.error(error);
                formMessages.textContent = "There was an issue with your submission. Please try again.";
                formMessages.style.color = "red";
                setTimeout(() => {
                    formMessages.textContent = "";
                }, 5000);
            });
        });
  });

  </script>