<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LPU University - Landing Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        * { margin:0; padding:0; box-sizing:border-box; }
        body { font-family:'Segoe UI', sans-serif; line-height:1.6; color:#333; scroll-behavior:smooth; }
        h1,h2 { color:#004080; }
        h1 { font-size:2.5rem; } h2 { font-size:2rem; margin-bottom:20px; position:relative; padding-bottom:10px; }
        h2::after { content:''; width:60px; height:4px; background:#004080; position:absolute; left:0; bottom:0; border-radius:2px; }
        /* Adjusted styles for the provided header's navbar */
        nav.container { display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; }
        nav ul { list-style:none; display:flex; gap:20px; flex-wrap:wrap; margin-bottom: 0; } /* Added margin-bottom: 0 */
        nav ul li a { color:white; text-decoration:none; font-weight:500; }
        nav ul li a:hover { color:#ffcc00; }
        header { background-color:#002244; color:black; padding:20px 20px; }
        section { padding:20px; }
        .carousel-item img { width:100%; height:500px; object-fit:cover; border-radius:1px; margin:auto; }
        .slider-item { padding:20px; text-align:center; }
        .slider-item img { width:100%; max-height:200px; object-fit:cover; border-radius:6px; box-shadow:0 2px 10px rgba(0,0,0,0.1); }
        .slider-item p { font-size:16px; padding-top:10px; }
        .custom-section { background:#f9f9f9; border-radius:12px; padding:20px; }
        .img-box img { max-width:150px; border-radius:8px; }
        .text-box p { font-size:16px; line-height:1.6; margin:0; }
        table { width:100%; border-collapse:collapse; margin-top:10px; }
        th,td { border:1px solid #ccc; padding:12px; }
        th { background:#e0f0ff; }
        .card { transition:transform 0.3s ease, box-shadow 0.3s ease; transform:scale(0.95); }
        .card:hover { transform:scale(0.97) translateY(-5px); box-shadow:0 10px 20px rgba(0,0,0,0.15); }
        img.card-img-top { border-radius:6px 6px 0 0; height:160px; object-fit:cover; }
        footer { background:#002244; color:#fff; text-align:center; padding:30px 20px; }
        @media(max-width:768px){ nav ul { flex-direction:column; gap:10px; margin-top:10px; } }

        /* Styles from previous LPU header - adjust if they conflict with new header */
        .bg-white { background-color: white; }
        .row.align-items-center { align-items: center; }
        .justify-content-end { justify-content: flex-end; }
        .d-flex { display: flex; }
        .flex-wrap { flex-wrap: wrap; }
        .fs-13 { font-size: 13px; }
        .fs-12 { font-size: 12px; }
        .fs-18 { font-size: 18px; }
        .b700 { font-weight: 700; }
        .lh-25 { line-height: 1.5; }
        .pr-2 { padding-right: 0.5rem; }
        .mr-2 { margin-right: 0.5rem; }
        .pr-150px { padding-right: 150px; }
        .pl-150px { padding-left: 150px; }
        .pt-1 { padding-top: 0.25rem; }
        .pb-1 { padding-bottom: 0.25rem; }
        .pl-3 { padding-left: 1rem; }
        .ml-3 { margin-left: 1rem; }
        .border-left { border-left: 1px solid #ccc; }
        .border-right { border-right: 1px solid #ccc; }
        .border-top { border-top: 1px solid #eee; }
        .border-bottom { border-bottom: 1px solid #eee; }
        .text-color { color: #f58220; }
        .theme-btn {
            background-color: #007bff;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }
        .theme-btn-sm { padding: 5px 10px; font-size: 12px; }
        .logo-box { display: flex; align-items: center; }
        .logo img { max-height: 50px; }
        .user-btn-action { display: flex; align-items: center; }
        .icon-element {
            width: 30px; height: 30px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            background-color: #f0f0f0; cursor: pointer;
        }
        .icon-element-sm { width: 25px; height: 25px; font-size: 16px; }
        .shadow-sm { box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; }
        .menu-category ul { list-style: none; padding: 0; margin: 0; display: flex; }
        .menu-category ul li { position: relative; padding: 10px 15px; }
        .menu-category ul li a { text-decoration: none; color: #333; display: block; }
        .cat-dropdown-menu {
            display: none; position: absolute; top: 100%; left: 0;
            background-color: white; box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            z-index: 1000; min-width: 250px; padding: 10px 0;
        }
        .cat-dropdown-menu li { padding: 8px 15px; white-space: nowrap; }
        .cat-dropdown-menu li:hover { background-color: #f8f8f8; }
        .menu-category ul li:hover .cat-dropdown-menu { display: block; }
        .sub-menu {
            display: none; position: absolute; left: 100%; top: 0;
            background-color: white; box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            min-width: 300px; padding: 10px 0;
        }
        .cat-dropdown-menu li:hover .sub-menu { display: block; }
        .ribbon {
            background-color: #f58220;
            color: white;
            padding: 2px 5px;
            font-size: 10px;
            border-radius: 3px;
            margin-left: 5px;
        }
        .generic-list-item { list-style: none; padding: 0; margin: 0; }
        .off-canvas-menu {
            position: fixed; top: 0; right: -300px;
            width: 300px; height: 100%; background-color: white;
            box-shadow: -2px 0 5px rgba(0,0,0,0.1); z-index: 10000;
            overflow-y: auto; transition: right 0.3s ease-in-out;
        }
        .off-canvas-menu.active { right: 0; }
        .off-canvas-menu-close { position: absolute; top: 15px; right: 15px; }
        .pt-90px { padding-top: 90px; }

        @media (max-width: 991px) {
            .hide-on-mob-nav { display: none !important; }
            .lp-hide { display: none !important; }
            .mob-logo { width: 100%; text-align: center; }
            .menu-wrapper { justify-content: center !important; }
            .header-menu-content { padding: 10px !important; }
            .menu-category ul { flex-direction: column; }
            .menu-category ul li { padding: 5px 0; width: 100%; }
            .cat-dropdown-menu, .sub-menu { position: static; box-shadow: none; width: 100%; padding: 0; }
            .cat-dropdown-menu li, .sub-menu li { padding-left: 20px; }
            .main-menu-content .d-xl-none { display: block !important; }
            .ph-no-on-moile { display: block; float: none !important; text-align: center; margin-top: 10px; }
        }

        .slimScrollDiv {
            position: relative;
            overflow: hidden;
            width: auto;
            height: 400px;
        }
        .slim-scroll {
            overflow: hidden;
            width: auto;
            height: 400px;
        }
        .slimScrollBar {
            background: rgb(88, 88, 88);
            width: 7px;
            position: absolute;
            top: 0px;
            opacity: 0.4;
            display: block;
            border-radius: 7px;
            z-index: 99;
            right: 1px;
            height: 192.539px;
        }
        .slimScrollRail {
            width: 7px;
            height: 100%;
            position: absolute;
            top: 0px;
            display: none;
            border-radius: 7px;
            background: rgb(51, 51, 51);
            opacity: 0.2;
            z-index: 90;
            right: 1px;
        }
        .card {
            border: 1px solid #eee;
            border-radius: 5px;
            margin: 5px;
            padding: 10px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }
        .specializations-nav { list-style: none; padding-left: 15px; margin: 0; }
        .specializations-nav li { padding: 5px 0; }
        .specializations-nav a { display: flex; align-items: center; justify-content: space-between; }
        .specializations-nav a i { margin-left: 5px; }

        .off-canvas-menu-list a.click2 + ul.sub-menu {
            display: none;
            padding-left: 20px;
        }
        .off-canvas-menu-list a.click2.active + ul.sub-menu {
            display: block;
        }
    </style>
</head>
<body>
    <header class="header-menu-area bg-white">
        <div class="container ">
            <div class="row align-items-center pt-1 pb-1">
                <div class="col-lg-12 ">
                    <div class="header-widget d-flex flex-wrap align-items-center justify-content-end">
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-13 border-left border-left-gray pl-3 ml-3">
                            <li class="d-flex align-items-center pr-2 mr-2 border-right border-right-gray hide-on-mob-nav"> <a target="_blank" href="https://www.lpude.in/">Distance Education</a></li>
                            <li class="d-flex align-items-center pr-2 mr-2 border-right border-right-gray hide-on-mob-nav"> <a target="_blank" href="https://www.lpu.in/">Regular Education</a></li>
                            <li class="d-flex align-items-center pr-2 mr-2 border-right border-right-gray  "><a href="https://www.lpuonline.com/approval-and-recognitions.php">Recognitions</a></li>
                            <li class="d-flex align-items-center pr-2 mr-2 border-right border-right-gray"><a href="https://www.lpuonline.com/deb-id-generation.php"> DEB-ID</a></li>
                            <li class="d-flex align-items-center pr-2 mr-2 border-right border-right-gray hide-on-mob-nav"> <a class="text-color b700" href="https://www.lpuonline.com/alumni.php">Alumni Advantage</a></li>
                            
                            <li class="d-flex align-items-center pr-2 mr-2 border-right border-right-gray hide-on-mob-nav"> <a target="_blank" href="https://admission.lpuonline.com/international-applicants">International Applicant</a></li>
                            
                            
                            <li class="d-flex align-items-center pr-2 mr-2 border-right border-right-gray"><a href="https://www.lpuonline.com/placement.php">Placement Support</a></li>
                            <li class="d-flex align-items-center pr-2 mr-2 border-right border-right-gray hide-on-mob-nav"><a href="https://www.lpuonline.com/jobs-at-lpuonline.php">Jobs @ LPU Online</a></li>
                            <li class="d-flex align-items-center pr-2 mr-2 border-right border-right-gray hide-on-mob-nav"><a href="https://www.lpuonline.com/contact-us.php">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div></div><div class="header-menu-content pr-150px pl-150px bg-white border-top border-bottom pt-1 pb-1">
            <div class="container">
                <div class="main-menu-content">
                    <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                    <div class="row align-items-center">
                        <div class="col-lg-3 mob-logo">
                            <div class="logo-box"> <a href="https://www.lpuonline.com/" class="logo"><img src="/img/LPU-Online-Logo.png" alt="LPU Online - UGC Entitled Online Degree Programs"></a>
                                <div class="user-btn-action" style="display: flex;align-items: center;">
                                    <div class="mr-2 lp-hide">
                                        <div style="margin-bottom:5px;">
                                            </div>
                                        <div class="d-lg-none">
                                            <a target="_blank" href="tel:01824520001" class="mb-2 btn theme-btn theme-btn-sm text-white lp-hide fs-12"> <i class="las la-phone la-lg"></i>01824-520001</a>
                                        </div>
                                    </div>
                                    <div class="off-canvas-menu-toggle cat-menu-toggle icon-element icon-element-sm shadow-sm mr-2" data-toggle="tooltip" data-placement="top" title="Category menu"> <i class="la la-bars"></i> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="menu-wrapper d-flex justify-content-end">
                                <div class="menu-category">
                                    <ul>
                                        <li> <a class="font-weight-bold">Admission <i class="la la-angle-down fs-12"></i></a>
                                            <ul class="cat-dropdown-menu">
                                                <li><a href="https://www.lpuonline.com/post-graduate-admissions.php">Post Graduate Admissions </a></li>
                                                <li><a href="https://www.lpuonline.com/under-graduate-admissions.php">Under Graduate Admissions  </a></li>
                                                <li><a href="https://www.lpuonline.com/diploma-admissions.php">Diploma Admissions </a></li>
                                                <li><a href="https://admission.lpuonline.com/international-applicants/">International Applicant </a></li>                                                
                                                <li><a href="https://www.lpuonline.com/jai-jawan-scholarship.php">Jai Jawan Scholarship <span class="ribbon">New</span></a></li>
                                                <li><a href="https://www.lpuonline.com/alumni.php">Alumni Advantage </a></li>
                                                <li><a style="cursor: pointer;" data-toggle="modal" data-target="#prospectus"> Download Prospectus </a></li>
                                                <li><a href="https://www.lpuonline.com/why-lpu-online.php">Why LPU Online? </a></li>
                                                <li><a href="https://www.lpuonline.com/how-to-apply.php">How to Apply? </a></li>
                                                <li><a href="https://www.lpuonline.com/important-dates.php">Important dates </a></li>
                                                <li><a href="https://www.lpuonline.com/faq.php">FAQs </a></li>

                                            </ul>
                                        </li>
                                    <li> <a class="font-weight-bold">Programs <i class="la la-angle-down fs-12"></i></a>
                                            <ul class="cat-dropdown-menu">
                                                <li> <a href="javascript:void(0)">Management <i class="la la-angle-right"></i></a>
                                                    <div class="sub-menu">
                                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 400px;"><div class="slim-scroll" style="overflow: hidden; width: auto; height: 400px;">

                                                            <div class="mb-1">
                                                                <a class="w-90" href="https://www.lpuonline.com/online-mba-course.php">
                                                                    <div class="card m-2 p-2">
                                                                        <h5 class="fs-18 b700 lh-25 text-color">MBA</h5>
                                                                        <h5 class="fs-14 lh-25">Master of Business Administration</h5>
                                                                        <div class="d-flex align-items-center "> <span class="lh-18 fs-11 pr-2">2 Years
                                                                            </span> <span class="lh-18 fs-11 pr-2 text-black">|</span> <span class="lh-18 fs-11 pr-2">Single/Dual specialization available</span> </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="mb-1">

                                                                <div class="m-2 ">
                                                                    <h5 class="fs-18 b700 lh-25 text-color">Specializations offered</h5>
                                                                    <ul class="specializations-nav">
                                                                        <li> <a href="https://www.lpuonline.com/online-mba-human-resource-management.php"> MBA - HRM <i class="la la-angle-right"></i></a></li>
                                                                        <li> <a href="https://www.lpuonline.com/online-mba-finance.php"> MBA - Finance<i class="la la-angle-right"></i></a></li>
                                                                        <li> <a href="https://www.lpuonline.com/online-mba-marketing.php"> MBA - Marketing<i class="la la-angle-right"></i></a></li>
                                                                        <li> <a href="https://www.lpuonline.com/online-mba-operations-management.php"> MBA - Operations Management<i class="la la-angle-right"></i></a></li>
                                                                        <li> <a href="https://www.lpuonline.com/online-mba-business-analytics.php"> MBA - Business Analytics<i class="la la-angle-right"></i></a></li>
                                                                        <li> <a href="https://www.lpuonline.com/online-mba-digital-marketing.php"> MBA - Digital Marketing<i class="la la-angle-right"></i></a></li>
                                                                        <li> <a href="https://www.lpuonline.com/online-mba-data-science.php"> MBA - Data Science<i class="la la-angle-right"></i></a></li>
                                                                        <li> <a href="https://www.lpuonline.com/online-mba-information-technology.php"> MBA - Information Technology<i class="la la-angle-right"></i></a></li>
                                                                        <li> <a href="https://www.lpuonline.com/online-mba-international-business.php"> MBA - International Business<i class="la la-angle-right"></i></a></li>
                                                                        <li> <a href="online-mba-hospital-and-healthcare-management.php"> MBA - Hospital and Healthcare Management <span style="height:23px" class="ribbon">New</span> <i class="la la-angle-right"></i></a></li>
                                                                        <li> <a href="online-mba-logistics-and-supply-chain-management.php"> MBA -  Logistics and Supply Chain Management <span style="height:23px" class="ribbon">New</span><i class="la la-angle-right"></i></a></li>
                                                                        <li> <a href="online-mba-banking-and-financial-services.php"> MBA Banking and Financial Services <span style="height:23px" class="ribbon">New</span><i class="la la-angle-right"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            <div class="mb-1">
                                                                <a class="w-90" href="https://www.lpuonline.com/bachelor-of-business-administration-course-online.php">
                                                                    <div class="card m-2 p-2">
                                                                        <h5 class="fs-18 b700 lh-25 text-color">BBA</h5>
                                                                        <h5 class="fs-14 lh-25">Bachelor of Business Administration </h5>
                                                                        <div class="d-flex align-items-center "> <span class="lh-18 fs-12 pr-2">3 Years
                                                                            </span> <span class="lh-18 fs-12 pr-2 text-black">|</span> <span class="lh-18 fs-12 pr-2">LIVE + Recorded </span> </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="mb-1">
                                                                <a class="w-90" href="https://www.lpuonline.com/diploma-in-business-administration-course-online.php">
                                                                    <div class="card m-2 p-2">
                                                                        <h5 class="fs-18 b700 lh-25 text-color"> DBA</h5>
                                                                        <h5 class="fs-14 lh-25">Diploma in Business Administration </h5>
                                                                        <div class="d-flex align-items-center "> <span class="lh-18 fs-12 pr-2">1 Year
                                                                            </span> <span class="lh-18 fs-12 pr-2 text-black">|</span> <span class="lh-18 fs-12 pr-2">LIVE + Recorded </span> </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div><div class="slimScrollBar" style="background: rgb(88, 88, 88); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 192.539px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                                    </div>
                                                </li>
                                                <li> <a href="javascript:void(0)">Computer Applications <i class="la la-angle-right"></i></a>
                                                    <div class="sub-menu">
                                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 400px;"><div class="slim-scroll" style="overflow: hidden; width: auto; height: 400px;">
                                                            <div class="mb-1">
                                                                <a class="w-90" href="https://www.lpuonline.com/master-of-computer-application.php">
                                                                    <div class="card m-2 p-2">
                                                                        <h5 class="fs-18 b700 lh-25 text-color">MCA</h5>
                                                                        <h5 class="fs-14 lh-25">Master of Computer Applications</h5>
                                                                        <div class="d-flex align-items-center "> <span class="lh-18 fs-12 pr-2">2 Years
                                                                            </span> <span class="lh-18 fs-12 pr-2 text-black">|</span> <span class="lh-18 fs-12 pr-2">LIVE + Recorded </span> </div>
                                                                    </div>
                                                                </a>
                                                            </div>



                                                            <div class="mb-1">

                                                                <div class="m-2 ">
                                                                    <h5 class="fs-18 b700 lh-25 text-color">Specializations offered</h5>
                                                                    <ul class="specializations-nav">
                                                                        <li> <a href="https://www.lpuonline.com/online-mca-ml-ai.php"> MCA - Machine Learning &amp; AI <i class="la la-angle-right"></i></a></li>
                                                                        <li> <a href="https://www.lpuonline.com/online-mca-data-science.php"> MCA - Data Science <i class="la la-angle-right"></i></a></li>
                                                                        <li> <a href="https://www.lpuonline.com/online-mca-cybersecurity.php"> MCA - Cybersecurity <i class="la la-angle-right"></i></a></li>
                                                                        <li> <a href="https://www.lpuonline.com/online-mca-full-stack-web-development.php"> MCA - Full Stack Web Development <i class="la la-angle-right"></i></a></li>
                                                                        <li> <a href="https://www.lpuonline.com/online-mca-ar-vr.php"> MCA - AR/ VR (Game Development) <i class="la la-angle-right"></i></a></li>


                                                                    </ul>
                                                                </div>
                                                            </div>



                                                            <div class="mb-1">
                                                                <a class="w-90" href="https://www.lpuonline.com/bachelor-of-computer-application-course-online.php">
                                                                    <div class="card m-2 p-2">
                                                                        <h5 class="fs-18 b700 lh-25 text-color">BCA</h5>
                                                                        <h5 class="fs-14 lh-25">Bachelor of Computer Applications</h5>
                                                                        <div class="d-flex align-items-center "> <span class="lh-18 fs-12 pr-2">3 Years
                                                                            </span> <span class="lh-18 fs-12 pr-2 text-black">|</span> <span class="lh-18 fs-12 pr-2">LIVE + Recorded </span> </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="mb-1">
                                                                <a class="w-90" href="https://www.lpuonline.com/diploma-in-computer-applications-course-online.php">
                                                                    <div class="card m-2 p-2">
                                                                        <h5 class="fs-18 b700 lh-25 text-color">DCA</h5>
                                                                        <h5 class="fs-14 lh-25">Diploma In Computer Applications</h5>
                                                                        <div class="d-flex align-items-center "> <span class="lh-18 fs-12 pr-2">1 Year
                                                                            </span> <span class="lh-18 fs-12 pr-2 text-black">|</span> <span class="lh-18 fs-12 pr-2">LIVE + Recorded </span> </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div><div class="slimScrollBar" style="background: rgb(88, 88, 88); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 292.505px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Commerce <i class="la la-angle-right"></i></a>
                                                    <div class="sub-menu">
                                                        <div class="mb-1">
                                                            <a class="w-90" href="https://www.lpuonline.com/m-com-course-online.php">
                                                                <div class="card m-2 p-2">
                                                                    <h5 class="fs-18 b700 lh-25 text-color">M.Com</h5>
                                                                    <h5 class="fs-14 lh-25">Master of Commerce </h5>
                                                                    <div class="d-flex align-items-center "> <span class="lh-18 fs-12 pr-2">2 Years
                                                                        </span> <span class="lh-18 fs-12 pr-2 text-black">|</span> <span class="lh-18 fs-12 pr-2">LIVE + Recorded </span> </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Arts <i class="la la-angle-right"></i></a>
                                                    <div class="sub-menu">
                                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 400px;"><div class="slim-scroll" style="overflow: hidden; width: auto; height: 400px;">
                                                            <div class="mb-1">
                                                                <a class="w-90" href="https://www.lpuonline.com/bachelor-of-arts-course-online.php">
                                                                    <div class="card m-2 p-2">
                                                                        <h5 class="fs-18 b700 lh-25 text-color"> BA</h5>
                                                                        <h5 class="fs-14 lh-25">Bachelor of Arts </h5>
                                                                        <div class="d-flex align-items-center"> <span class="lh-18 fs-12 pr-2">3 Years
                                                                            </span> <span class="lh-18 fs-12 pr-2 text-black">|</span> <span class="lh-18 fs-12 pr-2">LIVE + Recorded </span> </div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                            <div class="mb-1">
                                                                <a class="w-90" href="https://www.lpuonline.com/ma-english-course-online.php">
                                                                    <div class="card m-2 p-2">
                                                                        <h5 class="fs-18 b700 lh-25 text-color">MA English</h5>
                                                                        <h5 class="fs-14 lh-25">Master of Arts (English) </h5>
                                                                        <div class="d-flex align-items-center"> <span class="lh-18 fs-12 pr-2">2 Years
                                                                            </span> <span class="lh-18 fs-12 pr-2 text-black">|</span> <span class="lh-18 fs-12 pr-2">LIVE + Recorded </span> </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="mb-1">
                                                                <a class="w-90" href="https://www.lpuonline.com/ma-history-course-online.php">
                                                                    <div class="card m-2 p-2">
                                                                        <h5 class="fs-18 b700 lh-25 text-color">MA History</h5>
                                                                        <h5 class="fs-14 lh-25">Master of Arts (History) </h5>
                                                                        <div class="d-flex align-items-center"> <span class="lh-18 fs-12 pr-2">2 Years
                                                                            </span> <span class="lh-18 fs-12 pr-2 text-black">|</span> <span class="lh-18 fs-12 pr-2">LIVE + Recorded </span> </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="mb-1">
                                                                <a class="w-90" href="https://www.lpuonline.com/ma-sociology-course-online.php">
                                                                    <div class="card m-2 p-2">
                                                                        <h5 class="fs-18 b700 lh-25 text-color">MA Sociology</h5>
                                                                        <h5 class="fs-14 lh-25">Master of Arts (Sociology) </h5>
                                                                        <div class="d-flex align-items-center"> <span class="lh-18 fs-12 pr-2">2 Years
                                                                            </span> <span class="lh-18 fs-12 pr-2 text-black">|</span> <span class="lh-18 fs-12 pr-2">LIVE + Recorded </span> </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="mb-1">
                                                                <a class="w-90" href="https://www.lpuonline.com/ma-political-science-course-online.php">
                                                                    <div class="card m-2 p-2">
                                                                        <h5 class="fs-18 b700 lh-25 text-color">MA Political Science</h5>
                                                                        <h5 class="fs-14 lh-25">Master of Arts (Political Science)</h5>
                                                                        <div class="d-flex align-items-center"> <span class="lh-18 fs-12 pr-2">2 Years
                                                                            </span> <span class="lh-18 fs-12 pr-2 text-black">|</span> <span class="lh-18 fs-12 pr-2">LIVE + Recorded </span> </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div><div class="slimScrollBar" style="background: rgb(88, 88, 88); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 341.88px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                                    </div>
                                                </li>
                                                <li> <a href="javascript:void(0)">Science <i class="la la-angle-right"></i></a>
                                                    <div class="sub-menu">
                                                        <div class="mb-1">
                                                            <a class="w-90" href="https://www.lpuonline.com/msc-mathematics-course-online.php">
                                                                <div class="card m-2 p-2">
                                                                    <h5 class="fs-18 b700 lh-25 text-color">M.Sc Mathematics</h5>
                                                                    <h5 class="fs-14 lh-25">Master of Science (Mathematics)</h5>
                                                                    <div class="d-flex align-items-center "> <span class="lh-18 fs-12 pr-2">2 Years
                                                                        </span> <span class="lh-18 fs-12 pr-2 text-black">|</span> <span class="lh-18 fs-12 pr-2">LIVE + Recorded </span> </div>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="mb-1">
                                                            <a class="w-90" href="https://www.lpuonline.com/msc-economics-course-online.php">
                                                                <div class="card m-2 p-2">
                                                                    <h5 class="fs-18 b700 lh-25 text-color">M.Sc Economics </h5>
                                                                    <h5 class="fs-14 lh-25">Master of Science (Economics) </h5>
                                                                    <div class="d-flex align-items-center "> <span class="lh-18 fs-12 pr-2">2 Years
                                                                        </span> <span class="lh-18 fs-12 pr-2 text-black">|</span> <span class="lh-18 fs-12 pr-2">LIVE + Recorded </span> </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>


                                        <li> <a target="_blank" href="https://admission.lpuonline.com/" class="font-weight-bold text-color edureka-hide lp-hide">Apply Now </a></li>
                                        <li class="mr-4"> <a href="#test-modal" data-effect="mfp-zoom-in" class="popup-modal  font-weight-bold lp-hide">LMS Login </a></li>

                                    </ul>
                                </div>
                                <div class="nav-right-button">
                                    <a target="_blank" href="tel:01824520001" class="mb-2 btn theme-btn theme-btn-sm text-white lp-hide"> <i class="las la-phone la-lg"></i> 01824-520001</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        <div class="off-canvas-menu custom-scrollbar-styled category-off-canvas-menu">
            <div class="off-canvas-menu-close cat-menu-close icon-element icon-element-sm shadow-sm" data-placement="left" title="Close menu"> <i class="la la-times"></i> </div>
            <ul class="generic-list-item off-canvas-menu-list pt-90px">





                <li> <a class="click2">Admission </a>
                    <ul class="sub-menu">
                        <li><a href="https://www.lpuonline.com/post-graduate-admissions.php">Post Graduate Admissions </a></li>
                        <li><a href="https://www.lpuonline.com/under-graduate-admissions.php">Under Graduate Admissions</a> </li>
                        <li><a href="https://www.lpuonline.com/diploma-admissions.php">Diploma Admissions </a></li>
                        <li><a href="https://admission.lpuonline.com/international-applicants">International Applicant </a></li>
                        <li><a href="https://www.lpuonline.com/jai-jawan-scholarship.php">Jai Jawan Scholarship <span class="ribbon">New</span></a></li>
                        <li><a href="https://www.lpuonline.com/alumni.php">Alumni Advantage </a></li>
                        <li><a data-toggle="modal" data-target="#prospectus"> Download Prospectus </a></li>
                        <li><a href="https://www.lpuonline.com/why-lpu-online.php">Why LPU Online? </a></li>
                        <li><a href="https://www.lpuonline.com/how-to-apply.php">How to Apply? </a></li>
                        <li><a href="https://www.lpuonline.com/important-dates.php">Important dates </a></li>
                        <li><a href="https://www.lpuonline.com/faq.php">FAQs </a></li>

                    </ul>
                </li>





                <li> <a class="click2" href="#">Management </a>
                    <ul class="sub-menu">
                        <li><a style="display:block" href="https://www.lpuonline.com/online-mba-course.php">Master of Business Administration <br>
                                <span class="lh-18 fs-11">Single/Dual specialization available</span>
                            </a></li>



                        <h5 class="fs-15 b700 text-color pl-3 pt-2">Specializations offered</h5>


                        <ul class=" ">
                            <li> <a href="https://www.lpuonline.com/online-mba-human-resource-management.php"> MBA - HRM </a></li>
                            <li> <a href="https://www.lpuonline.com/online-mba-finance.php"> MBA - Finance</a></li>
                            <li> <a href="https://www.lpuonline.com/online-mba-marketing.php"> MBA - Marketing</a></li>
                            <li> <a href="https://www.lpuonline.com/online-mba-operations-management.php"> MBA - Operations Management</a></li>
                            <li> <a href="https://www.lpuonline.com/online-mba-business-analytics.php"> MBA - Business Analytics</a></li>
                            <li> <a href="https://www.lpuonline.com/online-mba-digital-marketing.php"> MBA - Digital Marketing</a></li>
                            <li> <a href="https://www.lpuonline.com/online-mba-data-science.php"> MBA - Data Science</a></li>
                            <li> <a href="https://www.lpuonline.com/online-mba-information-technology.php"> MBA - Information Technology</a></li>
                            <li> <a href="https://www.lpuonline.com/online-mba-international-business.php"> MBA - International Business</a></li>
                            <li> <a href="online-mba-hospital-and-healthcare-management.php"> MBA - Hospital and Healthcare Management  <span class="ribbon">New</span></a></li>
                            <li> <a href="online-mba-logistics-and-supply-chain-management.php"> MBA -  Logistics and Supply Chain Management  <span class="ribbon">New</span> </a></li>
                            <li> <a href="online-mba-banking-and-financial-services.php"> MBA Banking and Financial Services <span class="ribbon">New</span></a></li>
                        </ul>
                        <hr>

                            <li><a style="display:block" href="https://www.lpuonline.com/bachelor-of-business-administration-course-online.php">Bachelor of Business Administration     </a></li>
                        <li><a style="display:block" href="https://www.lpuonline.com/diploma-in-business-administration-course-online.php">Diploma in Business Administration  </a></li>
                        
                    </ul>
                </li>
                <li> <a class="click2" href="#">Computer Applications</a>
                    <ul class="sub-menu">
                        <li><a href="https://www.lpuonline.com/bachelor-of-computer-application-course-online.php">Bachelor of Computer Applications</a></li>
                        <li><a href="https://www.lpuonline.com/diploma-in-computer-applications-course-online.php">Diploma In Computer Applications</a></li>

                        <li><a href="https://www.lpuonline.com/master-of-computer-application.php">Master of Computer Applications</a></li>
                        <h5 class="fs-15 b700 text-color pl-3 pt-2">Specializations offered</h5>
                        <ul class="">
                            <li> <a href="https://www.lpuonline.com/online-mca-ml-ai.php"> MCA - Machine Learning &amp; AI <i class="la la-angle-right"></i></a></li>
                            <li> <a href="https://www.lpuonline.com/online-mca-data-science.php"> MCA - Data Science <i class="la la-angle-right"></i></a></li>
                            <li> <a href="https://www.lpuonline.com/online-mca-cybersecurity.php"> MCA - Cybersecurity <i class="la la-angle-right"></i></a></li>
                            <li> <a href="https://www.lpuonline.com/online-mca-full-stack-web-development.php"> MCA - Full Stack Web Development <i class="la la-angle-right"></i></a></li>
                            <li> <a href="https://www.lpuonline.com/online-mca-ar-vr.php"> MCA - AR/ VR (Game Development) <i class="la la-angle-right"></i></a></li>
                        </ul>
                    </ul>
                </li>
                <li> <a class="click2" href="#">Commerce</a>
                    <ul class="sub-menu">
                        <li><a href="https://www.lpuonline.com/m-com-course-online.php">Master of Commerce</a></li>
                    </ul>
                </li>
                <li> <a class="click2" href="#">Arts</a>
                    <ul class="sub-menu">
                        <li><a href="https://www.lpuonline.com/bachelor-of-arts-course-online.php">Bachelor of Arts</a></li>
                            <li><a href="https://www.lpuonline.com/ma-economics-course-online.php">Master of Arts (Economics)</a></li>
                        <li><a href="https://www.lpuonline.com/ma-english-course-online.php">Master of Arts (English)</a></li>
                        <li><a href="https://www.lpuonline.com/ma-history-course-online.php">Master of Arts (History)</a></li>
                        <li><a href="https://www.lpuonline.com/ma-sociology-course-online.php">Master of Arts (Sociology)</a></li>
                        <li><a href="https://www.lpuonline.com/ma-political-science-course-online.php">Master of Arts (Political
                                    Science)</a></li>
                    </ul>
                </li>
                <li> <a class="click2" href="#">Science</a>
                    <ul class="sub-menu">
                        <li><a href="https://www.lpuonline.com/msc-mathematics-course-online.php">Master of Science (Math</a></li>
                        </ul>
                </li>
            </ul>
        </div>
    </header>

    <section class="container-fluid p-0">
        <div id="lpuCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/LPU-1.png" alt="LPU Campus">
                </div>
                <div class="carousel-item">
                    <img src="/img/LPU-3.png" alt="LPU Campus 2">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#lpuCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#lpuCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <div class="container my-2">
        <h2 class="lg:text-4xl md:text-3xl text-2xl pb-7 font-semibold pt-0 mt-10 leading-7 text-center text-black">Rankings</h2>

        <div class="lpuonline-highlight-slider">
            <div class="slider-item text-center px-3">
                <img src="/img/img-1.jpg" alt="Ranking 1" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover;">
                <p class="mb-0">LPU ranked 9th by THE World University Ranking 2025.</p>
            </div>
            <div class="slider-item text-center px-3">
                <img src="/img/img-5.jpg" alt="Ranking 2" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover;">
                <p class="mb-0">Ranked 4th in India by WURI Rankings 2024.</p>
            </div>
            <div class="slider-item text-center px-3">
                <img src="/img/img-3.jpg" alt="Ranking 3" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover;">
                <p class="mb-0">LPU excels in NIRF Rankings 2024.</p>
            </div>
            <div class="slider-item text-center px-3">
                <img src="/img/img-4.jpg" alt="Ranking 4" class="img-fluid rounded mb-3" style="height: 200px; object-fit: cover;">
                <p class="mb-0">Ranked in top 3 by THE Impact Ranking 2023.</p>
            </div>
        </div>
    </div>
    <section class="course-area section--padding position-relative overflow-hidden ">
    <div class="course-wrapper">
      <div class="container">
        <div class="section-heading   pb-30px text-center">
          <h1 class="section__title b100 fs-40 ffpt"> <span class="b700 fs-35">Explore Best Online Degree Programs In
              India</span></h1>
          <!--slider button strat-->
          <div style="top:85px" class="slider-custom-nav arrow-with-center hide-on-mobile">
            <button class="custom-prev-arrow electives-prev">
              <img alt="left arrow" src="https://www.lpu.in/lpu-assets/images/icons/vector-left.svg">
            </button>
            <button class="custom-next-arrow electives-next">
              <img alt="right arrow" src="https://www.lpu.in/lpu-assets/images/icons/vector-right.svg">
            </button>
          </div>
          <!--slider button end-->
        </div>
      </div>
      <div class="container">
        <ul class="nav nav-tabs generic-tab justify-content-center py-2" id="myTab" role="tablist">
          <li class="nav-item lh-15"> <a class="nav-link active" id="popular-course-tab" data-toggle="tab" href="#popular-course" role="tab" aria-controls="popular-course" aria-selected="false">PG
              Programs <br><span class="fs-12">(After Graduation)</span></a> </li>
          <li class="nav-item lh-15"> <a class="nav-link" id="trending-course-tab" data-toggle="tab" href="#trending-course" role="tab" aria-controls="trending-course" aria-selected="true">UG
              Programs <br><span class="fs-12">(After 12th)</span></a> </li>

              <li class="nav-item lh-15"> <a class="nav-link" id="diploma-course-tab" data-toggle="tab" href="#diploma-course" role="tab" aria-controls="diploma-course" aria-selected="true">Diploma
              Programs <br><span class="fs-12">(After 12th)</span></a> </li>
        </ul>
      </div>
      <div class="card-content-wrapper pt-10px">
        <div class="container">
          <div class="tab-content home-Programs" id="myTabContent ">


          <div class="tab-pane" id="diploma-course" role="tabpanel" aria-labelledby="diploma-course-tab">
          <div class="row  m-0">
    <div class="col-lg-4 mb-5">
                  <a href="diploma-in-business-administration-course-online.php">
                    </a><div class="shadow zoom-effect"><a href="diploma-in-business-administration-course-online.php">
                      <img class="w-100" src="images/dba.jpg" alt="Online DBA (Diploma in Business Administration)">
                      </a><div class="p-3"><a href="diploma-in-business-administration-course-online.php">
                        <div class="programs-list">DBA</div>
                        <h5 class="fs-16 pt-2"> Diploma in Business Administration </h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 1
                              Year</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="bbaFee">20,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="diploma-in-business-administration-course-online.php">
                          </a><a href="diploma-in-business-administration-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0">Learn More</a>
                        </div>
                      </div>
                    </div>
                  
                </div>
                <div class="col-lg-4 mb-5">
                  <a href="diploma-in-computer-applications-course-online.php">
                    </a><div class="shadow zoom-effect"><a href="diploma-in-computer-applications-course-online.php">
                      <img class="w-100" src="images/dca.jpg" alt="Online DCA (Diploma In Computer Applications)">
                      </a><div class="p-3"><a href="diploma-in-computer-applications-course-online.php">
                        <div class="programs-list">DCA</div>
                        <h5 class="fs-16 pt-2">Diploma In Computer Applications</h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 1
                              Year</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="bcaFee">20,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="diploma-in-computer-applications-course-online.php">
                          </a><a href="diploma-in-computer-applications-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0">Learn More</a>
                        </div>
                      </div>
                    </div>
                  
                </div>
                 
				   

              
                
            
  </div>
  </div>


            <div class="tab-pane" id="trending-course" role="tabpanel" aria-labelledby="trending-course-tab">
              <div class="row three-slide m-0 slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button>



                

                


                


              <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2040px; transform: translate3d(-765px, 0px, 0px);"><div class="col-lg-4 mb-5 slick-slide slick-cloned" style="width: 255px;" tabindex="-1" data-slick-index="-2" aria-hidden="true">
                  <a href="bachelor-of-computer-application-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="bachelor-of-computer-application-course-online.php" tabindex="-1">
                      <img src="images/bca.jpg" alt="Bachelor of Computer Applications BCA">
                      </a><div class="p-3"><a href="bachelor-of-computer-application-course-online.php" tabindex="-1">
                        <div class="programs-list">BCA</div>
                        <h5 class="fs-16 pt-2">Bachelor of Computer Applications </h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 3
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="bcaFee">20,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="bachelor-of-computer-application-course-online.php" tabindex="-1">
                          </a><a href="bachelor-of-computer-application-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide slick-cloned" style="width: 255px;" tabindex="-1" data-slick-index="-1" aria-hidden="true">
                  <a href="bachelor-of-arts-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="bachelor-of-arts-course-online.php" tabindex="-1">
                      <img src="images/ba.jpg" alt="Bachelor of Arts BA">
                      </a><div class="p-3"><a href="bachelor-of-arts-course-online.php" tabindex="-1">
                        <div class="programs-list">BA</div>
                        <h5 class="fs-16 pt-2">Bachelor of Arts </h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 3
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="baFee">16,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="bachelor-of-arts-course-online.php" tabindex="-1">
                          </a><a href="bachelor-of-arts-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide" style="width: 255px;" tabindex="-1" data-slick-index="0" aria-hidden="true">
                  <a href="bachelor-of-business-administration-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="bachelor-of-business-administration-course-online.php" tabindex="-1">
                      <img src="images/bba.jpg" alt="BBA">
                      </a><div class="p-3"><a href="bachelor-of-business-administration-course-online.php" tabindex="-1">
                        <div class="programs-list">BBA</div>
                        <h5 class="fs-16 pt-2"> Bachelor of Business Administration </h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 3
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="bbaFee">20,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="bachelor-of-business-administration-course-online.php" tabindex="-1">
                          </a><a href="bachelor-of-computer-application-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide slick-current slick-active" style="width: 255px;" tabindex="0" data-slick-index="1" aria-hidden="false">
                  <a href="bachelor-of-computer-application-course-online.php" tabindex="0">
                    </a><div class="shadow zoom-effect"><a href="bachelor-of-computer-application-course-online.php" tabindex="0">
                      <img src="images/bca.jpg" alt="Bachelor of Computer Applications BCA">
                      </a><div class="p-3"><a href="bachelor-of-computer-application-course-online.php" tabindex="0">
                        <div class="programs-list">BCA</div>
                        <h5 class="fs-16 pt-2">Bachelor of Computer Applications </h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 3
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="bcaFee">20,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="bachelor-of-computer-application-course-online.php" tabindex="0">
                          </a><a href="bachelor-of-computer-application-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="0">Learn More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide slick-active" style="width: 255px;" tabindex="0" data-slick-index="2" aria-hidden="false">
                  <a href="bachelor-of-arts-course-online.php" tabindex="0">
                    </a><div class="shadow zoom-effect"><a href="bachelor-of-arts-course-online.php" tabindex="0">
                      <img src="images/ba.jpg" alt="Bachelor of Arts BA">
                      </a><div class="p-3"><a href="bachelor-of-arts-course-online.php" tabindex="0">
                        <div class="programs-list">BA</div>
                        <h5 class="fs-16 pt-2">Bachelor of Arts </h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 3
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="baFee">16,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="bachelor-of-arts-course-online.php" tabindex="0">
                          </a><a href="bachelor-of-arts-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="0">Learn More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide slick-cloned" style="width: 255px;" tabindex="-1" data-slick-index="3" aria-hidden="true">
                  <a href="bachelor-of-business-administration-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="bachelor-of-business-administration-course-online.php" tabindex="-1">
                      <img src="images/bba.jpg" alt="BBA">
                      </a><div class="p-3"><a href="bachelor-of-business-administration-course-online.php" tabindex="-1">
                        <div class="programs-list">BBA</div>
                        <h5 class="fs-16 pt-2"> Bachelor of Business Administration </h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 3
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="bbaFee">20,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="bachelor-of-business-administration-course-online.php" tabindex="-1">
                          </a><a href="bachelor-of-computer-application-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide slick-cloned" style="width: 255px;" tabindex="-1" data-slick-index="4" aria-hidden="true">
                  <a href="bachelor-of-computer-application-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="bachelor-of-computer-application-course-online.php" tabindex="-1">
                      <img src="images/bca.jpg" alt="Bachelor of Computer Applications BCA">
                      </a><div class="p-3"><a href="bachelor-of-computer-application-course-online.php" tabindex="-1">
                        <div class="programs-list">BCA</div>
                        <h5 class="fs-16 pt-2">Bachelor of Computer Applications </h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 3
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="bcaFee">20,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="bachelor-of-computer-application-course-online.php" tabindex="-1">
                          </a><a href="bachelor-of-computer-application-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide slick-cloned" style="width: 255px;" tabindex="-1" data-slick-index="5" aria-hidden="true">
                  <a href="bachelor-of-arts-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="bachelor-of-arts-course-online.php" tabindex="-1">
                      <img src="images/ba.jpg" alt="Bachelor of Arts BA">
                      </a><div class="p-3"><a href="bachelor-of-arts-course-online.php" tabindex="-1">
                        <div class="programs-list">BA</div>
                        <h5 class="fs-16 pt-2">Bachelor of Arts </h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 3
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="baFee">16,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="bachelor-of-arts-course-online.php" tabindex="-1">
                          </a><a href="bachelor-of-arts-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn More</a>
                        </div>
                      </div>
                    </div>
                  
                </div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button></div>


            </div>

            <div class="tab-pane  show active" id="popular-course" role="tabpanel" aria-labelledby="popular-course-tab">
              <div class="row three-slide m-0 slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button>
                
                
                
                
                

                
                
                
                
              <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 5100px; transform: translate3d(-1275px, 0px, 0px);"><div class="col-lg-4 mb-5 slick-slide slick-cloned" style="width: 255px;" tabindex="-1" data-slick-index="-2" aria-hidden="true">
                  <a href="ma-history-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="ma-history-course-online.php" tabindex="-1">
                      <img src="images/ma-history.jpg" alt="Master of Arts (History)">
                      </a><div class="p-3"><a href="ma-history-course-online.php" tabindex="-1">
                        <div class="programs-list">MA History</div>
                        <h5 class="fs-16 pt-2">Master of Arts (History)</h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="maFee">16,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="ma-history-course-online.php" tabindex="-1">
                          </a><a href="ma-history-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn
                            More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide slick-cloned" style="width: 255px;" tabindex="-1" data-slick-index="-1" aria-hidden="true">
                  <a href="ma-sociology-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="ma-sociology-course-online.php" tabindex="-1">
                      <img src="images/ma-sociology.jpg" alt="Master of Arts (Sociology)">
                      </a><div class="p-3"><a href="ma-sociology-course-online.php" tabindex="-1">
                        <div class="programs-list">MA Sociology</div>
                        <h5 class="fs-16 pt-2">Master of Arts (Sociology)</h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="maFee">16,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="ma-sociology-course-online.php" tabindex="-1">
                          </a><a href="ma-sociology-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn
                            More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide" style="width: 255px;" tabindex="-1" data-slick-index="0" aria-hidden="true">
                  <a href="online-mba-course.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="online-mba-course.php" tabindex="-1">
                      <img src="images/mba.jpg" alt="Master of Business Administration (MBA)">
                      <div class="p-3">
                        <div class="programs-list">MBA (12 Specializations)</div>
                        <h5 class="fs-16 pt-2">Master of Business Administration </h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="mbaFee">40,400</span> Per Sem. </span>
                          </div>
                        </div>
                      </div>
                      <hr class="m-0">
                      </a><div class="p-3 "><a href="online-mba-course.php" tabindex="-1">
                        </a><a href="online-mba-course.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn More</a>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide" style="width: 255px;" tabindex="-1" data-slick-index="1" aria-hidden="true">
                  <a href="master-of-computer-application.php" tabindex="-1">
                  </a>
                  <div class="shadow zoom-effect"><a href="master-of-computer-application.php" tabindex="-1">
                      <img src="images/mca.jpg" alt="Master of Computer Applications (MCA)">
                    </a>
                    <div class="p-3"><a href="master-of-computer-application.php" tabindex="-1">
                        <div class="programs-list">MCA (5 Specializations)</div>
                        <h5 class="fs-16 pt-2">Master of Computer Applications </h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="mcaFee">30,000</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                      </a>
                      <div><a href="master-of-computer-application.php" tabindex="-1">
                        </a><a href="master-of-computer-application.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn More</a>
                      </div>
                    </div>
                  </div>

                </div><div class="col-lg-4 mb-5 slick-slide" style="width: 255px;" tabindex="-1" data-slick-index="2" aria-hidden="true">
                  <a href="msc-mathematics-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="msc-mathematics-course-online.php" tabindex="-1">
                      <img src="images/msc.jpg" alt="Master of Science (Mathematics)">
                      </a><div class="p-3"><a href="msc-mathematics-course-online.php" tabindex="-1">
                        <div class="programs-list">M.Sc Mathematics</div>
                        <h5 class="fs-16 pt-2">Master of Science (Mathematics)</h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="maFee">16,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="msc-mathematics-course-online.php" tabindex="-1">
                          </a><a href="msc-mathematics-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn
                            More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide slick-current slick-active" style="width: 255px;" tabindex="0" data-slick-index="3" aria-hidden="false">
                  <a href="msc-economics-course-online.php" tabindex="0">
                    </a><div class="shadow zoom-effect"><a href="msc-economics-course-online.php" tabindex="0">
                      <img src="images/msceco.jpg" alt="M.Sc Economics">
                      <div class="p-3">
                        <div class="programs-list">M.Sc Economics</div>
                        <h5 class="fs-16 pt-2">Master of Science Economics </h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="mscecoFee">16,400</span> Per Sem. </span>
                          </div>
                        </div>
                      </div>
                      <hr class="m-0">
                      </a><div class="p-3 "><a href="msc-economics-course-online.php" tabindex="0">
                        </a><a href="msc-economics-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="0">Learn More</a>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide slick-active" style="width: 255px;" tabindex="0" data-slick-index="4" aria-hidden="false">
                  <a href="m-com-course-online.php" tabindex="0">
                    </a><div class="shadow zoom-effect"><a href="m-com-course-online.php" tabindex="0">
                      <img src="images/m-com.jpg" alt="Master of Commerce (M.Com)">
                      </a><div class="p-3"><a href="m-com-course-online.php" tabindex="0">
                        <div class="programs-list">M.Com</div>
                        <h5 class="fs-16 pt-2">Master of Commerce (M.Com)</h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="mcomFee">20,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="m-com-course-online.php" tabindex="0">
                          </a><a href="m-com-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="0">Learn More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide" style="width: 255px;" tabindex="-1" data-slick-index="5" aria-hidden="true">
                  <a href="ma-english-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="ma-english-course-online.php" tabindex="-1">
                      <img src="images/ma-english.jpg" alt="Master of Arts (English)">
                      </a><div class="p-3"><a href="ma-english-course-online.php" tabindex="-1">
                        <div class="programs-list">MA English</div>
                        <h5 class="fs-16 pt-2">Master of Arts (English)</h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="maFee">16,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="ma-english-course-online.php" tabindex="-1">
                          </a><a href="ma-english-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn
                            More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide" style="width: 255px;" tabindex="-1" data-slick-index="6" aria-hidden="true">
                  <a href="ma-political-science-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="ma-political-science-course-online.php" tabindex="-1">
                      <img src="images/ma-political-science.jpg" alt="Master of Arts (Political Science)">
                      </a><div class="p-3"><a href="ma-political-science-course-online.php" tabindex="-1">
                        <div class="programs-list">MA Political Science</div>
                        <h5 class="fs-16 pt-2">Master of Arts (Political Science)</h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="maFee">16,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="ma-political-science-course-online.php" tabindex="-1">
                          </a><a href="ma-political-science-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide" style="width: 255px;" tabindex="-1" data-slick-index="7" aria-hidden="true">
                  <a href="ma-history-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="ma-history-course-online.php" tabindex="-1">
                      <img src="images/ma-history.jpg" alt="Master of Arts (History)">
                      </a><div class="p-3"><a href="ma-history-course-online.php" tabindex="-1">
                        <div class="programs-list">MA History</div>
                        <h5 class="fs-16 pt-2">Master of Arts (History)</h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="maFee">16,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="ma-history-course-online.php" tabindex="-1">
                          </a><a href="ma-history-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn
                            More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide" style="width: 255px;" tabindex="-1" data-slick-index="8" aria-hidden="true">
                  <a href="ma-sociology-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="ma-sociology-course-online.php" tabindex="-1">
                      <img src="images/ma-sociology.jpg" alt="Master of Arts (Sociology)">
                      </a><div class="p-3"><a href="ma-sociology-course-online.php" tabindex="-1">
                        <div class="programs-list">MA Sociology</div>
                        <h5 class="fs-16 pt-2">Master of Arts (Sociology)</h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="maFee">16,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="ma-sociology-course-online.php" tabindex="-1">
                          </a><a href="ma-sociology-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn
                            More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide slick-cloned" style="width: 255px;" tabindex="-1" data-slick-index="9" aria-hidden="true">
                  <a href="online-mba-course.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="online-mba-course.php" tabindex="-1">
                      <img src="images/mba.jpg" alt="Master of Business Administration (MBA)">
                      <div class="p-3">
                        <div class="programs-list">MBA (12 Specializations)</div>
                        <h5 class="fs-16 pt-2">Master of Business Administration </h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="mbaFee">40,400</span> Per Sem. </span>
                          </div>
                        </div>
                      </div>
                      <hr class="m-0">
                      </a><div class="p-3 "><a href="online-mba-course.php" tabindex="-1">
                        </a><a href="online-mba-course.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn More</a>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide slick-cloned" style="width: 255px;" tabindex="-1" data-slick-index="10" aria-hidden="true">
                  <a href="master-of-computer-application.php" tabindex="-1">
                  </a>
                  <div class="shadow zoom-effect"><a href="master-of-computer-application.php" tabindex="-1">
                      <img src="images/mca.jpg" alt="Master of Computer Applications (MCA)">
                    </a>
                    <div class="p-3"><a href="master-of-computer-application.php" tabindex="-1">
                        <div class="programs-list">MCA (5 Specializations)</div>
                        <h5 class="fs-16 pt-2">Master of Computer Applications </h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="mcaFee">30,000</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                      </a>
                      <div><a href="master-of-computer-application.php" tabindex="-1">
                        </a><a href="master-of-computer-application.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn More</a>
                      </div>
                    </div>
                  </div>

                </div><div class="col-lg-4 mb-5 slick-slide slick-cloned" style="width: 255px;" tabindex="-1" data-slick-index="11" aria-hidden="true">
                  <a href="msc-mathematics-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="msc-mathematics-course-online.php" tabindex="-1">
                      <img src="images/msc.jpg" alt="Master of Science (Mathematics)">
                      </a><div class="p-3"><a href="msc-mathematics-course-online.php" tabindex="-1">
                        <div class="programs-list">M.Sc Mathematics</div>
                        <h5 class="fs-16 pt-2">Master of Science (Mathematics)</h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="maFee">16,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="msc-mathematics-course-online.php" tabindex="-1">
                          </a><a href="msc-mathematics-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn
                            More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide slick-cloned" style="width: 255px;" tabindex="-1" data-slick-index="12" aria-hidden="true">
                  <a href="msc-economics-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="msc-economics-course-online.php" tabindex="-1">
                      <img src="images/msceco.jpg" alt="M.Sc Economics">
                      <div class="p-3">
                        <div class="programs-list">M.Sc Economics</div>
                        <h5 class="fs-16 pt-2">Master of Science Economics </h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="mscecoFee">16,400</span> Per Sem. </span>
                          </div>
                        </div>
                      </div>
                      <hr class="m-0">
                      </a><div class="p-3 "><a href="msc-economics-course-online.php" tabindex="-1">
                        </a><a href="msc-economics-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn More</a>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide slick-cloned" style="width: 255px;" tabindex="-1" data-slick-index="13" aria-hidden="true">
                  <a href="m-com-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="m-com-course-online.php" tabindex="-1">
                      <img src="images/m-com.jpg" alt="Master of Commerce (M.Com)">
                      </a><div class="p-3"><a href="m-com-course-online.php" tabindex="-1">
                        <div class="programs-list">M.Com</div>
                        <h5 class="fs-16 pt-2">Master of Commerce (M.Com)</h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="mcomFee">20,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="m-com-course-online.php" tabindex="-1">
                          </a><a href="m-com-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide slick-cloned" style="width: 255px;" tabindex="-1" data-slick-index="14" aria-hidden="true">
                  <a href="ma-english-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="ma-english-course-online.php" tabindex="-1">
                      <img src="images/ma-english.jpg" alt="Master of Arts (English)">
                      </a><div class="p-3"><a href="ma-english-course-online.php" tabindex="-1">
                        <div class="programs-list">MA English</div>
                        <h5 class="fs-16 pt-2">Master of Arts (English)</h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="maFee">16,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="ma-english-course-online.php" tabindex="-1">
                          </a><a href="ma-english-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn
                            More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide slick-cloned" style="width: 255px;" tabindex="-1" data-slick-index="15" aria-hidden="true">
                  <a href="ma-political-science-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="ma-political-science-course-online.php" tabindex="-1">
                      <img src="images/ma-political-science.jpg" alt="Master of Arts (Political Science)">
                      </a><div class="p-3"><a href="ma-political-science-course-online.php" tabindex="-1">
                        <div class="programs-list">MA Political Science</div>
                        <h5 class="fs-16 pt-2">Master of Arts (Political Science)</h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="maFee">16,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="ma-political-science-course-online.php" tabindex="-1">
                          </a><a href="ma-political-science-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide slick-cloned" style="width: 255px;" tabindex="-1" data-slick-index="16" aria-hidden="true">
                  <a href="ma-history-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="ma-history-course-online.php" tabindex="-1">
                      <img src="images/ma-history.jpg" alt="Master of Arts (History)">
                      </a><div class="p-3"><a href="ma-history-course-online.php" tabindex="-1">
                        <div class="programs-list">MA History</div>
                        <h5 class="fs-16 pt-2">Master of Arts (History)</h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="maFee">16,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="ma-history-course-online.php" tabindex="-1">
                          </a><a href="ma-history-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn
                            More</a>
                        </div>
                      </div>
                    </div>
                  
                </div><div class="col-lg-4 mb-5 slick-slide slick-cloned" style="width: 255px;" tabindex="-1" data-slick-index="17" aria-hidden="true">
                  <a href="ma-sociology-course-online.php" tabindex="-1">
                    </a><div class="shadow zoom-effect"><a href="ma-sociology-course-online.php" tabindex="-1">
                      <img src="images/ma-sociology.jpg" alt="Master of Arts (Sociology)">
                      </a><div class="p-3"><a href="ma-sociology-course-online.php" tabindex="-1">
                        <div class="programs-list">MA Sociology</div>
                        <h5 class="fs-16 pt-2">Master of Arts (Sociology)</h5>
                        <div class="d-flex flex-xs-row flex-sm-row justify-content-between flex-column pt-2">
                          <div class=""> <span class="b400 color fs-13 text-black"><i class="la la-clock"></i> 2
                              Years</span> </div>
                          <div class=""> <span class="b400 color fs-13 text-black"> Fee <i class="la la-rupee"></i><span class="maFee">16,400</span> Per Sem. </span>
                          </div>
                        </div>
                        <hr>
                        </a><div><a href="ma-sociology-course-online.php" tabindex="-1">
                          </a><a href="ma-sociology-course-online.php" class="btn btn-learn-more theme-btn-sm ml-0" tabindex="-1">Learn
                            More</a>
                        </div>
                      </div>
                    </div>
                  
                </div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button></div>

            </div>
            <div style="text-align: center;" class="slider-custom-nav show-on-mobile">
              <button class="custom-prev-arrow electives-prev">
                <img alt="left arrow" src="https://www.lpu.in/lpu-assets/images/icons/vector-left.svg">
              </button>
              <button class="custom-next-arrow electives-next">
                <img alt="right arrow" src="https://www.lpu.in/lpu-assets/images/icons/vector-right.svg">
              </button>
            </div>

          </div>

        </div>

      </div>

    </div>
  </section>
    <section class="slider-container mx-auto max-w-7xl px-4 mt-2" style="overflow: visible;">
        <h1 class="lg:text-4xl md:text-3xl text-2xl pb-7 font-semibold pt-10 mt-10 leading-7 text-center text-black">
            Ranking & Recognition
        </h1>
        <div class="row" style="overflow: visible;">
            <div class="ranking-slider" style="overflow: visible;">
                <div class="p-4" style="padding-top: 6rem !important;">
                    <div class="relative" style="overflow: visible;">
                        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-28 h-28 rounded-full border-4 border-[#f58220] bg-white overflow-hidden shadow-md">
                            <img src="https://www.lpuonline.com/landing-page/assets/img/nirf.webp" alt="NIRF logo" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-xl bg-white p-4 pt-20 text-center shadow-md border-t-4 border-[#f58220] h-80 relative z-10">
                            <p class="text-lg text-black">
                                National Institutional Ranking Framework (NIRF) 2024 ranked LPU <span class="text-[#f58225]">27th</span> amongst all Government and Private Universities in India.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-4" style="padding-top: 6rem !important;">
                    <div class="relative" style="overflow: visible;">
                        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-28 h-28 rounded-full border-4 border-[#f58220] bg-white overflow-hidden shadow-md">
                            <img src="https://www.lpuonline.com/landing-page/assets/img/ugc.webp" alt="UGC logo" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-xl bg-white p-4 pt-20 text-center shadow-md border-t-4 border-[#f58220] h-80 relative z-10">
                            <p class="text-lg text-black">
                                LPU is recognized by UGC and LPU Online is <span class="text-[#f58225]">Entitled</span> by <span class="text-[#f58225]">UGC-DEB</span> to offer programs in Online mode.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-4" style="padding-top: 6rem !important;">
                    <div class="relative" style="overflow: visible;">
                        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-28 h-28 rounded-full border-4 border-[#f58220] bg-white overflow-hidden shadow-md">
                            <img src="https://www.lpuonline.com/landing-page/assets/img/aicte.webp" alt="AICTE logo" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-xl bg-white p-4 pt-20 text-center shadow-md border-t-4 border-[#f58220] h-80 relative z-10">
                            <p class="text-lg text-black">
                                <span class="text-[#f58225]">Online MBA</span> and <span class="text-[#f58225]">Online MCA</span> programs offered in LPU Online are approved by <span class="text-[#f58225]">AICTE</span>.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-4" style="padding-top: 6rem !important;">
                    <div class="relative" style="overflow: visible;">
                        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-28 h-28 rounded-full border-4 border-[#f58220] bg-white overflow-hidden shadow-md">
                            <img src="https://www.lpuonline.com/landing-page/assets/img/the.webp" alt="THE logo" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-xl bg-white p-4 pt-20 text-center shadow-md border-t-4 border-[#f58220] h-80 relative z-10">
                            <p class="text-lg text-black">
                                LPU ranked <span class="text-[#f58225]">9th</span> amongst top Indian universities including IITs & NITs in THE World University Rankings 2025.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-4" style="padding-top: 6rem !important;">
                    <div class="relative" style="overflow: visible;">
                        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-28 h-28 rounded-full border-4 border-[#f58220] bg-white overflow-hidden shadow-md">
                            <img src="https://www.lpuonline.com/landing-page/assets/img/time.webp" alt="THE Impact logo" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-xl bg-white p-4 pt-20 text-center shadow-md border-t-4 border-[#f58220] h-80 relative z-10">
                            <p class="text-lg text-black">
                                Times Higher Education Impact Rankings 2023 ranked LPU <span class="text-[#f58225]">2nd</span> in India and globally in the <span class="text-[#f58225]">101–200</span> band.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-4" style="padding-top: 6rem !important;">
                    <div class="relative" style="overflow: visible;">
                        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 w-28 h-28 rounded-full border-4 border-[#f58220] bg-white overflow-hidden shadow-md">
                            <img src="https://www.lpuonline.com/landing-page/assets/img/naac.webp" alt="NAAC logo" class="w-full h-full object-cover">
                        </div>
                        <div class="rounded-xl bg-white p-4 pt-20 text-center shadow-md border-t-4 border-[#f58220] h-80 relative z-10">
                            <p class="text-lg text-black">
                                LPU received <span class="text-[#f58228]">NAAC A++</span> with a score of <span class="text-[#f58228]">3.68/4</span> among all <span class="text-[#f58228]">Dual Mode</span> universities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-12">
            <button class="text-white font-medium rounded-lg text-md px-6 py-3 bg-[#f58228] hover:bg-amber-500 focus:ring-4 focus:ring-amber-500">
                Download Prospectus
            </button>
        </div>
    </section>
    <section class="bg-white py-10">
        <div class="mx-auto max-w-7xl p-4">
            <h1 class="lg:text-4xl md:text-3xl text-2xl font-semibold text-center text-black mb-8">
                Explore LPU Online Programs
            </h1>

            <div class="flex justify-center my-6 gap-2 flex-wrap">
                <button class="px-4 py-4 w-60 rounded-s-xl bg-[#f58228] text-white text-xl">
                    PG Programs
                    <span class="block text-sm leading-tight">(After Graduation)</span>
                </button>
                <button class="px-4 py-4 w-60 bg-gray-200">
                    UG Programs
                    <span class="block text-sm leading-tight">(After 12th)</span>
                </button>
                <button class="px-4 py-4 w-60 rounded-r-xl bg-gray-200">
                    Diploma Programs
                    <span class="block text-sm leading-tight">(After 12th)</span>
                </button>
            </div>

            <div class="program-slider">
                <div class="p-4">
                    <div class="max-w-sm mx-auto bg-white rounded-lg overflow-hidden border border-orange-100 shadow hover:shadow-lg transition">
                        <img src="https://www.lpuonline.com/landing-page/assets/img/mba.webp" class="w-full h-60 object-cover rounded-t-lg" alt="MBA">
                        <div class="p-6">
                            <h3 class="text-2xl text-[#f58225] font-medium mb-2">MBA (12 specializations)</h3>
                            <p class="text-gray-600 mb-1"><strong>Duration:</strong> 2 years</p>
                            <p class="text-gray-600 mb-1"><strong>Total Credits:</strong> 102</p>
                            <p class="text-gray-600 mb-2">Electives: 6</p>
                            <p class="text-gray-600 mb-4">Fees Starting at: <span class="text-[#f58225] font-semibold border border-[#f58225] p-2 rounded-lg">₹36,560 / Sem*</span></p>
                            <a href="#" class="inline-block bg-[#f58228] text-white font-bold py-2 px-4 rounded hover:bg-orange-700">Apply Now</a>
                        </div>
                    </div>
                </div>

                <div class="p-4">
                    <div class="max-w-sm mx-auto bg-white rounded-lg overflow-hidden border border-orange-100 shadow hover:shadow-lg transition">
                        <img src="https://www.lpuonline.com/landing-page/assets/img/mca.webp" class="w-full h-60 object-cover rounded-t-lg" alt="MCA">
                        <div class="p-6">
                            <h3 class="text-2xl text-[#f58225] font-medium mb-2">MCA (5 specializations)</h3>
                            <p class="text-gray-600 mb-1"><strong>Duration:</strong> 2 years</p>
                            <p class="text-gray-600 mb-1"><strong>Total Credits:</strong> 104</p>
                            <p class="text-gray-600 mb-2">Electives: 4</p>
                            <p class="text-gray-600 mb-4">Fees Starting at: <span class="text-[#f58225] font-semibold border border-[#f58225] p-2 rounded-lg">₹27,200 / Sem*</span></p>
                            <a href="#" class="inline-block bg-[#f58228] text-white font-bold py-2 px-4 rounded hover:bg-orange-700">Apply Now</a>
                        </div>
                    </div>
                </div>

                <div class="p-4">
                    <div class="max-w-sm mx-auto bg-white rounded-lg overflow-hidden border border-orange-100 shadow hover:shadow-lg transition">
                        <img src="https://www.lpuonline.com/landing-page/assets/img/msc.webp" class="w-full h-60 object-cover rounded-t-lg" alt="MSC Mathematics">
                        <div class="p-6">
                            <h3 class="text-2xl text-[#f58225] font-medium mb-2">MSC Mathematics</h3>
                            <p class="text-gray-600 mb-1"><strong>Duration:</strong> 2 years</p>
                            <p class="text-gray-600 mb-1"><strong>Total Credits:</strong> 88</p>
                            <p class="text-gray-600 mb-2">Electives: 4</p>
                            <p class="text-gray-600 mb-4">Fees Starting at: <span class="text-[#f58225] font-semibold border border-[#f58225] p-2 rounded-lg">₹14,960 / Sem*</span></p>
                            <a href="#" class="inline-block bg-[#f58228] text-white font-bold py-2 px-4 rounded hover:bg-orange-700">Apply Now</a>
                        </div>
                    </div>
                </div>

                <div class="p-4">
                    <div class="max-w-sm mx-auto bg-white rounded-lg overflow-hidden border border-orange-100 shadow hover:shadow-lg transition">
                        <img src="https://www.lpuonline.com/landing-page/assets/img/msceco.webp" class="w-full h-60 object-cover rounded-t-lg" alt="MSC Economics">
                        <div class="p-6">
                            <h3 class="text-2xl text-[#f58225] font-medium mb-2">MSC Economics</h3>
                            <p class="text-gray-600 mb-1"><strong>Duration:</strong> 2 years</p>
                            <p class="text-gray-600 mb-1"><strong>Total Credits:</strong> 88</p>
                            <p class="text-gray-600 mb-2">Electives: 4</p>
                            <p class="text-gray-600 mb-4">Fees Starting at: <span class="text-[#f58225] font-semibold border border-[#f58225] p-2 rounded-lg">₹14,960 / Sem*</span></p>
                            <a href="#" class="inline-block bg-[#f58228] text-white font-bold py-2 px-4 rounded hover:bg-orange-700">Apply Now</a>
                        </div>
                    </div>
                </div>

                <div class="p-4">
                    <div class="max-w-sm mx-auto bg-white rounded-lg overflow-hidden border border-orange-100 shadow hover:shadow-lg transition">
                        <img src="https://www.lpuonline.com/landing-page/assets/img/ma.webp" class="w-full h-60 object-cover rounded-t-lg" alt="MA English">
                        <div class="p-6">
                            <h3 class="text-2xl text-[#f58225] font-medium mb-2">MA (English)</h3>
                            <p class="text-gray-600 mb-1"><strong>Duration:</strong> 2 years</p>
                            <p class="text-gray-600 mb-1"><strong>Total Credits:</strong> 80</p>
                            <p class="text-gray-600 mb-2">Electives: 4</p>
                            <p class="text-gray-600 mb-4">Fees Starting at: <span class="text-[#f58225] font-semibold border border-[#f58225] p-2 rounded-lg">₹14,960 / Sem*</span></p>
                            <a href="#" class="inline-block bg-[#f58228] text-white font-bold py-2 px-4 rounded hover:bg-orange-700">Apply Now</a>
                        </div>
                    </div>
                </div>

                <div class="p-4">
                    <div class="max-w-sm mx-auto bg-white rounded-lg overflow-hidden border border-orange-100 shadow hover:shadow-lg transition">
                        <img src="https://www.lpuonline.com/landing-page/assets/img/ma-history.webp" class="w-full h-60 object-cover rounded-t-lg" alt="MA History">
                        <div class="p-6">
                            <h3 class="text-2xl text-[#f58225] font-medium mb-2">MA (History)</h3>
                            <p class="text-gray-600 mb-1"><strong>Duration:</strong> 2 years</p>
                            <p class="text-gray-600 mb-1"><strong>Total Credits:</strong> 80</p>
                            <p class="text-gray-600 mb-2">Electives: 4</p>
                            <p class="text-gray-600 mb-4">Fees Starting at: <span class="text-[#f58225] font-semibold border border-[#f58225] p-2 rounded-lg">₹14,960 / Sem*</span></p>
                            <a href="#" class="inline-block bg-[#f58228] text-white font-bold py-2 px-4 rounded hover:bg-orange-700">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl my-6 px-4 mb-16">
        <h1 class="lg:text-4xl md:text-3xl text-2xl pb-7 font-semibold pt-10 mt-10 leading-7 text-center text-black">
            Key Features
        </h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">

            <div class="flex items-center">
                <div class="flex-shrink-0 bg-white p-2 shadow-lg rounded-full hover:bg-[#f58228] transition">
                    <div class="text-gray-600 w-20 h-20 flex items-center justify-center bg-gray-100 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 14.25V6.75m0 0l3 3m-3-3l-3 3M6.75 18h10.5a2.25 2.25 0 002.25-2.25V9.75A2.25 2.25 0 0017.25 7.5H6.75A2.25 2.25 0 004.5 9.75v6a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="lg:text-lg text-sm font-semibold text-black">Credible Degree</h3>
                    <p class="lg:text-base text-sm text-gray-600">UGC Entitled Degree Programs with AICTE Approved Online MBA and Online MCA program</p>
                </div>
            </div>

            <div class="flex items-center">
                <div class="flex-shrink-0 bg-white p-2 shadow-lg rounded-full hover:bg-[#f58228] transition">
                    <div class="text-gray-600 w-20 h-20 flex items-center justify-center bg-gray-100 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m-8.25 8.25A9 9 0 1119.5 4.5a9 9 0 01-14.75 15.75z" />
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="lg:text-lg text-sm font-semibold text-black">Flexible Online Examination</h3>
                    <p class="lg:text-base text-sm text-gray-600">Online proctored examination with provision to draw your own date-sheet</p>
                </div>
            </div>

            <div class="flex items-center">
                <div class="flex-shrink-0 bg-white p-2 shadow-lg rounded-full hover:bg-[#f58228] transition">
                    <div class="text-gray-600 w-20 h-20 flex items-center justify-center bg-gray-100 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v6h4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="lg:text-lg text-sm font-semibold text-black">Masterclasses by Industry Experts</h3>
                    <p class="lg:text-base text-sm text-gray-600">Guest Lectures and Master classes by Industry Experts</p>
                </div>
            </div>

            <div class="flex items-center">
                <div class="flex-shrink-0 bg-white p-2 shadow-lg rounded-full hover:bg-[#f58228] transition">
                    <div class="text-gray-600 w-20 h-20 flex items-center justify-center bg-gray-100 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 006 3.75a8.967 8.967 0 00-3 .512v14.25A8.987 8.987 0 006 18c2.305 0 4.408.867 6 2.292M12 6.042v14.25m0-14.25A8.966 8.966 0 0118 3.75a8.967 8.967 0 013 .512v14.25A8.987 8.987 0 0118 18a8.967 8.967 0 00-6 2.292" />
                        </svg>
                    </div>

                    
                </div>
                <div class="ml-4">
                    <h3 class="lg:text-lg text-sm font-semibold text-black">Contemporary Curriculum</h3>
                    <p class="lg:text-base text-sm text-gray-600">Industry oriented Curriculum designed by experts</p>
                </div>
            </div>

            <div class="flex items-center">
                <div class="flex-shrink-0 bg-white p-2 shadow-lg rounded-full hover:bg-[#f58228] transition">
                    <div class="text-gray-600 w-20 h-20 flex items-center justify-center bg-gray-100 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 6.75a3 3 0 11-6 0 3 3 0 016 0zM4.5 20.25v-1.5a5.25 5.25 0 0110.5 0v1.5m4.5 0v-1.125a3.375 3.375 0 00-3.375-3.375h-1.5" />
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="lg:text-lg text-sm font-semibold text-black">Top Notch Faculty</h3>
                    <p class="lg:text-base text-sm text-gray-600">LIVE interactive sessions by Expert University Faculty</p>
                </div>
            </div>

            <div class="flex items-center">
                <div class="flex-shrink-0 bg-white p-2 shadow-lg rounded-full hover:bg-[#f58228] transition">
                    <div class="text-gray-600 w-20 h-20 flex items-center justify-center bg-gray-100 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9A2.25 2.25 0 004.5 18.75z" />
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="lg:text-lg text-sm font-semibold text-black">LIVE Lectures</h3>
                    <p class="lg:text-base text-sm text-gray-600">Interactive LIVE lectures on weekends</p>
                </div>
            </div>

            <div class="flex items-center">
                <div class="flex-shrink-0 bg-white p-2 shadow-lg rounded-full hover:bg-[#f58228] transition">
                    <div class="text-gray-600 w-20 h-20 flex items-center justify-center bg-gray-100 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 12l-3.75 6.495M12 12l3.75 6.495M12 12L8.25 5.505M12 12l3.75-6.495" />
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="lg:text-lg text-sm font-semibold text-black">Academic Support</h3>
                    <p class="lg:text-base text-sm text-gray-600">24/7 Academic Support through LMS and Mobile App</p>
                </div>
            </div>

            <div class="flex items-center">
                <div class="flex-shrink-0 bg-white p-2 shadow-lg rounded-full hover:bg-[#f58228] transition">
                    <div class="text-gray-600 w-20 h-20 flex items-center justify-center bg-gray-100 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 3.75h15M4.5 7.5h15M4.5 11.25h15M4.5 15h15M4.5 18.75h15" />
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="lg:text-lg text-sm font-semibold text-black">Equal Co-Curricular Opportunities</h3>
                    <p class="lg:text-base text-sm text-gray-600">Activities at par with on-campus students</p>
                </div>
            </div>

            <div class="flex items-center">
                <div class="flex-shrink-0 bg-white p-2 shadow-lg rounded-full hover:bg-[#f58228] transition">
                    <div class="text-gray-600 w-20 h-20 flex items-center justify-center bg-gray-100 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12l-6-3.464v6.928L15 12zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="lg:text-lg text-sm font-semibold text-black">Recorded Content</h3>
                    <p class="lg:text-base text-sm text-gray-600">400+ hours of Recorded video content</p>
                </div>
            </div>

        </div>
    </section>

    <section class="container py-5 custom-section">
        <h1 class="lg:text-4xl md:text-3xl text-2xl font-semibold text-center text-black mb-8">LPU Online Placement Legacy</h1>
        <div class="row g-4">
            <div class="col-lg-6 card d-flex flex-column flex-md-row align-items-center">
                <div class="img-box me-md-4 mb-3 mb-md-0">
                    <img src="/img/img-2.jpg" alt="Feature Image" class="img-fluid rounded shadow-sm">
                </div>
                <div class="text-box">
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime sapiente eveniet ipsam optio, accusamus similique nulla? Architecto odio quis eveniet, consequuntur aliquid officiis. Sequi harum temporibus provident perspiciatis, adipisci repudiandae.
                    </p>
                </div>
            </div>

            <div class="col-lg-6 d-flex card flex-column flex-md-row align-items-center">
                <div class="img-box me-md-4 mb-3 mb-md-0">
                    <img src="/img/img-2.jpg" alt="Feature Image" class="img-fluid rounded shadow-sm">
                </div>
                <div class="text-box">
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime sapiente eveniet ipsam optio, accusamus similique nulla? Architecto odio quis eveniet, consequuntur aliquid officiis. Sequi harum temporibus provident perspiciatis, adipisci repudiandae.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="conitainer">
        <h1 class="lg:text-4xl md:text-3xl text-2xl font-semibold text-center text-black mb-8">Our Student / Alumni works at</h1>
        <div class="row card">
            <img src="/img/download.webp" alt="">
        </div>
    </section>

    <section class="mx-auto max-w-7xl py-12">
        <h1 class="text-black lg:text-4xl md:text-2xl text-xl pb-16 font-semibold pt-10 mt-6 leading-7 text-center">
            Admission Process of LPU Online Program
        </h1>
        <div class="relative grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 sm:flex-row justify-around mb-10 items-baseline">
            
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 flex items-center justify-center bg-[#f58228] text-white rounded-full mb-4 relative z-10">
                    <span class="text-2xl font-bold">1</span>
                </div>
                <h3 class="text-lg font-semibold text-center w-64 text-gray-800">Registration</h3>
                <p class="text-center text-gray-600 w-64">Sign up and pay <br> the initial Registration Fee</p>
            </div>

            <div class="flex flex-col items-center mt-8 sm:mt-0">
                <div class="w-16 h-16 flex items-center justify-center bg-[#f58228] text-white rounded-full mb-4 relative z-10">
                    <span class="text-2xl font-bold">2</span>
                </div>
                <h3 class="text-lg font-semibold text-center w-64 text-gray-800">Online Application form</h3>
                <p class="text-center text-gray-600 w-64">Fill the details, <br> pay program fee and upload relevant documents</p>
            </div>

            <div class="flex flex-col items-center mt-8 sm:mt-0">
                <div class="w-16 h-16 flex items-center justify-center bg-[#f58228] text-white rounded-full mb-4 relative z-10">
                    <span class="text-2xl font-bold">3</span>
                </div>
                <h3 class="text-lg font-semibold leading-tight text-center w-64 text-gray-800">
                    Document verification <br> by University
                </h3>
                <p class="text-center text-gray-600 w-64">Sit back and wait <br> for admission confirmation</p>
            </div>

            <div class="flex flex-col items-center mt-8 sm:mt-0">
                <div class="w-16 h-16 flex items-center justify-center bg-[#f58228] text-white rounded-full mb-4 relative z-10">
                    <span class="text-2xl font-bold">4</span>
                </div>
                <h3 class="text-lg font-semibold text-center w-64 text-gray-800">
                    Student Registration <br> and LMS Activation
                </h3>
                <p class="text-center text-gray-600 w-64">Get your LMS credentials <br> over the email</p>
            </div>
        </div>

        <div class="relative mt-12">
            <div class="flex items-center justify-center h-full my-5">
                <button class="text-white font-medium rounded-lg text-md px-6 py-3 bg-[#f58228] hover:bg-amber-500 focus:ring-4 focus:ring-amber-500">
                    Apply Now
                </button>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 LPU University. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });

        // Initialize Slick Sliders
        $(document).ready(function(){
            $('.lpuonline-highlight-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
                arrows: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });

            $('.ranking-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3500,
                dots: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });

            $('.program-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                dots: true,
                arrows: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });

            // Off-canvas menu toggle logic
            const toggleButton = document.querySelector('.off-canvas-menu-toggle');
            const closeButton = document.querySelector('.off-canvas-menu-close');
            const offCanvasMenu = document.querySelector('.off-canvas-menu');
            const click2Links = document.querySelectorAll('.off-canvas-menu-list a.click2');

            if (toggleButton && offCanvasMenu) {
                toggleButton.addEventListener('click', function() {
                    offCanvasMenu.classList.add('active');
                });
            }
            if (closeButton && offCanvasMenu) {
                closeButton.addEventListener('click', function() {
                    offCanvasMenu.classList.remove('active');
                });
            }

            // Simple dropdown toggle for off-canvas menu
            click2Links.forEach(link => {
                link.addEventListener('click', function(e) {
                    const subMenu = this.nextElementSibling;
                    if (subMenu && subMenu.classList.contains('sub-menu')) {
                        e.preventDefault();
                        subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
                        this.classList.toggle('active');
                    }
                });
            });

            // Initialize slimScroll for program sub-menus if the library is loaded
            // This assumes you will add the slimScroll JavaScript library.
            // Example:
            // $('.slim-scroll').slimScroll({
            //     height: '400px', // Matches your CSS
            //     railVisible: true,
            //     alwaysVisible: true
            // });

            // Initialize Magnific Popup for modals if the library is loaded
            // This assumes you will add the Magnific Popup JavaScript library.
            // Example:
            // $('.popup-modal').magnificPopup({
            //     type: 'inline',
            //     preloader: false,
            //     focus: '#username',
            //     modal: true
            // });
        });
    </script>
</body>
</html>