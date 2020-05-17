<!--==========================
  Intro Section
============================-->
<section id="intro">

    <div class="intro-content">
        <h2><small class="font-weight-light">TOUCHING LIVES BY US</small>
            <div class="text-warning">We provide Amazing Solutions</div> </h2>
        <h4 class="font-weight-light">WEB DEVELOPMENT, MOBILE DEVELOPMENT, SYSTEM SOFTWARE, SEO & SMO WITH EXPERTS</h4>

                    <!-- <h2>Making <span>your ideas</span><br>happen!</h2> -->
        <div>
            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
            <a href="<?= site_url("about") ?>" class="btn-projects scrollto btn btn-primary">Know More</a>
        </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
        <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
        <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
        <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
        <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
        <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

</section><!-- #intro -->

<!--==========================
      About Section
    ============================-->
<section id="about" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 about-img">
                <img src="<?= base_url("public/front/img/presentation.jpg") ?>" alt="">
            </div>

            <div class="col-lg-6 content section-header">
                <h2>Welcome</h2>

                <h3 class="text-justify">Innovovision Technology Consulting Pvt. Ltd. enables clients to transform, modernize and standardize IT environment by leveraging emerging technologies and a proven hybrid global delivery model.</h3>
                <h3 class="text-justify">Be it a Software Application can offer your company end-to-end IT solutions to make your project get off to a flying start. Whether you are a start-up, still trying to conceptualize your idea and prove the concept with persuasive visuals to your...</h3>
                <a href="<?= site_url("about") ?>" class="btn btn-primary">Know More</a>


                <!--                <ul>
                    <li><i class="ion-android-checkmark-circle"></i> Inability to capitalize on potential efficiencies, cost-savings, or new marketing opportunities</li>
                    <li><i class="ion-android-checkmark-circle"></i> The absence of business agility processes that provide customer responsiveness.</li>
                    <li><i class="ion-android-checkmark-circle"></i> Restricted business and product innovation</li>
                </ul>-->

            </div>

        </div>
    </div>
</section><!-- #about -->
<!--==========================
      Why us Section
    ============================-->
<!--<section id="about" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 content section-header">
                <h2>Why choose us?</h2>
                <p class="text-justify">We have dedicated Team helping our clients to reach their goals with providing them an innovative environment to making a difference by given them the best services.</p>
                <p class="text-justify">Our strong intellect is recognition with client projects, it means we are frequently striving to provide solutions, even for issues which they aren’t yet aware of. For this end, we grab a progressive approach towards technology and marketing techniques.</p>
                <h3>Innovovision enables clients to transform, modernize and standardize IT environment by leveraging emerging technologies and a proven hybrid global delivery model. </h3>
                <br/>
                <div class="row why_choose">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="ion-android-checkmark-circle"></i> Quality Assurance</li>
                            <li><i class="ion-android-checkmark-circle"></i> Delivery on Time </li>
                            <li><i class="ion-android-checkmark-circle"></i> Focus on innovation </li>
                        </ul>
                    </div>  
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="ion-android-checkmark-circle"></i> Dedicated teams</li>
                            <li><i class="ion-android-checkmark-circle"></i> Trendy technology </li>
                            <li><i class="ion-android-checkmark-circle"></i> Client-Focus</li>
                        </ul>
                    </div>  
                </div>


            </div>

            <div class="col-lg-6 about-img">
                <img src="<?= base_url("public/front/img/why.jpg") ?>" alt="">
            </div>


        </div>

    </div>
</section>-->

<!-- #about -->


<!--==========================
Our Services section
============================-->
<section class="container-fluid module-section gray-section industries">
    <div class="container" id="clients">

        <div class="section-header">
            <h2>Our Services</h2>
        </div>
        <!--<div class="row justify-content-md-center">-->
        <p class="text-left p-hightligted"> We combine in-depth industry expertise with world-class technical
            knowledge to help you create compelling software-based products.</p>
        <!--        </div>-->
        <div class="row row-box-container">
            <div class="col-lg-6 col-md-12 industries-box-container"> 
                <button class="industries-box my-transition" data-industry="fintech">
                    <h2 class="highlight-3 my-transition">Software Development</h2> 
                </button> 
                <button class="industries-box my-transition" data-industry="media">
                    <h2 class="highlight-3 my-transition">Testing and QA</h2> 
                </button> <button class="industries-box my-transition" data-industry="healthcare">
                    <h2 class="highlight-3 my-transition">Data Analytics</h2> </button> 
                <button class="industries-box my-transition" data-industry="all-industries">
                    <h2 class="highlight-3 my-transition">All industries</h2> 
                </button>
            </div>
            <div class="col-lg-6 col-md-12 outer-box-wrapper">
                <div class="dynamic-box fintech-dynamic current-box my-transition">
                    <div class="inner-box text-center">
                        <h2 class="subtitle white-text">Services that we provide</h2>
                        <div class="p-type1 white-text">
                            <p>Solve your project’s problems with our Dedicated Teams services, build a mobile app that ticks all boxes, finish the digital transformation with our spot-on IT consulting.</p>
                        </div> 
                        <a href="<?= site_url('services') ?>" class="btn btn-primary">Know More</a>
                    </div>
                </div>              


            </div>
        </div>
    </div>
</section>

