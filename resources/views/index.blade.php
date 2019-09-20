<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="nazmul - Responsive vCard Template" />
    <meta name="keywords" content="vcard, resposnive, resume, jquery, css3, bootstrap, portfolio" />
    <meta name="author" content="Nazmul Huda" />
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/transition-animations.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}" type="text/css">
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-92992662-1', 'auto');
      ga('send', 'pageview');

    </script>

    <!-- This styles needs for demo -->
    <link rel="stylesheet" href="{{asset('preview/lmpixels-demo-panel.css')}}" type="text/css">
    <!-- /This styles needs for demo -->

    <script src="{{asset('js/jquery-2.1.3.min.js')}}"></script>
    <script src="{{asset('js/modernizr.custom.js')}}"></script>
  </head>

  <body>
    
    <div id="page" class="page">
      <!-- Header -->
      <header id="site_header" class="header">
        <div class="my-photo">
          <img src="images/my_photo.jpg" alt="image">
          <div class="mask"></div>
        </div>

        <div class="site-title-block">
          <h1 class="site-title">Nazmul Huda</h1>
          <p class="site-description">Web Developer</p>
        </div>

        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </header>
      <!-- /Header -->

      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
          <!-- Navigation & Social buttons -->
          <div class="site-nav mobile-menu-hide">
            <!-- Main menu -->
            <ul id="nav" class="site-main-menu">
              <!-- About Me Subpage link -->
              <li>
                <a class="pt-trigger" href="#about_me" data-animation="58" data-goto="1">About me</a><!-- href value = data-id without # of .pt-page -->
              </li>
              <!-- /About Me Subpage link -->
              <li>
                <a class="pt-trigger" href="#resume" data-animation="59" data-goto="2">Resume</a>
              </li>
              <li>
                <a class="pt-trigger" href="#portfolio" data-animation="60" data-goto="3">Portfolio</a>
              </li>
              <li>
                <a class="pt-trigger" href="#blog" data-animation="61" data-goto="4">Blog</a>
              </li>
              <li>
                <a class="pt-trigger" href="#contact" data-animation="58" data-goto="5">Contact</a>
              </li>
            </ul>
            <!-- /Main menu -->

            <!-- Social buttons -->
            <ul class="social-links">
              <li><a class="tip social-button" href="https://www.linkedin.com/in/nazmul-huda-aa0824172/" title="Linkedin"><i class="fa fa-linkedin"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
              <li><a class="tip social-button" href="https://twitter.com/Nazmulran" title="Twitter"><i class="fa fa-twitter"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
              <li><a class="tip social-button" href="https://www.facebook.com/nazmul.nazmulhuda.1" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a class="tip social-button" href="https://www.instagram.com/nazmulon/" title="Instagram"><i class="fa fa-instagram"></i></a></li>
              <li><a class="tip social-button" href="https://www.pinterest.com/nazmulranbagha/" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
            </ul>
            <!-- /Social buttons -->
          </div>
          <!-- Navigation & Social buttons -->

          <!-- Subpages -->
          <div class="subpages">
            <!-- About Me Subpage -->
            <section class="pt-page pt-page-1" data-id="about_me">
              <div class="section-title-block">
                <h2 class="section-title">About Me</h2>
                <h5 class="section-description">Creative Developer</h5>
              </div>

              <div class="row">
                <div class="col-sm-12 col-md-12 mobile-visible subpage-block">
                  <div class="my-photo-small">
                    <img src="images/photo_small.jpg" alt="image">
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="general-info">
                    <h3>I am a full stack web developer</h3>
                    <p>having 1+ years of website development, design, and database experience. I have done projects for various clients under various domains like cloud services, car dealers, online academy, job boards, real estate, eCommerce, etc.</p>
                    <p></p>
                  </div>
                </div>

                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Testimonials</h3>
                  </div>
                  <div class="testimonials owl-carousel">

                    <!-- Testimonial 1 -->
                    <div class="testimonial-item">
                      <!-- Testimonial Content -->
                      <div class="testimonial-content">
                        <div class="testimonial-text">
                          <p>"Nazmul Huda was the most practical of the types in round 39. This young man is thoughtful and sensitive, but also ambitious with some leadership qualities. He is focused and goal oriented. But he is individalists and like to follow his own rules, this can seem uncooperative but he is not. He is more respectful of rules and regulation. I wish he will prosper in his life."</p>
                        </div>
                      </div>            
                      <!-- /Testimonial Content -->  
                      <!-- Testimonial Author -->
                      <div class="testimonial-credits">
                        <!-- Picture -->
                        <div class="testimonial-picture">
                          <img src="images/testimonials/testimonial_photo_1.png" alt="">
                        </div>              
                        <!-- /Picture -->
                        <!-- Testimonial author information -->
                        <div class="testimonial-author-info">
                          <p class="testimonial-author">Md. Mosahidul Islam</p>
                          <p class="testimonial-firm">IDB-BISEW.</p>
                        </div>
                      </div>
                      <!-- /Testimonial author information -->               
                    </div>
                    <!-- End of Testimonial 1 -->

                    <!-- Testimonial 2 -->
                    <div class="testimonial-item">
                      <!-- Testimonial Content -->
                      <div class="testimonial-content">
                        <div class="testimonial-text">
                          <p>"
