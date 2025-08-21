<!-- Scroll Percentage -->
<div id="scroll-percentage">
    <span id="scroll-percentage-value" data-default-color="var(--rr-color-900)"
        data-scroll-color="var(--rr-theme-glow)"></span>
</div>

<!-- Offcanvas Mobile Menu Start -->
<div class="fix">
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="index.php">
                            <img src="img/akshay-netra-1-logo.png" alt="<?php echo $ev_project_name; ?>">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button class="offcanvas-close-icon animation--flip">
                            <span class="offcanvas-m-lines">
                                <span class="offcanvas-m-line line--1"></span>
                                <span class="offcanvas-m-line line--2"></span>
                                <span class="offcanvas-m-line line--3"></span>
                            </span>
                        </button>
                    </div>
                </div>
                            
                <!-- Mobile Dropdown Menu -->
                <div id="mobile-inner-menu-wrapper" class="dropdown bg-white shadow-sm rounded p-3">
                    <div id="mobile-inner-menu"></div>
                </div>

                <!-- Social Icons -->
                <div class="offcanvas__social mt-4">
                    <ul class="header-top-socail-menu d-flex">
                        <li><a href="<?php echo $ev_facebook_link; ?>" target="_blank"><i
                        class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?php echo $ev_instagram_link; ?>" target="_blank"><i
                        class="fab fa-instagram"></i></a></li>
                        <li><a href="<?php echo $ev_linkedin_link; ?>" target="_blank"><i
                        class="fab fa-linkedin"></i></a></li>
                        <li><a href="<?php echo $ev_youtube_link; ?>" target="_blank"><i 
                        class="fab fa-youtube"></i></a></li>
                        <li><a href="<?php echo $ev_pinterest_link; ?>" target="_blank"><i
                        class="fab fa-pinterest"></i></a></li>
                        <li><a href="<?php echo $ev_medium_link; ?>" target="_blank"><i 
                        class="fab fa-medium"></i></a></li>
                        <li><a href="<?php echo $ev_quora_link; ?>" target="_blank"><i 
                        class="fab fa-quora"></i></a></li>
                        <li><a href="<?php echo $ev_twitter_link; ?>" target="_blank"><i
                        class="fab fa-x-twitter"></i></a></li>
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.0596 6.77295L15.8879 -0.00195312H14.5068L9.44607 5.8806L5.40411 -0.00195312H0.742188L6.85442 8.89352L0.742188 15.998H2.12338L7.4676 9.78587L11.7362 15.998H16.3981L10.0593 6.77295H10.0596ZM8.16787 8.97189L7.54857 8.0861L2.62104 1.03779H4.74248L8.71905 6.726L9.33834 7.61179L14.5074 15.0056H12.386L8.16787 8.97223V8.97189Z"
                                fill="#071C3C" />
                        </svg>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>
<div class="offcanvas__overlay-white"></div>

