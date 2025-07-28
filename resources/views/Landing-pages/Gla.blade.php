<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>GLA University - Landing Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: 'Segoe UI', sans-serif; line-height: 1.6; color: #333; scroll-behavior: smooth; }
    header, section { padding: 10px 20px; }
    .container { max-width: 1200px; margin: auto; }

    header {
      background-color:rgb(202, 222, 241);
      color: white;
    }
    .carousel-item img {
    max-height: 450px;
    width: 90%;
    object-fit: cover;
    margin: auto;
    border-radius: 1px;
  }

  nav.container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  max-width: 1000px;
  margin: auto;
  padding: 10px 0;
}


    nav h1 {
      font-size: 1.8rem;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      font-weight: 500;
    }

    nav ul li a:hover {
      color: #ffcc00;
    }

    h1, h2 { color: #004080; }
    h1 { font-size: 2.5rem; }
    h2 { font-size: 2rem; margin-bottom: 20px; position: relative; padding-bottom: 10px; }
    h2::after {
      content: '';
      width: 60px;
      height: 4px;
      background: #004080;
      position: absolute;
      left: 0;
      bottom: 0;
      border-radius: 2px;
    }

    p { margin-bottom: 10px; }

    .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    transform: scale(0.95); /* reduced size */
  }

  .card:hover {
    transform: scale(0.97) translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15);
  }

  img.card-img-top {
    border-radius: 6px 6px 0 0;
    height: 160px; /* slightly reduced image height */
    object-fit: cover;
  }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: left;
    }

    th { background-color: #e0f0ff; }

    .faq dt { font-weight: bold; margin-top: 10px; }
    .faq dd { margin-left: 20px; }

    footer {
      background: #002244;
      color: #fff;
      padding: 30px 20px;
      text-align: center;
    }

    @media(max-width: 768px) {
      nav ul {
        flex-direction: column;
        gap: 10px;
        margin-top: 10px;
      }

      .card { flex: 1 1 100%; }
    }
  </style>
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-light myfill" style="filter: contrast(100%) brightness(100%) grayscale(0%);">
          <div class="logo-sec"> <a href="/"> <img class="img-fluid main-logo" src="/img/gla-logo.webp" alt="Gla Logo" width="145" height="84"></a> <img class="img-fluid main-logo logo2 pb-2" src="/img/grad-1.webp" alt="NAAC Logo" width="145" height="58">
            <!-- <img class="img-fluid main-logo logo2 pb-2" src="/images/12-b.png" alt="12-b Logo">-->
          </div>
          <div class="head-border d-md-none d-lg-block">
            <div class="top_menubar">
              
<ul>
<!--<li class="tyg-glowing1"><a class="blink" href="/convocation-live-feed">13th Convocation Live</a></li>-->
  <li class="tyg-glowing"><a class="blink" href="https://glauniversity.in:8085/Main/Admission" target="_blank">Admission Open</a></li>
  <li class="tyg-glowing1"><a class="blink" href="/cpage.aspx?mpgid=333&amp;pgidtrail=333">Rolling Advertisement</a></li>
<!--    <li class="tyg-glowing"><a class="blink" href="https://www.gla.ac.in/pdf/vol-i-ii-annexures.pdf" target="_blank">Proposal for Off- Campus</a></li>-->
   <li><a href="https://www.gla.ac.in/students" target="_blank">Student</a></li>
    
        
            
            
            <li><a href="examination-cell" id="topmenu1_reptopmenu_ctl00_anchlink">
                Examination</a></li>
        
        
            
            
            <li><a href="iqac" id="topmenu1_reptopmenu_ctl01_anchlink">
                IQAC</a></li>
        
        
            
            
            <li><a href="cpage.aspx?mpgid=4&amp;pgidtrail=224" id="topmenu1_reptopmenu_ctl02_anchlink">
                NRPP</a></li>
        
        
            
            
            <li><a href="current-openings" id="topmenu1_reptopmenu_ctl03_anchlink">
                Careers</a></li>
          
    <li class="bg-ywl"><a href="http://wc.indiaicpc.in/" target="_blank">ICPC</a></li>   
    <li class="top-social">
                  <ul class="d-flex">
                                  
                   <!-- <li><a href="https://www.facebook.com/glauny" target="_blank"><i class="fab fa-facebook"></i></a></li>-->
                   
                    <li><a href="https://www.facebook.com/glauniv" target="_blank"><i class="fab fa-facebook"></i></a></li>
                     <li class="home-logo inner-logo"><a href="https://twitter.com/gla_mathura" target="_blank"></a></li>  
                    <li><a href="https://in.linkedin.com/school/gla-university" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="https://www.instagram.com/glauniv/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCzv9lLHktV5HGuDHKvS_zyg" target="_blank"><i class="fab fa-youtube"></i></a></li>
                  </ul>
              </li>
  <li><a class="ad-button" href="tel:+" target="_blank"><img class="icon" src="/images/phone-icon1.png" alt="icon"><span>Admission Helpline<br>
    <strong></strong></span></a></li>
  </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              
<!-- New mega menu-->

<!-- End New mega menu-->
<div class="cuchd-menu">
    <ul class="navbar-nav mr-auto toggler-list">
        
                
                
                
                <li id="mainmenu1_rptrMenu_ctl00_maindiv" class="toggler dropdown dd-menu"><a href="about-us-mission-vision" id="mainmenu1_rptrMenu_ctl00_anchlink" class="nav-link dropdown-toggle">
                    ABOUT US</a>
                    <div id="mainmenu1_rptrMenu_ctl00_divnewabout" class="dropdown-menu st-about" aria-labelledby="navbarDropdown">
                        <div class="step-two-menu">
                            <div id="mainmenu1_rptrMenu_ctl00_divrowabout" class="row">
                                
                                
                                <div id="mainmenu1_rptrMenu_ctl00_divleftabout" class="col-lg-4">
                                    <ul id="mainmenu1_rptrMenu_ctl00_divaboutus">
                                        
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl00_repaboutusleft_ctl00_headfirst" class="set-gr">
                                                        <a id="mainmenu1_rptrMenu_ctl00_repaboutusleft_ctl00_anchlink1" class="parent_link">
                                                            Who We Are</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                                
                                                                
                                                                
                                                                <li><a href="about-us-mission-vision" id="mainmenu1_rptrMenu_ctl00_repaboutusleft_ctl00_repaboutus1left_ctl00_anchlink2">
                                                                    About GLA University</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="about-us/government-recognition" id="mainmenu1_rptrMenu_ctl00_repaboutusleft_ctl00_repaboutus1left_ctl01_anchlink2">
                                                                    Government Recognition			</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="about-us/academic-and-industry-collaborations" id="mainmenu1_rptrMenu_ctl00_repaboutusleft_ctl00_repaboutus1left_ctl02_anchlink2">
                                                                    Academic and Industry Collaborations			</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="about-us/award-and-achievements" id="mainmenu1_rptrMenu_ctl00_repaboutusleft_ctl00_repaboutus1left_ctl03_anchlink2">
                                                                    Awards and Achievements			</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="https://www.gla.ac.in/Uploads/image/98imguf_GLA-University--Code-of-Conduct-and-Ethics-Policy-Updated.pdf" id="mainmenu1_rptrMenu_ctl00_repaboutusleft_ctl00_repaboutus1left_ctl04_anchlink2" target="_blank">
                                                                    Code of Conduct and Ethics Policy</a></li>
                                                            
                                                        <li id="mainmenu1_rptrMenu_ctl00_repaboutusleft_ctl00_divbest">
                                                            <h3 class="set-gr">
                                                                <a href="#">Best Educational</a></h3>
                                                            <div class="best-edu">
                                                                <ul>
                                                                    <li>
                                                                        <div class="edu-col">
                                                                            <a href="#">
                                                                                <img alt="edu-p1" class="img-fluid" src="/images/best-edu-p1.png">
                                                                                <span>110-Acre Campus </span></a>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="edu-col">
                                                                            <a href="#">
                                                                                <img alt="edu-p2" class="img-fluid" src="/images/best-edu-p2.png">
                                                                                <span>20-Acre Sports Facility </span></a>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="edu-col">
                                                                            <a href="#">
                                                                                <img alt="edu-p3" class="img-fluid" src="/images/best-edu-p3.png">
                                                                                <span>19 Modern Hostels </span></a>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="edu-col">
                                                                            <a href="#">
                                                                                <img alt="edu-p4" class="img-fluid" src="/images/best-edu-p4.png">
                                                                                <span>19 Modern Hostels </span></a>
                                                                        </div>
                                                                    </li>
                                                                </ul> 
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            
                                    </ul>
                                </div>
                                <div id="mainmenu1_rptrMenu_ctl00_divmiddle" class="col-lg-4">
                                    <ul>
                                        
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl00_repaboutusmiddle_ctl00_headfirst" class="set-gr">
                                                        <a id="mainmenu1_rptrMenu_ctl00_repaboutusmiddle_ctl00_anchlink1">
                                                            Leadership Team			</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                                
                                                                
                                                                
                                                                <li><a href="about-us/chancellors-message" id="mainmenu1_rptrMenu_ctl00_repaboutusmiddle_ctl00_repabout1middle_ctl00_anchlink2">
                                                                    Chancellor		</a> </li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="about-us/vice-chancellor" id="mainmenu1_rptrMenu_ctl00_repaboutusmiddle_ctl00_repabout1middle_ctl01_anchlink2">
                                                                    Vice Chancellor</a> </li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="about-us/pro-vc-greater-noida-campus" id="mainmenu1_rptrMenu_ctl00_repaboutusmiddle_ctl00_repabout1middle_ctl02_anchlink2">
                                                                    Pro Vice-Chancellor, Greater Noida Campus</a> </li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="about-us/registrar-message" id="mainmenu1_rptrMenu_ctl00_repaboutusmiddle_ctl00_repabout1middle_ctl03_anchlink2">
                                                                    Registrar		</a> </li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="dean-academic-affairs" id="mainmenu1_rptrMenu_ctl00_repaboutusmiddle_ctl00_repabout1middle_ctl04_anchlink2">
                                                                    Dean Academic Affairs</a> </li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="about-us/dean-research-development" id="mainmenu1_rptrMenu_ctl00_repaboutusmiddle_ctl00_repabout1middle_ctl05_anchlink2">
                                                                    Dean Research &amp; Development</a> </li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="about-us/dean-students-affairs" id="mainmenu1_rptrMenu_ctl00_repaboutusmiddle_ctl00_repabout1middle_ctl06_anchlink2">
                                                                    Dean Student's Welfare</a> </li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="about-us/dean-consultancy" id="mainmenu1_rptrMenu_ctl00_repaboutusmiddle_ctl00_repabout1middle_ctl07_anchlink2">
                                                                    Dean Consultancy</a> </li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="cpage.aspx?mpgid=2&amp;pgid1=20&amp;pgidtrail=312" id="mainmenu1_rptrMenu_ctl00_repaboutusmiddle_ctl00_repabout1middle_ctl08_anchlink2">
                                                                    Dean, International Relations and Academic Collaborations</a> </li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="cpage.aspx?mpgid=2&amp;pgid1=20&amp;pgidtrail=295" id="mainmenu1_rptrMenu_ctl00_repaboutusmiddle_ctl00_repabout1middle_ctl09_anchlink2">
                                                                    Controller of Examinations</a> </li>
                                                            
                                                    </ul>
                                                </li>
                                            
                                    </ul>
                                </div>
                                <div id="mainmenu1_rptrMenu_ctl00_divrighttabout" class="col-lg-4">
                                    <ul>
                                        
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl00_repaboutusright_ctl00_headfirst">
                                                        <a href="about-us/court-members" id="mainmenu1_rptrMenu_ctl00_repaboutusright_ctl00_anchlink1">
                                                            Governing Body</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                    </ul>
                                                </li>
                                            
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl00_repaboutusright_ctl01_headfirst">
                                                        <a href="about-us/executive-council" id="mainmenu1_rptrMenu_ctl00_repaboutusright_ctl01_anchlink1">
                                                            Executive Council			</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                    </ul>
                                                </li>
                                            
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl00_repaboutusright_ctl02_headfirst">
                                                        <a href="about-us/academic-council" id="mainmenu1_rptrMenu_ctl00_repaboutusright_ctl02_anchlink1">
                                                            Academic Council			</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                    </ul>
                                                </li>
                                            
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl00_repaboutusright_ctl03_headfirst">
                                                        <a href="about-us/administration-body" id="mainmenu1_rptrMenu_ctl00_repaboutusright_ctl03_anchlink1">
                                                            Administration		</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                    </ul>
                                                </li>
                                            
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl00_repaboutusright_ctl04_headfirst">
                                                        <a href="cpage.aspx?mpgid=2&amp;pgidtrail=302" id="mainmenu1_rptrMenu_ctl00_repaboutusright_ctl04_anchlink1">
                                                            Corporate Advisory Board</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                    </ul>
                                                </li>
                                            
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl00_repaboutusright_ctl05_headfirst" class="set-gr">
                                                        <a href="about-us/csr-activities" id="mainmenu1_rptrMenu_ctl00_repaboutusright_ctl05_anchlink1">
                                                            CSR Activities			</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                                
                                                                
                                                                
                                                                <li><a href="about-us/prayaas" id="mainmenu1_rptrMenu_ctl00_repaboutusright_ctl05_repaboutus1right_ctl00_anchlink2">
                                                                    PraYaas</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="about-us/national-service" id="mainmenu1_rptrMenu_ctl00_repaboutusright_ctl05_repaboutus1right_ctl01_anchlink2">
                                                                    National Service Scheme Cell</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="about-us/udaan" id="mainmenu1_rptrMenu_ctl00_repaboutusright_ctl05_repaboutus1right_ctl02_anchlink2">
                                                                    Udaan</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="about-us/ujjwal-braj" id="mainmenu1_rptrMenu_ctl00_repaboutusright_ctl05_repaboutus1right_ctl03_anchlink2">
                                                                    Ujjwal Braj</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="about-us/aashayein" id="mainmenu1_rptrMenu_ctl00_repaboutusright_ctl05_repaboutus1right_ctl04_anchlink2">
                                                                    Aashayein</a></li>
                                                            
                                                    </ul>
                                                </li>
                                            
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    
                </li>
            
                
                
                
                <li id="mainmenu1_rptrMenu_ctl01_maindiv" class="toggler dropdown dd-menu"><a href="academics/institute-of-engineering-technology" id="mainmenu1_rptrMenu_ctl01_anchlink" class="nav-link dropdown-toggle">
                    ACADEMICS</a>
                    
                    <div id="mainmenu1_rptrMenu_ctl01_divacademics" class="dropdown-menu  st-academics" aria-labelledby="navbarDropdown">
                        <div class="step-two-menu">
                            <div class="row">
                                
                                <div id="mainmenu1_rptrMenu_ctl01_divacd1" class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <ul>
                                                
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl01_repacademicleft_ctl00_headfirst" class="set-gr">
                                                                <a id="mainmenu1_rptrMenu_ctl01_repacademicleft_ctl00_anchlink1">
                                                                    Institutes</a></h3>
                                                            <ul>
                                                                
                                                                
                                                                        
                                                                        
                                                                        <li><a href="academics/institute-of-engineering-technology" id="mainmenu1_rptrMenu_ctl01_repacademicleft_ctl00_repinstitute_ctl00_anchlink2">
                                                                            Engineering &amp; Technology</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/institute-of-business-management" id="mainmenu1_rptrMenu_ctl01_repacademicleft_ctl00_repinstitute_ctl01_anchlink2">
                                                                            Business Management</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/institute-of-pharmaceutical-research" id="mainmenu1_rptrMenu_ctl01_repacademicleft_ctl00_repinstitute_ctl02_anchlink2">
                                                                            Pharmaceutical Research</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/institute-of-applied-sciences-humanities" id="mainmenu1_rptrMenu_ctl01_repacademicleft_ctl00_repinstitute_ctl03_anchlink2">
                                                                            Applied Sciences &amp; Humanities</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/institute-of-legal-studies-research" id="mainmenu1_rptrMenu_ctl01_repacademicleft_ctl00_repinstitute_ctl04_anchlink2">
                                                                            Legal Studies and Research</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/university-polytechnic" id="mainmenu1_rptrMenu_ctl01_repacademicleft_ctl00_repinstitute_ctl05_anchlink2">
                                                                            University Polytechnic</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/faculty-of-education" id="mainmenu1_rptrMenu_ctl01_repacademicleft_ctl00_repinstitute_ctl06_anchlink2">
                                                                            Faculty of Education</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="cdoe" id="mainmenu1_rptrMenu_ctl01_repacademicleft_ctl00_repinstitute_ctl07_anchlink2">
                                                                            Centre for Distance and Online Education</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="institute-details.aspx?mpgid=4&amp;pgidtrail=35&amp;collegeid=11" id="mainmenu1_rptrMenu_ctl01_repacademicleft_ctl00_repinstitute_ctl08_anchlink2">
                                                                            Centre for Vaccines and Diagnostic Research</a></li>
                                                                    
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl01_repacademicleft_ctl01_headfirst" class="set-gr">
                                                                <a id="mainmenu1_rptrMenu_ctl01_repacademicleft_ctl01_anchlink1">
                                                                    Courses</a></h3>
                                                            <ul>
                                                                
                                                                
                                                                
                                                                        
                                                                        
                                                                        <li><a href="academics/graduate-courses" id="mainmenu1_rptrMenu_ctl01_repacademicleft_ctl01_repcourse_ctl00_anchlink2">
                                                                            Graduate Courses</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/post-graduate-courses" id="mainmenu1_rptrMenu_ctl01_repacademicleft_ctl01_repcourse_ctl01_anchlink2">
                                                                            Post Graduate Courses</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/doctoral-programme" id="mainmenu1_rptrMenu_ctl01_repacademicleft_ctl01_repcourse_ctl02_anchlink2">
                                                                            Doctoral Programme</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/diploma-courses" id="mainmenu1_rptrMenu_ctl01_repacademicleft_ctl01_repcourse_ctl03_anchlink2">
                                                                            Diploma Courses</a></li>
                                                                    
                                                            </ul>
                                                        </li>
                                                    
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul>
                                                
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl00_headfirst" class="set-gr">
                                                                <a id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl00_anchlink1">
                                                                    Departments</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                
                                                                        
                                                                        
                                                                        <li><a href="department-details.aspx?mpgid=132&amp;pgidtrail=132&amp;departmentid=15" id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl00_repdepartment_ctl00_anchlink2">
                                                                            </a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/department-of-csed-industry" id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl00_repdepartment_ctl01_anchlink2">
                                                                            CSED – Industry 4.0 Facility</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="department-details.aspx?mpgid=132&amp;pgidtrail=132&amp;departmentid=20" id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl00_repdepartment_ctl02_anchlink2">
                                                                            Social Science &amp; Humanities </a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/department-of-computer-engineering-application" id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl00_repdepartment_ctl03_anchlink2">
                                                                            Computer Engineering &amp; Applications</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/department-of-electrical-engineering" id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl00_repdepartment_ctl04_anchlink2">
                                                                            Electrical Engineering</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/department-of-electronics-communication-engineering" id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl00_repdepartment_ctl05_anchlink2">
                                                                            Electronics &amp; Communication</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/department-of-mechanical-engineering" id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl00_repdepartment_ctl06_anchlink2">
                                                                            Mechanical Engineering</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/department-of-civil-engineering" id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl00_repdepartment_ctl07_anchlink2">
                                                                            Civil Engineering</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/department-of-english" id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl00_repdepartment_ctl08_anchlink2">
                                                                            English</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/department-of-physics" id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl00_repdepartment_ctl09_anchlink2">
                                                                            Physics</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/department-of-chemistry" id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl00_repdepartment_ctl10_anchlink2">
                                                                            Chemistry</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/department-of-mathematics" id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl00_repdepartment_ctl11_anchlink2">
                                                                            Mathematics</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/department-of-biotechnology" id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl00_repdepartment_ctl12_anchlink2">
                                                                            Biotechnology</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="department-details.aspx?mpgid=132&amp;pgidtrail=132&amp;departmentid=21" id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl00_repdepartment_ctl13_anchlink2">
                                                                            Library &amp; Information Science</a></li>
                                                                    
                                                                        
                                                                        
                                                                        <li><a href="academics/department-of-agriculture-science" id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl00_repdepartment_ctl14_anchlink2">
                                                                            Faculty of Agricultural Sciences</a></li>
                                                                    
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl01_headfirst" class="set-gr">
                                                                <a id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl01_anchlink1">
                                                                    Examinations and Results</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="academics/ordinance" id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl01_repacademic1middle_ctl00_anchlink2">
                                                                            Academic Ordinance	</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="http://glauniversity.in/EduwareHome/Home.aspx#" id="mainmenu1_rptrMenu_ctl01_repacademicmiddle_ctl01_repacademic1middle_ctl01_anchlink2" target="_blank">
                                                                            Results </a></li>
                                                                    
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul>
                                                
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl00_headfirst" class="set-gr">
                                                                <a id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl00_anchlink1">
                                                                    Students</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="academics/anti-ragging-committee-helpline" id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl00_repacademic1right_ctl00_anchlink2">
                                                                            Anti Ragging Committee HELP-LINE		</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="academics/anti-ragging-committee" id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl00_repacademic1right_ctl01_anchlink2">
                                                                            Anti Ragging Committee		</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="academics/hostel-rules" id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl00_repacademic1right_ctl02_anchlink2">
                                                                            Hostel Rules</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="academics/grievance-redressal-mechanism" id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl00_repacademic1right_ctl03_anchlink2">
                                                                            Student Grievance Redressal Committee (SGRC)</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="cpage.aspx?mpgid=4&amp;pgid1=94&amp;pgidtrail=329" id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl00_repacademic1right_ctl04_anchlink2">
                                                                            Grievance Cell</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="academics/proctorial-board" id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl00_repacademic1right_ctl05_anchlink2">
                                                                            Proctorial Board</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="cpage.aspx?mpgid=4&amp;pgid1=94&amp;pgidtrail=317" id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl00_repacademic1right_ctl06_anchlink2">
                                                                            NEP - 2020</a></li>
                                                                    
                                                                
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl01_headfirst" class="set-gr">
                                                                <a href="academics/faculty" id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl01_anchlink1">
                                                                    Faculty</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="academics/faculty/visiting-faculty" id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl01_repacademic1right_ctl00_anchlink2">
                                                                            Visiting faculty</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="academics/faculty/distinguished-faculty" id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl01_repacademic1right_ctl01_anchlink2">
                                                                             Distinguished faculty</a></li>
                                                                    
                                                                
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl02_headfirst">
                                                                <a href="http://library.glauniversity.in" id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl02_anchlink1" target="_blank">
                                                                    Library</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl03_headfirst">
                                                                <a href="academics/academic-calendar" id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl03_anchlink1">
                                                                    Academic Calendar</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl04_headfirst">
                                                                <a href="academics/university-holidays" id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl04_anchlink1">
                                                                    University Holidays</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl05_headfirst">
                                                                <a href="cpage.aspx?mpgid=4&amp;pgidtrail=331" id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl05_anchlink1">
                                                                    Faculty and staff members grievance redressel Committee (FSGRC)</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl06_headfirst">
                                                                <a href="cpage.aspx?mpgid=4&amp;pgidtrail=224" id="mainmenu1_rptrMenu_ctl01_repacademicright_ctl06_anchlink1">
                                                                    NRPP</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="mainmenu1_rptrMenu_ctl01_divmegaacademic" class="col-lg-3 pg-bg d-none d-lg-block st-academics-img">
                                    <div class="st-academics-graphic position-relative h-100">
                                        <div class="st-academics-cont">
                                            <ul>
                                                <li><a href="#">
                                                    <figure><img alt="acad-icon" class="img-fluid" src="/images/acad-p1.png"></figure>
                                                    <h5>
                                                        70+ <span>Multidisciplinary Programs</span></h5>
                                                </a></li>
                                                <li><a href="#">
                                                    <figure><img alt="acad-icon" class="img-fluid" src="/images/acad-p2.png"></figure>
                                                    <h5>
                                                        Flexible <span>Multidisciplinary Programs</span></h5>
                                                </a></li>
                                                <li><a href="#">
                                                    <figure><img alt="acad-icon" class="img-fluid" src="/images/acad-p3.png"></figure>
                                                    <h5>
                                                        E-Content <span>Facility</span></h5>
                                                </a></li>
                                                <li><a href="#">
                                                    <figure><img alt="acad-icon" class="img-fluid" src="/images/acad-p4.png"></figure>
                                                    <h5>
                                                        Experiential <span>Project Based Education</span></h5>
                                                </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </li>
            
                
                
                
                <li id="mainmenu1_rptrMenu_ctl02_maindiv" class="toggler dropdown dd-menu"><a href="courses" id="mainmenu1_rptrMenu_ctl02_anchlink" class="nav-link dropdown-toggle">
                    COURSES</a>
                    
                    
                    <div id="mainmenu1_rptrMenu_ctl02_divcoursemenu" class="dropdown-menu  st-courses" aria-labelledby="navbarDropdown">
                        <div class="step-two-menu">
                            <div class="courses-tab">
                                <ul class="nav nav-tabs">
                                    
                                            <li id="mainmenu1_rptrMenu_ctl02_rptrcourselevel_ctl00_liinner" class="active"><span data-target=".tab1" data-toggle="tab">
                                                Graduate Courses</span></li>
                                            
                                        
                                            <li id="mainmenu1_rptrMenu_ctl02_rptrcourselevel_ctl01_liinner"><span data-target=".tab2" data-toggle="tab">
                                                Post Graduate Courses</span></li>
                                            
                                        
                                            <li id="mainmenu1_rptrMenu_ctl02_rptrcourselevel_ctl02_liinner"><span data-target=".tab5" data-toggle="tab">
                                                Doctoral Programme</span></li>
                                            
                                        
                                            <li id="mainmenu1_rptrMenu_ctl02_rptrcourselevel_ctl03_liinner"><span data-target=".tab4" data-toggle="tab">
                                                Diploma Courses</span></li>
                                            
                                        
                                </ul>
                                <div class="tab-content">
                                    
                                            <div id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_divtab" class="tab-pane tab1 active">
                                                <div class="row h-100">
                                                    <div id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_divbotleft" class="col-lg-4">
                                                        <ul>
                                                            
                                                                    <li>
                                                                        <h3>
                                                                            <a href="#">
                                                                                B.Tech Courses</a></h3>
                                                                        <ul>
                                                                            
                                                                                    <li><a href="courses/graduate/btech-computer-science-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl00_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl00_lblcoursename">B.Tech in CSE</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/btech-hons-cse" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl01_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl01_lblcoursename">B. Tech (Hons.) CSE (Spec. in AI &amp; Analytics)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/btech-electronics-communication-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl02_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl02_lblcoursename">B.Tech in ECE</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="graduate/btech-cse-industrial-internet-of-things" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl03_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl03_lblcoursename">B.Tech CSE (Specialization in AIML)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=100" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl04_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl04_lblcoursename">B.Tech EC (Minor in CS)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=101" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl05_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl05_lblcoursename">B.Tech EC (Specialization in VLSI)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=135" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl06_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl06_lblcoursename">B.Tech in Electronics and Computer Engineering</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/btech-electrical-electronics" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl07_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl07_lblcoursename">B.Tech in EEE</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/btech-electrical-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl08_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl08_lblcoursename">B.Tech in EE</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=110" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl09_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl09_lblcoursename">B.Tech EE (Minor in CS)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=115" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl10_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl10_lblcoursename">B.Tech EE (EV Technology)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/btech-mechanical-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl11_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl11_lblcoursename">B.Tech in ME</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=111" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl12_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl12_lblcoursename">B.Tech ME (Minor in CS)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/btech-automobile-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl13_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl13_lblcoursename">B.Tech ME (Automobile)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/btech-mechatronics-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl14_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl14_lblcoursename">B.Tech ME (Mechatronics)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/btech-civil-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl15_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl15_lblcoursename">B.Tech in CE</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/btech-biotechnology" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl16_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseleft_ctl00_rptrcourseleftinner_ctl16_lblcoursename">B.Tech in Biotech</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                        </ul>
                                                                    </li>
                                                                    
                                                                    
                                                                
                                                        </ul>
                                                    </div>
                                                    <div id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_divbotmiddle" class="col-lg-4">
                                                        <ul>
                                                            
                                                                    <li>
                                                                        <h3>
                                                                            <a href="#">
                                                                                B. Tech </a></h3>
                                                                        <ul>
                                                                            
                                                                                    <li><a href="graduate/btech-me-smart-manufacturing" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl00_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl00_lblcoursename">ME in Smart Manufacturing</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                        </ul>
                                                                    </li>
                                                                    
                                                                    
                                                                
                                                                    <li>
                                                                        <h3>
                                                                            <a href="#">
                                                                                B. Tech Lateral Entry</a></h3>
                                                                        <ul>
                                                                            
                                                                                    <li><a href="courses/graduate/btech-electronics-communications-lateral-entry" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl00_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl00_lblcoursename">EC</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/btech-mechanical-engineering-lateral-entry" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl01_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl01_lblcoursename">ME</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/btech-lateral-entry" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl02_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl02_lblcoursename">CSE</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="graduate/btech-civil-engineering-lateral-entry" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl03_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl03_lblcoursename">CE</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/btech-electrical-engineering-lateral-entry" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl04_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl04_lblcoursename">EE</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=141" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl05_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl05_lblcoursename">B.Tech EE (EV Technology)</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=143" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl06_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl06_lblcoursename">B.Tech in ECE - LE</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=144" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl07_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl07_lblcoursename">B.Tech in EEE</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=145" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl08_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl08_lblcoursename">B.Tech in Biotech</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=146" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl09_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl09_lblcoursename">B.Tech EC (Minor in CS)</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=147" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl10_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcoursemiddle_ctl01_rptrcoursemiddleinner_ctl10_lblcoursename">B.Tech EC (Specialization in VLSI) </span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                        </ul>
                                                                    </li>
                                                                    
                                                                    
                                                                
                                                        </ul>
                                                       <p id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_pbotug">
                                                            <img class="img-fluid" src="/images/ug-girl.png"></p>
                                                    </div>
                                                    <div id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_divbotright" class="col-lg-4">
                                                        <ul>
                                                            
                                                                    <li>
                                                                        <h3>
                                                                            <a href="#">
                                                                                Other UG Courses</a></h3>
                                                                        <ul>
                                                                            
                                                                                    <li><a href="courses/graduate/bca" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl00_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl00_lblcoursename">BCA/ BCA (Hons./ By Research)   </span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/bba" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl01_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl01_lblcoursename">BBA/ BBA (Hons./ By Rsearch) </span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/bba-hons" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl02_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl02_lblcoursename">BBA (Management Sciences)</span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/bpharm" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl03_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl03_lblcoursename">B. Pharm</span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/bpharm-lateral-entry" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl04_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl04_lblcoursename">B. Pharm (Lateral Entry)</span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/bba-family-business" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl05_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl05_lblcoursename">BBA (Family Business)</span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=107" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl06_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl06_lblcoursename">B.Com/ B.Com (H/ By Research)</span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=116" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl07_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl07_lblcoursename">B.A. Eco/ B.A. Eco (H/ By Research) </span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=117" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl08_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl08_lblcoursename">B.A. Eng/ B.A. Eng (H/ By Research)</span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=112" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl09_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl09_lblcoursename">BCA Data Science </span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=118" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl10_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl10_lblcoursename">B.Sc. Biotech/ B.Sc. Biotech (H/ By Research)</span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/bsc-hons-agriculture" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl11_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl11_lblcoursename">B.Sc. (Hons.) Agriculture </span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/bsc-chemistry" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl12_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl12_lblcoursename">B.Sc. Chem/ B.Sc. Chem (H/ By Research)</span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/bsc-hons-physics" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl13_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl13_lblcoursename">B.Sc. Physics/ B.Sc. Physics (H/ By Research)</span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=113" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl14_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl14_lblcoursename">B.Sc. Maths/ B.Sc. Maths(H./ BY Research) in DS</span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=133" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl15_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl15_lblcoursename">BBA LLB (Hons.)</span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/ba-llb" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl16_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl16_lblcoursename">B.A. LLB (Hons.)</span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/graduate/bed" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl17_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl17_lblcoursename">B.Ed. </span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=140" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl18_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl18_lblcoursename">Pharm.D </span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=137" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl19_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl19_lblcoursename">Bachelor of Library and Information Science</span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=148" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl20_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl20_lblcoursename">B. Com Global Accounting  In Association with CIMA</span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=150" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl21_anchlink2">
                                                                                        <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl00_rptrcourseright_ctl00_rptrcourserightinner_ctl21_lblcoursename">BCA in Digital Marketing</span>
                                                                                      </a></li>
                                                                                    
                                                                                    

                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                        </ul>
                                                                    </li>
                                                                    
                                                                    
                                                                
                                                        </ul>
                                                    </div>
                                                    
                                                    
                                                    
                                                </div>
                                            </div>
                                            
                                        
                                            <div id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_divtab" class="tab-pane tab2">
                                                <div class="row h-100">
                                                    <div id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_divbotleft" class="col-lg-3">
                                                        <ul>
                                                            
                                                                    <li>
                                                                        <h3>
                                                                            <a href="#">
                                                                                Postgraduate Courses</a></h3>
                                                                        <ul>
                                                                            
                                                                                    <li><a href="courses/post-graduate/mtech-electronics-communication-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl00_rptrcourseleftinner_ctl00_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl00_rptrcourseleftinner_ctl00_lblcoursename">M. Tech in ECE </span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/post-graduate/mtech-electrical-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl00_rptrcourseleftinner_ctl01_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl00_rptrcourseleftinner_ctl01_lblcoursename">M. Tech in EE </span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/post-graduate/mtech-computer-science" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl00_rptrcourseleftinner_ctl02_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl00_rptrcourseleftinner_ctl02_lblcoursename">M. Tech in CSE </span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/post-graduate/structural-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl00_rptrcourseleftinner_ctl03_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl00_rptrcourseleftinner_ctl03_lblcoursename">M. Tech in CE (Structural Engineering)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/post-graduate/mtech-mechanical-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl00_rptrcourseleftinner_ctl04_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl00_rptrcourseleftinner_ctl04_lblcoursename">M. Tech ME (Design)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=102" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl00_rptrcourseleftinner_ctl05_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl00_rptrcourseleftinner_ctl05_lblcoursename">M.Tech ME (Production)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=134" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl00_rptrcourseleftinner_ctl06_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl00_rptrcourseleftinner_ctl06_lblcoursename">M. Tech (Energy Systems) </span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                        </ul>
                                                                    </li>
                                                                    
                                                                    
                                                                
                                                                    <li>
                                                                        <h3>
                                                                            <a href="#">
                                                                                Diploma Courses</a></h3>
                                                                        <ul>
                                                                            
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=121" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl00_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl00_lblcoursename">PG Diploma in CTS</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=122" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl01_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl01_lblcoursename">PG Diploma in AIML</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=123" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl02_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl02_lblcoursename">PG Diploma in DM</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=125" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl03_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl03_lblcoursename">PG Diploma in HA</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=126" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl04_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl04_lblcoursename">PG Diploma in Hospital and HM</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=127" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl05_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl05_lblcoursename">PG Diploma in CM</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=128" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl06_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl06_lblcoursename">PG Diploma in Banking and FSM</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=129" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl07_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl07_lblcoursename">PG Diploma in Web and AD</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=130" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl08_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl08_lblcoursename">PG Diploma in IoT</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=131" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl09_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcourseleft_ctl01_rptrcourseleftinner_ctl09_lblcoursename">Certificate Program in Banking and WM</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                        </ul>
                                                                    </li>
                                                                    
                                                                    
                                                                
                                                        </ul>
                                                    </div>
                                                    <div id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_divbotmiddle" class="col-lg-3">
                                                        <ul>
                                                            
                                                                    <li>
                                                                        <h3>
                                                                            <a href="#">
                                                                                Other PG Courses</a></h3>
                                                                        <ul>
                                                                            
                                                                                    <li><a href="courses/post-graduate/mpharm-pharmaceutics" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl00_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl00_lblcoursename">M. Pharm (Pharmaceutics)</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/post-graduate/mpharm-pharmacology" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl01_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl01_lblcoursename">M. Pharm (Pharmacology)</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/post-graduate/mba-hons" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl02_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl02_lblcoursename">MBA (Hons.)</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=120" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl03_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl03_lblcoursename">MBA</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/post-graduate/mba-logistics-supply-chain-management" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl04_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl04_lblcoursename">MBA (Logistics and Supply Chain Management)</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/post-graduate/mba-financial-markets-banking" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl05_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl05_lblcoursename">MBA (Financial Markets &amp; Banking)</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=106" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl06_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl06_lblcoursename">MBA (Business Analytics)</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/post-graduate/mca" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl07_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl07_lblcoursename">MCA</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/post-graduate/msc-hons-bio-tech" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl08_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl08_lblcoursename">M.Sc. (Biotech) </span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/post-graduate/msc-microbiology-immunology" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl09_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl09_lblcoursename">M.Sc (Microbiology)</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/post-graduate/msc-chemistry" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl10_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl10_lblcoursename">M.Sc. (Chemistry)</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/post-graduate/msc-physics" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl11_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl11_lblcoursename">M.Sc. (Physics)</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/post-graduate/msc-mathematics-specialization-in-datanalytics" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl12_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl12_lblcoursename">M.Sc. (Mathematics)</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=104" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl13_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl13_lblcoursename">M.Sc. (Agriculture)</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/post-graduate/llm" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl14_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl14_lblcoursename">LL.M</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=136" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl15_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl15_lblcoursename">M.Sc. Bioinformatics</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=139" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl16_anchlink2">
                                                                                      <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_rptrcoursemiddle_ctl00_rptrcoursemiddleinner_ctl16_lblcoursename">Master of Library and Information Science</span>
                                                                                       </a></li>
                                                                                    
                                                                                    

                                                                                       
                                                                                      
                                                                                      
                                                                                
                                                                        </ul>
                                                                    </li>
                                                                    
                                                                    
                                                                
                                                        </ul>
                                                       
                                                    </div>
                                                    
                                                    <div id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl01_divbotpg" class="col-lg-6">
                                                       <p class="pg-im1"><img class="img-fluid" src="/images/course-pg-im1.png"></p>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                            
                                        
                                            <div id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_divtab" class="tab-pane tab5">
                                                <div class="row h-100">
                                                    <div id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_divbotleft" class="col-lg-4">
                                                        <ul>
                                                            
                                                                    <li>
                                                                        <h3>
                                                                            <a href="#">
                                                                                Doctoral Programmes</a></h3>
                                                                        <ul>
                                                                            
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=103" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl00_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl00_lblcoursename">Ph.D. in Computer Application </span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/doctorate/phd-law" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl01_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl01_lblcoursename">Ph.D (Law)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/doctorate/phd-computer-science-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl02_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl02_lblcoursename">Ph.D. in CSE </span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/doctorate/phd-electronics-communication-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl03_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl03_lblcoursename">Ph.D. in ECE </span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/doctorate/phd-mechanical-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl04_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl04_lblcoursename">Ph.D. in ME </span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/doctorate/phd-electrical-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl05_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl05_lblcoursename">Ph.D. in EE </span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/doctorate/phd-civil-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl06_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl06_lblcoursename">Ph.D. in CE </span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/doctorate/phd-biotechnology" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl07_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl07_lblcoursename">Ph.D. in Biotechnology </span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/doctorate/phd-microbiology" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl08_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl08_lblcoursename">Ph.D. in Microbiology </span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/doctorate/phd-applied-physics" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl09_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl09_lblcoursename">Ph.D. in Physics </span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/doctorate/phd-applied-chemistry" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl10_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl10_lblcoursename">Ph.D. in Chemistry </span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/doctorate/phd-english" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl11_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl11_lblcoursename">Ph.D. in English </span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/doctorate/phd-mathematics" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl12_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl12_lblcoursename">Ph.D. in Mathematics </span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/doctorate/phd-pharmaceutical-sciences" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl13_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl13_lblcoursename">Ph.D. in Pharmacy</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/doctorate/phd-management" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl14_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl14_lblcoursename">Ph.D in Management</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/doctorate/phd-education" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl15_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl15_lblcoursename">Ph.D in Education</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=149" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl16_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_rptrcourseleft_ctl00_rptrcourseleftinner_ctl16_lblcoursename">Ph.D Agriculture </span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                        </ul>
                                                                    </li>
                                                                    
                                                                    
                                                                
                                                        </ul>
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl02_divbotdoctrol" class="col-lg-8">
                                                        <p class="mt-3 doc-im1">
                                                            <img class="img-fluid" src="/images/course-doc-im1.png"></p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                        
                                            <div id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_divtab" class="tab-pane tab4">
                                                <div class="row h-100">
                                                    <div id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_divbotleft" class="col-lg-4">
                                                        <ul>
                                                            
                                                                    <li>
                                                                        <h3>
                                                                            <a href="#">
                                                                                Diploma Courses</a></h3>
                                                                        <ul>
                                                                            
                                                                                    <li><a href="courses/diploma/dpharm" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_rptrcourseleft_ctl00_rptrcourseleftinner_ctl00_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_rptrcourseleft_ctl00_rptrcourseleftinner_ctl00_lblcoursename">D. Pharm </span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/diploma/electronics-communication-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_rptrcourseleft_ctl00_rptrcourseleftinner_ctl01_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_rptrcourseleft_ctl00_rptrcourseleftinner_ctl01_lblcoursename">Diploma  (Electronics &amp; Communication)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/diploma/civil-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_rptrcourseleft_ctl00_rptrcourseleftinner_ctl02_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_rptrcourseleft_ctl00_rptrcourseleftinner_ctl02_lblcoursename">Diploma  (Civil Engineering)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/diploma/computer-science-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_rptrcourseleft_ctl00_rptrcourseleftinner_ctl03_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_rptrcourseleft_ctl00_rptrcourseleftinner_ctl03_lblcoursename">Diploma (Computer Science Engineering)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/diploma/electrical-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_rptrcourseleft_ctl00_rptrcourseleftinner_ctl04_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_rptrcourseleft_ctl00_rptrcourseleftinner_ctl04_lblcoursename">Diploma (Electrical Engineering)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/diploma/mechanical-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_rptrcourseleft_ctl00_rptrcourseleftinner_ctl05_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_rptrcourseleft_ctl00_rptrcourseleftinner_ctl05_lblcoursename">Diploma (Mechanical Engineering)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="courses/diploma/chemical-engineering" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_rptrcourseleft_ctl00_rptrcourseleftinner_ctl06_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_rptrcourseleft_ctl00_rptrcourseleftinner_ctl06_lblcoursename">Diploma (Chemical Engineering)</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                                    <li><a href="course-details.aspx?mpgid=129&amp;pgidtrail=129&amp;courseid=138" id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_rptrcourseleft_ctl00_rptrcourseleftinner_ctl07_anchlink2">
                                                                                    <span id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_rptrcourseleft_ctl00_rptrcourseleftinner_ctl07_lblcoursename">Diploma in Library and Information Science</span>
                                                                                        </a></li>
                                                                                    
                                                                                    
                                                                                      
                                                                                      
                                                                                      
                                                                                
                                                                        </ul>
                                                                    </li>
                                                                    
                                                                    
                                                                
                                                        </ul>
                                                    </div>
                                                    
                                                    
                                                    
                                                    
                                                    <div id="mainmenu1_rptrMenu_ctl02_rptrcourselevelbot_ctl03_divdiploma" class="col-lg-8">
                                                        <p class="mt-3 dp-im1">
                                                            <img class="img-fluid" src="/images/course-dp-im1.png"></p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            
                
                
                
                <li id="mainmenu1_rptrMenu_ctl03_maindiv" class="toggler dropdown dd-menu"><a href="admissions/overview" id="mainmenu1_rptrMenu_ctl03_anchlink" class="nav-link dropdown-toggle">
                    ADMISSIONS</a>
                    
                    <div id="mainmenu1_rptrMenu_ctl03_divacademics" class="dropdown-menu st-admissions" aria-labelledby="navbarDropdown">
                        <div class="step-two-menu">
                            <div class="row">
                                
                                <div id="mainmenu1_rptrMenu_ctl03_divacd1" class="">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <ul>
                                                
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl03_repacademicleft_ctl00_headfirst">
                                                                <a href="admissions/overview" id="mainmenu1_rptrMenu_ctl03_repacademicleft_ctl00_anchlink1">
                                                                    Overview</a></h3>
                                                            <ul>
                                                                
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl03_repacademicleft_ctl01_headfirst">
                                                                <a href="admissions/eligibility-criteria" id="mainmenu1_rptrMenu_ctl03_repacademicleft_ctl01_anchlink1">
                                                                    Eligibility Criteria</a></h3>
                                                            <ul>
                                                                
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl03_repacademicleft_ctl02_headfirst">
                                                                <a href="admissions/procedure" id="mainmenu1_rptrMenu_ctl03_repacademicleft_ctl02_anchlink1">
                                                                    Admission Procedure</a></h3>
                                                            <ul>
                                                                
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl03_repacademicleft_ctl03_headfirst">
                                                                <a href="admissions/glaet-syllabus-sample-paper" id="mainmenu1_rptrMenu_ctl03_repacademicleft_ctl03_anchlink1">
                                                                    GLAET Syllabus &amp; Sample Paper</a></h3>
                                                            <ul>
                                                                
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl03_repacademicleft_ctl04_headfirst">
                                                                <a href="admissions/counselling-offices" id="mainmenu1_rptrMenu_ctl03_repacademicleft_ctl04_anchlink1">
                                                                    Counselling Offices</a></h3>
                                                            <ul>
                                                                
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl03_repacademicleft_ctl05_headfirst">
                                                                <a href="admissions/phd-programmes" id="mainmenu1_rptrMenu_ctl03_repacademicleft_ctl05_anchlink1">
                                                                    Admission Open for PhD (Session 2025-26)-odd Semester</a></h3>
                                                            <ul>
                                                                
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl03_repacademicleft_ctl06_headfirst">
                                                                <a href="admissions/glaet-result" id="mainmenu1_rptrMenu_ctl03_repacademicleft_ctl06_anchlink1">
                                                                    GLAET Result</a></h3>
                                                            <ul>
                                                                
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul>
                                                
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl03_repacademicmiddle_ctl00_headfirst">
                                                                <a href="admissions/fee-structure" id="mainmenu1_rptrMenu_ctl03_repacademicmiddle_ctl00_anchlink1">
                                                                    Fee Structure</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl03_repacademicmiddle_ctl01_headfirst">
                                                                <a href="admissions/scholorship" id="mainmenu1_rptrMenu_ctl03_repacademicmiddle_ctl01_anchlink1">
                                                                    Scholarship</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl03_repacademicmiddle_ctl02_headfirst">
                                                                <a href="admissions/faqs" id="mainmenu1_rptrMenu_ctl03_repacademicmiddle_ctl02_anchlink1">
                                                                    FAQs</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl03_repacademicmiddle_ctl03_headfirst">
                                                                <a href="admissions/fee-refund-policy" id="mainmenu1_rptrMenu_ctl03_repacademicmiddle_ctl03_anchlink1">
                                                                    Fee Refund Policy</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl03_repacademicmiddle_ctl04_headfirst">
                                                                <a href="admissions/get-in-touch" id="mainmenu1_rptrMenu_ctl03_repacademicmiddle_ctl04_anchlink1">
                                                                    Get In Touch</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl03_repacademicmiddle_ctl05_headfirst">
                                                                <a href="admissions/downloads" id="mainmenu1_rptrMenu_ctl03_repacademicmiddle_ctl05_anchlink1">
                                                                    Download Forms</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl03_repacademicmiddle_ctl06_headfirst">
                                                                <a href="https://www.gla.ac.in/pdf/admission_booklet.pdf" id="mainmenu1_rptrMenu_ctl03_repacademicmiddle_ctl06_anchlink1" target="_blank">
                                                                    Admission Brochure</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul>
                                                
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl03_repacademicright_ctl00_headfirst" class="set-gr">
                                                                <a id="mainmenu1_rptrMenu_ctl03_repacademicright_ctl00_anchlink1">
                                                                    International Admissions</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="international-admissions/about-gla" id="mainmenu1_rptrMenu_ctl03_repacademicright_ctl00_repacademic1right_ctl00_anchlink2">
                                                                            About GLA</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="international-admissions/about-india" id="mainmenu1_rptrMenu_ctl03_repacademicright_ctl00_repacademic1right_ctl01_anchlink2">
                                                                            About India</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="international-admissions/local-attractions" id="mainmenu1_rptrMenu_ctl03_repacademicright_ctl00_repacademic1right_ctl02_anchlink2">
                                                                            Local Attractions</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="international-admissions/faq-and-guidelines" id="mainmenu1_rptrMenu_ctl03_repacademicright_ctl00_repacademic1right_ctl03_anchlink2">
                                                                            FAQ and Guidelines</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="international-admissions/courses-and-fee-structure" id="mainmenu1_rptrMenu_ctl03_repacademicright_ctl00_repacademic1right_ctl04_anchlink2">
                                                                            Courses and Fee Structure</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="international-admissions/international-scholarship" id="mainmenu1_rptrMenu_ctl03_repacademicright_ctl00_repacademic1right_ctl05_anchlink2">
                                                                            International Scholarship</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="international-admissions/hostel-and-mess" id="mainmenu1_rptrMenu_ctl03_repacademicright_ctl00_repacademic1right_ctl06_anchlink2">
                                                                            Hostel and Mess</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="international-admissions/fee-refund-policy" id="mainmenu1_rptrMenu_ctl03_repacademicright_ctl00_repacademic1right_ctl07_anchlink2">
                                                                            Fee Refund Policy</a></li>
                                                                    
                                                                
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl03_repacademicright_ctl01_headfirst" class="set-gr">
                                                                <a id="mainmenu1_rptrMenu_ctl03_repacademicright_ctl01_anchlink1">
                                                                    SAARC Country Candidates		</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="international-admissions/saarc-country-candidates-scholarship" id="mainmenu1_rptrMenu_ctl03_repacademicright_ctl01_repacademic1right_ctl00_anchlink2">
                                                                            Scholarship </a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="international-admissions/saarc-country-candidates-hostel-mess" id="mainmenu1_rptrMenu_ctl03_repacademicright_ctl01_repacademic1right_ctl01_anchlink2">
                                                                            Hostel and Mess</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="international-admissions/saarc-country-candidates-fees" id="mainmenu1_rptrMenu_ctl03_repacademicright_ctl01_repacademic1right_ctl02_anchlink2">
                                                                            Fees</a></li>
                                                                    
                                                                
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                            </ul>
                                                        </li>
                                                    
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="mainmenu1_rptrMenu_ctl03_divshowadmission" class="col-lg-12">
                                    <div class="st-admissions-block">
                                        <h5>
                                            Unlock your Career Goals</h5>
                                        <ul>
                                            <li><a href="#">
                                                <figure><img alt="acad-icon" class="img-fluid" src="/images/admiss-p1.png"></figure>
                                                <p>
                                                    Scholarship</p>
                                            </a></li>
                                            <li><a href="#">
                                                <figure><img alt="acad-icon" class="img-fluid" src="/images/admiss-p2.png"></figure>
                                                <p>
                                                    Financial Aid</p>
                                            </a></li>
                                            <li><a href="#">
                                                <figure><img alt="acad-icon" class="img-fluid" src="/images/admiss-p3.png"></figure>
                                                <p>
                                                    Education Loan</p>
                                            </a></li>
                                            <li><a href="#">
                                                <figure><img alt="acad-icon" class="img-fluid" src="/images/admiss-p4.png"></figure>
                                                <p>
                                                    GLAET</p>
                                            </a></li>
                                        </ul>
                                        <img class="admission-gl-pos" src="/images/admission-girl.png" alt="admission-girl">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </li>
            
                
                
                
                <li id="mainmenu1_rptrMenu_ctl04_maindiv" class="toggler dropdown dd-menu"><a href="campus-life/overview" id="mainmenu1_rptrMenu_ctl04_anchlink" class="nav-link dropdown-toggle">
                    CAMPUS LIFE</a>
                    
                    <div id="mainmenu1_rptrMenu_ctl04_divacademics" class="dropdown-menu st-campus-life" aria-labelledby="navbarDropdown">
                        <div class="step-two-menu">
                            <div class="row">
                                <div id="mainmenu1_rptrMenu_ctl04_divshowcapluslife" class="col-lg-12 pg-bg d-none d-lg-block st-campus-life-img">
                                    <div class="campus-life-block position-relative h-100">
                                        <h5>
                                            A Bustling Campus Environment</h5>
                                        <ul>
                                            <li><a href="#">
                                                <figure><img alt="campus-icon" class="img-fluid" src="/images/campus-p1.png"></figure>
                                                <p>
                                                    70+ Clubs</p>
                                            </a></li>
                                            <li><a href="#">
                                                <figure><img alt="campus-icon" class="img-fluid" src="/images/campus-p2.png"></figure>
                                                <p>
                                                    Shopping Mall</p>
                                            </a></li>
                                            <li><a href="#">
                                                <figure><img alt="campus-icon" class="img-fluid" src="/images/campus-p3.png"></figure>
                                                <p>
                                                    Fests &amp; Events</p>
                                            </a></li>
                                            <li><a href="#">
                                                <figure><img alt="campus-icon" class="img-fluid" src="/images/campus-p4.png"></figure>
                                                <p>
                                                    Sports</p>
                                            </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="mainmenu1_rptrMenu_ctl04_divacd1" class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <ul>
                                                
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl04_repacademicleft_ctl00_headfirst">
                                                                <a href="skill-enhancement" id="mainmenu1_rptrMenu_ctl04_repacademicleft_ctl00_anchlink1">
                                                                    Skill Enhancement</a></h3>
                                                            <ul>
                                                                
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl04_repacademicleft_ctl01_headfirst">
                                                                <a href="campus-life/overview" id="mainmenu1_rptrMenu_ctl04_repacademicleft_ctl01_anchlink1">
                                                                    Overview</a></h3>
                                                            <ul>
                                                                
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl04_repacademicleft_ctl02_headfirst" class="set-gr">
                                                                <a id="mainmenu1_rptrMenu_ctl04_repacademicleft_ctl02_anchlink1">
                                                                    Academic Facilities</a></h3>
                                                            <ul>
                                                                
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="campus-life/lecture-theatres" id="mainmenu1_rptrMenu_ctl04_repacademicleft_ctl02_reprepacademic1left_ctl00_anchlink2">
                                                                            Lecture Theaters</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="campus-life/conference-halls" id="mainmenu1_rptrMenu_ctl04_repacademicleft_ctl02_reprepacademic1left_ctl01_anchlink2">
                                                                            Conference Halls</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="campus-life/laboratories" id="mainmenu1_rptrMenu_ctl04_repacademicleft_ctl02_reprepacademic1left_ctl02_anchlink2">
                                                                            Laboratories</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="campus-life/libraries" id="mainmenu1_rptrMenu_ctl04_repacademicleft_ctl02_reprepacademic1left_ctl03_anchlink2">
                                                                            Libraries</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="cpage.aspx?mpgid=7&amp;pgidtrail=256" id="mainmenu1_rptrMenu_ctl04_repacademicleft_ctl02_reprepacademic1left_ctl04_anchlink2">
                                                                            Facility for e-Content</a></li>
                                                                    
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl04_repacademicleft_ctl03_headfirst" class="set-gr">
                                                                <a id="mainmenu1_rptrMenu_ctl04_repacademicleft_ctl03_anchlink1">
                                                                    Campus Facility</a></h3>
                                                            <ul>
                                                                
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="campus-life/aarogyam-medical-facilities" id="mainmenu1_rptrMenu_ctl04_repacademicleft_ctl03_reprepacademic1left_ctl00_anchlink2">
                                                                            Aarogyam (Medical Facilities)</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="campus-life/hostel" id="mainmenu1_rptrMenu_ctl04_repacademicleft_ctl03_reprepacademic1left_ctl01_anchlink2">
                                                                            Hostel</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="campus-life/cafeteria" id="mainmenu1_rptrMenu_ctl04_repacademicleft_ctl03_reprepacademic1left_ctl02_anchlink2">
                                                                            Cafeteria</a></li>
                                                                    
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl04_repacademicleft_ctl04_headfirst">
                                                                <a href="campus-life/transport-facility" id="mainmenu1_rptrMenu_ctl04_repacademicleft_ctl04_anchlink1">
                                                                    Transport Facility</a></h3>
                                                            <ul>
                                                                
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul>
                                                
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl04_repacademicmiddle_ctl00_headfirst" class="set-gr">
                                                                <a id="mainmenu1_rptrMenu_ctl04_repacademicmiddle_ctl00_anchlink1">
                                                                    Happenings</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="happenings/media-coverage" id="mainmenu1_rptrMenu_ctl04_repacademicmiddle_ctl00_repacademic1middle_ctl00_anchlink2">
                                                                            Media Coverage</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="happenings/photo-gallery" id="mainmenu1_rptrMenu_ctl04_repacademicmiddle_ctl00_repacademic1middle_ctl01_anchlink2">
                                                                            Photo Gallery</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="happenings/video-gallery" id="mainmenu1_rptrMenu_ctl04_repacademicmiddle_ctl00_repacademic1middle_ctl02_anchlink2">
                                                                            Video Gallery</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="happenings/events" id="mainmenu1_rptrMenu_ctl04_repacademicmiddle_ctl00_repacademic1middle_ctl03_anchlink2">
                                                                            Events</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="https://mohittiwari-cs18.github.io/TEDxGLAU_History/" id="mainmenu1_rptrMenu_ctl04_repacademicmiddle_ctl00_repacademic1middle_ctl04_anchlink2" target="_blank">
                                                                            TEDxGLAU</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="happenings/workshops" id="mainmenu1_rptrMenu_ctl04_repacademicmiddle_ctl00_repacademic1middle_ctl05_anchlink2">
                                                                            Workshops</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="happenings/guest-lectures" id="mainmenu1_rptrMenu_ctl04_repacademicmiddle_ctl00_repacademic1middle_ctl06_anchlink2">
                                                                            Guest Lectures</a></li>
                                                                    
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl04_repacademicmiddle_ctl01_headfirst" class="set-gr">
                                                                <a id="mainmenu1_rptrMenu_ctl04_repacademicmiddle_ctl01_anchlink1">
                                                                    Sports Facility</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="campus-life/sports-overview" id="mainmenu1_rptrMenu_ctl04_repacademicmiddle_ctl01_repacademic1middle_ctl00_anchlink2">
                                                                            Sports Overview</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="campus-life/indoor-game" id="mainmenu1_rptrMenu_ctl04_repacademicmiddle_ctl01_repacademic1middle_ctl01_anchlink2">
                                                                            In Door Games</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="campus-life/sports-ground" id="mainmenu1_rptrMenu_ctl04_repacademicmiddle_ctl01_repacademic1middle_ctl02_anchlink2">
                                                                            Sports Ground</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="campus-life/annual-sports" id="mainmenu1_rptrMenu_ctl04_repacademicmiddle_ctl01_repacademic1middle_ctl03_anchlink2">
                                                                            Annual Sports</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="campus-life/sports-cultural-events" id="mainmenu1_rptrMenu_ctl04_repacademicmiddle_ctl01_repacademic1middle_ctl04_anchlink2">
                                                                            Sports &amp; Cultural Events</a></li>
                                                                    
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul>
                                                
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl04_repacademicright_ctl00_headfirst">
                                                                <a href="convocation-live-feed" id="mainmenu1_rptrMenu_ctl04_repacademicright_ctl00_anchlink1">
                                                                    13th Convocation Live</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl04_repacademicright_ctl01_headfirst">
                                                                <a href="cpage.aspx?mpgid=300&amp;pgidtrail=300" id="mainmenu1_rptrMenu_ctl04_repacademicright_ctl01_anchlink1">
                                                                    ASC</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl04_repacademicright_ctl02_headfirst" class="set-gr">
                                                                <a id="mainmenu1_rptrMenu_ctl04_repacademicright_ctl02_anchlink1">
                                                                    Other Facilities</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="e-content" id="mainmenu1_rptrMenu_ctl04_repacademicright_ctl02_repacademic1right_ctl00_anchlink2">
                                                                            E-Content</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="campus-life/student-ambassadors" id="mainmenu1_rptrMenu_ctl04_repacademicright_ctl02_repacademic1right_ctl01_anchlink2">
                                                                            Student Ambassadors</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="campus-life/ncc" id="mainmenu1_rptrMenu_ctl04_repacademicright_ctl02_repacademic1right_ctl02_anchlink2">
                                                                            National Cadet Corps (NCC)</a></li>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <li><a href="campus-life/society" id="mainmenu1_rptrMenu_ctl04_repacademicright_ctl02_repacademic1right_ctl03_anchlink2">
                                                                            Society</a></li>
                                                                    
                                                                
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                                        
                                                                        
                                                                        
                                                                        <div class="sub-sub-menu">
                                                                            <li>
                                                                                <ul>
                                                                                    
                                                                                </ul>
                                                                            </li>
                                                                        </div>
                                                                    
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl04_repacademicright_ctl03_headfirst">
                                                                <a href="campus-life/rules-regulations" id="mainmenu1_rptrMenu_ctl04_repacademicright_ctl03_anchlink1">
                                                                    Rules and Regulations</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl04_repacademicright_ctl04_headfirst">
                                                                <a href="student-club" id="mainmenu1_rptrMenu_ctl04_repacademicright_ctl04_anchlink1">
                                                                    Student Clubs  </a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                                        
                                                        
                                                        
                                                        <li>
                                                            <h3 id="mainmenu1_rptrMenu_ctl04_repacademicright_ctl05_headfirst">
                                                                <a href="cpage.aspx?mpgid=7&amp;pgidtrail=313" id="mainmenu1_rptrMenu_ctl04_repacademicright_ctl05_anchlink1">
                                                                    Student Council</a>
                                                            </h3>
                                                            <ul>
                                                                
                                                                
                                                            </ul>
                                                        </li>
                                                    
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    
                </li>
            
                
                
                
                <li id="mainmenu1_rptrMenu_ctl05_maindiv" class="toggler dropdown dd-menu"><a href="placements" id="mainmenu1_rptrMenu_ctl05_anchlink" class="nav-link dropdown-toggle">
                    PLACEMENTS</a>
                    <div id="mainmenu1_rptrMenu_ctl05_divnewabout" class="dropdown-menu st-placements" aria-labelledby="navbarDropdown">
                        <div class="step-two-menu">
                            <div id="mainmenu1_rptrMenu_ctl05_divrowabout" class="row g-0 h-100">
                                
                                <div id="mainmenu1_rptrMenu_ctl05_divshowplacement" class="col-lg-4 d-none d-lg-block st-placements-img">
                                    <div class="st-placements-graphic position-relative h-100">
                                        <div class="placements-cont bottom-0">
                                            <ul>
                                                <li>
                                                    <figure><img alt="placement-icon" class="img-fluid" src="/images/place-com1.png"></figure>
                                                </li>
                                                <li>
                                                    <figure><img alt="placement-icon" class="img-fluid" src="/images/place-com2.png"></figure>
                                                </li>
                                                <li>
                                                    <figure><img alt="placement-icon" class="img-fluid" src="/images/place-com3.png"></figure>
                                                </li>
                                                <li>
                                                    <figure><img alt="placement-icon" class="img-fluid" src="/images/place-com4.png"></figure>
                                                </li>
                                                <li>
                                                    <figure><img alt="placement-icon" class="img-fluid" src="/images/place-com5.png"></figure>
                                                </li>
                                                <li>
                                                    <figure><img alt="placement-icon" class="img-fluid" src="/images/place-com6.png"></figure>
                                                </li>
                                                <li>
                                                    <figure><img alt="placement-icon" class="img-fluid" src="/images/place-com7.png"></figure>
                                                </li>
                                                <li>
                                                    <figure><img alt="placement-icon" class="img-fluid" src="/images/place-com8.png"></figure>
                                                </li>
                                                <li>
                                                    <figure><img alt="placement-icon" class="img-fluid" src="/images/place-com9.png"></figure>
                                                </li>
                                                <li>
                                                    <figure><img alt="placement-icon" class="img-fluid" src="/images/place-com10.png"></figure>
                                                </li>
                                                <li>
                                                    <figure><img alt="placement-icon" class="img-fluid" src="/images/place-com11.png"></figure>
                                                </li>
                                                <li>
                                                    <figure><img alt="placement-icon" class="img-fluid" src="/images/place-com12.png"></figure>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="mainmenu1_rptrMenu_ctl05_divleftabout" class="col-md-4">
                                    <ul id="mainmenu1_rptrMenu_ctl05_divaboutus">
                                        
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl00_headfirst">
                                                        <a href="placements" id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl00_anchlink1">
                                                            Overview</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                        
                                                    </ul>
                                                </li>
                                            
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl01_headfirst">
                                                        <a href="placements/team" id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl01_anchlink1">
                                                            The Team</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                        
                                                    </ul>
                                                </li>
                                            
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl02_headfirst">
                                                        <a href="placements/policy" id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl02_anchlink1">
                                                            Placement Policy</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                        
                                                    </ul>
                                                </li>
                                            
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl03_headfirst">
                                                        <a href="placements/industry-academia-partnership" id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl03_anchlink1">
                                                            Industry-Academia Partnership</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                        
                                                    </ul>
                                                </li>
                                            
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl04_headfirst">
                                                        <a href="placements/industrial-visits" id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl04_anchlink1">
                                                            Industrial Visits</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                        
                                                    </ul>
                                                </li>
                                            
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl05_headfirst">
                                                        <a href="placements/our-recruiters" id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl05_anchlink1">
                                                            Our Recruiters</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                        
                                                    </ul>
                                                </li>
                                            
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl06_headfirst">
                                                        <a href="testimonial-listing.aspx?mpgid=157&amp;pgidtrail=157&amp;tesid=3" id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl06_anchlink1">
                                                            Corporate Testimonials</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                        
                                                    </ul>
                                                </li>
                                            
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl07_headfirst">
                                                        <a href="testimonial-listing.aspx?mpgid=157&amp;pgidtrail=157&amp;tesid=1" id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl07_anchlink1">
                                                            Alumni Testimonials</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                        
                                                    </ul>
                                                </li>
                                            
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl08_headfirst">
                                                        <a href="placements/helpline-and-faq" id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl08_anchlink1">
                                                            Helpline and FAQs</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                        
                                                    </ul>
                                                </li>
                                            
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl09_headfirst">
                                                        <a href="placements/get-in-touch" id="mainmenu1_rptrMenu_ctl05_repaboutusleft_ctl09_anchlink1">
                                                            Get in Touch</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                        
                                                    </ul>
                                                </li>
                                            
                                    </ul>
                                </div>
                                
                                <div id="mainmenu1_rptrMenu_ctl05_divrighttabout" class="col-md-4">
                                    <ul>
                                        
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl05_repaboutusright_ctl00_headfirst" class="set-gr">
                                                        <a href="alumni" id="mainmenu1_rptrMenu_ctl05_repaboutusright_ctl00_anchlink1">
                                                            Alumni</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                                
                                                                
                                                                
                                                                <li><a href="cpage.aspx?mpgid=8&amp;pgid1=216&amp;pgidtrail=309" id="mainmenu1_rptrMenu_ctl05_repaboutusright_ctl00_repaboutus1right_ctl00_anchlink2">
                                                                    Job Opportunities by Alumni</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="placements/Gla-discussion-forum" id="mainmenu1_rptrMenu_ctl05_repaboutusright_ctl00_repaboutus1right_ctl01_anchlink2">
                                                                    GLA Discussion Forum</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="alumni-of-gla" id="mainmenu1_rptrMenu_ctl05_repaboutusright_ctl00_repaboutus1right_ctl02_anchlink2">
                                                                    Alumni of GLA</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="placements/alumni-working-abroad" id="mainmenu1_rptrMenu_ctl05_repaboutusright_ctl00_repaboutus1right_ctl03_anchlink2">
                                                                    Alumni Working Abroad</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="alumni-testimonial" id="mainmenu1_rptrMenu_ctl05_repaboutusright_ctl00_repaboutus1right_ctl04_anchlink2">
                                                                    Alumni Testimonials </a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="http://glauniversity.in:8095/" id="mainmenu1_rptrMenu_ctl05_repaboutusright_ctl00_repaboutus1right_ctl05_anchlink2" target="_blank">
                                                                    Alumni Portal</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="alumni-get-in-touch" id="mainmenu1_rptrMenu_ctl05_repaboutusright_ctl00_repaboutus1right_ctl06_anchlink2">
                                                                    Get In Touch</a></li>
                                                            
                                                    </ul>
                                                </li>
                                            
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    
                </li>
            
                
                
                
                <li id="mainmenu1_rptrMenu_ctl06_maindiv" class="toggler dropdown dd-menu"><a href="entrepreneurship-cell.aspx?mpgid=9&amp;pgidtrail=126" id="mainmenu1_rptrMenu_ctl06_anchlink" class="nav-link dropdown-toggle">
                    RESEARCH AND INNOVATION</a>
                    <div id="mainmenu1_rptrMenu_ctl06_divnewabout" class="dropdown-menu st-research-innovation" aria-labelledby="navbarDropdown">
                        <div class="step-two-menu">
                            <div id="mainmenu1_rptrMenu_ctl06_divrowabout" class="row h-100">
                                
                                
                                <div id="mainmenu1_rptrMenu_ctl06_divleftabout" class="col-lg-4">
                                    <ul id="mainmenu1_rptrMenu_ctl06_divaboutus">
                                        
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl06_repaboutusleft_ctl00_headfirst" class="set-gr">
                                                        <a id="mainmenu1_rptrMenu_ctl06_repaboutusleft_ctl00_anchlink1" class="parent_link">
                                                            RESEARCH</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                                
                                                                
                                                                
                                                                <li><a href="research-hierarchy" id="mainmenu1_rptrMenu_ctl06_repaboutusleft_ctl00_repaboutus1left_ctl00_anchlink2">
                                                                    Research Hierarchy</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="phd-candidates.aspx?mpgid=167&amp;pgidtrail=184" id="mainmenu1_rptrMenu_ctl06_repaboutusleft_ctl00_repaboutus1left_ctl01_anchlink2">
                                                                    Research Scholars</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="reseach-center" id="mainmenu1_rptrMenu_ctl06_repaboutusleft_ctl00_repaboutus1left_ctl02_anchlink2">
                                                                    Research Centres</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="research-publications" id="mainmenu1_rptrMenu_ctl06_repaboutusleft_ctl00_repaboutus1left_ctl03_anchlink2">
                                                                    Research Publications</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="patents" id="mainmenu1_rptrMenu_ctl06_repaboutusleft_ctl00_repaboutus1left_ctl04_anchlink2">
                                                                    Patents</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="https://www.gla.ac.in/about-us/academic-and-industry-collaborations" id="mainmenu1_rptrMenu_ctl06_repaboutusleft_ctl00_repaboutus1left_ctl05_anchlink2" target="_blank">
                                                                    MoU</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="sonsored-project" id="mainmenu1_rptrMenu_ctl06_repaboutusleft_ctl00_repaboutus1left_ctl06_anchlink2">
                                                                    Sponsored Project</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="consultency" id="mainmenu1_rptrMenu_ctl06_repaboutusleft_ctl00_repaboutus1left_ctl07_anchlink2">
                                                                    Consultancy</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="https://glaresearch.blogspot.com/" id="mainmenu1_rptrMenu_ctl06_repaboutusleft_ctl00_repaboutus1left_ctl08_anchlink2" target="_blank">
                                                                    Research Blog</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="faq" id="mainmenu1_rptrMenu_ctl06_repaboutusleft_ctl00_repaboutus1left_ctl09_anchlink2">
                                                                    FAQ'S</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="cpage.aspx?mpgid=9&amp;pgid1=236&amp;pgidtrail=298" id="mainmenu1_rptrMenu_ctl06_repaboutusleft_ctl00_repaboutus1left_ctl10_anchlink2">
                                                                    Technology Transfer</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="https://www.gla.ac.in/pdf/consultancy-policy.pdf" id="mainmenu1_rptrMenu_ctl06_repaboutusleft_ctl00_repaboutus1left_ctl11_anchlink2" target="_blank">
                                                                    Consultancy Policy (Revised)</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="https://www.gla.ac.in/pdf/research-promotion-ipr-policy-merged.pdf" id="mainmenu1_rptrMenu_ctl06_repaboutusleft_ctl00_repaboutus1left_ctl12_anchlink2" target="_blank">
                                                                    Research Promotion Policy (Revised) &amp; IPR Policy</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="cpage.aspx?mpgid=9&amp;pgid1=236&amp;pgidtrail=334" id="mainmenu1_rptrMenu_ctl06_repaboutusleft_ctl00_repaboutus1left_ctl13_anchlink2">
                                                                    Research Ordinance</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="cpage.aspx?mpgid=9&amp;pgid1=236&amp;pgidtrail=299" id="mainmenu1_rptrMenu_ctl06_repaboutusleft_ctl00_repaboutus1left_ctl14_anchlink2">
                                                                    List of beneficiaries for National/International recognition</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="cpage.aspx?mpgid=9&amp;pgid1=236&amp;pgidtrail=299" id="mainmenu1_rptrMenu_ctl06_repaboutusleft_ctl00_repaboutus1left_ctl15_anchlink2">
                                                                    Glimpses of Award Ceremony</a></li>
                                                            
                                                        
                                                    </ul>
                                                </li>
                                            
                                    </ul>
                                </div>
                                
                                <div id="mainmenu1_rptrMenu_ctl06_divrighttabout" class="col-lg-4">
                                    <ul>
                                        
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl06_repaboutusright_ctl00_headfirst" class="set-gr">
                                                        <a id="mainmenu1_rptrMenu_ctl06_repaboutusright_ctl00_anchlink1" class="parent_link">
                                                            INNOVATION</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                                
                                                                
                                                                
                                                                <li><a href="incubation" id="mainmenu1_rptrMenu_ctl06_repaboutusright_ctl00_repaboutus1right_ctl00_anchlink2">
                                                                    Incubation</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="innovation/entrepreneurship-cell" id="mainmenu1_rptrMenu_ctl06_repaboutusright_ctl00_repaboutus1right_ctl01_anchlink2">
                                                                    Entrepreneurship Cell</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="innovation/newgen-iedc" id="mainmenu1_rptrMenu_ctl06_repaboutusright_ctl00_repaboutus1right_ctl02_anchlink2">
                                                                    NewGen IEDC</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="inovation-cell" id="mainmenu1_rptrMenu_ctl06_repaboutusright_ctl00_repaboutus1right_ctl03_anchlink2">
                                                                    Innovation Cell</a></li>
                                                            
                                                                
                                                                
                                                                
                                                                <li><a href="cpage.aspx?mpgid=9&amp;pgid1=237&amp;pgidtrail=297" id="mainmenu1_rptrMenu_ctl06_repaboutusright_ctl00_repaboutus1right_ctl04_anchlink2">
                                                                     NISP Implementation</a></li>
                                                            
                                                    </ul>
                                                </li>
                                            
                                                
                                                
                                                
                                                <li>
                                                    <h3 id="mainmenu1_rptrMenu_ctl06_repaboutusright_ctl01_headfirst" class="set-gr">
                                                        <a href="cpage.aspx?mpgid=9&amp;pgid1=236&amp;pgidtrail=318" id="mainmenu1_rptrMenu_ctl06_repaboutusright_ctl01_anchlink1">
                                                            Journal</a>
                                                    </h3>
                                                    <ul>
                                                        
                                                                
                                                                
                                                                
                                                                <li><a href="cpage.aspx?mpgid=9&amp;pgid1=318&amp;pgidtrail=319" id="mainmenu1_rptrMenu_ctl06_repaboutusright_ctl01_repaboutus1right_ctl00_anchlink2">
                                                                    Research Journal</a></li>
                                                            
                                                    </ul>
                                                </li>
                                            
                                    </ul>
                                </div>
                                <div id="mainmenu1_rptrMenu_ctl06_divshowresearch" class="col-lg-4 d-none d-lg-block st-research-img">
                                    <div class="position-relative h-100">
                                        <div class="st-research-cont">
                                            <h4>
                                                <span>A Research-Intensive</span> Environment</h4>
                                            <ul>
                                                <li>
                                                    <h5>
                                                        750+ <span>Patents Published</span></h5>
                                                </li>
                                                <li>
                                                    <h5>
                                                        10000+ <span>Publications </span>
                                                    </h5>
                                                </li>
                                                <li>
                                                    <h5>
                                                        14 <span>Research Centres </span>
                                                    </h5>
                                                </li>
                                                <li>
                                                    <h5> 
                                                        75+ <span>Patents Granted </span>
                                                    </h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </li>
            
    </ul>
</div>
<ul class="navbar-nav mr-auto toggler-list" style="display: none">
</ul>
<ul class="nav-last-link">
    <li class="option searchnav"><a href="#" class="showsearch">
        <img src="images/index-search.png" alt="search icon" class="home-img">
        <img src="/images/search-icon1.png" alt="search icon" class="inner-img">
    </a></li>
    <li><a class="menu-bar" href="#">
        <img src="/images/hamburger-menu-icon.png" alt="hamburger icon" class="home-img">
        <img src="/images/hamburger-menu-icon1.png" alt="hamburger icon" class="inner-img">
    </a></li>
</ul>


            </div>
          </div>
        </nav>
</header>

<section class="p-0">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="/img/crousal-1.jpg" class="d-block w-100" alt="GLA Campus">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="color: black;">Welcome to GLA University</h5>
          <p style="color: black;">Empowering Future Leaders Through Quality Education</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/crousal-2.jpg" class="d-block w-100" alt="Students at GLA">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="color: black;">Top Courses & Expert Faculty</h5>
          <p style="color: black;">Explore B.Tech, MBA, B.Pharm, and More</p>
        </div>
      </div>
      <div class="carousel-item">
      <img src="/img/crousal-3.jpg" class="d-block w-100" alt="Placement Drive">
        <div class="carousel-caption d-none d-md-block">
          <h5 style="color: black;">Excellent Placement Record</h5>
          <p style="color: black;">Dream Packages Up to ₹55 LPA</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<section class="container row mt-2" id="about" data-aos="fade-up">
  <div class="col-lg-6">
    <h2>About GLA University</h2>
    <p>GLA University offers a wide range of UG, PG & PhD programs. With NAAC A+ accreditation and world-class infrastructure, GLA ensures a strong foundation for your future.</p>
  </div>
  <div class="col-lg-6">
    <img src="/img/aboutus.jpeg" alt="About GLA" style="width:80%" class="img-fluid rounded shadow">
  </div>
</section>

<section class="container mt-4" id="courses" data-aos="fade-up">
  <h2>🎓 Top Courses</h2>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card h-100">
        <img src="/img/aboutus.jpeg" class="card-img-top" alt="B.Tech">
        <div class="card-body">
          <h5 class="card-title">B.Tech</h5>
          <p class="card-text">CSE, Mech, Civil, ECE</p>
          <a href="#" class="btn btn-primary">Learn more..</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100">
        <img src="/img/aboutus.jpeg" class="card-img-top" alt="MBA">
        <div class="card-body">
          <h5 class="card-title">MBA</h5>
          <p class="card-text">HR, Marketing, Finance</p>
          <a href="#" class="btn btn-primary">Learn more..</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100">
        <img src="/img/aboutus.jpeg" class="card-img-top" alt="BBA / B.Com">
        <div class="card-body">
          <h5 class="card-title">BBA / B.Com</h5>
          <p class="card-text">Hons Specializations</p>
          <a href="#" class="btn btn-primary">Learn more..</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100">
        <img src="/img/aboutus.jpeg" class="card-img-top" alt="Law">
        <div class="card-body">
          <h5 class="card-title">Law</h5>
          <p class="card-text">BA LLB, LLB</p>
          <a href="#" class="btn btn-primary">Learn more..</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100">
        <img src="/img/aboutus.jpeg" class="card-img-top" alt="M.Sc / M.Tech / PhD">
        <div class="card-body">
          <h5 class="card-title">M.Sc / M.Tech / PhD</h5>
          <p class="card-text">Science, Engineering, Research</p>
          <a href="#" class="btn btn-primary">Learn more..</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container card mt-2" id="fees" data-aos="fade-up">
  <h2>Fee Structure 2025</h2>
  <table>
    <thead>
      <tr><th>Course</th><th>Duration</th><th>Annual Fee</th><th>Total Fee</th></tr>
    </thead>
    <tbody>
      <tr><td>B.Tech</td><td>4 Years</td><td>₹1,65,000</td><td>₹6,60,000</td></tr>
      <tr><td>BBA</td><td>3 Years</td><td>₹95,000</td><td>₹2,85,000</td></tr>
      <tr><td>MBA</td><td>2 Years</td><td>₹1,97,000</td><td>₹3,94,000</td></tr>
    </tbody>
  </table>
</section>

<section class="container card mt-2" id="placements" data-aos="fade-up">
  <h2>Placement Highlights</h2>
  <table>
    <thead>
      <tr><th>Year</th><th>Highest Package</th><th>Avg Package</th><th>Companies</th></tr>
    </thead>
    <tbody>
      <tr><td>2023</td><td>₹55 LPA</td><td>₹5.8 LPA</td><td>350+</td></tr>
      <tr><td>2022</td><td>₹44 LPA</td><td>₹4.9 LPA</td><td>320+</td></tr>
    </tbody>
  </table>
</section>

<section class="container" id="faqs" data-aos="fade-up">
  <h2>FAQs</h2>
  <dl class="faq">
    <dt>Is GLA UGC approved?</dt>
    <dd>Yes, and NAAC A+ accredited.</dd>
    <dt>Does GLA offer scholarships?</dt>
    <dd>Yes, merit-based and sports scholarships available.</dd>
    <dt>Are hostels available?</dt>
    <dd>Yes, with AC/Non-AC options and mess facility.</dd>
  </dl>
</section>

<footer>
  <p>&copy; 2025 GLA University. All Rights Reserved.</p>
  <p>Email: admissions@gla.ac.in | Phone: +91-XXXX-XXXXXX</p>
</footer>

<!-- Bootstrap & AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ duration: 1000, once: true });

  // Smooth scroll fallback for older browsers
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth"
      });
    });
  });
</script>
</body>
</html>
