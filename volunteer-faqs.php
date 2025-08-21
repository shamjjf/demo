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
            <div class="w-100 d-flex justify-content-center"></div>
            <div class="row">
                <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                    <img src="img/ask-quesiton/heart-2.png" alt="<?php echo $ev_project_name; ?> - icon"
                        class="img-fluid">
                    General Understanding
                </h5>

                <div class="col-lg-6" id="accordionExample">
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is <?php echo $ev_project_name; ?>?
                                    </button>
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><?php echo $ev_project_name; ?> is a platform that promotes awareness about eye pledging and
                                            encourages individuals to commit to donating their eyes after death.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Does <?php echo $ev_project_name; ?> conduct eye donations?
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>No, <?php echo $ev_project_name; ?> only facilitates awareness and collects pledges. It does not
                                            handle the medical or logistical aspects of eye donation.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Who can become a volunteer with <?php echo $ev_project_name; ?>?
                                    </button>
                                </h5>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Anyone above the age of 16 with a desire to spread awareness about eye
                                            pledging can volunteer.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Is medical knowledge required to volunteer?
                                    </button>
                                </h5>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>No, medical knowledge is not necessary. Volunteers are trained to share basic
                                            information and encourage pledges.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Can I volunteer part-time or occasionally?
                                    </button>
                                </h5>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Yes, volunteering is flexible. You can contribute as per your availability.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6" id="accordionExample2">
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        Do volunteers need to be from a healthcare background?
                                    </button>
                                </h5>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Not at all. Volunteers can be students, professionals, homemakers, retirees –
                                            anyone passionate about the cause.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        Is there a formal registration process to become a volunteer?
                                    </button>
                                </h5>
                                <div id="collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Yes, you can sign up through the <?php echo $ev_project_name; ?> website or at awareness events.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false"
                                        aria-controls="collapseEight">
                                        Are volunteers paid?
                                    </button>
                                </h5>
                                <div id="collapseEight" class="accordion-collapse collapse"
                                    aria-labelledby="headingEight" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>No, volunteering with <?php echo $ev_project_name; ?> is a voluntary, unpaid role.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingNine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseNine" aria-expanded="false"
                                        aria-controls="collapseNine">
                                        Will I receive a certificate for volunteering?
                                    </button>
                                </h5>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Yes, volunteers may receive certificates for their contributions and
                                            involvement in campaigns.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingTen">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                        Can I involve my friends or family in volunteering?
                                    </button>
                                </h5>
                                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Absolutely. The more people who help spread awareness, the better.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-page section-space">
        <div class="container">
            <div class="row">
                <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                    <img src="img/ask-quesiton/heart-2.png" alt="<?php echo $ev_project_name; ?> - icon"
                        class="img-fluid">
                    Role of Volunteers
                </h5>

                <div class="col-lg-6" id="accordionRole1">
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="roleQ1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#roleA1" aria-expanded="true" aria-controls="roleA1">
                                        What does a volunteer actually do?
                                    </button>
                                </h5>
                                <div id="roleA1" class="accordion-collapse collapse show" aria-labelledby="roleQ1"
                                    data-bs-parent="#accordionRole1">
                                    <div class="accordion-body">
                                        <p>Volunteers raise awareness about eye pledging through community outreach,
                                            events, digital campaigns, and discussions.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="roleQ2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#roleA2" aria-expanded="false" aria-controls="roleA2">
                                        Can I conduct awareness sessions in schools or colleges?
                                    </button>
                                </h5>
                                <div id="roleA2" class="accordion-collapse collapse" aria-labelledby="roleQ2"
                                    data-bs-parent="#accordionRole1">
                                    <div class="accordion-body">
                                        <p>Yes, after proper briefing or training, volunteers may conduct sessions at
                                            educational institutions.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="roleQ3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#roleA3" aria-expanded="false" aria-controls="roleA3">
                                        Can volunteers distribute pledge forms?
                                    </button>
                                </h5>
                                <div id="roleA3" class="accordion-collapse collapse" aria-labelledby="roleQ3"
                                    data-bs-parent="#accordionRole1">
                                    <div class="accordion-body">
                                        <p>Yes, you can hand out printed pledge forms or guide people to pledge online.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="roleQ4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#roleA4" aria-expanded="false" aria-controls="roleA4">
                                        Can I share <?php echo $ev_project_name; ?>'s posters in public spaces?
                                    </button>
                                </h5>
                                <div id="roleA4" class="accordion-collapse collapse" aria-labelledby="roleQ4"
                                    data-bs-parent="#accordionRole1">
                                    <div class="accordion-body">
                                        <p>Yes, with permission from the venue, volunteers can place posters in
                                            libraries, offices, housing societies, etc.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="roleQ5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#roleA5" aria-expanded="false" aria-controls="roleA5">
                                        Can I create an awareness stall at a local event or fair?
                                    </button>
                                </h5>
                                <div id="roleA5" class="accordion-collapse collapse" aria-labelledby="roleQ5"
                                    data-bs-parent="#accordionRole1">
                                    <div class="accordion-body">
                                        <p>Yes, that’s a great idea. <?php echo $ev_project_name; ?> provides materials for setting up
                                            stalls.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6" id="accordionRole2">
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="roleQ6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#roleA6" aria-expanded="false" aria-controls="roleA6">
                                        Can I make presentations or talks on behalf of <?php echo $ev_project_name; ?>?
                                    </button>
                                </h5>
                                <div id="roleA6" class="accordion-collapse collapse" aria-labelledby="roleQ6"
                                    data-bs-parent="#accordionRole2">
                                    <div class="accordion-body">
                                        <p>Yes, we encourage volunteers to use presentation kits and guides to host
                                            informative sessions.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="roleQ7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#roleA7" aria-expanded="false" aria-controls="roleA7">
                                        Are there awareness kits available for volunteers?
                                    </button>
                                </h5>
                                <div id="roleA7" class="accordion-collapse collapse" aria-labelledby="roleQ7"
                                    data-bs-parent="#accordionRole2">
                                    <div class="accordion-body">
                                        <p>Yes, kits include posters, pledge forms, presentation material, and FAQs.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="roleQ8">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#roleA8" aria-expanded="false" aria-controls="roleA8">
                                        Do I need approval to host a local event or session?
                                    </button>
                                </h5>
                                <div id="roleA8" class="accordion-collapse collapse" aria-labelledby="roleQ8"
                                    data-bs-parent="#accordionRole2">
                                    <div class="accordion-body">
                                        <p>For formal events, coordination with the <?php echo $ev_project_name; ?> team is recommended.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="roleQ9">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#roleA9" aria-expanded="false" aria-controls="roleA9">
                                        How do I report my volunteer activity?
                                    </button>
                                </h5>
                                <div id="roleA9" class="accordion-collapse collapse" aria-labelledby="roleQ9"
                                    data-bs-parent="#accordionRole2">
                                    <div class="accordion-body">
                                        <p>You can submit a basic summary or photos via email or WhatsApp to the
                                            coordination team.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="roleQ10">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#roleA10" aria-expanded="false" aria-controls="roleA10">
                                        Can volunteers help during Eye Donation Fortnight?
                                    </button>
                                </h5>
                                <div id="roleA10" class="accordion-collapse collapse" aria-labelledby="roleQ10"
                                    data-bs-parent="#accordionRole2">
                                    <div class="accordion-body">
                                        <p>Yes, although <?php echo $ev_project_name; ?> doesn’t conduct donations, it supports awareness
                                            events during this time.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="faq-page section-space">
        <div class="container">
            <div class="row">
                <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                    <img src="img/ask-quesiton/heart-2.png" alt="<?php echo $ev_project_name; ?> - icon"
                        class="img-fluid">
                    Spreading the Message
                </h5>

                <div class="col-lg-6" id="accordionSpread1">
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="spreadQ1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#spreadA1" aria-expanded="true" aria-controls="spreadA1">
                                        Can I use social media to promote eye pledging?
                                    </button>
                                </h5>
                                <div id="spreadA1" class="accordion-collapse collapse show" aria-labelledby="spreadQ1"
                                    data-bs-parent="#accordionSpread1">
                                    <div class="accordion-body">
                                        <p>Yes, social media is a great platform to spread the message and share pledge
                                            links.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="spreadQ2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#spreadA2" aria-expanded="false" aria-controls="spreadA2">
                                        What hashtags should I use for promotion?
                                    </button>
                                </h5>
                                <div id="spreadA2" class="accordion-collapse collapse" aria-labelledby="spreadQ2"
                                    data-bs-parent="#accordionSpread1">
                                    <div class="accordion-body">
                                        <p>Use hashtags like #AkshayNetra, #PledgeEyes, #GiftOfSight, and #SpreadVision.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="spreadQ3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#spreadA3" aria-expanded="false" aria-controls="spreadA3">
                                        Can I create my own awareness content?
                                    </button>
                                </h5>
                                <div id="spreadA3" class="accordion-collapse collapse" aria-labelledby="spreadQ3"
                                    data-bs-parent="#accordionSpread1">
                                    <div class="accordion-body">
                                        <p>Yes, but ensure it aligns with <?php echo $ev_project_name; ?>’s values and messaging
                                            guidelines.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="spreadQ4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#spreadA4" aria-expanded="false" aria-controls="spreadA4">
                                        How do I explain the difference between pledging and actual donation?
                                    </button>
                                </h5>
                                <div id="spreadA4" class="accordion-collapse collapse" aria-labelledby="spreadQ4"
                                    data-bs-parent="#accordionSpread1">
                                    <div class="accordion-body">
                                        <p>Pledging is the commitment made in life; actual donation is carried out after
                                            death by medical professionals and family approval.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="spreadQ5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#spreadA5" aria-expanded="false" aria-controls="spreadA5">
                                        What are common myths I should be ready to address?
                                    </button>
                                </h5>
                                <div id="spreadA5" class="accordion-collapse collapse" aria-labelledby="spreadQ5"
                                    data-bs-parent="#accordionSpread1">
                                    <div class="accordion-body">
                                        <p>Myths include fears about facial disfigurement, religious concerns, or that
                                            donation affects afterlife rituals.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6" id="accordionSpread2">
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="spreadQ6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#spreadA6" aria-expanded="false" aria-controls="spreadA6">
                                        Is there a quick way to explain pledging?
                                    </button>
                                </h5>
                                <div id="spreadA6" class="accordion-collapse collapse" aria-labelledby="spreadQ6"
                                    data-bs-parent="#accordionSpread2">
                                    <div class="accordion-body">
                                        <p>Yes: “It’s a promise you make today to help someone see tomorrow – without
                                            cost or pain.”</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="spreadQ7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#spreadA7" aria-expanded="false" aria-controls="spreadA7">
                                        Can I share pledge links through WhatsApp groups?
                                    </button>
                                </h5>
                                <div id="spreadA7" class="accordion-collapse collapse" aria-labelledby="spreadQ7"
                                    data-bs-parent="#accordionSpread2">
                                    <div class="accordion-body">
                                        <p>Definitely, a simple link can lead to a life-changing decision.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="spreadQ8">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#spreadA8" aria-expanded="false" aria-controls="spreadA8">
                                        Can I encourage local businesses to display posters or pledge forms?
                                    </button>
                                </h5>
                                <div id="spreadA8" class="accordion-collapse collapse" aria-labelledby="spreadQ8"
                                    data-bs-parent="#accordionSpread2">
                                    <div class="accordion-body">
                                        <p>Yes, awareness through shops, offices, and clinics can reach wider audiences.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="spreadQ9">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#spreadA9" aria-expanded="false" aria-controls="spreadA9">
                                        What if someone has doubts I can’t answer?
                                    </button>
                                </h5>
                                <div id="spreadA9" class="accordion-collapse collapse" aria-labelledby="spreadQ9"
                                    data-bs-parent="#accordionSpread2">
                                    <div class="accordion-body">
                                        <p>Refer them to the FAQs on the website or encourage them to contact the
                                            support team.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="spreadQ10">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#spreadA10" aria-expanded="false" aria-controls="spreadA10">
                                        Can I translate materials into local languages?
                                    </button>
                                </h5>
                                <div id="spreadA10" class="accordion-collapse collapse" aria-labelledby="spreadQ10"
                                    data-bs-parent="#accordionSpread2">
                                    <div class="accordion-body">
                                        <p>Yes, but ensure accuracy and cultural sensitivity. Translation support may
                                            also be available.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="faq-page section-space">
        <div class="container">
            <div class="row">
                <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                    <img src="img/ask-quesiton/heart-2.png" alt="<?php echo $ev_project_name; ?> - icon"
                        class="img-fluid">
                    Handling Pledge Forms
                </h5>

                <div class="col-lg-6" id="accordionPledge1">
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="pledgeQ1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#pledgeA1" aria-expanded="true" aria-controls="pledgeA1">
                                        Where can I get printed pledge forms?
                                    </button>
                                </h5>
                                <div id="pledgeA1" class="accordion-collapse collapse show" aria-labelledby="pledgeQ1"
                                    data-bs-parent="#accordionPledge1">
                                    <div class="accordion-body">
                                        <p>From the <?php echo $ev_project_name; ?> website or coordination team.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="pledgeQ2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#pledgeA2" aria-expanded="false" aria-controls="pledgeA2">
                                        What should I do with completed forms?
                                    </button>
                                </h5>
                                <div id="pledgeA2" class="accordion-collapse collapse" aria-labelledby="pledgeQ2"
                                    data-bs-parent="#accordionPledge1">
                                    <div class="accordion-body">
                                        <p>Encourage people to keep a copy and share details with their families. You
                                            can also forward a scanned copy if advised.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="pledgeQ3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#pledgeA3" aria-expanded="false" aria-controls="pledgeA3">
                                        Can I help someone fill out the form?
                                    </button>
                                </h5>
                                <div id="pledgeA3" class="accordion-collapse collapse" aria-labelledby="pledgeQ3"
                                    data-bs-parent="#accordionPledge1">
                                    <div class="accordion-body">
                                        <p>Yes, guide them through it if needed, especially elderly participants.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="pledgeQ4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#pledgeA4" aria-expanded="false" aria-controls="pledgeA4">
                                        Can people pledge online instead of using a paper form?
                                    </button>
                                </h5>
                                <div id="pledgeA4" class="accordion-collapse collapse" aria-labelledby="pledgeQ4"
                                    data-bs-parent="#accordionPledge1">
                                    <div class="accordion-body">
                                        <p>Yes, the website has a simple online pledge form.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="pledgeQ5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#pledgeA5" aria-expanded="false" aria-controls="pledgeA5">
                                        What information is required in a pledge form?
                                    </button>
                                </h5>
                                <div id="pledgeA5" class="accordion-collapse collapse" aria-labelledby="pledgeQ5"
                                    data-bs-parent="#accordionPledge1">
                                    <div class="accordion-body">
                                        <p>Basic details like name, age, address, and family contact info.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6" id="accordionPledge2">
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="pledgeQ6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#pledgeA6" aria-expanded="false" aria-controls="pledgeA6">
                                        Do pledge forms need to be signed by witnesses?
                                    </button>
                                </h5>
                                <div id="pledgeA6" class="accordion-collapse collapse" aria-labelledby="pledgeQ6"
                                    data-bs-parent="#accordionPledge2">
                                    <div class="accordion-body">
                                        <p>No, but informing family is essential to honour the pledge.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="pledgeQ7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#pledgeA7" aria-expanded="false" aria-controls="pledgeA7">
                                        Are digital pledges equally valid as paper ones?
                                    </button>
                                </h5>
                                <div id="pledgeA7" class="accordion-collapse collapse" aria-labelledby="pledgeQ7"
                                    data-bs-parent="#accordionPledge2">
                                    <div class="accordion-body">
                                        <p>Yes, both formats are valid for awareness and intention purposes.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="pledgeQ8">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#pledgeA8" aria-expanded="false" aria-controls="pledgeA8">
                                        Can volunteers collect pledges door-to-door?
                                    </button>
                                </h5>
                                <div id="pledgeA8" class="accordion-collapse collapse" aria-labelledby="pledgeQ8"
                                    data-bs-parent="#accordionPledge2">
                                    <div class="accordion-body">
                                        <p>Yes, if done respectfully and in your local neighbourhood or community group.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="pledgeQ9">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#pledgeA9" aria-expanded="false" aria-controls="pledgeA9">
                                        Do I need permission for street campaigns?
                                    </button>
                                </h5>
                                <div id="pledgeA9" class="accordion-collapse collapse" aria-labelledby="pledgeQ9"
                                    data-bs-parent="#accordionPledge2">
                                    <div class="accordion-body">
                                        <p>Yes, always obtain local authority permission for public space activities.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="pledgeQ10">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#pledgeA10" aria-expanded="false" aria-controls="pledgeA10">
                                        How do I ensure privacy while collecting pledge info?
                                    </button>
                                </h5>
                                <div id="pledgeA10" class="accordion-collapse collapse" aria-labelledby="pledgeQ10"
                                    data-bs-parent="#accordionPledge2">
                                    <div class="accordion-body">
                                        <p>Respect confidentiality and use secure means to store or share data if
                                            required.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="faq-page section-space">
        <div class="container">
            <div class="row">
                <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                    <img src="img/ask-quesiton/heart-2.png" alt="<?php echo $ev_project_name; ?> - icon"
                        class="img-fluid">
                    Engagement & Recognition
                </h5>

                <div class="col-lg-6" id="accordionEngage1">
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="engageQ1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#engageA1" aria-expanded="true" aria-controls="engageA1">
                                        Will I be recognised for my efforts?
                                    </button>
                                </h5>
                                <div id="engageA1" class="accordion-collapse collapse show" aria-labelledby="engageQ1"
                                    data-bs-parent="#accordionEngage1">
                                    <div class="accordion-body">
                                        <p>Yes, consistent volunteers may receive appreciation letters, certificates, or
                                            online recognition.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="engageQ2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#engageA2" aria-expanded="false" aria-controls="engageA2">
                                        Can volunteering help with school/college credits?
                                    </button>
                                </h5>
                                <div id="engageA2" class="accordion-collapse collapse" aria-labelledby="engageQ2"
                                    data-bs-parent="#accordionEngage1">
                                    <div class="accordion-body">
                                        <p>Possibly – <?php echo $ev_project_name; ?> can provide a letter of involvement for students.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="engageQ3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#engageA3" aria-expanded="false" aria-controls="engageA3">
                                        Is there a volunteer WhatsApp or Telegram group?
                                    </button>
                                </h5>
                                <div id="engageA3" class="accordion-collapse collapse" aria-labelledby="engageQ3"
                                    data-bs-parent="#accordionEngage1">
                                    <div class="accordion-body">
                                        <p>Yes, active volunteers may be invited to join regional groups for
                                            coordination.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="engageQ4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#engageA4" aria-expanded="false" aria-controls="engageA4">
                                        Can I suggest ideas for campaigns?
                                    </button>
                                </h5>
                                <div id="engageA4" class="accordion-collapse collapse" aria-labelledby="engageQ4"
                                    data-bs-parent="#accordionEngage1">
                                    <div class="accordion-body">
                                        <p>Absolutely. Volunteer ideas are always welcome.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="engageQ5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#engageA5" aria-expanded="false" aria-controls="engageA5">
                                        How do I join upcoming campaigns or events?
                                    </button>
                                </h5>
                                <div id="engageA5" class="accordion-collapse collapse" aria-labelledby="engageQ5"
                                    data-bs-parent="#accordionEngage1">
                                    <div class="accordion-body">
                                        <p>Details are usually shared via email or WhatsApp with active volunteers.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6" id="accordionEngage2">
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="engageQ6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#engageA6" aria-expanded="false" aria-controls="engageA6">
                                        Are there workshops for volunteers?
                                    </button>
                                </h5>
                                <div id="engageA6" class="accordion-collapse collapse" aria-labelledby="engageQ6"
                                    data-bs-parent="#accordionEngage2">
                                    <div class="accordion-body">
                                        <p>Yes, training sessions and orientations are organised online and offline.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="engageQ7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#engageA7" aria-expanded="false" aria-controls="engageA7">
                                        Can I represent <?php echo $ev_project_name; ?> at public forums?
                                    </button>
                                </h5>
                                <div id="engageA7" class="accordion-collapse collapse" aria-labelledby="engageQ7"
                                    data-bs-parent="#accordionEngage2">
                                    <div class="accordion-body">
                                        <p>Yes, with prior coordination, you may speak on behalf of the initiative.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="engageQ8">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#engageA8" aria-expanded="false" aria-controls="engageA8">
                                        Can students do internships with <?php echo $ev_project_name; ?>?
                                    </button>
                                </h5>
                                <div id="engageA8" class="accordion-collapse collapse" aria-labelledby="engageQ8"
                                    data-bs-parent="#accordionEngage2">
                                    <div class="accordion-body">
                                        <p>Yes, short-term volunteering or internships can be arranged for college
                                            students.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="engageQ9">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#engageA9" aria-expanded="false" aria-controls="engageA9">
                                        Can I design materials for the campaign?
                                    </button>
                                </h5>
                                <div id="engageA9" class="accordion-collapse collapse" aria-labelledby="engageQ9"
                                    data-bs-parent="#accordionEngage2">
                                    <div class="accordion-body">
                                        <p>Creative volunteers are welcome to contribute posters, videos, or content.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="engageQ10">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#engageA10" aria-expanded="false" aria-controls="engageA10">
                                        What’s the most important thing for a volunteer to remember?
                                    </button>
                                </h5>
                                <div id="engageA10" class="accordion-collapse collapse" aria-labelledby="engageQ10"
                                    data-bs-parent="#accordionEngage2">
                                    <div class="accordion-body">
                                        <p>You are planting seeds of awareness. Every conversation matters, and every
                                            pledge counts.</p>
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
<?php include("tpl/include_footer.php"); ?>