<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LPU University - Landing Page</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />

  <!-- Slick Slider CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

  <!-- Tailwind utility -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    * { margin:0; padding:0; box-sizing:border-box; }
    body { font-family:'Segoe UI', sans-serif; line-height:1.6; color:#333; scroll-behavior:smooth; }
    h1,h2 { color:#004080; }
    h1 { font-size:2.5rem; } h2 { font-size:2rem; margin-bottom:20px; position:relative; padding-bottom:10px; }
    h2::after { content:''; width:60px; height:4px; background:#004080; position:absolute; left:0; bottom:0; border-radius:2px; }
    nav.container { display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; }
    nav ul { list-style:none; display:flex; gap:20px; flex-wrap:wrap; }
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
  </style>
</head>
<body>
  <!-- Header / Navbar -->
  <header>
    <nav class="container">
      <img src="/img/logo.png" alt="" style="width: 80px;">
      <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#courses">Courses</a></li>
        <li><a href="#fees">Fees</a></li>
        <li><a href="#placements">Placements</a></li>
        <li><a href="#faqs">FAQs</a></li>
      </ul>
    </nav>
  </header>

  <!-- Main Slider / Banner -->
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

  <!-- Affordability -->
  <section class="bg-primary bg-opacity-10 shadow mt-2 border-0 py-4">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Text Column -->
      <div class="col-lg-6 mb-4 mb-lg-0 text-start">
        <h2>Affordable Education, Tailored for You</h2>
        <p>Avail a <span class="fw-semibold text-success">20% Student Support Grant</span> and benefit from <span class="fw-semibold text-success">No‑Cost EMI Options</span>.</p>
        <p class="text-muted">Making quality education accessible and budget‑friendly for every learner.</p>
      </div>
      
      <!-- Image Column -->
      <div class="col-lg-6 mb-lg-0 align-item-end">
        <img src="/img/discount.png" alt="Discount Offer" class="img-fluid" style="max-width: 350px;">
      </div>

    </div>
  </div>
</section>

  <div class="container my-2">
  <h2 class="lg:text-4xl md:text-3xl text-2xl pb-7 font-semibold pt-0 mt-10 leading-7 text-center text-black">Rankings</h2>

  <!-- Slick Slider -->
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
<section class="slider-container mx-auto max-w-7xl px-4 mt-2" style="overflow: visible;">
  <h1 class="lg:text-4xl md:text-3xl text-2xl pb-7 font-semibold pt-10 mt-10 leading-7 text-center text-black">
    Ranking & Recognition
  </h1>
  <div class="row" style="overflow: visible;">
    <div class="ranking-slider" style="overflow: visible;">
      <!-- Slide Template Start -->
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

      <!-- Slide 2 -->
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

      <!-- Slide 3 -->
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

      <!-- Slide 4 -->
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

      <!-- Slide 5 -->
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

      <!-- Slide 6 -->
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

  <!-- Download Button -->
  <div class="flex justify-center mt-12">
    <button class="text-white font-medium rounded-lg text-md px-6 py-3 bg-[#f58228] hover:bg-amber-500 focus:ring-4 focus:ring-amber-500">
      Download Prospectus
    </button>
  </div>
</section>
    <!-- LPU Online Programs Section -->
<section class="bg-white py-10">
  <div class="mx-auto max-w-7xl p-4">
    <!-- Heading -->
    <h1 class="lg:text-4xl md:text-3xl text-2xl font-semibold text-center text-black mb-8">
      Explore LPU Online Programs
    </h1>

    <!-- Program Type Buttons -->
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

    <!-- Slick Slider -->
    <div class="program-slider">
      <!-- Slide 1 -->
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

      <!-- Slide 2 -->
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

      <!-- Slide 3 -->
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

      <!-- Slide 4 -->
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

      <!-- Slide 5 -->
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

      <!-- Slide 6 -->
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

    <!-- 1. Credible Degree -->
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

    <!-- 2. Flexible Online Examination -->
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

    <!-- 3. Masterclasses by Industry Experts -->
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

    <!-- 4. Contemporary Curriculum -->
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

    <!-- 5. Top Notch Faculty -->
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

    <!-- 6. LIVE Lectures -->
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

    <!-- 7. Academic Support -->
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

    <!-- 8. Co-Curricular Opportunities -->
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

    <!-- 9. Recorded Content -->
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
      <!-- Column 1 -->
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

      <!-- Column 2 -->
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
    
    <!-- Step 1 -->
    <div class="flex flex-col items-center">
      <div class="w-16 h-16 flex items-center justify-center bg-[#f58228] text-white rounded-full mb-4 relative z-10">
        <span class="text-2xl font-bold">1</span>
      </div>
      <h3 class="text-lg font-semibold text-center w-64 text-gray-800">Registration</h3>
      <p class="text-center text-gray-600 w-64">Sign up and pay <br> the initial Registration Fee</p>
    </div>

    <!-- Step 2 -->
    <div class="flex flex-col items-center mt-8 sm:mt-0">
      <div class="w-16 h-16 flex items-center justify-center bg-[#f58228] text-white rounded-full mb-4 relative z-10">
        <span class="text-2xl font-bold">2</span>
      </div>
      <h3 class="text-lg font-semibold text-center w-64 text-gray-800">Online Application form</h3>
      <p class="text-center text-gray-600 w-64">Fill the details, <br> pay program fee and upload relevant documents</p>
    </div>

    <!-- Step 3 -->
    <div class="flex flex-col items-center mt-8 sm:mt-0">
      <div class="w-16 h-16 flex items-center justify-center bg-[#f58228] text-white rounded-full mb-4 relative z-10">
        <span class="text-2xl font-bold">3</span>
      </div>
      <h3 class="text-lg font-semibold leading-tight text-center w-64 text-gray-800">
        Document verification <br> by University
      </h3>
      <p class="text-center text-gray-600 w-64">Sit back and wait <br> for admission confirmation</p>
    </div>

    <!-- Step 4 -->
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

  <!-- CTA Button -->
  <div class="relative mt-12">
    <div class="flex items-center justify-center h-full my-5">
      <button type="button" class="text-white font-medium flex justify-center rounded-lg md:text-xl sm:text-xs text-md px-5 py-2.5 me-2 mb-2 bg-[#f58228] hover:bg-amber-500 focus:ring-4 focus:ring-amber-500 focus:outline-none">
        Enroll Now
      </button>
    </div>
  </div>

  <!-- Notes -->
  <div class="mt-4 text-left text-gray-600 px-10">
    <p class="text-sm">* Terms and Conditions Apply.</p>
    <p class="text-sm"># Data represents total number of all study modes of LPU.</p>
  </div>
</section>

<footer class="bg-dark text-white pt-5 pb-3">
  <div class="container">
    <div class="row text-start">

      <!-- Logo & Description -->
      <div class="col-md-4 mb-4">
        <img src="/img/logo.png" alt="LPU Logo" style="max-width: 150px;" class="mb-3">
        <p class="mb-0">LPU Online empowers learners with affordable, flexible, and industry-recognized education programs.</p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-2 mb-4">
        <h5 class="text-uppercase fw-bold">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#about" class="text-white text-decoration-none d-block py-1">About Us</a></li>
          <li><a href="#courses" class="text-white text-decoration-none d-block py-1">Courses</a></li>
          <li><a href="#placements" class="text-white text-decoration-none d-block py-1">Placements</a></li>
          <li><a href="#faqs" class="text-white text-decoration-none d-block py-1">FAQs</a></li>
        </ul>
      </div>

      <!-- Services -->
      <div class="col-md-3 mb-4">
        <h5 class="text-uppercase fw-bold">Programs & Services</h5>
        <ul class="list-unstyled">
          <li><a href="#mba" class="text-white text-decoration-none d-block py-1">MBA Online</a></li>
          <li><a href="#bca" class="text-white text-decoration-none d-block py-1">BCA</a></li>
          <li><a href="#mcom" class="text-white text-decoration-none d-block py-1">M.Com</a></li>
          <li><a href="#support" class="text-white text-decoration-none d-block py-1">Student Support</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="col-md-3 mb-4">
        <h5 class="text-uppercase fw-bold">Contact Us</h5>
        <p class="mb-1"><i class="bi bi-envelope"></i> admissions@lpuonline.edu.in</p>
        <p class="mb-1"><i class="bi bi-telephone"></i> +91-99999-99999</p>
        <p class="mb-0"><i class="bi bi-geo-alt"></i> Phagwara, Punjab, India</p>
        <div class="mt-3">
          <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white me-3"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="text-white me-3"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>

    <!-- Bottom Strip -->
    <hr class="border-light mt-4">
    <div class="text-center small">
      &copy; 2025 LPU University. All Rights Reserved.
    </div>
  </div>
</footer>


  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <script>
    $(function(){
      AOS.init({ duration:1000, once:true });

      $('.lpuonline-highlight-slider').slick({
        slidesToShow:3, slidesToScroll:1,
        prevArrow:$('.electives-prev'), nextArrow:$('.electives-next'),
        responsive:[{ breakpoint:992, settings:{slidesToShow:2} },{ breakpoint:576, settings:{slidesToShow:1} }],
        autoplay:true, autoplaySpeed:4000
      });
      $('.program-slider').slick({
        slidesToShow:3, slidesToScroll:1, dots:true, infinite:true,
        responsive:[{breakpoint:1024, settings:{slidesToShow:2}}, {breakpoint:768, settings:{slidesToShow:1}}]
      });
      $('.ranking-slider').slick({
        dots:true, infinite:true, speed:500, slidesToShow:3, slidesToScroll:1,
        prevArrow:'<button class="slick-prev">‹</button>', nextArrow:'<button class="slick-next">›</button>',
        responsive:[{breakpoint:1024, settings:{slidesToShow:2}}, {breakpoint:640, settings:{slidesToShow:1}}]
      });
    });
  </script>
</body>
</html>
