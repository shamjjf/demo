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
                <!-- General FAQs -->
                <div class="col-lg-6" id="accordionExample">
                    <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                        <img src="img/ask-quesiton/heart-2.png" alt="<?php echo $ev_project_name; ?> - icon"
                            class="img-fluid">
                         General FAQs about <?php echo $ev_project_name; ?>
                    </h5>
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingA1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseA1" aria-expanded="true" aria-controls="collapseA1">
                                        What is <?php echo $ev_project_name; ?>?
                                    </button>
                                </h5>
                                <div id="collapseA1" class="accordion-collapse collapse show"
                                    aria-labelledby="headingA1" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><?php echo $ev_project_name; ?> is an awareness initiative that encourages people to pledge
                                            their eyes to help restore sight for those affected by corneal blindness.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingA2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseA2" aria-expanded="false" aria-controls="collapseA2">
                                        Is <?php echo $ev_project_name; ?> an eye bank?
                                    </button>
                                </h5>
                                <div id="collapseA2" class="accordion-collapse collapse" aria-labelledby="headingA2"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>No. <?php echo $ev_project_name; ?> is not an eye bank. It does not collect or perform
                                            donations. It only promotes eye pledging and spreads awareness.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingA3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseA3" aria-expanded="false" aria-controls="collapseA3">
                                        What does it mean to pledge your eyes?
                                    </button>
                                </h5>
                                <div id="collapseA3" class="accordion-collapse collapse" aria-labelledby="headingA3"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>It means making a voluntary commitment to donate your eyes after death, which
                                            your family can honour.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingA4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseA4" aria-expanded="false" aria-controls="collapseA4">
                                        Is eye pledging the same as eye donation?
                                    </button>
                                </h5>
                                <div id="collapseA4" class="accordion-collapse collapse" aria-labelledby="headingA4"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Pledging is a symbolic act of intention. Actual donation happens only after
                                            death with the consent of the family.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingA5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseA5" aria-expanded="false" aria-controls="collapseA5">
                                        Why is eye pledging important?
                                    </button>
                                </h5>
                                <div id="collapseA5" class="accordion-collapse collapse" aria-labelledby="headingA5"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>It helps reduce the shortage of corneas needed for transplants and offers the
                                            gift of sight to the blind.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Organisation FAQs -->
                <div class="col-lg-6" id="accordionExample2">
                    <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                        <img src="img/ask-quesiton/heart-2.png" alt="<?php echo $ev_project_name; ?> - icon"
                            class="img-fluid">
                         FAQs for Organisations – Getting Involved
                    </h5>
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingB1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseB1" aria-expanded="true" aria-controls="collapseB1">
                                        How can our organisation participate in <?php echo $ev_project_name; ?>?
                                    </button>
                                </h5>
                                <div id="collapseB1" class="accordion-collapse collapse show"
                                    aria-labelledby="headingB1" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>You can host awareness campaigns, encourage employees to pledge, and share
                                            materials in your office or digital spaces.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingB2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseB2" aria-expanded="false" aria-controls="collapseB2">
                                        Does participating require any cost?
                                    </button>
                                </h5>
                                <div id="collapseB2" class="accordion-collapse collapse" aria-labelledby="headingB2"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>No. Participation is free unless you choose to print materials or organise
                                            events, which is optional.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingB3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseB3" aria-expanded="false" aria-controls="collapseB3">
                                        What kind of organisations can get involved?
                                    </button>
                                </h5>
                                <div id="collapseB3" class="accordion-collapse collapse" aria-labelledby="headingB3"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Corporate companies, startups, non-profits, institutions, and government
                                            offices — any group can join.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingB4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseB4" aria-expanded="false" aria-controls="collapseB4">
                                        Do we need a formal agreement?
                                    </button>
                                </h5>
                                <div id="collapseB4" class="accordion-collapse collapse" aria-labelledby="headingB4"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>No formal contract is needed to start promoting awareness. Simple
                                            registration or intent is enough.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingB5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseB5" aria-expanded="false" aria-controls="collapseB5">
                                        Is this considered a CSR activity?
                                    </button>
                                </h5>
                                <div id="collapseB5" class="accordion-collapse collapse" aria-labelledby="headingB5"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Yes. Promoting eye pledging falls under health and awareness, which is
                                            recognised as a valid CSR cause.</p>
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

    <section class="faq-page section-space">
        <div class="container">
            <div class="w-100 d-flex justify-content-center"></div>
            <div class="row mt-5">
                <!-- Awareness Activities -->
                <div class="col-lg-6" id="accordionExample3">
                    <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                        <img src="img/ask-quesiton/heart-2.png" alt="<?php echo $ev_project_name; ?> - icon"
                            class="img-fluid">
                         Awareness Activities
                    </h5>
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingC1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseC1" aria-expanded="true" aria-controls="collapseC1">
                                        What activities can we do internally?
                                    </button>
                                </h5>
                                <div id="collapseC1" class="accordion-collapse collapse show"
                                    aria-labelledby="headingC1" data-bs-parent="#accordionExample3">
                                    <div class="accordion-body">
                                        <p>Poster displays, internal emails, pledge drives, group sign-ups, and team
                                            sessions are great ways to get involved.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingC2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseC2" aria-expanded="false" aria-controls="collapseC2">
                                        Can we invite <?php echo $ev_project_name; ?> for a talk?
                                    </button>
                                </h5>
                                <div id="collapseC2" class="accordion-collapse collapse" aria-labelledby="headingC2"
                                    data-bs-parent="#accordionExample3">
                                    <div class="accordion-body">
                                        <p>Subject to availability, yes. We can support with guest speakers or virtual
                                            presentations.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingC3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseC3" aria-expanded="false" aria-controls="collapseC3">
                                        Can we share <?php echo $ev_project_name; ?> content on our social media?
                                    </button>
                                </h5>
                                <div id="collapseC3" class="accordion-collapse collapse" aria-labelledby="headingC3"
                                    data-bs-parent="#accordionExample3">
                                    <div class="accordion-body">
                                        <p>Yes, we encourage organisations to share our posts and promote awareness
                                            through their digital presence.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingC4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseC4" aria-expanded="false" aria-controls="collapseC4">
                                        Do you provide digital resources?
                                    </button>
                                </h5>
                                <div id="collapseC4" class="accordion-collapse collapse" aria-labelledby="headingC4"
                                    data-bs-parent="#accordionExample3">
                                    <div class="accordion-body">
                                        <p>Yes. We provide posters, brochures, pledge forms, and mailers in printable
                                            and digital formats.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingC5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseC5" aria-expanded="false" aria-controls="collapseC5">
                                        Can we run this as a monthly or annual activity?
                                    </button>
                                </h5>
                                <div id="collapseC5" class="accordion-collapse collapse" aria-labelledby="headingC5"
                                    data-bs-parent="#accordionExample3">
                                    <div class="accordion-body">
                                        <p>Yes. You can plan it as a recurring or one-time campaign, as per your CSR
                                            calendar.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Employee Participation -->
                <div class="col-lg-6" id="accordionExample4">
                    <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                        <img src="img/ask-quesiton/heart-2.png" alt="<?php echo $ev_project_name; ?> - icon"
                            class="img-fluid">
                         Employee Participation
                    </h5>
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingD1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseD1" aria-expanded="true" aria-controls="collapseD1">
                                        How do employees pledge their eyes?
                                    </button>
                                </h5>
                                <div id="collapseD1" class="accordion-collapse collapse show"
                                    aria-labelledby="headingD1" data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>They visit the <?php echo $ev_project_name; ?> website and fill out a short pledge form.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingD2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseD2" aria-expanded="false" aria-controls="collapseD2">
                                        Do employees receive a certificate?
                                    </button>
                                </h5>
                                <div id="collapseD2" class="accordion-collapse collapse" aria-labelledby="headingD2"
                                    data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>Yes. Upon pledging, they receive a digital certificate acknowledging their
                                            intent.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingD3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseD3" aria-expanded="false" aria-controls="collapseD3">
                                        Can employees from all locations participate?
                                    </button>
                                </h5>
                                <div id="collapseD3" class="accordion-collapse collapse" aria-labelledby="headingD3"
                                    data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>Yes. The initiative is digital and accessible from anywhere.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingD4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseD4" aria-expanded="false" aria-controls="collapseD4">
                                        Is the pledge mandatory for employees?
                                    </button>
                                </h5>
                                <div id="collapseD4" class="accordion-collapse collapse" aria-labelledby="headingD4"
                                    data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>No. Participation is voluntary. <?php echo $ev_project_name; ?> only promotes awareness and
                                            encourages willing pledges.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingD5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseD5" aria-expanded="false" aria-controls="collapseD5">
                                        Will we be able to track the number of pledges from our organisation?
                                    </button>
                                </h5>
                                <div id="collapseD5" class="accordion-collapse collapse" aria-labelledby="headingD5"
                                    data-bs-parent="#accordionExample4">
                                    <div class="accordion-body">
                                        <p>Yes. We can share pledge data and progress updates, if requested.</p>
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
            <div class="w-100 d-flex justify-content-center"></div>
            <div class="row mt-5">
                <!-- Religious & Cultural Sensitivity -->
                <div class="col-lg-6" id="accordionExample5">
                    <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                        <img src="img/ask-quesiton/heart-2.png" alt="<?php echo $ev_project_name; ?> - icon"
                            class="img-fluid">
                         Religious & Cultural Sensitivity
                    </h5>
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingE1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseE1" aria-expanded="true" aria-controls="collapseE1">
                                        Is eye pledging accepted across all religions?
                                    </button>
                                </h5>
                                <div id="collapseE1" class="accordion-collapse collapse show"
                                    aria-labelledby="headingE1" data-bs-parent="#accordionExample5">
                                    <div class="accordion-body">
                                        <p>Most major religions support organ donation as an act of compassion and
                                            service.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingE2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseE2" aria-expanded="false" aria-controls="collapseE2">
                                        Will this affect funeral rituals?
                                    </button>
                                </h5>
                                <div id="collapseE2" class="accordion-collapse collapse" aria-labelledby="headingE2"
                                    data-bs-parent="#accordionExample5">
                                    <div class="accordion-body">
                                        <p>No. Eye retrieval is a quick, respectful process that does not delay funeral
                                            arrangements.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingE3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseE3" aria-expanded="false" aria-controls="collapseE3">
                                        Can families refuse the donation later?
                                    </button>
                                </h5>
                                <div id="collapseE3" class="accordion-collapse collapse" aria-labelledby="headingE3"
                                    data-bs-parent="#accordionExample5">
                                    <div class="accordion-body">
                                        <p>Yes. The final decision lies with the family after a person's passing.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingE4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseE4" aria-expanded="false" aria-controls="collapseE4">
                                        Do people have concerns about appearance after donation?
                                    </button>
                                </h5>
                                <div id="collapseE4" class="accordion-collapse collapse" aria-labelledby="headingE4"
                                    data-bs-parent="#accordionExample5">
                                    <div class="accordion-body">
                                        <p>Yes, but it is a common myth. The appearance is not affected significantly
                                            after eye retrieval.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingE5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseE5" aria-expanded="false" aria-controls="collapseE5">
                                        How can we address cultural hesitations in our teams?
                                    </button>
                                </h5>
                                <div id="collapseE5" class="accordion-collapse collapse" aria-labelledby="headingE5"
                                    data-bs-parent="#accordionExample5">
                                    <div class="accordion-body">
                                        <p>Through gentle conversations, FAQs, and awareness posters that clarify myths
                                            and facts.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Data & Privacy -->
                <div class="col-lg-6" id="accordionExample6">
                    <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                        <img src="img/ask-quesiton/heart-2.png" alt="<?php echo $ev_project_name; ?> - icon"
                            class="img-fluid">
                         Data & Privacy
                    </h5>
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingF1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseF1" aria-expanded="true" aria-controls="collapseF1">
                                        Is employee data safe?
                                    </button>
                                </h5>
                                <div id="collapseF1" class="accordion-collapse collapse show"
                                    aria-labelledby="headingF1" data-bs-parent="#accordionExample6">
                                    <div class="accordion-body">
                                        <p>Yes. Only basic contact details are collected for pledge confirmation. No
                                            sensitive data is shared.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingF2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseF2" aria-expanded="false" aria-controls="collapseF2">
                                        Is there a pledge ID or tracking code for each employee?
                                    </button>
                                </h5>
                                <div id="collapseF2" class="accordion-collapse collapse" aria-labelledby="headingF2"
                                    data-bs-parent="#accordionExample6">
                                    <div class="accordion-body">
                                        <p>Not typically, but we can provide pledge certificates for internal records.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingF3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseF3" aria-expanded="false" aria-controls="collapseF3">
                                        Will <?php echo $ev_project_name; ?> contact employees directly?
                                    </button>
                                </h5>
                                <div id="collapseF3" class="accordion-collapse collapse" aria-labelledby="headingF3"
                                    data-bs-parent="#accordionExample6">
                                    <div class="accordion-body">
                                        <p>Only to confirm the pledge and inform their listed family contact, if
                                            permitted.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingF4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseF4" aria-expanded="false" aria-controls="collapseF4">
                                        Do employees need to submit any medical documents?
                                    </button>
                                </h5>
                                <div id="collapseF4" class="accordion-collapse collapse" aria-labelledby="headingF4"
                                    data-bs-parent="#accordionExample6">
                                    <div class="accordion-body">
                                        <p>No. Pledging does not require any medical verification or documents.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingF5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseF5" aria-expanded="false" aria-controls="collapseF5">
                                        Can someone withdraw their pledge later?
                                    </button>
                                </h5>
                                <div id="collapseF5" class="accordion-collapse collapse" aria-labelledby="headingF5"
                                    data-bs-parent="#accordionExample6">
                                    <div class="accordion-body">
                                        <p>Yes. Pledging is voluntary and can be withdrawn anytime.</p>
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
            <div class="w-100 d-flex justify-content-center"></div>
            <div class="row mt-5">
                <!-- During and After Campaign -->
                <div class="col-lg-6" id="accordionExample7">
                    <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                        <img src="img/ask-quesiton/heart-2.png" alt="<?php echo $ev_project_name; ?> - icon"
                            class="img-fluid">
                         During and After Campaign
                    </h5>
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingG1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseG1" aria-expanded="true" aria-controls="collapseG1">
                                        What support will we receive from <?php echo $ev_project_name; ?>?
                                    </button>
                                </h5>
                                <div id="collapseG1" class="accordion-collapse collapse show"
                                    aria-labelledby="headingG1" data-bs-parent="#accordionExample7">
                                    <div class="accordion-body">
                                        <p>Awareness materials, campaign planning guidance, and post-campaign feedback.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingG2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseG2" aria-expanded="false" aria-controls="collapseG2">
                                        Can we display our involvement publicly?
                                    </button>
                                </h5>
                                <div id="collapseG2" class="accordion-collapse collapse" aria-labelledby="headingG2"
                                    data-bs-parent="#accordionExample7">
                                    <div class="accordion-body">
                                        <p>Yes. You can showcase your CSR initiative internally and externally with our
                                            digital badge.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingG3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseG3" aria-expanded="false" aria-controls="collapseG3">
                                        Can we receive a participation certificate for the organisation?
                                    </button>
                                </h5>
                                <div id="collapseG3" class="accordion-collapse collapse" aria-labelledby="headingG3"
                                    data-bs-parent="#accordionExample7">
                                    <div class="accordion-body">
                                        <p>Yes. We offer digital participation certificates to organisations.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingG4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseG4" aria-expanded="false" aria-controls="collapseG4">
                                        How long should a campaign run?
                                    </button>
                                </h5>
                                <div id="collapseG4" class="accordion-collapse collapse" aria-labelledby="headingG4"
                                    data-bs-parent="#accordionExample7">
                                    <div class="accordion-body">
                                        <p>It can run for a day, a week, or more depending on your plans. Many do it
                                            during Eye Donation Fortnight (25 Aug–8 Sept).</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingG5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseG5" aria-expanded="false" aria-controls="collapseG5">
                                        Is there a deadline to register as an organisation?
                                    </button>
                                </h5>
                                <div id="collapseG5" class="accordion-collapse collapse" aria-labelledby="headingG5"
                                    data-bs-parent="#accordionExample7">
                                    <div class="accordion-body">
                                        <p>No. You can register your interest and start any time of the year.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Extended Opportunities -->
                <div class="col-lg-6" id="accordionExample8">
                    <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                        <img src="img/ask-quesiton/heart-2.png" alt="<?php echo $ev_project_name; ?> - icon"
                            class="img-fluid">
                         Extended Opportunities
                    </h5>
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingH1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseH1" aria-expanded="true" aria-controls="collapseH1">
                                        Can we co-brand the campaign with our logo?
                                    </button>
                                </h5>
                                <div id="collapseH1" class="accordion-collapse collapse show"
                                    aria-labelledby="headingH1" data-bs-parent="#accordionExample8">
                                    <div class="accordion-body">
                                        <p>Yes. Custom co-branded materials can be arranged on request.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingH2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseH2" aria-expanded="false" aria-controls="collapseH2">
                                        Can we involve our clients or partners?
                                    </button>
                                </h5>
                                <div id="collapseH2" class="accordion-collapse collapse" aria-labelledby="headingH2"
                                    data-bs-parent="#accordionExample8">
                                    <div class="accordion-body">
                                        <p>Absolutely. Sharing awareness with clients or vendors is encouraged.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingH3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseH3" aria-expanded="false" aria-controls="collapseH3">
                                        Can we include this in our ESG or sustainability report?
                                    </button>
                                </h5>
                                <div id="collapseH3" class="accordion-collapse collapse" aria-labelledby="headingH3"
                                    data-bs-parent="#accordionExample8">
                                    <div class="accordion-body">
                                        <p>Yes. It qualifies under social impact reporting.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingH4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseH4" aria-expanded="false" aria-controls="collapseH4">
                                        Can we run inter-departmental competitions?
                                    </button>
                                </h5>
                                <div id="collapseH4" class="accordion-collapse collapse" aria-labelledby="headingH4"
                                    data-bs-parent="#accordionExample8">
                                    <div class="accordion-body">
                                        <p>Yes. Friendly challenges between teams for maximum pledges or awareness can
                                            boost engagement.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingH5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseH5" aria-expanded="false" aria-controls="collapseH5">
                                        Do you run a recognition programme?
                                    </button>
                                </h5>
                                <div id="collapseH5" class="accordion-collapse collapse" aria-labelledby="headingH5"
                                    data-bs-parent="#accordionExample8">
                                    <div class="accordion-body">
                                        <p>Yes. Active organisations may be featured in our spotlight section or annual
                                            acknowledgements.</p>
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
            <div class="w-100 d-flex justify-content-center"></div>
            <div class="row mt-5">
                <!-- Volunteering and Extended Support -->
                <div class="col-lg-6" id="accordionExample9">
                    <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                        <img src="img/ask-quesiton/heart-2.png" alt="<?php echo $ev_project_name; ?> - icon"
                            class="img-fluid">
                         Volunteering and Extended Support
                    </h5>
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingI1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseI1" aria-expanded="true" aria-controls="collapseI1">
                                        Can employees become <?php echo $ev_project_name; ?> volunteers?
                                    </button>
                                </h5>
                                <div id="collapseI1" class="accordion-collapse collapse show"
                                    aria-labelledby="headingI1" data-bs-parent="#accordionExample9">
                                    <div class="accordion-body">
                                        <p>Yes. Interested individuals can sign up to volunteer and help us spread the
                                            word in their circles.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingI2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseI2" aria-expanded="false" aria-controls="collapseI2">
                                        Are there city-wide events we can support?
                                    </button>
                                </h5>
                                <div id="collapseI2" class="accordion-collapse collapse" aria-labelledby="headingI2"
                                    data-bs-parent="#accordionExample9">
                                    <div class="accordion-body">
                                        <p>Yes. During Eye Donation Fortnight and other awareness campaigns, your team
                                            can support city drives.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingI3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseI3" aria-expanded="false" aria-controls="collapseI3">
                                        Can we host a pledge camp for our staff?
                                    </button>
                                </h5>
                                <div id="collapseI3" class="accordion-collapse collapse" aria-labelledby="headingI3"
                                    data-bs-parent="#accordionExample9">
                                    <div class="accordion-body">
                                        <p>Yes. We provide guidance for setting up physical or digital pledge drives.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingI4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseI4" aria-expanded="false" aria-controls="collapseI4">
                                        Can we donate printing or logistics support?
                                    </button>
                                </h5>
                                <div id="collapseI4" class="accordion-collapse collapse" aria-labelledby="headingI4"
                                    data-bs-parent="#accordionExample9">
                                    <div class="accordion-body">
                                        <p>Yes. In-kind support is welcome to print and distribute brochures, banners,
                                            etc.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingI5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseI5" aria-expanded="false" aria-controls="collapseI5">
                                        Are there opportunities to sponsor awareness materials?
                                    </button>
                                </h5>
                                <div id="collapseI5" class="accordion-collapse collapse" aria-labelledby="headingI5"
                                    data-bs-parent="#accordionExample9">
                                    <div class="accordion-body">
                                        <p>Yes. Organisations can contribute towards material production and
                                            distribution.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Future Involvement -->
                <div class="col-lg-6" id="accordionExample10">
                    <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                        <img src="img/ask-quesiton/heart-2.png" alt="<?php echo $ev_project_name; ?> - icon"
                            class="img-fluid">
                         Future Involvement
                    </h5>
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingJ1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseJ1" aria-expanded="true" aria-controls="collapseJ1">
                                        Can we sign a long-term commitment with <?php echo $ev_project_name; ?>?
                                    </button>
                                </h5>
                                <div id="collapseJ1" class="accordion-collapse collapse show"
                                    aria-labelledby="headingJ1" data-bs-parent="#accordionExample10">
                                    <div class="accordion-body">
                                        <p>Yes. Long-term partnerships are welcome and appreciated.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingJ2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseJ2" aria-expanded="false" aria-controls="collapseJ2">
                                        Can we get feedback from employees about the campaign?
                                    </button>
                                </h5>
                                <div id="collapseJ2" class="accordion-collapse collapse" aria-labelledby="headingJ2"
                                    data-bs-parent="#accordionExample10">
                                    <div class="accordion-body">
                                        <p>Yes. You can gather internal feedback and we can help frame a short feedback
                                            form.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingJ3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseJ3" aria-expanded="false" aria-controls="collapseJ3">
                                        Will we be updated about new initiatives?
                                    </button>
                                </h5>
                                <div id="collapseJ3" class="accordion-collapse collapse" aria-labelledby="headingJ3"
                                    data-bs-parent="#accordionExample10">
                                    <div class="accordion-body">
                                        <p>Yes. Once onboarded, you will be informed about future campaigns and
                                            awareness events.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingJ4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseJ4" aria-expanded="false" aria-controls="collapseJ4">
                                        What is the ideal time to launch this activity?
                                    </button>
                                </h5>
                                <div id="collapseJ4" class="accordion-collapse collapse" aria-labelledby="headingJ4"
                                    data-bs-parent="#accordionExample10">
                                    <div class="accordion-body">
                                        <p>Eye Donation Fortnight (25 Aug–8 Sept) is a key time, but it can be done
                                            anytime.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingJ5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseJ5" aria-expanded="false" aria-controls="collapseJ5">
                                        How do we get started?
                                    </button>
                                </h5>
                                <div id="collapseJ5" class="accordion-collapse collapse" aria-labelledby="headingJ5"
                                    data-bs-parent="#accordionExample10">
                                    <div class="accordion-body">
                                        <p>Just contact us or download the starter kit from the website. We’ll help you
                                            take it forward from there.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<!-- Body main wrapper end -->
<div id="footer-container"></div>
<?php include("tpl/include_footer.php"); ?>