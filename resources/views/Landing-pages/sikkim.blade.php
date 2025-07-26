<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sikkim University Online – MBA in Finance</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

  <!-- Slick Carousel CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

  <style>
    html { scroll-behavior: smooth; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

<!-- 🔝 Header -->
<header class="bg-white shadow fixed top-0 left-0 right-0 z-50">
  <div class="max-w-7xl mx-auto flex items-center justify-between p-4">
    <div class="flex items-center space-x-3">
      <img src="/img/logo.jpeg" alt="Sikkim University Logo" class="w-12 h-12 object-contain">
      <span class="text-xl font-bold text-blue-700">Sikkim University Online</span>
    </div>
    <nav class="hidden md:flex space-x-6 text-sm font-medium">
      <a href="#program" class="hover:text-blue-600">Program</a>
      <a href="#features" class="hover:text-blue-600">Why Choose Us</a>
      <a href="#contact" class="hover:text-blue-600">Contact</a>
    </nav>
  </div>
</header>
<style>
  body {
    font-family: 'Inter', sans-serif;
  }

  .top-online-course-section {
    background-color: #f9fafb;
  }

  .top-section h2 {
    @apply text-3xl md:text-4xl font-extrabold text-blue-800;
  }

  .top-section a {
    @apply text-blue-600 hover:text-blue-800 font-medium transition duration-200;
  }

  .card {
    @apply bg-white rounded-2xl shadow-lg hover:shadow-2xl transition duration-300;
  }

  .card img {
    @apply w-full h-48 object-cover rounded-t-2xl;
  }

  .course-info {
    @apply p-5;
  }

  .course-info h3 {
    @apply text-xl font-semibold text-gray-800 mb-2;
  }

  .course-info p {
    @apply text-gray-600 text-sm leading-relaxed;
  }

  .swiper-button-next,
  .swiper-button-prev {
    @apply text-blue-800 hover:text-blue-600;
  }

  .swiper-pagination-bullet-active {
    background-color: #1e3a8a !important; /* Tailwind blue-800 */
  }

  @media (min-width: 768px) {
    .wrapper-course {
      @apply px-8;
    }
  }

  @media (max-width: 767px) {
    .top-section {
      @apply flex-col items-start space-y-4;
    }

    .card img {
      @apply h-40;
    }
  }
</style>


<!-- University Banner Section -->
<section class="institution-banner section-mb doodle-section CUSTOM pageTopSpace relative overflow-hidden bg-white py-16">
  <svg xmlns="http://www.w3.org/2000/svg" width="1923" height="786" class="doodle absolute top-0 left-0 z-0" viewBox="0 0 1923 786" fill="none">
    <path d="M-210 273C519.5 1111 1887.63 454.688 1751 117.5C1658.07 -111.856 1206 278.88 1206 556.5C1206 916.457 1855.07 643.997 2225.5 556.5" stroke="#D4F2F1" stroke-width="95"></path>
  </svg>

  <div class="container relative z-10 max-w-7xl mx-auto px-4">
    <div class="breadcrumb flex items-center space-x-2 text-sm text-gray-600 mb-4">
      <a class="breadcrumb_title hover:text-blue-600" href="/">Home</a>
      <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/breadcrumb-arrow.svg" width="4" height="8" alt="arrow">
      <span class="breadcrumb_title font-medium">Sikkim Manipal University</span>
    </div>

    <div class="logos flex items-center space-x-4 mb-6">
      <img class="mahe-logo" src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/SMU_HP_Logo.png" alt="SMU Logo" height="46" width="184">
      <span class="h-6 w-px bg-gray-300"></span>
      <div class="ranking-logos flex items-center space-x-2 text-sm text-gray-700">
        <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/institution/smu-star.png" alt="Top Ranked" height="28" width="28">
        <span>Top-Ranked Private University in North East</span>
      </div>
    </div>

    <div class="banner-details max-w-3xl">
      <h1 class="section-title text-4xl font-bold text-blue-800 mb-4">Sikkim Manipal University</h1>
      <div class="description text-gray-700 space-y-4">
        <p>Sikkim Manipal University (SMU), a pioneer in open and distance education, offers a dynamic and flexible learning environment that caters to learners across India and beyond. Accredited and renowned for its cutting-edge curriculum, SMU provides students with a global perspective, industry-relevant skills, and strong placement support.</p>
      </div>
      <button class="mt-6 px-6 py-3 bg-blue-700 hover:bg-blue-800 text-white font-semibold rounded shadow" data-showpopup="downloadForm_popup">
        Download Brochure
      </button>
    </div>
  </div>
  <img src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/SMU-1-1.webp" alt="Sikkim Manipal University" class="univercity-img absolute bottom-0 right-0 max-w-md hidden md:block z-10">
</section>

<!-- Rankings Section -->
<section class="py-16 bg-white" id="rankings">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-10">
      <h2 class="text-3xl font-bold text-blue-800">Rankings &amp; Accreditations</h2>
    </div>
    <div class="swiper rankingSwiper">
    <div class="swiper-wrapper">
  <!-- Slide 1 -->
  <div class="swiper-slide p-4">
    <div class="bg-gray-50 rounded-xl shadow-lg p-4 text-center">
      <img src="https://www.onlinemanipal.com/wp-content/uploads/2023/03/NAAC-A-2.jpg" class="mx-auto h-28 object-contain" alt="NAAC A+">
      <p class="mt-4 text-sm font-medium">Accredited in A+ grade by NAAC</p>
    </div>
  </div>

  <!-- Slide 2 -->
  <div class="swiper-slide p-4">
    <div class="bg-gray-50 rounded-xl shadow-lg p-4 text-center">
      <img src="https://www.onlinemanipal.com/wp-content/uploads/2023/03/UGC-2.jpg" class="mx-auto h-28 object-contain" alt="UGC">
      <p class="mt-4 text-sm font-medium">UGC-entitled Online Degrees Equivalent to Campus Degree</p>
    </div>
  </div>

  <!-- Slide 3 -->
  <div class="swiper-slide p-4">
    <div class="bg-gray-50 rounded-xl shadow-lg p-4 text-center">
      <img src="https://www.onlinemanipal.com/wp-content/uploads/2023/03/NIRF-1.jpg" class="mx-auto h-28 object-contain" alt="NIRF">
      <p class="mt-4 text-sm font-medium">Top #151–200 University in NIRF 2024</p>
    </div>
  </div>

  <!-- Slide 4 -->
  <div class="swiper-slide p-4">
    <div class="bg-gray-50 rounded-xl shadow-lg p-4 text-center">
      <img src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/AICTE-3-1.jpg" class="mx-auto h-28 object-contain" alt="AICTE">
      <p class="mt-4 text-sm font-medium">AICTE Norms Compliant</p>
    </div>
  </div>

  <!-- Slide 5 -->
  <div class="swiper-slide p-4">
    <div class="bg-gray-50 rounded-xl shadow-lg p-4 text-center">
      <img src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/iirf-1.png" class="mx-auto h-28 object-contain" alt="IIRF">
      <p class="mt-4 text-sm font-medium">Top Private University in North East</p>
    </div>
  </div>

  <!-- Slide 6 -->
  <div class="swiper-slide p-4">
    <div class="bg-gray-50 rounded-xl shadow-lg p-4 text-center">
      <img src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/WURI.jpg" class="mx-auto h-28 object-contain" alt="WURI">
      <p class="mt-4 text-sm font-medium">Top Universities Showcasing Entrepreneurial Spirit</p>
    </div>
  </div>

  <!-- Slide 7 -->
  <div class="swiper-slide p-4">
    <div class="bg-gray-50 rounded-xl shadow-lg p-4 text-center">
      <img src="https://www.onlinemanipal.com/wp-content/uploads/2023/06/SMU_Rankings_The-Week.jpg" class="mx-auto h-28 object-contain" alt="The Week">
      <p class="mt-4 text-sm font-medium">Top 10 Multidisciplinary Universities – East Zone</p>
    </div>
  </div>
</div>
 <div class="swiper-pagination mt-6"></div>
    </div>
  </div>
</section>

<section class="top-online-course section-mb py-16 bg-white">
  <div class="container mx-auto px-4">
    
    <!-- Header -->
    <div class="flex justify-between items-center mb-8 flex-wrap gap-4">
      <h2 class="text-3xl md:text-4xl font-bold text-blue-800">Top Online Courses</h2>
      <a href="https://www.onlinemanipal.com/all-courses" class="text-blue-700 border border-blue-700 px-5 py-2 rounded-full hover:bg-blue-700 hover:text-white transition">
        View All Courses
      </a>
    </div>

    <!-- Swiper Carousel -->
    <div class="swiper topCourseSwiper">
      <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide">
          <div class="border border-gray-200 rounded-lg overflow-hidden shadow-md bg-white">
            <a href="/online-mba-sikkim-manipal-university" class="block">
              <img src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/MBA-SMU.png" alt="MBA" class="w-full h-48 object-contain bg-gray-50">
              <div class="p-4 space-y-2">
                <div class="flex justify-between items-center">
                  <h3 class="font-semibold text-base text-gray-800">MBA 2 Years Online/Distance Graduates with 50% marks + CAT/MAT</h3>
                  <div class="flex items-center text-yellow-500">
                    <span class="mr-1 text-sm font-medium text-gray-600">4.5</span>
                    <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg" width="14" height="14" alt="rating">
                  </div>
                </div>
                <div class="flex items-center text-sm text-gray-600 space-x-4">
                  <div class="flex items-center">
                    <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" width="18" height="18" class="mr-1" alt="Duration">
                    <span>24 months</span>
                  </div>
                  <span class="text-gray-400">•</span>
                  <div class="flex items-center">
                    <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg" width="18" height="18" class="mr-1" alt="Fees">
                    <span>INR 1,10,000</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
          <div class="border border-gray-200 rounded-lg overflow-hidden shadow-md bg-white">
            <a href="#" class="block">
            <img src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/MBA-SMU.png" alt="MBA" class="w-full h-48 object-contain bg-gray-50">
            <div class="p-4 space-y-2">
                <div class="flex justify-between items-center">
                  <h3 class="font-semibold text-base text-gray-800">MCA 2 Years Online/Distance BCA/B.Sc (Comp. Sci)/Graduates</h3>
                  <div class="flex items-center text-yellow-500">
                    <span class="mr-1 text-sm font-medium text-gray-600">4.6</span>
                    <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg" width="14" height="14" alt="rating">
                  </div>
                </div>
                <div class="flex items-center text-sm text-gray-600 space-x-4">
                  <div class="flex items-center">
                    <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" width="18" height="18" class="mr-1" alt="Duration">
                    <span>36 months</span>
                  </div>
                  <span class="text-gray-400">•</span>
                  <div class="flex items-center">
                    <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg" width="18" height="18" class="mr-1" alt="Fees">
                    <span>INR 75,000</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide">
          <div class="border border-gray-200 rounded-lg overflow-hidden shadow-md bg-white">
            <a href="#" class="block">
            <img src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/MBA-SMU.png" alt="MBA" class="w-full h-48 object-contain bg-gray-50">
            <div class="p-4 space-y-2">
                <div class="flex justify-between items-center">
                  <h3 class="font-semibold text-base text-gray-800">B.Tech 4 Years Online/Distance 10+2 with 55% (Physics, Maths)</h3>
                  <div class="flex items-center text-yellow-500">
                    <span class="mr-1 text-sm font-medium text-gray-600">4.4</span>
                    <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg" width="14" height="14" alt="rating">
                  </div>
                </div>
                <div class="flex items-center text-sm text-gray-600 space-x-4">
                  <div class="flex items-center">
                    <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" width="18" height="18" class="mr-1" alt="Duration">
                    <span>36 months</span>
                  </div>
                  <span class="text-gray-400">•</span>
                  <div class="flex items-center">
                    <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg" width="18" height="18" class="mr-1" alt="Fees">
                    <span>INR 90,000</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="border border-gray-200 rounded-lg overflow-hidden shadow-md bg-white">
            <a href="#" class="block">
            <img src="https://www.onlinemanipal.com/wp-content/uploads/2025/03/MBA-SMU.png" alt="MBA" class="w-full h-48 object-contain bg-gray-50">
            <div class="p-4 space-y-2">
                <div class="flex justify-between items-center">
                  <h3 class="font-semibold text-base text-gray-800">Ph.D. Min. 3 Years Research Master's with 55% + Entrance</h3>
                  <div class="flex items-center text-yellow-500">
                    <span class="mr-1 text-sm font-medium text-gray-600">4.4</span>
                    <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg" width="14" height="14" alt="rating">
                  </div>
                </div>
                <div class="flex items-center text-sm text-gray-600 space-x-4">
                  <div class="flex items-center">
                    <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" width="18" height="18" class="mr-1" alt="Duration">
                    <span>36 months</span>
                  </div>
                  <span class="text-gray-400">•</span>
                  <div class="flex items-center">
                    <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg" width="18" height="18" class="mr-1" alt="Fees">
                    <span>INR 90,000</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>


      </div>

      <!-- Navigation + Pagination -->
      <div class="mt-6 flex justify-between items-center">
        <div class="swiper-pagination"></div>
        <div class="space-x-2">
          <div class="swiper-button-prev !text-blue-700"></div>
          <div class="swiper-button-next !text-blue-700"></div>
        </div>
      </div>
    </div>

  </div>
</section>
<section class="py-16 bg-gradient-to-b from-white via-blue-50 to-white">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-4xl font-bold text-blue-800 mb-10">Table of Contents</h2>

    <div class="grid md:grid-cols-2 gap-6">
      <!-- Single Card -->
      <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-5 transition">
        <p class="text-lg font-semibold text-blue-900">1. Sikkim Manipal University Courses and Admission 2025</p>
      </div>

      <!-- Sublist Card -->
      <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-5 transition">
        <p class="text-lg font-semibold text-blue-900 mb-2">2. Eligibility Criteria (2024)</p>
        <ul class="list-disc list-inside text-gray-700 text-base pl-2 space-y-1">
          <li>MBA</li>
          <li>MCA</li>
          <li>B.Tech</li>
          <li>Ph.D.</li>
        </ul>
      </div>

      <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-5 transition">
        <p class="text-lg font-semibold text-blue-900">3. Admission Details</p>
      </div>

      <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-5 transition">
        <p class="text-lg font-semibold text-blue-900">4. University Highlights</p>
      </div>

      <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-5 transition">
        <p class="text-lg font-semibold text-blue-900">5. Placements & Stats 2025</p>
      </div>

      <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-5 transition">
        <p class="text-lg font-semibold text-blue-900">6. Top Recruiters</p>
      </div>

      <!-- Expert Button -->
      <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-5 transition flex flex-col md:flex-row md:items-center justify-between gap-4">
        <p class="text-lg font-semibold text-blue-900">7. Confusion? Talk to an Expert</p>
        <button class="px-5 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Connect Now</button>
      </div>

      <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-5 transition">
        <p class="text-lg font-semibold text-blue-900">8. Cut‑Off Trends</p>
      </div>

      <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-5 transition">
        <p class="text-lg font-semibold text-blue-900">9. FAQs</p>
      </div>

      <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-5 transition">
        <p class="text-lg font-semibold text-blue-900">10. Rankings</p>
      </div>

      <!-- Ask a Question Button -->
      <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-5 transition flex flex-col md:flex-row md:items-center justify-between gap-4">
        <p class="text-lg font-semibold text-blue-900">11. Ask a Question</p>
        <button class="px-5 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition">Ask Now</button>
      </div>

      <!-- Sublist -->
      <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-5 transition">
        <p class="text-lg font-semibold text-blue-900 mb-2">12. Campus Facilities and Infrastructure</p>
        <ul class="list-disc list-inside text-gray-700 text-base pl-2 space-y-1">
          <li>Campus Overview</li>
          <li>Infrastructure</li>
          <li>Facilities</li>
        </ul>
      </div>

      <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-5 transition">
        <p class="text-lg font-semibold text-blue-900">13. Scholarships</p>
      </div>

      <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-5 transition">
        <p class="text-lg font-semibold text-blue-900">14. Fee Structure & Courses</p>
      </div>

      <div class="bg-white rounded-xl shadow-lg hover:shadow-xl p-5 transition">
        <p class="text-lg font-semibold text-blue-900">15. Contact Details</p>
      </div>
    </div>
  </div>
</section>
<section class="container mx-auto px-4 py-12">
  <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-2xl p-8 border border-gray-200">
    <h3 class="text-2xl font-bold text-blue-800 mb-4">Sikkim Manipal University Courses and Admission 2025</h3>
    <p class="text-gray-700 text-lg leading-relaxed">
      SMU offers a rich variety of programs—postgraduate, undergraduate, and doctoral—via online, distance, and research modes, ideal for working professionals and full-time students alike.
    </p>
  </div>
</section>
<section class="container mx-auto px-4 py-12">
  <div class="text-center mb-10">
    <h3 class="text-3xl font-bold text-blue-800">Message from our leaders</h3>
  </div>
  
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    
    <!-- Card 1 -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex items-start space-x-4">
      <img src="/img/aboutus.jpeg" alt="Leader" class="w-24 h-24 rounded-full object-cover">
      <div>
        <p class="text-gray-600 mb-4">
          Sikkim Manipal University has always believed that access to quality education can transform lives. Online learning today is more than ... Read more
        </p>
        <h4 class="text-xl font-semibold text-blue-900">Dr GK Prabhu</h4>
        <p class="text-sm text-gray-500">Vice Chancellor, Sikkim Manipal University</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex items-start space-x-4">
      <img src="/img/aboutus.jpeg" alt="Leader" class="w-24 h-24 rounded-full object-cover">
      <div>
        <p class="text-gray-600 mb-4">
          Building on Sikkim Manipal University's legacy in education for last three decades, we have now expanded into the online learning ... Read more
        </p>
        <h4 class="text-xl font-semibold text-blue-900">Prof (Dr) Sourav Dhar</h4>
        <p class="text-sm text-gray-500">Director, Centre for Distance & Online Education</p>
      </div>
    </div>

  </div>
</section>

<section class="bg-white py-16 px-4 lg:px-20">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-3xl font-bold text-blue-800 mb-10 text-center">Sikkim Manipal University Admission Overview</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Admission Process -->
      <div class="bg-blue-50 border border-blue-100 rounded-xl p-6 shadow-sm">
        <h3 class="text-xl font-semibold text-blue-800 mb-4">Admission Process (2025)</h3>
        <ol class="list-decimal list-inside space-y-1 text-gray-700">
          <li>Submit online application</li>
          <li>Upload documents & pay fee</li>
          <li>Shortlisting via entrance exams/interviews</li>
          <li>Offer letter / provisional admission</li>
          <li>Pay registration fee to confirm</li>
        </ol>
      </div>

      <!-- Eligibility Criteria -->
      <div class="bg-blue-50 border border-blue-100 rounded-xl p-6 shadow-sm">
        <h3 class="text-xl font-semibold text-blue-800 mb-4">Eligibility Criteria (2024)</h3>
        <div class="mb-2">
          <p class="font-semibold text-blue-700">MBA</p>
          <ul class="list-disc list-inside text-gray-700 text-sm">
            <li>Bachelor's degree (50%)</li>
            <li>CAT/MAT/CMAT or SMU Entrance</li>
            <li>Work experience preferred</li>
          </ul>
        </div>
        <div class="mb-2">
          <p class="font-semibold text-blue-700">MCA</p>
          <ul class="list-disc list-inside text-gray-700 text-sm">
            <li>BCA / B.Sc / Grad with Math</li>
            <li>50% aggregate</li>
            <li>SMU entrance / merit-based</li>
          </ul>
        </div>
        <div class="mb-2">
          <p class="font-semibold text-blue-700">B.Tech</p>
          <ul class="list-disc list-inside text-gray-700 text-sm">
            <li>10+2 with Physics, Math</li>
            <li>55% aggregate</li>
            <li>SMU / JEE / State scores</li>
          </ul>
        </div>
        <div>
          <p class="font-semibold text-blue-700">Ph.D.</p>
          <ul class="list-disc list-inside text-gray-700 text-sm">
            <li>PG with 55% marks</li>
            <li>SMU entrance + interview</li>
            <li>Research housing available</li>
          </ul>
        </div>
      </div>

      <!-- Admission Details -->
      <div class="bg-blue-50 border border-blue-100 rounded-xl p-6 shadow-sm">
        <h3 class="text-xl font-semibold text-blue-800 mb-4">Admission Details</h3>
        <ul class="list-disc list-inside text-gray-700 space-y-1">
          <li><strong>Start Date:</strong> Jan & July (Rolling)</li>
          <li><strong>Apply at:</strong> SMU online portal</li>
          <li><strong>Documents:</strong> ID, Certificates, Photo</li>
          <li><strong>Selection:</strong> Entrance / Interview</li>
        </ul>
      </div>

      <!-- University Highlights -->
      <div class="bg-blue-50 border border-blue-100 rounded-xl p-6 shadow-sm">
        <h3 class="text-xl font-semibold text-blue-800 mb-4">University Highlights</h3>
        <ul class="list-disc list-inside text-gray-700 space-y-1">
          <li>NAAC-accredited institution</li>
          <li>Global curriculum & digital tools</li>
          <li>e-Library, LMS, mentoring</li>
          <li>Industry-linked placements</li>
        </ul>
      </div>

      <!-- Placement Overview -->
      <div class="bg-blue-50 border border-blue-100 rounded-xl p-6 shadow-sm">
        <h3 class="text-xl font-semibold text-blue-800 mb-4">Placement Highlights 2025</h3>
        <ul class="list-disc list-inside text-gray-700 space-y-1">
          <li><strong>MBA Avg:</strong> ₹3.5 LPA</li>
          <li><strong>MBA Highest:</strong> ₹12 LPA</li>
          <li><strong>B.Tech Avg:</strong> ₹4–6 LPA</li>
          <li><strong>B.Tech Highest:</strong> ₹14 LPA</li>
        </ul>
      </div>

    </div>
  </div>
</section>
<section class="bg-gray-50 py-16 px-4 lg:px-20">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-3xl font-bold text-blue-800 mb-10 text-center">Career & Admission Insights</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Placement Highlights -->
      <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-blue-500">
        <h3 class="text-xl font-semibold text-blue-800 mb-3">📈 Placement Highlights 2025</h3>
        <ul class="text-gray-700 space-y-1">
          <li><strong>Avg Package (MBA):</strong> ₹3.5 LPA</li>
          <li><strong>Avg (B.Tech):</strong> ₹4–6 LPA</li>
          <li><strong>Highest MBA:</strong> ₹12 LPA</li>
          <li><strong>Highest B.Tech:</strong> ₹14 LPA</li>
        </ul>
      </div>

      <!-- Top Recruiters -->
      <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-green-500">
        <h3 class="text-xl font-semibold text-green-800 mb-3">💼 Top Recruiters</h3>
        <ul class="text-gray-700 space-y-1">
          <li><strong>IBM:</strong> Technology & Consulting</li>
          <li><strong>Wipro:</strong> IT Services</li>
          <li><strong>TCS:</strong> Software Development</li>
          <li><strong>Infosys:</strong> Digital Services</li>
          <li><strong>Capgemini:</strong> Tech Consulting</li>
          <li><strong>HCL:</strong> IT & R&D</li>
        </ul>
      </div>

      <!-- Talk to Expert -->
      <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-yellow-500 flex flex-col justify-between">
        <div>
          <h3 class="text-xl font-semibold text-yellow-800 mb-3">🤔 Confused? Talk to an SMU Expert</h3>
          <p class="text-gray-700 mb-4">Get instant guidance on course selection, admission procedure & career planning.</p>
        </div>
        <a href="#connect-now" class="inline-block mt-auto text-white bg-yellow-500 hover:bg-yellow-600 px-5 py-2 rounded-lg text-center font-semibold transition">Connect Now</a>
      </div>

      <!-- Cut-off Info -->
      <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-purple-500">
        <h3 class="text-xl font-semibold text-purple-800 mb-3">🎯 Cut Off 2025</h3>
        <ul class="text-gray-700 space-y-1">
          <li><strong>MBA:</strong> CAT/CMAT/MAT ~50th percentile</li>
          <li><strong>MCA/B.Tech:</strong> Entrance or +2 score</li>
          <li><strong>Ph.D.:</strong> Entrance + Interview + Research fit</li>
        </ul>
      </div>

      <!-- FAQs -->
      <div class="bg-white rounded-xl shadow-md p-6 border-l-4 border-pink-500">
        <h3 class="text-xl font-semibold text-pink-800 mb-3">❓ FAQs</h3>
        <p class="text-gray-700">Have questions about programs, fees, eligibility or campus support? Explore our FAQ section for quick answers to common queries.</p>
        <a href="#faq-section" class="text-pink-600 hover:underline mt-3 inline-block">Go to FAQs →</a>
      </div>

    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="relative py-20 bg-gradient-to-br from-blue-50 to-white overflow-hidden">
  <div class="max-w-6xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-10">
      <h2 class="text-4xl font-bold text-blue-700 mb-2">Get More Information</h2>
      <p class="text-gray-600 text-lg">Our academic counselors will get in touch with you shortly.</p>
    </div>
    <form class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-white p-8 rounded-lg shadow-lg relative z-10" method="POST" action="#">
      <input type="text" placeholder="Your Name" class="w-full border p-3 rounded" required>
      <input type="email" placeholder="Email Address" class="w-full border p-3 rounded" required>
      <input type="tel" placeholder="Phone Number" class="w-full border p-3 rounded" required>
      <input type="text" placeholder="City" class="w-full border p-3 rounded">
      <textarea rows="4" placeholder="Your Message" class="w-full border p-3 rounded md:col-span-2"></textarea>
      <div class="md:col-span-2 text-center">
        <button type="submit" class="bg-blue-700 text-white py-3 px-8 rounded-lg hover:bg-blue-800 transition-all shadow-md">Submit Your Query</button>
      </div>
    </form>
  </div>
</section>

<!-- Footer -->
<footer class="bg-blue-900 text-white py-12">
  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

    <!-- University Info -->
    <div>
      <h4 class="text-xl font-semibold mb-4">Manipal University Jaipur</h4>
      <p class="text-sm text-gray-300">
        Online programs designed for future leaders.
        Accredited and recognized globally.
      </p>
    </div>

    <!-- Contact Details -->
    <div>
      <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
      <ul class="space-y-2 text-sm text-gray-300">
        <li>📍 A: H-15, Sector 63, Noida, Uttar Pradesh, 201301 India</li>
        <li>📞+91 9266585858</li>
        <li>✉️ info@collegevihar.com</li>
      </ul>
    </div>

    <div>
      <h4 class="text-lg font-semibold mb-4">Courses</h4>
      <ul class="space-y-2 text-sm text-gray-300">
        <li><a href="#about" class="hover:underline">Online MBA</a></li>
        <li><a href="#courses" class="hover:underline">Online BBA</a></li>
        <li><a href="#admission" class="hover:underline">Online M.com</a></li>
        <li><a href="#admission" class="hover:underline">Online MCA</a></li>
        <li><a href="#admission" class="hover:underline">Online BCA</a></li>      </ul>
    </div>
    <!-- Quick Links -->
    <div>
      <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
      <ul class="space-y-2 text-sm text-gray-300">
        <li><a href="#about" class="hover:underline">About</a></li>
        <li><a href="#courses" class="hover:underline">Courses</a></li>
        <li><a href="#admission" class="hover:underline">Admissions</a></li>
        <li><a href="#faq" class="hover:underline">FAQs</a></li>
      </ul>
    </div>

    <!-- Social Media -->
    <!-- <div>
      <h4 class="text-lg font-semibold mb-4">Follow Us</h4>
      <div class="flex space-x-4 text-white text-xl">
        <a href="#" class="hover:text-blue-400"><i class="fab fa-facebook"></i></a>
        <a href="#" class="hover:text-blue-400"><i class="fab fa-twitter"></i></a>
        <a href="#" class="hover:text-blue-400"><i class="fab fa-linkedin"></i></a>
        <a href="#" class="hover:text-blue-400"><i class="fab fa-instagram"></i></a>
      </div>
    </div> -->
  </div>

  <div class="mt-10 text-center text-sm text-gray-400">
    © 2025 Manipal University Jaipur. All rights reserved.
  </div>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.topCourseSwiper', {
    loop: true,
    spaceBetween: 30,
    slidesPerView: 1,
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    breakpoints: {
      640: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 }
    }
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.rankingSwiper', {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      breakpoints: {
        640: { slidesPerView: 2 },
        768: { slidesPerView: 3 },
        1024: { slidesPerView: 4 },
      }
    });

    $('.top-course-slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      infinite: false,
      responsive: [
        { breakpoint: 1024, settings: { slidesToShow: 2 }},
        { breakpoint: 640, settings: { slidesToShow: 1 }}
      ]
    });

    document.getElementById('year').textContent = new Date().getFullYear();
  });
</script>

  <script>
    AOS.init({
      duration: 1000,
      once: true


    });
  </script>
   <script>
    const swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        }
      }
    });
  </script>
</footer>
</body>
</html>
