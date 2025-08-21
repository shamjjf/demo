<footer>

  <div class="container py-5">
    <div class="footer-4__cta-wrapper">
      <div class="footer-4__cta__content">
        <h2>Subscribe to Our Newsletter</h2>
        <p class="text-white mt-3">
          Stay updated on our initiatives and success stories.
        </p>
      </div>

      <form class="footer-4__cta__subscribe" id="newsletter-form" style="flex-direction: column;">
        <div class="d-flex gap-3 subscribe-responsive">
          <div class="footer-4__cta__input-wapper">
            <input type="email" name="email" placeholder=" Email ID" />
            <i class="fa-solid fa-envelope"></i>
          </div>

          <button type="submit" name="subscribe" value="subscribe" class="rr-btn btn-hover-white">
            <span class="btn-wrap">
              <span class="text-one">Subscribe Now</span>
              <span class="text-two">Subscribe Now</span>
            </span>
          </button>
        </div>
        <span id="responseMessage"></span>
      </form>
    </div>
  </div>

  <section class="footer-3__area-common theme-bg-color-900 overflow-hidden"
    data-background="img/footer-3/background-shape.svg">
    <div class="container">
      <div class="row mb-minus-50">
        <div class="col-lg-3 col-6">
          <div class="footer-3__widget footer-3__widget-item-1">
            <div class="footer-3__logo mb-30 mb-xs-25">
              <a href="index.php">
                <h3 style="color: white"><?php echo $ev_project_name; ?></h3>
              </a>
            </div>

            <div class="footer-3__content">
              <p class="mb-0 color-white">
                Helping others see and live better through eye pledging and
                awareness support.
              </p>
            </div>

            <div class="footer-3__social mt-30 mt-xs-30" style="flex-wrap: wrap">
              <a href="<?php echo $ev_facebook_link; ?>" target="_blank" target="_blank"><i
                  class="fab fa-facebook-f"></i></a>
              <a href="<?php echo $ev_instagram_link; ?>" target="_blank" target="_blank"><i
                  class="fa-brands fa-instagram"></i></a>
              <a href="<?php echo $ev_linkedin_link; ?>" target="_blank" target="_blank"><i
                  class="fa-brands fa-linkedin"></i></a>
              <!-- <a href="<?php echo $ev_thread_link; ?>" target="_blank" target="_blank"><i
                  class="fa-threads fa-threads"></i></a> -->
              <a href="<?php echo $ev_youtube_link; ?>" target="_blank" target="_blank"><i
                  class="fa-brands fa-youtube"></i></a>
              <a href="<?php echo $ev_pinterest_link; ?>" target="_blank" target="_blank"><i
                  class="fa-brands fa-pinterest"></i></a>
              <a href="<?php echo $ev_medium_link; ?>" target="_blank" target="_blank"><i
                  class="fa-brands fa-medium"></i></a>
              <a href="<?php echo $ev_quora_link; ?>" target="_blank" target="_blank"><i
                  class="fa-brands fa-quora"></i></a>
              <a href="<?php echo $ev_twitter_link; ?>" target="_blank" target="_blank">
                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10.0596 6.77295L15.8879 -0.00195312H14.5068L9.44607 5.8806L5.40411 -0.00195312H0.742188L6.85442 8.89352L0.742188 15.998H2.12338L7.4676 9.78587L11.7362 15.998H16.3981L10.0593 6.77295H10.0596ZM8.16787 8.97189L7.54857 8.0861L2.62104 1.03779H4.74248L8.71905 6.726L9.33834 7.61179L14.5074 15.0056H12.386L8.16787 8.97223V8.97189Z"
                    fill="#ffffff" />
                </svg>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="footer-3__widget footer-3__widget-item-2">
            <div class="footer-3__widget-title">
              <h4>Quick Links</h4>
            </div>

            <div class="footer-3__link">
              <ul>
                <li><a href="/index.php">Main Page</a></li>
                <li><a href="./hospitals.php <?php echo $ev_page_extention; ?>">Hospitals</a></li>
                <li><a href="./volunteer.php <?php echo $ev_page_extention; ?>">Volunteer </a></li>
                <li><a href="./organisations.php <?php echo $ev_page_extention; ?>">Organisations</a></li>
                <li><a href="./influencer.phpl <?php echo $ev_page_extention; ?>">Influencers</a></li>
                <li><a href="./eye-bank.php <?php echo $ev_page_extention; ?>">Eye Banks</a></li>
                <li><a href="./donor.php <?php echo $ev_page_extention; ?>">Donors </a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="footer-3__widget footer-3__widget-item-3">
            <div class="footer-3__widget-title">
              <h4>Resources</h4>
            </div>
            <div class="footer-3__link">
              <ul>
                <li>
                  <a href="terms-and-conditions.php <?php echo $ev_page_extention; ?>">Terms and Conditions</a>
                </li>
                <li><a href="privacy-policy.php <?php echo $ev_page_extention; ?>">Privacy Policy</a></li>
                <!-- <li><a href="#">Blogs</a></li> -->
                <li><a href="cookies-policy.php <?php echo $ev_page_extention; ?>">Cookies Policy</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <div class="footer-3__widget footer-3__widget-item-4">
            <div class="footer-3__widget-title">
              <h4>Contact</h4>
            </div>

            <div class="footer-3__link footer-3__link-blog">
              <ul>
                <li>
                  <span><i class="fa-solid fa-envelope"></i><a href="mailto:<?php echo $ev_website_only_email; ?>"
                      target="_blank"><?php echo $ev_website_only_email; ?></a>
                  </span>
                </li>
                <li>
                  <span>
                    <i class="fa-sharp fa-solid fa-phone"></i>
                    <a href="tel:+919525022502" target="_blank"><?php echo $ev_website_phone; ?></a>
                  </span>
                </li>
                <li>
                  <span style="align-items: start">
                    <i class="fa-solid fa-location-dot" style="margin-top: 10px"></i>
                    <a href="<?php echo $ev_website_corporate_office_map_link; ?>" target="_blank">
                      <?php echo nl2br($ev_website_corporate_office_address); ?>
                    </a>
                  </span>

                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>


      <div class="footer-3__bottom-wrapper">
        <div class="container">
          <div class="footer-3__bottom">
            <div class="row">
              <div class="col-lg-12">
                <div class="footer-4__copyright text-lg-start text-center" style="
                  display: flex;
                  justify-content: center;
                  align-items: center;
                ">
                  <p class="mb-0">
                    © <?php echo $ev_copyrights_years_string; ?> <a href="./"><?php echo $ev_website_domain_name; ?></a>
                    .
                    An Initiative by
                    <a href="<?php echo $ev_product_of_company_link; ?>"
                      target="_blank"><?php echo $ev_product_of_company_name; ?></a>. All Rights Reserved.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
  </section>
</footer>
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

<?php include("tpl/include_js.php"); ?>