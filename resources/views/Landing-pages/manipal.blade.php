<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manipal University Online – MBA in Finance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html { scroll-behavior: smooth; }
        @keyframes fade-in {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .animate-fade-in {
        animation: fade-in 0.8s ease-out both;
    }

    .delay-150 { animation-delay: 0.15s; }
    .delay-300 { animation-delay: 0.3s; }
    .delay-500 { animation-delay: 0.5s; }

    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
        
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- 🔝 Header -->
    <header class="bg-white shadow fixed top-0 left-0 right-0 z-50">
        <div class="max-w-7xl mx-auto flex items-center justify-between p-4">
            <div class="flex items-center space-x-3">
                <img src="/img/logo.jpeg" class="w-10 h-10" alt="Manipal Logo">
                <span class="text-xl font-bold text-blue-700">Manipal University Online</span>
            </div>
            <nav class="hidden md:flex space-x-6 text-sm font-medium">
                <a href="#program" class="hover:text-blue-600">Program</a>
                <a href="#features" class="hover:text-blue-600">Why Choose Us</a>
                <a href="#contact" class="hover:text-blue-600">Contact</a>
            </nav>
        </div>
    </header>

<section class="relative text-white pt-32 pb-24 overflow-hidden">
  <div class="absolute inset-0">
    <img src="/img/banner.jpeg" 
         alt="University Background" 
         class="w-full h-full object-cover">
  </div>

  <div class="relative z-10 max-w-7xl mx-auto grid md:grid-cols-2 items-center px-6 gap-12">
    <div class="text-left">
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight tracking-tight mb-4 animate-fade-in">
        MBA in Finance
      </h1>

      <p class="text-xl md:text-2xl font-medium mb-4 text-white/90 animate-fade-in delay-150">
        Master of Business Administration – Finance Specialization
      </p>

      <p class="mb-6 text-lg md:text-xl font-light animate-fade-in delay-300">
        📆 <strong>Duration:</strong> 2 Years &nbsp; | &nbsp; 🖥️ <strong>100% Online</strong>
      </p>

      <div class="flex flex-col sm:flex-row gap-4 animate-fade-in delay-500">
        <a href="#contact" class="bg-white text-blue-800 font-semibold text-lg px-6 py-3 rounded-full shadow-lg hover:bg-blue-100 transition-all transform hover:scale-105">
          🚀 Enroll Now
        </a>
        <a href="#apply" class="bg-yellow-400 text-blue-900 font-semibold text-lg px-6 py-3 rounded-full shadow-lg hover:bg-yellow-300 transition-all transform hover:scale-105">
          📝 Apply Now
        </a>
      </div>
    </div>

    <!-- <div class="flex justify-center md:justify-end">
      <img src="#" 
           alt="Finance Vector" 
           class="w-full max-w-sm md:max-w-md animate-fade-in delay-700" />
    </div> -->
  </div>

  <!-- Decorative Blurs (Optional) -->
  <div class="absolute top-[-100px] left-[-80px] w-[300px] h-[300px] bg-blue-300 rounded-full opacity-20 blur-3xl"></div>
  <div class="absolute bottom-[-120px] right-[-60px] w-[400px] h-[400px] bg-purple-300 rounded-full opacity-20 blur-3xl"></div>
</section>


<section class="max-w-7xl mx-auto px-4 py-16 bg-white">
  <div class="flex flex-col md:flex-row items-center gap-10">
    <!-- Text Column -->
    <div class="w-full md:w-1/2">
      <h3 class="text-4xl md:text-5xl font-extrabold text-blue-800 leading-snug mb-4">
        About Manipal University Jaipur
      </h3>
      <p class="text-gray-700 text-lg leading-relaxed">
        Manipal University Jaipur (MUJ), a NAAC A+ accredited institution, is one of India's leading private universities offering quality higher education in online and distance modes. As a part of the prestigious Manipal Education Group, MUJ aims to provide affordable, flexible, and career-focused online degree programs that meet modern industry demands. The university is UGC-approved and offers undergraduate and postgraduate courses in management, IT, commerce, and more.
      </p>
    </div>

    <!-- Image Column -->
    <div class="w-full md:w-1/2">
      <img src="/img/aboutus.jpeg" alt="Manipal University Jaipur" class="rounded-xl shadow-lg w-80% h-auto object-cover transition-transform duration-300 hover:scale-105">
    </div>
  </div>
</section>

<!-- 🎓 Top Online Courses -->
<section id="courses" class="py-20 bg-gradient-to-b from-white via-blue-50 to-white">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Heading -->
        <div class="text-left mb-12">
            <h4 class="text-4xl md:text-5xl font-extrabold text-blue-800 leading-snug">
                Top Courses at Manipal University Jaipur (Online)
            </h4>
        </div>

        <!-- Course Cards -->
        <div class="flex space-x-6 overflow-x-auto hide-scrollbar scroll-smooth snap-x snap-mandatory pb-2">
            @php
                $courses = [
                    [
                        'title' => 'Online MBA',
                        'desc'  => 'Master financial decision-making and strategy.',
                        'img'   => 'https://www.onlinemanipal.com/wp-content/uploads/2024/03/BBA@2x.webp',
                        'duration' => '2 Years',
                        'eligibility' => 'Graduation',
                        'mode' => 'Online',
                        'fees' => '₹1,66,000',
                        'badge' => 'Trending',
                        'special' => '4 in-demand specializations',
                        'university' => 'Manipal University Jaipur'
                    ],
                    [
                        'title' => 'Online BBA',
                        'desc'  => 'Learn branding, digital marketing & analytics.',
                        'img'   => 'https://www.onlinemanipal.com/wp-content/uploads/2024/03/BBA@2x.webp',
                        'duration' => '3 Years',
                        'eligibility' => '10+2',
                        'mode' => 'Online',
                        'fees' => '₹1,26,000',
                        'badge' => 'Top Ranked',
                        'special' => '5 in-demand specializations',
                        'university' => 'Manipal University Jaipur'
                    ],
                    [
                        'title' => 'Online M.Com',
                        'desc'  => 'Advance your career in commerce and finance.',
                        'img'   => 'https://www.onlinemanipal.com/wp-content/uploads/2024/03/BBA@2x.webp',
                        'duration' => '2 Years',
                        'eligibility' => 'B.Com or Equivalent',
                        'mode' => 'Online',
                        'fees' => '₹80,000',
                        'badge' => 'Popular',
                        'special' => '2 in-demand specializations',
                        'university' => 'Manipal University Jaipur'
                    ],
                    [
                        'title' => 'Online MCA',
                        'desc'  => 'Gain expertise in computing & software development.',
                        'img'   => 'https://www.onlinemanipal.com/wp-content/uploads/2024/03/BBA@2x.webp',
                        'duration' => '2 Years',
                        'eligibility' => 'BCA/B.Sc (CS/IT) or Equivalent',
                        'mode' => 'Online',
                        'fees' => '₹1,60,000',
                        'badge' => 'Trending',
                        'special' => '3 in-demand specializations',
                        'university' => 'Manipal University Jaipur'
                    ],
                    [
                        'title' => 'Online BCA',
                        'desc'  => 'Build strong IT and programming foundations.',
                        'img'   => 'https://www.onlinemanipal.com/wp-content/uploads/2024/03/BBA@2x.webp',
                        'duration' => '3 Years',
                        'eligibility' => '10+2',
                        'mode' => 'Online',
                        'fees' => '₹1,35,000',
                        'badge' => 'Top Ranked',
                        'special' => '2 specializations',
                        'university' => 'Manipal University Jaipur'
                    ]
                ];
            @endphp

            @foreach ($courses as $course)
                <a href="#" class="min-w-[340px] max-w-sm bg-white rounded-2xl border border-gray-200 shadow hover:shadow-xl transition duration-300 flex-shrink-0">
                    <!-- 🟨 Badges + Image -->
                    <div class="relative">
                        <div class="absolute top-3 left-3 bg-yellow-400 text-blue-900 text-xs font-bold px-3 py-1 rounded-full z-10 shadow">
                            {{ $course['badge'] }}
                        </div>
                        <div class="absolute bottom-3 left-3 bg-blue-800 text-white text-xs font-medium px-3 py-1 rounded-full z-10 shadow">
                            {{ $course['special'] }}
                        </div>
                        <img src="{{ $course['img'] }}" alt="{{ $course['title'] }}" class="w-full h-48 object-cover rounded-t-2xl">
                    </div>

                    <!-- 🏫 University Name -->
                    <div class="bg-blue-100 text-blue-900 text-sm font-semibold py-2 px-4">
                        {{ $course['university'] }}
                    </div>

                    <!-- 📘 Course Details -->
                    <div class="p-5 space-y-2">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-blue-800">{{ $course['title'] }}</h3>
                            <div class="flex items-center gap-1">
                                <span class="text-sm font-medium text-yellow-600">4.7</span>
                                <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/star.svg" alt="star" class="w-4 h-4">
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm">{{ $course['desc'] }}</p>

                        <!-- 📅 Duration & 💰 Fees -->
                        <div class="flex items-center text-sm text-gray-700 mt-3 space-x-4">
                            <div class="flex items-center gap-1">
                                <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/duration.svg" class="w-5 h-5" alt="duration">
                                <span>{{ $course['duration'] }}</span>
                            </div>
                            <div class="w-1 h-1 rounded-full bg-gray-500"></div>
                            <div class="flex items-center gap-1">
                                <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/fees.svg" class="w-5 h-5" alt="fees">
                                <span>{{ $course['fees'] }}</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>


<section class="bg-gradient-to-r from-blue-50 to-white py-12">
    <div class="max-w-6xl mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">
            
            <!-- Left Image and Content -->
            <div class="flex items-center gap-5">
                <!-- Icon -->
                <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/stickers/take-quiz-icon.svg"
                     alt="quiz" class="w-20 h-20 animate-bounce">
                
                <!-- Text & Button -->
                <div>
                    <p class="text-xl md:text-2xl font-semibold text-blue-900 mb-2">
                        Find the right course for you
                    </p>
                    <button class="bg-blue-700 text-white px-6 py-2 rounded-full font-medium inline-flex items-center hover:bg-blue-800 transition">
                        Take a Quiz
                        <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/right-arrow-icon.svg"
                             alt="arrow" class="ml-2 w-4 h-4">
                    </button>
                </div>
            </div>

            <!-- View All Button -->
            <div class="mt-4 md:mt-0">
                <a href="/all-courses" class="text-blue-700 font-medium underline hover:text-blue-900 transition">
                    View All Courses
                </a>
            </div>

        </div>
    </div>
</section>
<!-- 🎯 In-Demand Specializations -->
<section id="specializations" class="py-20 bg-gradient-to-b from-white via-blue-50 to-white">
  <div class="max-w-6xl mx-auto px-6">
    
    <!-- Heading -->
    <div class="text-left mb-12">
      <h2 class="text-4xl md:text-5xl font-extrabold text-blue-800 leading-snug">
        In-Demand Specializations
      </h2>
    </div>

    <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3">
  @php
    $specializations = [
      ['title' => 'Finance', 'icon' => '<svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 20 20"><path d="M17 9V7a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H8a2 2 0 00-2 2v1H5a2 2 0 00-2 2v2h14zm0 2H3v5a2 2 0 002 2h10a2 2 0 002-2v-5z"/></svg>'],
      ['title' => 'Marketing', 'icon' => '<svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 24 24"><path d="M2 3h2v18H2V3zm4 6h3l2-2h9v10h-9l-2-2H6V9zm11 3a1 1 0 100-2 1 1 0 000 2z"/></svg>'],
      ['title' => 'HR Management', 'icon' => '<svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.7 0 4.5-1.8 4.5-4.5S14.7 3 12 3 7.5 4.8 7.5 7.5 9.3 12 12 12zm0 1.5c-3 0-9 1.5-9 4.5V21h18v-3c0-3-6-4.5-9-4.5z"/></svg>'],
      ['title' => 'Business Analytics', 'icon' => '<svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 24 24"><path d="M4 21h2v-7H4v7zm4 0h2V10H8v11zm4 0h2V3h-2v18zm4 0h2v-5h-2v5zm4 0h2v-9h-2v9z"/></svg>'],
      ['title' => 'Entrepreneurship', 'icon' => '<svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 24 24"><path d="M11 21h2v-2h-2v2zm1-20C6.5 1 2 5.5 2 11s4.5 10 10 10 10-4.5 10-10S17.5 1 12 1zm0 18c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8z"/></svg>'],
      ['title' => 'Operations', 'icon' => '<svg class="w-10 h-10 text-blue-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l1.7 5h5.3l-4.3 3.2 1.6 5.3L12 13l-4.3 3.5 1.6-5.3L5 7h5.3L12 2z"/></svg>'],
    ];
  @endphp

  @foreach ($specializations as $spec)
    <div class="bg-white rounded-2xl p-6 shadow-md border border-blue-100 hover:shadow-xl transition">
      <div class="flex items-center gap-3 mb-4">
        {!! $spec['icon'] !!}
        <h3 class="text-xl font-semibold text-blue-800">{{ $spec['title'] }}</h3>
      </div>
      <p class="text-gray-600 text-sm">
        Explore how {{ $spec['title'] }} can drive impact in your career through practical and strategic learning.
      </p>
    </div>
  @endforeach
</div>

<!-- 🎓 Top-Ranked Universities Section -->
<section class="py-20 bg-white mt-4">
  <div class="max-w-7xl mx-auto px-6">
    
    <!-- Heading -->
    <h2 class="text-4xl md:text-5xl font-extrabold text-blue-800 mb-12 text-center">
      Shape Your Future With Our Top-Ranked Universities
    </h2>

    <!-- University Grid -->
    <div class="grid gap-10 lg:grid-cols-2">

      <!-- 🏫 Manipal University Jaipur -->
      <div class="relative bg-white border rounded-2xl shadow-md hover:shadow-xl transition p-4">
        <a href="/institution/muj" class="flex flex-col lg:flex-row items-center gap-6">
          <div class="flex-1">
            <p class="text-2xl font-bold text-blue-800">Manipal University <span class="text-gray-600">Jaipur</span></p>
            <div class="mt-3 flex items-center gap-2 text-blue-600 font-semibold">
              <span>View all Courses</span>
              <img src="/img/aboutus.jpeg" alt="right arrow" width="20" height="20">
            </div>
          </div>
          <div class="w-full lg:w-1/2">
            <img src="/img/aboutus.jpeg" alt="Manipal University Jaipur" class="rounded-lg w-full object-cover">
          </div>
        </a>
      </div>

      <!-- 🏫 MAHE -->
      <div class="relative bg-white border rounded-2xl shadow-md hover:shadow-xl transition p-4">
        <div class="absolute top-4 right-4 bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded-full font-medium">
          Ranks 4<sup>th</sup> <span class="hidden md:inline">amongst all universities</span>
        </div>
        <a href="/institution/mahe" class="flex flex-col lg:flex-row items-center gap-6 mt-6 lg:mt-0">
          <div class="flex-1">
            <p class="text-2xl font-bold text-blue-800">Manipal Academy of <span class="text-gray-600">Higher Education</span></p>
            <div class="mt-3 flex items-center gap-2 text-blue-600 font-semibold">
              <span>View all Courses</span>
              <img src="/img/aboutus.jpeg" alt="right arrow" width="20" height="20">
            </div>
          </div>
          <div class="w-full lg:w-1/2">
            <img src="/img/aboutus.jpeg" alt="MAHE" class="rounded-lg w-full object-cover">
          </div>
        </a>
      </div>

      <!-- 🏫 SMU -->
      <div class="relative bg-white border rounded-2xl shadow-md hover:shadow-xl transition p-4 lg:col-span-2">
        <a href="/institution/smu" class="flex flex-col md:flex-row items-center gap-6">
          <div class="flex-1">
            <p class="text-2xl font-bold text-blue-800">Sikkim Manipal <span class="text-gray-600">University</span></p>
            <div class="mt-3 flex items-center gap-2 text-blue-600 font-semibold">
              <span>View all Courses</span>
              <img src="/img/banner.jpeg" alt="right arrow" width="20" height="20">
            </div>
          </div>
          <div class="w-full md:w-1/2">
            <img src="/img/banner.jpeg" alt="Sikkim Manipal University" class="rounded-lg w-full object-cover">
          </div>
        </a>
      </div>

    </div>
  </div>
</section>

  </div>
</section>

<section class="relative bg-gradient-to-r from-blue-50 via-white to-blue-100 py-16 px-6">
  <!-- Background Image Layer -->
  <div class="absolute inset-0 bg-[url('/img/banner.jpeg')] bg-cover bg-center "></div>

  <!-- Content -->
  <div class="relative max-w-6xl mx-auto flex flex-col md:flex-row items-center z-10">
    <div class="w-full md:w-2/3 text-left">
    <h3 class="text-4xl md:text-5xl font-extrabold text-white mb-4">
  Unsure which course is right for you?
</h3>
      <p class="text-lg md:text-xl text-white mb-6">
        Answer a few quick questions and we’ll guide you to the perfect course!
      </p>
      <a href="#quiz"
   class="inline-block bg-gradient-to-r from-pink-500 to-blue-600 text-white px-8 py-3 rounded-full font-medium text-lg shadow-md hover:from-pink-600 hover:to-blue-700 transition duration-300">
    Find My Course
</a>
    </div>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Our Impact -->
    <div class="mb-16 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Our Impact</h2>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div class="p-4 bg-gray-100 rounded-lg shadow text-center">
          <div class="text-3xl font-extrabold text-blue-600">60+</div>
          <p class="text-sm mt-2 text-gray-600">Countries & 2000+ towns & cities</p>
        </div>
        <div class="p-4 bg-gray-100 rounded-lg shadow text-center">
          <div class="text-3xl font-extrabold text-blue-600">100k+</div>
          <p class="text-sm mt-2 text-gray-600">Learners empowered through Online Manipal</p>
        </div>
        <div class="p-4 bg-gray-100 rounded-lg shadow text-center">
          <div class="text-3xl font-extrabold text-blue-600">93%</div>
          <p class="text-sm mt-2 text-gray-600">Students say their degree has a positive ROI</p>
        </div>
        <div class="p-4 bg-gray-100 rounded-lg shadow text-center">
          <div class="text-3xl font-extrabold text-blue-600">81%</div>
          <p class="text-sm mt-2 text-gray-600">Believe online is better or equal to on-campus</p>
        </div>
      </div>
    </div>

    <!-- Why Students Choose Us -->
    <div>
      <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-10">Why Students Choose Us</h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
          <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/top-ranked.svg" alt="Top Ranked" class="w-12 mb-4">
          <h3 class="font-semibold text-lg mb-2">Top Ranked Universities</h3>
          <p class="text-sm text-gray-600">UGC-entitled & AICTE approved degrees at par with on-campus programs.</p>
        </div>

        <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
          <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/coursera.svg" alt="Coursera Access" class="w-12 mb-4">
          <h3 class="font-semibold text-lg mb-2">Coursera Access</h3>
          <p class="text-sm text-gray-600">Free access to 10K+ global courses & certifications.</p>
        </div>

        <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
          <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/scholarship.svg" alt="Scholarships" class="w-12 mb-4">
          <h3 class="font-semibold text-lg mb-2">Scholarships up to 30%</h3>
          <p class="text-sm text-gray-600">Available for merit, alumni, defense & more.</p>
        </div>

        <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
          <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/easy-finance.svg" alt="Financing" class="w-12 mb-4">
          <h3 class="font-semibold text-lg mb-2">Easy Financing</h3>
          <p class="text-sm text-gray-600">Affordable with flexible EMIs and financing options.</p>
        </div>

        <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
          <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/alumni.svg" alt="Alumni Status" class="w-12 mb-4">
          <h3 class="font-semibold text-lg mb-2">Global Alumni Status</h3>
          <p class="text-sm text-gray-600">Join a strong 2,00,000+ Manipal alumni network.</p>
        </div>

        <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
          <img src="https://www.onlinemanipal.com/wp-content/themes/flamingo/assets/images/icons/webinar.svg" alt="Webinars" class="w-12 mb-4">
          <h3 class="font-semibold text-lg mb-2">Industry Webinars</h3>
          <p class="text-sm text-gray-600">Learn from experts with weekly career webinars.</p>
        </div>

        <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
          <svg class="w-12 mb-4" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><rect width="64" height="64" rx="32" fill="#9ddaf0"/><text x="50%" y="50%" text-anchor="middle" dy=".3em" font-size="20" fill="#000">💼</text></svg>
          <h3 class="font-semibold text-lg mb-2">100% Placement Support</h3>
          <p class="text-sm text-gray-600">Get job-ready with placement training & interview prep.</p>
        </div>

        <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
          <svg class="w-12 mb-4" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><rect width="64" height="64" rx="32" fill="#f6b1c6"/><text x="50%" y="50%" text-anchor="middle" dy=".3em" font-size="20" fill="#000">🎓</text></svg>
          <h3 class="font-semibold text-lg mb-2">Campus Immersion</h3>
          <p class="text-sm text-gray-600">Meet batchmates & faculty with optional campus visits.</p>
        </div>
      </div>
    </div>

  </div>
</section>


  <section class="py-16 bg-gradient-to-r from-blue-50 to-blue-100 bg-white text-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-10">
      
      <!-- Image -->
      <div class="md:w-1/2" data-aos="fade-right">
        <img src="https://img.freepik.com/free-vector/job-interview-conversation_74855-7562.jpg" alt="Placement Support" class="rounded-xl shadow-lg">
      </div>

      <!-- Text Content -->
      <div class="md:w-1/2" data-aos="fade-left">
        <h3 class="text-3xl font-bold text-blue-800 mb-4 leading-tight">
          Experience 100% Placement<br>Support For Your Career Success
        </h3>
        <p class="text-gray-700 text-lg mb-6">
          Unlock your career potential with job-ready skills and expert placement support.
        </p>
        <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full font-semibold transition">
          Learn More
        </button>
      </div>

    </div>
  </section>
  <section class="py-16 bg-gray-50">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h3 class="text-3xl font-bold text-blue-800 mb-4">Campus Immersions</h3>
    <p class="text-gray-600 text-lg mb-10">
      Step into student life with our exclusive campus immersion experiences.
    </p>

    <!-- Flex Cards in One Row -->
    <div class="flex flex-wrap justify-center gap-6">

      <!-- Card 1 -->
      <div class="w-full sm:w-[45%] lg:w-[22%] bg-white p-6 rounded-xl shadow hover:shadow-lg transition flex flex-col items-center text-center">
        <div class="text-4xl mb-4">🎓</div>
        <h4 class="text-xl font-semibold text-blue-700 mb-2">Faculty Meetups</h4>
        <p class="text-gray-600 text-sm">Interact directly with professors on campus.</p>
      </div>

      <!-- Card 2 -->
      <div class="w-full sm:w-[45%] lg:w-[22%] bg-white p-6 rounded-xl shadow hover:shadow-lg transition flex flex-col items-center text-center">
        <div class="text-4xl mb-4">🏫</div>
        <h4 class="text-xl font-semibold text-blue-700 mb-2">Campus Tours</h4>
        <p class="text-gray-600 text-sm">Explore university life and infrastructure.</p>
      </div>

      <!-- Card 3 -->
      <div class="w-full sm:w-[45%] lg:w-[22%] bg-white p-6 rounded-xl shadow hover:shadow-lg transition flex flex-col items-center text-center">
        <div class="text-4xl mb-4">🤝</div>
        <h4 class="text-xl font-semibold text-blue-700 mb-2">Peer Networking</h4>
        <p class="text-gray-600 text-sm">Bond with your classmates in person.</p>
      </div>

      <!-- Card 4 -->
      <div class="w-full sm:w-[45%] lg:w-[22%] bg-white p-6 rounded-xl shadow hover:shadow-lg transition flex flex-col items-center text-center">
        <div class="text-4xl mb-4">📸</div>
        <h4 class="text-xl font-semibold text-blue-700 mb-2">Event Memories</h4>
        <p class="text-gray-600 text-sm">Capture the moments during immersion days.</p>
      </div>

    </div>
  </div>
</section>

  


    <!-- 📞 Contact / Enquiry -->
<section id="contact" class="relative py-20 bg-gradient-to-br from-blue-50 to-white overflow-hidden">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-blue-700 mb-2">Get More Information</h2>
            <p class="text-gray-600 text-lg">Our academic counselors will get in touch with you shortly.</p>
        </div>

        <!-- Optional background icon -->
        <div class="absolute top-0 right-0 w-32 opacity-10">
            <img src="https://cdn-icons-png.flaticon.com/512/3875/3875145.png" alt="Message Icon">
        </div>

        <!-- Success Message Placeholder -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 text-center">
                {{ session('success') }}
            </div>
        @endif

        <!-- Contact Form -->
        <form class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-white p-8 rounded-lg shadow-lg relative z-10" method="POST" action="#">
            @csrf

            <div class="relative">
                <input type="text" id="name" placeholder=" " class="peer w-full border border-gray-300 rounded p-3 placeholder-transparent focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <label for="name" class="absolute left-3 top-2 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-700">Your Name</label>
            </div>

            <div class="relative">
                <input type="email" id="email" placeholder=" " class="peer w-full border border-gray-300 rounded p-3 placeholder-transparent focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <label for="email" class="absolute left-3 top-2 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-700">Email Address</label>
            </div>

            <div class="relative">
                <input type="tel" id="phone" placeholder=" " class="peer w-full border border-gray-300 rounded p-3 placeholder-transparent focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <label for="phone" class="absolute left-3 top-2 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-700">Phone Number</label>
            </div>

            <div class="relative">
                <input type="text" id="city" placeholder=" " class="peer w-full border border-gray-300 rounded p-3 placeholder-transparent focus:outline-none focus:ring-2 focus:ring-blue-500">
                <label for="city" class="absolute left-3 top-2 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-700">City</label>
            </div>

            <div class="relative md:col-span-2">
                <textarea id="message" rows="4" placeholder=" " class="peer w-full border border-gray-300 rounded p-3 placeholder-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                <label for="message" class="absolute left-3 top-2 text-gray-500 text-sm transition-all peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-700">Your Message</label>
            </div>

            <div class="md:col-span-2 text-center">
                <button type="submit" class="bg-blue-700 text-white py-3 px-8 rounded-lg hover:bg-blue-800 transition-all shadow-md">
                    Submit Your Query
                </button>
            </div>
        </form>
    </div>
</section>

    <!-- 🔚 Footer -->
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