Nazmul Huda is known for his creativity in round 39. He makes his decisions very quickly. When he focus on something, he puts his all into it, And he is unlikely to let go even if the goal is unachievable. He has a very strong drive or desire to be the best at anything that he has set his minds to do. In spit of that, He is poor at multi-tasking and he is likely to neglect other important tasks and put all his focus on whatever he has set his mind on at the moment."</p>
                        </div>
                      </div>            
                      <!-- /Testimonial Content -->  
                      <!-- Testimonial Author -->
                      <div class="testimonial-credits">
                        <!-- Picture -->
                        <div class="testimonial-picture">
                          <img src="images/testimonials/testimonila_photo_2.png" alt="">
                        </div>              
                        <!-- /Picture -->
                        <!-- Testimonial author information -->
                        <div class="testimonial-author-info">
                          <p class="testimonial-author">Syed Ziaul Habib</p>
                          <p class="testimonial-firm">Datapark $ IBCS PRIMEX</p>
                        </div>
                      </div>
                      <!-- /Testimonial author information -->               
                    </div>
                    <!-- End of Testimonial 2 -->
                  </div>
                </div>
              </div>

              <!-- Services block -->
              <div class="block-title">
                <h3>Services</h3>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="images/service/web_design.png" alt="Responsive Design">
                      <h4>Web Design</h4>
                      <p>A survey told that web Design play important role to boost business Now a days. Using right parameter to Design website increase traffic.I can help you!</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="images/service/copywrite.png" alt="Copywriter">
                      <h4>Web Development</h4>
                      <p>Since Users Will Be Coming To The Site To Learn About And Purchase Products, You Should Make This Process Easy And Intuitive. But Alongside The Considerations Of Usability, There Are A Few Other Aspects Of An Ecommerce Site That Can Done By Development. I Can Help With That. </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="images/service/ecommerce.png" alt="E-Commerce">
                      <h4>E-Commerce</h4>
                      <p>Ecommerce refers to commercial transactions conducted online. This means that whenever you buy and sell something using the Internet, you’re involved in ecommerce. If you think of your brand as a set of associations and perceptions that people have about your company, products, etc., than branding is your attempt to harness, generate, influence and control these associations to help your business perform better</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="service-block"> 
                    <div class="service-info">
                      <img src="images/service/management.png" alt="Management">
                      <h4>Management</h4>
                      <p>Managing a group typically includes getting clear on the purpose and goals of the group, ensuring that it has clear roles in leadership and sufficient resources to work toward its goals, establishing means for making group decisions and solving group problems as well as communicating among members, and that members of the group can work well together.</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End of Services block -->

              <!-- Clients block -->
              <div class="block-title">
                <h3>Clients</h3>
              </div>

              <div class="row">
                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="https://www.idb-bisew.org/" target="_blank"><img src="images/clients/client_1.png" alt="image"></a>
                  </div>
                </div>

                <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="http://www.dataparkbd.com/" target="_blank"><img src="images/clients/client_2.png" alt="image"></a>
                  </div>
                </div>

                <!-- <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"><img src="images/clients/client_3.png" alt="image"></a>
                  </div>
                </div> -->

                <!-- <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"><img src="images/clients/client_4.png" alt="image"></a>
                  </div>
                </div> -->

                <!-- <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"><img src="images/clients/client_5.png" alt="image"></a>
                  </div>
                </div> -->

                <!-- <div class="col-sm-4 col-md-2 subpage-block">
                  <div class="client_block">
                    <a href="#" target="_blank"><img src="images/clients/client_6.png" alt="image"></a>
                  </div>
                </div>
              </div> -->
              <!-- End of Clients block -->

              <!-- Fun facts block -->
              {{-- <div class="block-title">
                <h3>Fun Facts</h3>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="fun-fact-block gray-bg"> 
                    <i class="pe-7s-icon pe-7s-smile"></i>
                    <h4>Happy Clients</h4>
                    <span class="fun-value">1,024</span>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="fun-fact-block"> 
                    <i class="pe-7s-icon pe-7s-alarm"></i>
                    <h4>Working Hours</h4>
                    <span class="fun-value">6,256</span>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="fun-fact-block gray-bg"> 
                    <i class="pe-7s-icon pe-7s-medal"></i>
                    <h4>Awards Won</h4>
                    <span class="fun-value">21</span>
                  </div>
                </div>

                <div class="col-sm-6 col-md-3 subpage-block">
                  <div class="fun-fact-block"> 
                    <i class="pe-7s-icon pe-7s-coffee"></i>
                    <h4>Coffee Consumed</h4>
                    <span class="fun-value">20,000</span>
                  </div>
                </div>
              </div> --}}
              <!-- End of Fun fucts block -->
            </section>
            <!-- End of About Me Subpage -->

            <!-- Resume Subpage -->
            <section class="pt-page pt-page-2" data-id="resume">
              <div class="section-title-block">
                <h2 class="section-title">Resume</h2>
                <h5 class="section-description">1 Years of Experience</h5>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Education</h3>
                  </div>
                  <div class="timeline">
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2015</h5>
                      <h4 class="event-name">Master of Social Science (MSS)</h4>
                      <span class="event-description">Concentration: Social Work</span>
                      <p>Govt-Azizul Haque College, Bogura.</p>
                      <p>CGPA: 2.91 out of 4.00</p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2014</h5>
                      <h4 class="event-name">Bachelor of Social Science (BSS)</h4>
                      <span class="event-description">Concentration: Social Work</span>
                      <p>Govt-Azizul Haque College, Bogura.</p>
                      <p>CGPA: 2.98 out of 4.00</p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2010</h5>
                      <h4 class="event-name">Higher Secondary Certificate (HSC)</h4>
                      <span class="event-description">Humanities</span>
                      <p>Gol-E-Afoze Govt College, Singra, Natore.</p>
                      <p>GPA: 3.70 out of 5.00</p>
                    </div>
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">2008</h5>
                      <h4 class="event-name">Secondary School Certificate (SSC)</h4>
                      <span class="event-description">Humanities</span>
                      <p>Ranbagha High School, Nandigram, Bogura.</p>
                      <p>GPA: 3.94 out of 5.00</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Experience</h3>
                  </div>
                  <div class="timeline">
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">OCT 2018 - OCT 2019</h5>
                      <h4 class="event-name">An One Year Diploma Sponsored By
