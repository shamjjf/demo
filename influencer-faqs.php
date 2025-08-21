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
    <!-- faq-page area start -->
    <section class="faq-page section-space">
        <div class="container">
            <div class="row">
                <!-- About <?php echo $ev_project_name; ?> FAQs -->
                <div class="col-lg-6" id="accordionExample">
                    <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                        <img src="img/ask-quesiton/heart-2.png" alt="<?php echo $ev_project_name; ?> - icon"
                            class="img-fluid">
                        About <?php echo $ev_project_name; ?>
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
                                        <p><?php echo $ev_project_name; ?> is an awareness platform that encourages individuals to pledge
                                            their eyes for donation to help those with corneal blindness.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingA2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseA2" aria-expanded="false" aria-controls="collapseA2">
                                        Does <?php echo $ev_project_name; ?> collect eyes or handle donation logistics?
                                    </button>
                                </h5>
                                <div id="collapseA2" class="accordion-collapse collapse" aria-labelledby="headingA2"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>No. <?php echo $ev_project_name; ?> only takes pledges and spreads awareness. Eye donation
                                            itself is coordinated by authorised eye banks.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingA3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseA3" aria-expanded="false" aria-controls="collapseA3">
                                        Is this a government initiative?
                                    </button>
                                </h5>
                                <div id="collapseA3" class="accordion-collapse collapse" aria-labelledby="headingA3"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>No, it’s an independent platform aligned with the national goal of increasing
                                            eye pledges and donations.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingA4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseA4" aria-expanded="false" aria-controls="collapseA4">
                                        Why is eye pledging important?
                                    </button>
                                </h5>
                                <div id="collapseA4" class="accordion-collapse collapse" aria-labelledby="headingA4"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Millions suffer from corneal blindness. Eye pledges can restore sight and
                                            change lives.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingA5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseA5" aria-expanded="false" aria-controls="collapseA5">
                                        What happens after someone pledges their eyes?
                                    </button>
                                </h5>
                                <div id="collapseA5" class="accordion-collapse collapse" aria-labelledby="headingA5"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Their family is informed of the pledge, and in the event of their death, the
                                            wish can be honoured through an eye bank.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Influencer FAQs -->
                <div class="col-lg-6" id="accordionExample2">
                    <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                        <img src="img/ask-quesiton/heart-2.png" alt="<?php echo $ev_project_name; ?> - icon"
                            class="img-fluid">
                        Your Role as an Influencer
                    </h5>
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingB1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseB1" aria-expanded="true" aria-controls="collapseB1">
                                        How can I support <?php echo $ev_project_name; ?>?
                                    </button>
                                </h5>
                                <div id="collapseB1" class="accordion-collapse collapse show"
                                    aria-labelledby="headingB1" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>By spreading awareness, sharing accurate information, and encouraging pledges
                                            through your platforms.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingB2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseB2" aria-expanded="false" aria-controls="collapseB2">
                                        What type of content should I post?
                                    </button>
                                </h5>
                                <div id="collapseB2" class="accordion-collapse collapse" aria-labelledby="headingB2"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Eye pledging stories, educational reels, infographics, your personal take on
                                            the cause, and the pledge link.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingB3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseB3" aria-expanded="false" aria-controls="collapseB3">
                                        Can I use <?php echo $ev_project_name; ?>’s branding in my posts?
                                    </button>
                                </h5>
                                <div id="collapseB3" class="accordion-collapse collapse" aria-labelledby="headingB3"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Yes, as long as materials remain unaltered and are used respectfully.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingB4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseB4" aria-expanded="false" aria-controls="collapseB4">
                                        Where can I get campaign materials?
                                    </button>
                                </h5>
                                <div id="collapseB4" class="accordion-collapse collapse" aria-labelledby="headingB4"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>From the Resources section on AkshayNetra.com.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingB5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseB5" aria-expanded="false" aria-controls="collapseB5">
                                        Can I create my own posts and videos?
                                    </button>
                                </h5>
                                <div id="collapseB5" class="accordion-collapse collapse" aria-labelledby="headingB5"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>Absolutely! Just make sure the messaging aligns with <?php echo $ev_project_name; ?>'s core
                                            values and guidelines.</p>
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
            <div class="row">
                <!-- MESSAGE CLARITY & SENSITIVITY -->
                <div class="col-lg-6 mt-5" id="accordionExample3">
                    <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                        <img src="img/ask-quesiton/heart-2.png" alt="icon" class="img-fluid">
                        Message Clarity & Sensitivity
                    </h5>
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header" id="headingC1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseC1">
                                        Should I ask people to donate their eyes?
                                    </button>
                                </h5>
                                <div id="collapseC1" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <p>No, ask them to pledge. Donation happens later and must be handled by medical
                                            professionals.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseC2">
                                        What language should I avoid?
                                    </button>
                                </h5>
                                <div id="collapseC2" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <p>Avoid words like “give now” or “harvest” – instead, use “pledge,” “gift of
                                            sight,” or “legacy of vision.”</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseC3">
                                        Is it okay to share emotional stories?
                                    </button>
                                </h5>
                                <div id="collapseC3" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <p>Yes, but ensure they are respectful and ideally from people who consent to
                                            sharing.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseC4">
                                        How do I handle negative or insensitive comments?
                                    </button>
                                </h5>
                                <div id="collapseC4" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <p>Respond politely with facts, or redirect them to the official <?php echo $ev_project_name; ?>
                                            website.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseC5">
                                        Can I use humour in awareness posts?
                                    </button>
                                </h5>
                                <div id="collapseC5" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <p>Use it carefully – this is a sensitive subject, and respect must come first.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- PLEDGING & IMPACT -->
                <div class="col-lg-6 mt-5" id="accordionExample4">
                    <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
                        <img src="img/ask-quesiton/heart-2.png" alt="icon" class="img-fluid">
                        Pledging & Impact
                    </h5>
                    <div class="rr__faq-2">
                        <div class="accordion">

                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseD1">
                                        Who can pledge their eyes?
                                    </button>
                                </h5>
                                <div id="collapseD1" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <p>Anyone above 18 years of age in good general health.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseD2">
                                        Is eye pledging open to all religions?
                                    </button>
                                </h5>
                                <div id="collapseD2" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <p>Yes, there are no religious restrictions on pledging eyes.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseD3">
                                        Does eye pledging affect funeral rites?
                                    </button>
                                </h5>
                                <div id="collapseD3" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <p>No, the procedure is respectful and doesn’t disfigure the body.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseD4">
                                        How long does the pledge process take?
                                    </button>
                                </h5>
                                <div id="collapseD4" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <p>Less than 2 minutes – just a simple form online.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseD5">
                                        How will a person’s family know they pledged?
                                    </button>
                                </h5>
                                <div id="collapseD5" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <p><?php echo $ev_project_name; ?> contacts the family using the details provided in the pledge
                                            form.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- faq-page area start -->
