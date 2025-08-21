 <?php include("tpl/include_header.php");?>
 <?php include("tpl/include_header_menu.php");?> 

<!-- Body main wrapper start -->
    <main>
        <!-- Breadcrumb area start  -->
        <div
            class="breadcrumb__area header__background-color breadcrumb__header-up breadcrumb-space overly overflow-hidden">
            <div class="breadcrumb__background" ></div>
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12">
                        <div class="breadcrumb__content text-center">
                            <h2 class="breadcrumb__title mb-15 mb-sm-10 mb-xs-5 color-white title-animation">FAQs</h2>

                            <div class="breadcrumb__menu">
                                <nav>
                                    <ul>
                                        <li><span><a href="index.php">Home</a></span></li>
                                        <li class="active"><span>FAQs</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area start  -->

        <!-- faq-page area start  -->
        <section class="faq-page section-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="rr__faq-2" id="accordionExample">
                            <div class="accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapse" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            What is <?php echo $ev_project_name; ?>?
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p><?php echo $ev_project_name; ?> is a platform dedicated to eliminating preventable blindness
                                                by promoting eye donation and creating awareness.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            Who can be an eye donor?
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Anyone can pledge to donate their eyes, regardless of age or vision
                                                quality, if they don’t have specific medical conditions.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="true" aria-controls="collapseThree">
                                            How does eye donation work after death?
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>the  cornea is retrieved within a few hours of death by trained medical
                                                professionals following consent from the  donor’s family.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="true" aria-controls="collapseFour">
                                            How can I pledge to donate my eyes?
                                        </button>
                                    </h5>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Visit AkshayNetra.com, complete the  pledge form, and share your wishes
                                                with your family to ensure they are aware of your decision.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="true" aria-controls="collapseFive">
                                            How do I get updates on <?php echo $ev_project_name; ?>’s activities?
                                        </button>
                                    </h5>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Subscribe to our newsletter or follow us on social media for regular
                                                updates on campaigns, success stories, and impact reports.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="heading10">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="true"
                                            aria-controls="collapse10">
                                            Can I Sponsor A Specific Surgery or Campaign?
                                        </button>
                                    </h5>
                                    <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Absolutely. You can choose to fund a specific corneal transplant or sponsor an awareness drive in a community of your choice.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="heading11">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="true"
                                            aria-controls="collapse11">
                                            What Are In-Kind Donations? How Can I Contribute?
                                        </button>
                                    </h5>
                                    <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>In-kind donations include medical supplies, instruments, or technology that aid in providing care and enhancing outreach efforts.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="heading12">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="true"
                                            aria-controls="collapse12">
                                            How can I see the  impact of my donation?
                                        </button>
                                    </h5>
                                    <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>We provide regular updates, success stories, and testimonials from
                                                beneficiaries whose lives were transformed by your generosity.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="rr__faq-2" id="accordionExample2">
                            <div class="accordion">

                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapse" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true"
                                            aria-controls="collapseSix">
                                            Why should I donate to <?php echo $ev_project_name; ?>?
                                        </button>
                                    </h5>
                                    <div id="collapseSix" class="accordion-collapse collapse show"
                                        aria-labelledby="headingSix" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Your donations directly fund life-changing surgeries, awareness
                                                campaigns, and outreach programmes, making a lasting impact.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                            aria-expanded="true" aria-controls="collapseSeven">
                                            What types of donations can I make?
                                        </button>
                                    </h5>
                                    <div id="collapseSeven" class="accordion-collapse collapse"
                                        aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>You can contribute financially, sponsor surgeries, fund awareness
                                                campaigns, or provide in-kind donations like medical equipment.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                            aria-expanded="true" aria-controls="collapseEight">
                                            How is my donation utilised?
                                        </button>
                                    </h5>
                                    <div id="collapseEight" class="accordion-collapse collapse"
                                        aria-labelledby="headingEight" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Every contribution is transparently utilised to fund surgeries, organise
                                                campaigns, provide follow-up care, and upgrade medical facilities.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingNine">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                            aria-expanded="true" aria-controls="collapseNine">
                                            Are financial donations tax-deductible?
                                        </button>
                                    </h5>
                                    <div id="collapseNine" class="accordion-collapse collapse"
                                        aria-labelledby="headingNine" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Yes, donations to <?php echo $ev_project_name; ?> are eligible for tax exemptions as per
                                                applicable laws.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="heading13">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="true"
                                            aria-controls="collapse13">
                                            Is the re a minimum amount I can donate?
                                        </button>
                                    </h5>
                                    <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>No donation is too small. Every contribution helps us create a larger
                                                impact.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="heading15">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="true"
                                            aria-controls="collapse15">
                                            How can I start contributing as a donor?
                                        </button>
                                    </h5>
                                    <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Visit AkshayNetra.com, select your preferred donation type, and follow
                                                the  simple steps to make a difference today.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="heading14">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="true"
                                            aria-controls="collapse14">
                                           What Is Corporate Matching? How Can It Amplify My Donation?

                                        </button>
                                    </h5>
                                    <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14"
                                        data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Corporate matching allows your employer to match your donation, effectively doubling or tripling your contribution to the  cause.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-page area start  -->



    </main>
    <!-- Body main wrapper end -->
    <div id="footer-container"></div>
    <?php include("tpl/include_footer.php");?>