<header>
    <div class="header-4-top theme-bg-primary p-6" style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="header-4-top p-3 pt-0 fixed-mega-menuuu">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg p-3 pt-0" style="border-radius: 10px;">
                            <div class="collapse navbar-collapse top-headerrr" id="navbarNav"
                                style="justify-content: center;">
                                <ul class="navbar-nav ms-auto">
                                    <li class="nav-item p-4"><a class="nav-link navlinkkk"
                                            href="index.php <?php echo $ev_page_extention; ?>" id="nav-main">Vision Hub</a></li>
                                    <li class="nav-item p-4"><a class="nav-link navlinkkk"
                                            href="hospitals.php <?php echo $ev_page_extention; ?>"
                                            id="nav-hospitals">Hospitals</a></li>
                                    <li class="nav-item p-4"><a class="nav-link navlinkkk"
                                            href="volunteer.php <?php echo $ev_page_extention; ?>"
                                            id="nav-volunteer">Volunteer</a></li>
                                    <li class="nav-item p-4"><a class="nav-link navlinkkk"
                                            href="organisations.php <?php echo $ev_page_extention; ?>"
                                            id="nav-Organisations">Organisations</a></li>
                                    <li class="nav-item p-4"><a class="nav-link navlinkkk"
                                            href="influencer.php <?php echo $ev_page_extention; ?>"
                                            id="nav-Influencer">Influencer</a></li>
                                    <li class="nav-item p-4"><a class="nav-link navlinkkk"
                                            href="eye-bank.php <?php echo $ev_page_extention; ?>" id="nav-Eye Bank">Eye
                                            Bank</a></li>
                                    <li class="nav-item p-4"><a class="nav-link navlinkkk"
                                            href="donor.php <?php echo $ev_page_extention; ?>" id="nav-Donor">Donor</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="header-sticky" class="header__area header-4__background header-4 p-1 py-4 responsive-menu-padding">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">

                <!-- Left: Logo -->
                <div class="header__logo">
                    <a href="index.php">
                        <img src="img/akshay-netra-1-logo.png" width="100px" alt="Akshay Netra Logo" />
                    </a>
                </div>

                <!-- Right: Pledge Button + Hamburger -->
                <div class="d-flex align-items-center gap-3">
                    <!-- Pledge Button -->
                    <div class="header__btn-wrap d-none d-sm-inline-flex">
                        <a href="contact-us.php" class="rr-btn rr-btn__green" style="background-color: #2d308d;">
                            <span class="btn-wrap">
                                <span class="text-one">Pledge Your Eyes</span>
                                <span class="text-two">Pledge Your Eyes</span>
                            </span>
                        </a>
                    </div>

                    <!-- Hamburger Menu (Mobile Only) -->
                    <div class="header__hamburger ml-20 d-xl-none">
                        <div class="sidebar__toggle">
                            <a class="bar-icon" href="javascript:void(0)">
                                <span></span><span></span><span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    const innerMenus = {
        'main page': [
            { name: 'Home', url: 'index.php' },
            { name: 'About Us', url: 'about-us.php' },
            // { name: 'Eye Donation', url: 'eye-donation.php' },
            { name: 'How to Help?', url: 'how-to-help.php' },
            { name: 'Importance of Eye Donation', url: 'importance-of-eye-donation.php' },
            { name: 'Myths vs Facts', url: 'myth-vs-fact.php' },
            { name: 'FAQs', url: 'faqs.php' },
            { name: 'Contact Us', url: 'contact-us.php' }
        ],
        'Volunteer': [
            { name: 'Home', url: 'volunteer.php' },
            { name: 'Why Become a Volunteer?', url: 'why-become-volunteer.php' },
            //   { name: 'Volunteer with Us', url: 'volunteer-with-us.php' },
            { name: 'Awareness Campaigns', url: 'awareness-campaigns.php' },
            { name: 'Stories of Change', url: 'stories-of-change.php' },
            { name: 'FAQs', url: 'volunteer-faqs.php' }
        ],
        'Hospitals': [
            { name: 'Home', url: 'hospitals.php' },
            { name: 'Role of Hospitals', url: 'role-of-hospital.php' },
            //   { name: 'Encourage Families', url: 'encourage-families.php' },
            { name: 'Resources', url: 'hospital-resources.php' },
            { name: 'FAQs', url: 'hospitals-faqs.php' }
        ],
        'Organisations': [
            { name: 'Home', url: 'organisations.php' },
            // { name: 'Why Organisations Should Get Involved', url: 'Why Organisations Should Get Involved.php' },
            { name: 'CSR Opportunities', url: 'csr-opportunities.php' },
            // { name: 'Success Stories', url: 'Success Stories.php' },
            { name: 'FAQs', url: 'organisations-faqs.php' }
        ],
        'Influencers': [
            { name: 'Home', url: 'influencer.php' },
            // { name: 'Why Influencers are Key to Eye Donation Awareness', url: 'Why Influencers are Key to Eye Donation Awareness.php' },
            // { name: 'Campaign Guidelines', url: 'Campaign Guidelines.php' },
            // { name: 'Impact Stories', url: 'Impact Stories.php' },
            { name: 'FAQs', url: 'influencer-faqs.php' }
        ],
        'Eye Banks': [
            { name: 'Home', url: 'eye-bank.php' },
            // { name: 'Eye Bank Directory', url: 'Eye Bank Directory.php' },
            // { name: 'Register', url: 'Register.php' },
            // { name: 'Resources', url: 'Resources.php' },
            // { name: 'FAQs', url: 'FAQs.php' }
        ],
        'Donors': [
            { name: 'Home', url: 'donor.php' },
            // { name: 'Financial Support', url: 'Financial Support.php' },
            // { name: 'Donation in Kind', url: 'Donation in Kind.php' },
            // { name: 'Impact Stories', url: 'Impact Stories.php' },
            // { name: 'Resources', url: 'Resources.php' },
            // { name: 'FAQs', url: 'FAQs.php' }
        ]
    };

    // Desktop Menu: Show only current category
    const currentPath = window.location.pathname.split("/").pop();
    let currentCategory = '';
    for (let category in innerMenus) {
        if (innerMenus[category].some(item => item.url === currentPath)) {
            currentCategory = category;
            break;
        }
    }

    const renderMenu = (containerId) => {
        const container = document.getElementById(containerId);
        if (!container) return;
        const menu = innerMenus[currentCategory] || [];
        container.innerHTML = '<ul class="list-unstyled mb-0 d-flex flex-wrap justify-content-center gap-4">' +
            menu.map(item => `<li><a class="nav-link d-block py-2" href="${item.url}">${item.name}</a></li>`).join('') +
            '</ul>';
    };

    const renderMobileMegaMenu = () => {
        const container = document.getElementById('mobile-inner-menu');
        if (!container) return;

        container.innerHTML = Object.entries(innerMenus).map(([label, subItems], index) => {

            const submenu = subItems.map(item =>
                `<li><a class="dropdown-item mobile-submenu-item py-2 ps-4 border-bottom" href="${item.url}">${item.name}</a></li>`
            ).join('');

            return `
      <div class="mb-2 border-bottom pb-2">
        <button 
          class="w-100 bg-transparent border-0 text-start d-flex justify-content-between align-items-center py-3 px-3 fs-5 fw-bold mobile-mainmenu-btn toggle-btn" 
          data-bs-toggle="collapse"
          data-bs-target="#submenu-${index}"
          aria-expanded="false" 
          aria-controls="submenu-${index}">

          <span>${label}</span>
          <span class="dropdown-arrow" style="transition: transform 0.3s;">
            <i class="fas fa-chevron-down"></i>
          </span>

        </button>
        <div class="collapse" id="submenu-${index}">
          <ul class="list-unstyled ms-2 mt-1">
            ${submenu}
          </ul>
        </div>
      </div>
    `;

        }).join('');
    };
    renderMenu('desktop-inner-menu');
    renderMobileMegaMenu();

    document.querySelectorAll('.navlinkkk').forEach(link => {
  const linkPath = link.getAttribute('href').split("?")[0].trim(); // remove params if any
  const currentPath = window.location.pathname.split("/").pop().trim();

  if (linkPath === currentPath || (linkPath === 'index.php' && currentPath === '')) {
    link.classList.add('active');
  }
});
</script>

<style>
  .navlinkkk.active {
  border-bottom: 2px solid white;
  color: white !important;
}
</style>