<section class="faq-page section-space">
  <div class="container">
    <div class="row">

      <!-- TECHNICAL & ETHICAL QUESTIONS -->
      <div class="col-lg-6" id="accordionExample5">
        <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
          <img src="img/ask-quesiton/heart-2.png" alt="icon" class="img-fluid">
          Technical & Ethical Questions
        </h5>
        <div class="rr__faq-2">
          <div class="accordion">

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseE1">
                  Does pledging guarantee donation?
                </button>
              </h5>
              <div id="collapseE1" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <p>No. Donation depends on medical criteria and family consent at the time of death.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseE2">
                  Can someone change their mind after pledging?
                </button>
              </h5>
              <div id="collapseE2" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Yes, they can inform <?php echo $ev_project_name; ?>, and their record will be updated.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseE3">
                  Is there any cost involved for pledging?
                </button>
              </h5>
              <div id="collapseE3" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>None at all. It’s completely free.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseE4">
                  Can I promote <?php echo $ev_project_name; ?> if I haven't pledged myself?
                </button>
              </h5>
              <div id="collapseE4" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Yes, though your personal pledge can make your message more powerful.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseE5">
                  Will <?php echo $ev_project_name; ?> promote my content in return?
                </button>
              </h5>
              <div id="collapseE5" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Possibly! They may feature supportive influencers in their official channels.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- SOCIAL MEDIA USAGE -->
      <div class="col-lg-6" id="accordionExample6">
        <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
          <img src="img/ask-quesiton/heart-2.png" alt="icon" class="img-fluid">
          Social Media Usage
        </h5>
        <div class="rr__faq-2">
          <div class="accordion">

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseF1">
                  Which hashtags should I use?
                </button>
              </h5>
              <div id="collapseF1" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <p>#AkshayNetra #GiftOfSight #PledgeEyes #EyeDonationAwareness</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseF2">
                  Should I tag <?php echo $ev_project_name; ?>’s official handles?
                </button>
              </h5>
              <div id="collapseF2" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Yes, always tag so they can engage and amplify your content.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseF3">
                  Can I use trending audio in my posts?
                </button>
              </h5>
              <div id="collapseF3" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Sure – use trending formats while maintaining message sensitivity.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseF4">
                  Is it okay to do collabs with other influencers for this cause?
                </button>
              </h5>
              <div id="collapseF4" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Yes! Group efforts often have a greater reach.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseF5">
                  How often should I post?
                </button>
              </h5>
              <div id="collapseF5" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>There’s no limit – consistency helps. Even 1–2 powerful posts can make an impact.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- faq-page area end -->