<!--==========================
Blog Section
============================-->
<section id="team" class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
    <div class="container">
        <div class="section-header">
            <h2>Blog/News</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <a href="<?= site_url('controllers/quality_management') ?>" class="member">
                    <div class="pic"><img src="<?= base_url("public/front/img/blog/travel.png") ?>" alt=""></div>
                    <div class="details">
                        <span>Quality Management and Design Control Requirements for our company</span>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a href="<?= site_url('controllers/transform') ?>" class="member">
                    <div class="pic"><img src="<?= base_url("public/front/img/blog/allowance.png") ?>" alt=""></div>
                    <div class="details">
                        <span>Transform Your Approach to Compliance From Concept to Market</span>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a href="<?= site_url('controllers/psychology_change') ?>" class="member">
                    <div class="pic"><img src="<?= base_url("public/front/img/blog/secondment.png") ?>" alt=""></div>
                    <div class="details">
                        <span>The Psychology of Change: Optimizing your Technology Deployment</span>
                    </div>
                </a>
            </div>

            <!--            <div class="col-lg-3 col-md-6">
                            <div class="member">
                                <div class="pic"><img src="img/team-4.jpg" alt=""></div>
                                <div class="details">
                                    <h4>Amanda Jepson</h4>
                                    <span>Accountant</span>
                                    <div class="social">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>-->
        </div>

    </div>
</section>

<!--==========================
Services Section
============================-->
<!--    <section id="services">
    <div class="container">
        <div class="section-header">
            <h2>Services</h2>
            <p>Inovovision offers a service spectrum ranging from conceptualizing, planning, designing, implementing and maintaining software applications and websites that yield considerable results for any company. We have many valuable years of experience in website designing and software development using the latest web technologies.</p>
        </div>

        <div class="row">

            <div class="col-lg-6">
                <div class="box wow fadeInLeft">
                    <div class="icon"><i class="fa fa-bar-chart"></i></div>
                    <h4 class="title"><a href="">Digital Transformation</a></h4>
                    <p class="description">We transform the way small, medium and large enterprises conduct business with their customers, vendors, and employees in this digital age. </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInRight">
                    <div class="icon"><i class="fa fa-picture-o"></i></div>
                    <h4 class="title"><a href="">Front-end/UI Technologies</a></h4>
                    <p class="description">Front-end/UI services cover the spectrum ranging from strategy, to development to operations. We help our clients create heightened experiences for visitors with designs that enlighten, inspire and reverberate..</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                    <h4 class="title"><a href="">Core Technologies</a></h4>
                    <p class="description">Core technologies are responsible for managing consolidated IT resources and ensuring a secure and stable environment and we at INNOVISION continue to deliver powerful enterprise-level applications .</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="box wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon"><i class="fa fa-map"></i></div>
                    <h4 class="title"><a href="">Mobility Technologies </a></h4>
                    <p class="description">Mobile technologies are fast becoming a transformative force, changing the rules of engagement for enterprises that wish to stay connected with stakeholders. </p>
                </div>
            </div>

            <a class="btn btn-primary" href="<?= site_url("services") ?>">Call To Action</a>
            
        </div>

    </div>
</section>-->
<!-- #services -->

<!--    <div class="container text-center text-dark">
        <h6 class="text-dark">Inovovision offers a service spectrum ranging from conceptualizing, planning, designing, implementing and maintaining software applications and websites that yield considerable results for any company. We have many valuable years of experience in website designing and software development using the latest web technologies.</h6><hr><br><br>

        <div class="row contact-info">

            <div class="col-md-4">
                <div class="contact-address">
                    <h3 class="text-info">Web Applications</h3>
                    <address>We design and develop custom web applications across a broad range of technology platforms of operational excellence.</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-phone">
                    <h3 class="text-info">Custom Enterprise Solutions</h3>
                    <address>We provide cutting-edge custom software development services to help make business operations more efficient, collaborative, and manageable.</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-phone">
                    <h3 class="text-info"> Content Management System</h3>
                    <address>Providing a single place to manage all of your content - publishing out to your audience wherever they are.</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-address">
                    <h3 class="text-info">Digital Marketing</h3>
                    <address>Staying ahead of the competition is getting harder. We develop Digital Marketing with intelligence to help you reach globally.</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-phone">
                    <h3 class="text-info"> Mobile App Development</h3>
                    <address>Get high-performance, profit-attracting and custom mobile apps. Take your app ideas to a new level.</address>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-phone">
                    <h3 class="text-info"> Website Design and Hosting</h3>
                    <address>We build websites that you will be proud of! We offer the latest in web technology!!</address>
                </div>
            </div>
        </div><br><br><hr>




    </div>-->


<!--==========================
      Clients Section
    ============================-->
<!--            <section id="clients" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
            <h2>Clients</h2>
            <p>We understand that technology has to keep and be in complete consonance with the competitive strategies of our clients and businesses we service. In tune with this principle, we have worked closely with our clients in understanding their business processes and the challenges they face in the data driven information age. Deriving business intelligence from business data is as enormous challenge which our clients face. By developing custom made solution for each Industry we have helped our clients reap the fullest rewards of next generation software technologies. Our team of business strategy consultant generates new data structures that match the demands of business plans with a set of the latest information tools. Our team has worked closely with technology management teams in leading consulting companies over the world. Our teams of core software specialist have gained invaluable experience in the design of new models of data driven business strategies in major telecom, finance, Manufacturing and Banking companies.</p>
        </div>

        <div class="owl-carousel clients-carousel">
            <img src="<?= base_url("public/front/img/abc.png") ?>img/clients/top-udd.gif" alt="">
            <img src="<?= base_url("public/front/img/abc.png") ?>img/clients/logo.png" alt="">
             <img src="img/clients/client-3.png" alt="">   
        </div>

    </div>
</section><br><br> #clients -->