IDB-BISEW IT Scholarship Project

</h4>
                      <span class="event-description">Web Application Development with PHP & Framework (WDPF)</span>
                      <p>Computer Fundamentals,Web Publishing, HTML, CSS3, Bootstrap & Photoshop, Database Driven Web Application using PHP, MySQL, Application development using Magento, Angular Js, jQuery, WordPress & Woo-Commerce, CodeIgniter, Laravel, React & XML.</p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Dec 2012 - Dec 2013</h5>
                      <h4 class="event-name">National Youth Training Center (NIT)-Diploma</h4>
                      <span class="event-description">Diploma in Computer Hardware & Software Engineering</span>
                      <p>Windows, Dos, Troubleshooting, Basic Electronics, Software Installation, Hardware Repairing & Replacing, Networking, Email & Web-Browsing.</p>
                    </div>
                    <!-- Single event -->
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Jan 2017 - Jun 2017</h5>
                      <h4 class="event-name">Advanced Certificate Course on Computer Training (NACTAR)</h4>
                      <span class="event-description">Web Agency</span>
                      <p>Microsoft Word, Microsoft Excel, Microsoft Access, Microsoft PowerPoint, C & Visual Basic Programming, Web Browsing & Communication.</p>
                    </div>
                    <div class="timeline-event te-primary">
                      <h5 class="event-date">Jan 2018 - Jun 2018</h5>
                      <h4 class="event-name">IT Maintains & Support System</h4>
                      <span class="event-description">Skills for Employment Investment Program (SEIP)</span>
                      <p>Networking Fundamentals, Hardware & Networking, Cabling, Configuration Networking, Troubleshooting, Router Configuration and Maintains.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4 subpage-block">
                  <div class="block-title">
                    <h3>Design Skills</h3>
                  </div>
                  <div class="skills-info">
                    <h4>Web Design</h4>                               
                    <div class="skill-container">
                      <div class="skill-percentage skill-1"></div>
                    </div>

                    <h4>Graphic Design</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-2"></div>
                    </div>

                    <h4>Print Design</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-3"></div>
                    </div> 
                  </div>

                  <div class="block-title">
                    <h3>Coding Skills</h3>
                  </div>
                  <div class="skills-info">
                    <h4>HML5</h4>                               
                    <div class="skill-container">
                      <div class="skill-percentage skill-4"></div>
                    </div>

                    <h4>CSS3</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-5"></div>
                    </div>

                    <h4>Bootstrap</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-5"></div>
                    </div>

                    <h4>jQuery</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-6"></div>
                    </div>

                    <h4>Angular</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-7"></div>
                    </div>

                    <h4>Wordpress</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-7"></div>
                    </div>

                    <h4>React</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-7"></div>
                    </div>

                    <h4>PHP</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-8"></div>
                    </div>
                    <h4>CodeIgniter</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-7"></div>
                    </div>
                    <h4>Laravel</h4>
                    <div class="skill-container">
                      <div class="skill-percentage skill-8"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 col-md-12">
                  <div class="download-cv-block">
                    <a class="button" target="_blank" href="#">Download CV</a>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Resume Subpage -->


            <!-- Portfolio Subpage -->
            <section class="pt-page pt-page-3" data-id="portfolio">
              <div class="section-title-block">
                <h2 class="section-title">Portfolio</h2>
                <h5 class="section-description">My Best Works</h5>
              </div>

              <!-- Portfolio Content -->
              <div class="portfolio-content">
                            
                <!-- Portfolio filter -->
                <ul id="portfolio_filters" class="portfolio-filters">
                  <li class="active">
                    <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
                  </li>
                  <li>
                    <a class="filter btn btn-sm btn-link" data-group="media">Media</a>
                  </li>
                  <li>
                    <a class="filter btn btn-sm btn-link" data-group="illustration">Illustration</a>
                  </li>
                  {{-- <li>
                    <a class="filter btn btn-sm btn-link" data-group="video">Video</a>
                  </li> --}}
                </ul>
                <!-- End of Portfolio filter -->

                <!-- Portfolio Grid -->
                <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

                  <!-- Portfolio Item 1 -->
                  <figure class="item" data-groups='["all", "media"]'>
                    <a href="http://nazmul.infantinventory.com/Bootstrap/" target="_blank">
                      <img src="images/portfolio/1.jpg" alt="">
                      <div>
                        <h5 class="name">Electro</h5>
                        <small>HTML & CSS AND BOOTSTRAP</small>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 1 -->

                  <!-- Portfolio Item 2 -->
                  <figure class="item" data-groups='["all", "video"]'>
                    <a href="http://nazmul.infantinventory.com/srms/" title="Praesent Dolor Ex" target="_blank">
                      <img src="images/portfolio/2.jpg" alt="">
                      <div>
                        <h5 class="name">Student Result Management System</h5>
                        <small>PHP & MYSQL</small>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 2 -->

                  <!-- Portfolio Item 3 -->
                  <figure class="item" data-groups='["all","illustration"]'>
                    <a href="http://nazmul.infantinventory.com/cms/"  title="Duis Eu Eros Viverra" target="_blank">
                      <img src="images/portfolio/3.jpg" alt="">
                      <div>
                        <h5 class="name">CMS</h5>
                        <small>PHP & MYSQL</small>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 3 -->

                  <!-- Portfolio Item 4 -->
                  <figure class="item" data-groups='["all", "media"]'>
                    <a  href="http://nazmul.infantinventory.com/wp/" target="_blank">
                      <img src="images/portfolio/4.jpg" alt="">
                      <div>
                        <h5 class="name">Restaurant</h5>
                        <small>WORDPRESS</small>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 4 -->

                  <!-- Portfolio Item 5 -->
                  <figure class="item" data-groups='["all", "illustration"]'>
                    <a href="http://nazmul.infantinventory.com/angular/"  title="Aliquam Condimentum Magna Rhoncus" target="_blank">
                      <img src="images/portfolio/5.jpg" alt="">
                      <div>
                        <h5 class="name">Users Mangement System</h5>
                        <small>ANGULAR JS</small>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 5 -->

                  <!-- Portfolio Item 6 -->
                  <figure class="item" data-groups='["all", "media"]'>
                    <a  href="http://nazmul.infantinventory.com/collegems/" target="_blank">
                      <img src="images/portfolio/6.jpg" alt="">
                      <div>
                        <h5 class="name">COLLEGE MANAGMENT SYSTEM</h5>
                        <small>CODEIGNITER</small>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 6 -->

                  <!-- Portfolio Item 7 -->
                  <figure class="item" data-groups='["all", "video"]'>
                    <a href="http://nazmul.infantinventory.com/bella_shop/" title="Nulla Facilisi" target="_blank">
                      <img src="images/portfolio/7.jpg" alt="">
                      <div>
                        <h5 class="name">ECOMMERCE</h5>
                        <small>LARAVEL</small>
                      </div>
                    </a>
                  </figure>
                  <!-- /Portfolio Item 7 -->

                  <!-- Portfolio Item 8 -->
                  <!-- <figure class="item" data-groups='["all",  "media"]'>
                    <a class="ajax-page-load" href="portfolio-1.html">
                      <img src="images/portfolio/8.jpg" alt="">
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Media</small>
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure> -->
                  <!-- /Portfolio Item 8 -->

                  <!-- Portfolio Item 9 -->
                  <!-- <figure class="item" data-groups='["all","illustration"]'>
                    <a href="images/portfolio/9.jpg" class="lightbox" title="Mauris Neque Dolor">
                      <img src="images/portfolio/9.jpg" alt="">
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Illustration</small>
                        <i class="fa fa-image"></i>
                      </div>
                    </a>
                  </figure> -->
                  <!-- /Portfolio Item 9 -->

                  <!-- Portfolio Item 10 -->
                  <!-- <figure class="item" data-groups='["all", "video"]'>
                    <a href="https://player.vimeo.com/video/97102654?autoplay=1" title="Donec Lectus Arcu" class="lightbox mfp-iframe">
                      <img src="images/portfolio/10.jpg" alt="">
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Video</small>
                        <i class="fa fa-video-camera"></i>
                      </div>
                    </a>
                  </figure> -->
                  <!-- /Portfolio Item 10 -->

                  <!-- Portfolio Item 11 -->
                 <!--  <figure class="item" data-groups='["all","illustration"]'>
                    <a href="images/portfolio/11.jpg" class="lightbox" title="Duis Eu Eros Viverra">
                      <img src="images/portfolio/11.jpg" alt="">
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Illustration</small>
                        <i class="fa fa-image"></i>
                      </div>
                    </a>
                  </figure> -->
                  <!-- /Portfolio Item 11 -->

                  <!-- Portfolio Item 12 -->
                  <!-- <figure class="item" data-groups='["all","media"]'>
                    <a class="ajax-page-load" href="portfolio-1.html">
                      <img src="images/portfolio/12.jpg" alt="">
                      <div>
                        <h5 class="name">Project Name</h5>
                        <small>Media</small>
                        <i class="fa fa-file-text-o"></i>
                      </div>
                    </a>
                  </figure> -->
                  <!-- /Portfolio Item 12 -->
                </div>
                <!-- /Portfolio Grid -->

              </div>
              <!-- /Portfolio Content -->

            </section>
            <!-- /Portfolio Subpage -->

            <!-- Blog Subpage -->
            <section class="pt-page pt-page-4" data-id="blog">
              <div class="section-title-block">
                <h2 class="section-title">Blog</h2>
                <h5 class="section-description">My Diary</h5>
              </div>
              <div class="blog-masonry">
                <!-- Blog Post 1 -->
                <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="http://nazmul.infantinventory.com/cms/" target="_blank">
                        <img class="post-image img-responsive" src="images/blog/blog_post_1.jpg" alt="blog-post-1" />
                        <div class="mask"></div>
                        <div class="post-date"><span class="day">15</span><span class="month">Sep</span><span class="year">2019</span></div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="http://nazmul.infantinventory.com/cms/" target="_blank">BLOG</a></li>
                      </ul>
                      <a href="http://nazmul.infantinventory.com/cms/" target="_blank"><h4 class="blog-item-title">PHP & MYSQL</h4></a>
                    </div>
                  </div>
                </div>
                <!-- End of Blog Post 1 -->

                <!-- Blog Post 2 -->
                <!-- <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="blog-post-1.html">
                        <img class="post-image img-responsive" src="images/blog/blog_post_2.jpg" alt="blog-post-2" />
                        <div class="mask"></div>
                        <div class="post-date"><span class="day">3</span><span class="month">Nov</span><span class="year">2016</span></div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="#">jQuery</a></li>
                      </ul>
                      <a href="blog-post-1.html"><h4 class="blog-item-title">One Framework, Every Device</h4></a>
                    </div>
                  </div>
                </div> -->
                <!-- End of Blog Post 2 -->

                <!-- Blog Post 3 -->
                <!-- <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="blog-post-1.html">
                        <img class="post-image img-responsive" src="images/blog/blog_post_3.jpg" alt="blog-post-3" />
                        <div class="mask"></div>
                        <div class="post-date"><span class="day">12</span><span class="month">Oct</span><span class="year">2016</span></div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="#">Sport</a></li>
                      </ul>
                      <a href="blog-post-1.html"><h4 class="blog-item-title">Designed for Everyone, Everywhere</h4></a>
                    </div>
                  </div>
                </div> -->
                <!-- End of Blog Post 3 -->

                <!-- Blog Post 4 -->
                <!-- <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="blog-post-1.html">
                        <img class="post-image img-responsive" src="images/blog/blog_post_4.jpg" alt="blog-post-4" />
                        <div class="mask"></div>
                        <div class="post-date"><span class="day">18</span><span class="month">Aug</span><span class="year">2016</span></div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="#">CSS</a></li>
                      </ul>
                      <a href="blog-post-1.html"><h4 class="blog-item-title">An Introduction To PostCSS</h4></a>
                    </div>
                  </div>
                </div> -->
                <!-- End of Blog Post 4 -->

                <!-- Blog Post 5 -->
                <!-- <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="blog-post-1.html">
                        <img class="post-image img-responsive" src="images/blog/blog_post_5.jpg" alt="blog-post-5" />
                        <div class="mask"></div>
                        <div class="post-date"><span class="day">2</span><span class="month">Jul</span><span class="year">2016</span></div>
                      </a>
                    </div>
                    <div class="post-info">                        
                      <ul class="category">
                        <li><a href="#">CSS3</a></li>
                      </ul>
                      <a href="blog-post-1.html"><h4 class="blog-item-title">Original and Innovative Web Layouts</h4></a>
                    </div>
                  </div>
                </div> -->
                <!-- End of Blog Post 5 -->

                <!-- Blog Post 6 -->
                <!-- <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="blog-post-1.html">
                        <img class="post-image img-responsive" src="images/blog/blog_post_6.jpg" alt="blog-post-6" />
                        <div class="mask"></div>
                        <div class="post-date"><span class="day">8</span><span class="month">May</span><span class="year">2016</span></div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="#">HTML5</a></li>
                      </ul>
                      <a href="blog-post-1.html"><h4 class="blog-item-title">Creative and Innovative Navigation Designs</h4></a>
                    </div>
                  </div>
                </div> -->
                <!-- End of Blog Post 6 -->

                <!-- Blog Post 7 -->
                <!-- <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="blog-post-1.html">
                        <img class="post-image img-responsive" src="images/blog/blog_post_7.jpg" alt="blog-post-7" />
                        <div class="mask"></div>
                        <div class="post-date"><span class="day">7</span><span class="month">Apr</span><span class="year">2016</span></div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="#">Design</a></li>
                      </ul>
                      <a href="blog-post-1.html"><h4 class="blog-item-title">Navigation for Mega-Sites</h4></a>
                    </div>
                  </div>
                </div> -->
                <!-- End of Blog Post 7 -->

                <!-- Blog Post 8 -->
                <!-- <div class="item">
                  <div class="blog-card">
                    <div class="media-block">
                      <a href="blog-post-1.html">
                        <img class="post-image img-responsive" src="images/blog/blog_post_8.jpg" alt="blog-post-8" />
                        <div class="mask"></div>
                        <div class="post-date"><span class="day">21</span><span class="month">Mar</span><span class="year">2016</span></div>
                      </a>
                    </div>
                    <div class="post-info">
                      <ul class="category">
                        <li><a href="#">CSS3</a></li>
                      </ul>
                      <a href="blog-post-1.html"><h4 class="blog-item-title">Front-End Challenge Accepted: CSS 3D Cube</h4></a>
                    </div>
                  </div>
                </div> -->
                <!-- End of Blog Post 8 -->
              </div>
            </section>
            <!-- End Blog Subpage -->

            <!-- Contact Subpage -->
            <section class="pt-page pt-page-5" data-id="contact">
              <div class="section-title-block">
                <h2 class="section-title">Contact</h2>
                <h5 class="section-description">Get in Touch</h5>
              </div>

              <div class="row">
                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Get in Touch</h3>
                  </div>
                  <p>Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus.</p>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-map-marker"></i>
                    </div>
                    <div class="ci-text">
                      <h5>Mirpur-1, Road-11, Block-C, Mirpur, Dhaka-1216</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-mail"></i>
                    </div>
                    <div class="ci-text">
                      <h5><a href="mailto:nazmulranbagha@gmail.com" class="__cf_email__" data-cfemail="">nazmulranbagha@gmail.com</a></h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-call"></i>
                    </div>
                    <div class="ci-text">
                      <h5>+01742 579745</h5>
                    </div>
                  </div>
                  <div class="contact-info-block">
                    <div class="ci-icon">
                      <i class="pe-7s-icon pe-7s-check"></i>
                    </div>
                    <div class="ci-text">
                      <h5>Freelance Available</h5>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-6 subpage-block">
                  <div class="block-title">
                    <h3>Contact Form</h3>
                  </div>
                  <form method="post" action="{{url('sendEmail')}}">
                  @csrf
                    <div class="messages"></div>

                    <div class="controls">
                      <div class="form-group">
                          <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                          <div class="form-control-border"></div>
                          <i class="form-control-icon fa fa-user"></i>
                          <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group">
                          <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                          <div class="form-control-border"></div>
                          <i class="form-control-icon fa fa-envelope"></i>
                          <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group">
                          <textarea id="form_message" name="message" class="form-control" placeholder="Message for me" rows="4" required="required" data-error="Please, leave me a message."></textarea>
                          <div class="form-control-border"></div>
                          <i class="form-control-icon fa fa-comment"></i>
                          <div class="help-block with-errors"></div>
                      </div>

                      <input type="submit" class="button btn-send" value="Send message">
                    </div>
                  </form>
                </div>
              </div>
            </section>
            <!-- End Contact Subpage -->

          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>

    <!-- Demo Color changer -->
    {{-- <a id="lm_demo_panel_switcher" class="lm-demo-panel-switcher right"><i class="fa fa-gear"></i></a>
    <div id="lm_demo_panel" class="lm-demo-panel right active">
      <div class="demo-panel-title">Main Color</div>
      <a href="index.html"><div class="preview" id="color1"><span class="current"></span>&nbsp;</div></a>
      <a href="../sunshine-v1-html-template-red/index.html"><div class="preview" id="color2">&nbsp;</div></a>
      <a href="../sunshine-v1-html-template-green-cyan/index.html"><div class="preview" id="color3">&nbsp;</div></a>
      <a href="../sunshine-v1-html-template-violet/index.html"><div class="preview" id="color4">&nbsp;</div></a>
      <a href="../sunshine-v1-html-template-orange/index.html"><div class="preview" id="color5">&nbsp;</div></a>
      <a href="../sunshine-v1-html-template-blue/index.html"><div class="preview" id="color6">&nbsp;</div></a>
      <div class="row"></div>
    </div> --}}
    <!-- /Demo Color changer -->

    <script data-cfasync="false" src="{{asset('static/email-decode.min.js')}}"></script><script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/page-transition.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/validator.js')}}"></script>
    <script src="{{asset('js/jquery.shuffle.min.js')}}"></script>
    <script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.hoverdir.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <!-- Demo Color changer Script -->
    <script src="{{asset('preview/lmpixels-demo-panel.js')}}"></script>
    <!-- /Demo Color changer Script -->
  </body>

</html>