<!-- faq-page area start -->
<section class="faq-page section-space">
  <div class="container">
    <div class="row">

      <!-- EVENTS & COLLABORATIONS -->
      <div class="col-lg-6" id="accordionExample7">
        <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
          <img src="img/ask-quesiton/heart-2.png" alt="icon" class="img-fluid">
          Events & Collaborations
        </h5>
        <div class="rr__faq-2">
          <div class="accordion">

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseG1">
                  Can I host a live session on eye pledging?
                </button>
              </h5>
              <div id="collapseG1" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <p>Yes, <?php echo $ev_project_name; ?> can even support you with facts and a guest expert if needed.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseG2">
                  Can I visit schools or colleges to talk about this?
                </button>
              </h5>
              <div id="collapseG2" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Yes, and <?php echo $ev_project_name; ?> can provide presentation materials and support.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseG3">
                  Are there offline events I can be part of?
                </button>
              </h5>
              <div id="collapseG3" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Yes. Check the website or subscribe for updates on city-based campaigns.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseG4">
                  Can I run a personal awareness campaign with <?php echo $ev_project_name; ?>?
                </button>
              </h5>
              <div id="collapseG4" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Yes, especially during Eye Donation Fortnight or World Sight Day.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseG5">
                  Will <?php echo $ev_project_name; ?> certify my contributions?
                </button>
              </h5>
              <div id="collapseG5" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Yes, contributors may receive a digital certificate of appreciation.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- CHALLENGES & DOUBTS -->
      <div class="col-lg-6" id="accordionExample8">
        <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
          <img src="img/ask-quesiton/heart-2.png" alt="icon" class="img-fluid">
          Challenges & Doubts
        </h5>
        <div class="rr__faq-2">
          <div class="accordion">

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseH1">
                  What if someone is afraid of eye donation?
                </button>
              </h5>
              <div id="collapseH1" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <p>Share gentle, clear information and encourage them to visit the FAQs page.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseH2">
                  Can I support multiple causes along with this one?
                </button>
              </h5>
              <div id="collapseH2" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Absolutely. Your voice can create impact across many noble causes.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseH3">
                  Is this a one-time effort or an ongoing campaign?
                </button>
              </h5>
              <div id="collapseH3" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Eye pledging awareness is continuous; there’s always someone who hasn’t heard the message yet.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseH4">
                  Can I translate <?php echo $ev_project_name; ?> posts into regional languages?
                </button>
              </h5>
              <div id="collapseH4" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Yes, as long as the message stays true to the original.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseH5">
                  What if my audience is mostly international?
                </button>
              </h5>
              <div id="collapseH5" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>You can still share the message and inspire global compassion, even if pledging is India-specific.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- faq-page area end -->

<!-- faq-page area start -->
<section class="faq-page section-space">
  <div class="container">
    <div class="row">

      <!-- MAKING A DIFFERENCE -->
      <div class="col-lg-6" id="accordionExample9">
        <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
          <img src="img/ask-quesiton/heart-2.png" alt="icon" class="img-fluid">
          Making a Difference
        </h5>
        <div class="rr__faq-2">
          <div class="accordion">

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseI1">
                  What impact can one post really make?
                </button>
              </h5>
              <div id="collapseI1" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <p>It could inspire even one pledge; which might one day restore two people’s eyesight.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseI2">
                  How can I stay updated with <?php echo $ev_project_name; ?>’s work?
                </button>
              </h5>
              <div id="collapseI2" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Follow their official channels or subscribe to the newsletter.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseI3">
                  Can my followers ask me for help in pledging?
                </button>
              </h5>
              <div id="collapseI3" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Yes, guide them to AkshayNetra.com to fill out the simple form.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseI4">
                  How do I know if my efforts are making a difference?
                </button>
              </h5>
              <div id="collapseI4" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p><?php echo $ev_project_name; ?> shares pledge statistics and milestones publicly.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseI5">
                  Can I request <?php echo $ev_project_name; ?> to conduct a session in my community?
                </button>
              </h5>
              <div id="collapseI5" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Yes, email them through the contact section for more details.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- CLOSING THOUGHTS -->
      <div class="col-lg-6" id="accordionExample10">
        <h5 class="section__subtitle title-green mb-40 mb-xs-10 title-animation">
          <img src="img/ask-quesiton/heart-2.png" alt="icon" class="img-fluid">
          Closing Thoughts
        </h5>
        <div class="rr__faq-2">
          <div class="accordion">

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseJ1">
                  Why was <?php echo $ev_project_name; ?> created?
                </button>
              </h5>
              <div id="collapseJ1" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <p>To create a connection between willingness and action in eye donation awareness.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseJ2">
                  Why should influencers support eye pledging?
                </button>
              </h5>
              <div id="collapseJ2" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Because your voice reaches people who may never have considered it.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseJ3">
                  Can I continue supporting after Eye Donation Fortnight?
                </button>
              </h5>
              <div id="collapseJ3" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Definitely - awareness is needed all year round.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseJ4">
                  Will I be acknowledged for my efforts?
                </button>
              </h5>
              <div id="collapseJ4" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Your impact matters and <?php echo $ev_project_name; ?> recognises dedicated supporters.</p>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseJ5">
                  What’s the most important thing I can do?
                </button>
              </h5>
              <div id="collapseJ5" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <p>Lead by example. Pledge your eyes and share the message with heart.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- faq-page area end -->

</main>
<!-- Body main wrapper end -->
<div id="footer-container"></div>
<?php include("tpl/include_footer.php"); ?>