 <?php include("tpl/include_header.php");?>
 <?php include("tpl/include_header_menu.php");?> 

<!-- Body main wrapper start -->
    <main>
      <!-- Breadcrumb area start  -->
      <div
        class="breadcrumb__area header__background-color breadcrumb__header-up breadcrumb-space overly overflow-hidden"
      >
        <div class="breadcrumb__background"></div>
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-12">
              <div class="breadcrumb__content text-center">
                <h2
                  class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation"
                >
                  Register
                </h2>

                <div class="breadcrumb__menu">
                  <nav>
                    <ul>
                      <li>
                        <span><a href="index.php">Home</a></span>
                      </li>
                      <li class="active"><span>Register </span></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Breadcrumb area start  -->

      <!-- take-appointment-3 area start -->
      <section
        class="take-appointment-3 section-space__top section-space__bottom-70 overflow-hidden"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div
                class="section__title-wrapper take-appointment-3__content text-center mb-60 mb-sm-50 mb-xs-40"
              >
                <h5
                  class="section__subtitle title-green mb-15 mb-xs-10 title-animation"
                >
                  <img
                    src="img/ask-quesiton/eye.png"
                    alt="<?php echo $ev_project_name; ?> -  icon"
                    class="img-fluid"
                  />
                  Collaborate with Us
                </h5>
                <h2 class="section__title mb-20 mb-xs-15 title-animation">
                  Register Your Eye Bank and Help Restore Sight
                </h2>
                <p class="mb-0">
                  Eye donation has the power to change lives by restoring
                  vision. As an eye bank, you play a pivotal role in making this
                  possible. Register your eye bank today and become a key join
                  us in providing the gift of sight to those in need.
                </p>
              </div>

              <form class="appointment-3__form" id="contactForm">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="take-take-appointment-3__form-input">
                      <input
                        name="name"
                        id="name"
                        type="text"
                        placeholder="Full Name"
                        required
                      />
                      <span class="alert-error" id="name-error"></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="take-appointment-3__form-input">
                      <input
                        name="email"
                        id="email"
                        type="text"
                        placeholder="Email ID"
                        required
                      />
                      <span class="alert-error" id="email-error"></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="take-appointment-3__form-input">
                      <input
                        name="mobile"
                        id="mobile"
                        type="tel"
                        placeholder="Contact Number"
                        value="+91"
                        required
                      />
                      <input type="hidden" id="ccode" name="ccode" />
                      <span class="alert-error" id="mobile-error"></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="take-appointment-3__form-input">
                      <input
                        name="subject"
                        id="subject"
                        type="text"
                        placeholder="Enter Subject"
                      />
                      <span class="alert-error" id="subject-error"></span>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="take-appointment-3__form-input">
                      <textarea
                        name="message"
                        id="message"
                        placeholder="Messege"
                        required
                      ></textarea>
                      <span class="alert-error" id="message-error"></span>
                    </div>
                  </div>

                  <div class="col-12">
                    <button
                      type="submit"
                      name="submit"
                      id="submit"
                      class="rr-btn rr-btn__primary-color mt-0"
                    >
                      <span class="btn-wrap">
                        <span class="text-one">Pledge Now</span>
                        <span class="text-two">Pledge Now</span>
                      </span>
                    </button>
                  </div>

                  <p id="formMessages"></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- take-appointment-3 area end -->
    </main>
    <!-- Body main wrapper end -->

    <section class="footer__cta footer__cta-bottom-up mb-5">
      <div class="container">
        <div class="row mb-minus-30">
          <div class="col-md-6">
            <div
              class="footer__cta-item mb-30 theme-bg-primary d-flex flex-lg-row flex-column align-items-lg-center"
            >
              <div
                class="footer__cta-item-icon d-flex align-items-center justify-content-center"
              >
                <img
                  class="img-fluid"
                  src="img/hospital/eye-white.png"
                  alt="<?php echo $ev_project_name; ?> -  icon"
                />
              </div>

              <div class="footer__cta-item-text">
                <h4 class="color-white mb-15 mb-10">
                  Pledge for a Brighter Tomorrow
                </h4>
                <p class="color-white mb-0">
                  Take a simple yet impactful step towards giving someone the
                  gift of sight. Your eyes can continue to see, even beyond
                  life.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div
              class="footer__cta-item mb-30 theme-bg-glow d-flex flex-lg-row flex-column align-items-lg-center"
            >
              <div
                class="footer__cta-item-icon d-flex align-items-center justify-content-center"
              >
                <img
                  class="img-fluid"
                  src="img/hospital/join-hands.png"
                  alt="<?php echo $ev_project_name; ?> -  icon"
                />
              </div>

              <div class="footer__cta-item-text">
                <h4 class="color-white mb-15 mb-10">
                  Join themission to End Blindness
                </h4>
                <p class="color-white mb-0">
                  Encourage others to pledge their eyes and be part of something
                  that transforms lives through the power of vision.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer area start -->
    <div id="footer-container"></div>

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
            fetch(
              "https://api.ipdata.co?api-key=a04bad617b9d34e04e4c18cff91f85f37bdba35902a930ee1a4c4774&fields=country_code"
            )
              .then((response) => response.json())
              .then((data) => callback(data.country_code.toLowerCase()))
              .catch(() => callback("us"));
          },
          utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
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

        function validateField(
          inputElement,
          errorElement,
          validation,
          errorMessage
        ) {
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
        validateField(
          nameField,
          nameError,
          (value) => /^[a-zA-Z\s]{2,50}$/.test(value),
          "Please enter a valid name."
        );

        // Email validation
        const emailField = document.getElementById("email");
        const emailError = document.getElementById("email-error");
        validateField(
          emailField,
          emailError,
          (value) =>
            /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9-]+\.(com|org|net|edu|in)$/.test(
              value
            ),
          "Please enter a valid Email ID."
        );

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
            setError(
              phoneField,
              phoneError,
              "Please enter a valid Contact Number."
            );
          } else {
            setError(phoneField, phoneError, "");
          }

          console.log("Formatted Contact Number:", rawNumber);
          console.log("Country Code:", dialCode);
        });

        // Subject validation
        const subjectField = document.getElementById("subject");
        const subjectError = document.getElementById("subject-error");
        validateField(
          subjectField,
          subjectError,
          (value) => value.length > 0,
          "Subject cannot be empty."
        );

        // Message validation
        const messageField = document.getElementById("message");
        const messageError = document.getElementById("message-error");
        validateField(
          messageField,
          messageError,
          (value) => value.length >= 10 && value.length <= 500,
          "Message must be between 10 and 500 characters."
        );

        // Form submission validation
        form.addEventListener("submit", function (event) {
          event.preventDefault();

          let isValid = true;

          const fields = [
            {
              element: nameField,
              errorElement: nameError,
              validation: (value) => /^[a-zA-Z\s]{2,50}$/.test(value),
              errorMessage:
                "Please enter a valid name (2-50 characters, no special symbols).",
            },
            {
              element: emailField,
              errorElement: emailError,
              validation: (value) =>
                /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9-]+\.(com|org|net|edu|in)$/.test(
                  value
                ),
              errorMessage: "Please enter a valid Email ID.",
            },
            {
              element: phoneField,
              errorElement: document.getElementById("mobile-error"),
              validation: () => iti.isValidNumber(),
              errorMessage:
                "Please enter a valid Contact Number for these lected country.",
            },
            {
              element: subjectField,
              errorElement: subjectError,
              validation: (value) => value.length > 0,
              errorMessage: "Please enter a subject.",
            },
            {
              element: messageField,
              errorElement: messageError,
              validation: (value) => value.length >= 10 && value.length <= 500,
              errorMessage: "Message must be between 10 and 500 characters.",
            },
          ];

          fields.forEach(
            ({ element, errorElement, validation, errorMessage }) => {
              const value = element.value.trim();
              if (!validation(value)) {
                setError(element, errorElement, errorMessage);
                isValid = false;
              } else {
                setError(element, errorElement, "");
              }
            }
          );

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
              formMessages.textContent =
                data.message + "!" || "Form submitted successfully!";
              formMessages.style.color = "green";
              form.reset();
              setTimeout(() => {
                formMessages.textContent = "";
              }, 5000);
            })
            .catch((error) => {
              console.error(error);
              formMessages.textContent =
                "There was an issue with your submission. Please try again.";
              formMessages.style.color = "red";
              setTimeout(() => {
                formMessages.textContent = "";
              }, 5000);
            });
        });
      });
    </script>
    <?php include("tpl/include_footer.php");?>
