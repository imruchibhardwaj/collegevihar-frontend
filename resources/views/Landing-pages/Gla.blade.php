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
  <nav class="container">
    <h1>GLA University</h1>
    <ul>
      <li><a href="#about">About</a></li>
      <li><a href="#courses">Courses</a></li>
      <li><a href="#fees">Fees</a></li>
      <li><a href="#placements">Placements</a></li>
      <li><a href="#faqs">FAQs</a></li>
    </ul>
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
