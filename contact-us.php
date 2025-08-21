<?php include("tpl/include_header.php"); ?>

<?php include("tpl/include_header_menu.php"); ?>
<!-- Body main wrapper start -->
<main>
    <!-- Breadcrumb area start  -->
    <div
        class="breadcrumb__area header__background-color breadcrumb__header-up breadcrumb-space overly overflow-hidden">
        <div class="breadcrumb__background"></div>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content text-center">
                        <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">Contact Us
                        </h2>

                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="index.php">Home</a></span></li>
                                    <li class="active"><span>Contact Us</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb area start  -->

    <!-- pricing-appointment area start  -->
    <section class="pricing-appointment section-space">
        <div class="container">
            <div class="row align-items-end mb-60 mb-sm-50 mb-xs-40">
                <div class="col-lg-6">
                    <div class="section__title-wrapper">
                        <h5 class="section__subtitle title-green mb-15 mb-xs-10 title-animation"><img
                                src="img/ask-quesiton/eye.png" alt="<?php echo $ev_project_name; ?> -  icon"
                                class="img-fluid">
                            Contact Us</h5>
                        <!-- <h2 class="section__title mb-0 title-animation">Together, We Can Give Sight – Join Us
                                </h2> -->
                    </div>
                </div>

                <!-- <div class="col-lg-6">
                        <div class="pricing-appointment__content-right mt-md-25 mt-sm-25 mt-xs-25">
                            <p class="mb-0">Join us to bring light into lives with the  gift of sight. with <?php echo $ev_project_name; ?>, your eye pledge helps those in need. Together, let’s make sure more people can see the  world.
                            </p>
                        </div>
                    </div> -->
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-appointment__contact-item__wrap d-flex flex-column">
                        <div class="pricing-appointment__contact-item d-flex align-items-start">
                            <div
                                class="pricing-appointment__contact-item-icon d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="pricing-appointment__contact-item-text">
                                <p>Requesting A Call:</p>
                                <h5 class="mb-0">
                                    <a href="tel:<?php echo $ev_website_phone; ?>"><?php echo $ev_website_phone; ?></a>
                                </h5>
                            </div>

                        </div>

                        <div class="pricing-appointment__contact-item d-flex align-items-start">
                            <div
                                class="pricing-appointment__contact-item-icon d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="pricing-appointment__contact-item-text">
                                <p>Email us at:</p>
                                <h5 class="mb-0">
                                    <a href="mailto:<?php echo $ev_website_only_email; ?>">
                                        <?php echo $ev_website_only_email; ?>
                                    </a>
                                </h5>
                            </div>

                        </div>

                        <div class="pricing-appointment__contact-item d-flex align-items-start">
                            <div class="pricing-appointment__contact-item-icon d-flex align-items-center justify-content-center"
                                style="min-width: 60px;">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="pricing-appointment__contact-item-text">
                                <!-- <p>6391 Elgin St. Celina, Delaware </p> -->
                                <h5 class="mb-0">
                                    <a href="<?php echo $ev_website_corporate_office_map_link; ?>" target="_blank">
                                        <?php echo nl2br($ev_website_corporate_office_address); ?>
                                    </a>
                                </h5>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <form id="contactForm" class="pricing-appointment__form mt-md-60 mt-sm-60 mt-xs-60">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="pricing-appointment__form-input">
                                    <input name="name" id="name" type="text" placeholder="Full Name" required>
                                    <span class="alert-error" id="name-error"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="pricing-appointment__form-input">
                                    <input name="email" id="email" type="text" placeholder="Email ID" required>
                                    <span class="alert-error" id="email-error"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="pricing-appointment__form-input">
                                    <input name="mobile" id="mobile" type="tel" placeholder="Contact Number" value="+91"
                                        required>
                                    <span class="alert-error" id="mobile-error"></span>
                                </div>
                                <input type="hidden" id="ccode" name="ccode" />

                            </div>
                            <div class="col-sm-6">
                                <div class="pricing-appointment__form-input">
                                    <input name="subject" id="subject" type="text" placeholder="Enter Subject">
                                    <span class="alert-error" id="subject-error"></span>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="pricing-appointment__form-input">
                                    <textarea name="message" id="message" placeholder="Messege" required></textarea>
                                    <span class="alert-error" id="message-error"></span>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" name="submit" id="submit"
                                    class="rr-btn rr-btn__primary-color mt-0">
                                    <span class="btn-wrap">
                                        <span class="text-one">Pledge Now</span>
                                        <span class="text-two">Pledge Now</span>
                                    </span>
                                </button>
                            </div>

                            <p id="formMessages" class="mt-2"></p>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-appointment area start  -->
</main>
<!-- Body main wrapper end -->

<div class="contact__map contact__map-footer_up">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4485.334171522375!2d73.76837737579837!3d18.606937866529133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b97336aaaaab%3A0xdebcf347a6a08092!2sJainam%20Jivika%20Foundation!5e1!3m2!1sen!2sin!4v1738405766130!5m2!1sen!2sin"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<div id="footer-container"></div>
<?php include("tpl/include_footer.php"); ?>
<!-- Footer area end -->

<!-- JS here -->


<!--contact us data submit backend start-->

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