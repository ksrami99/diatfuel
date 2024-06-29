<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HealthFuel - Fuel Up Your Life</title>
    <link rel="stylesheet" href="/css/main.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <style>

        *{
            a{
               text-decoration:none; 
            }    
        }
    </style>
  </head>

  <body>
    <!-- navbar  -->
    <div class="header">
      <div class="container">
        <nav class="navbar navbar-expand-md navbar-light border-bottom">
          <div class="col-md-3 mb-2 mb-md-0">
            <a
              href="/"
              class="d-inline-flex link-body-emphasis text-decoration-none"
              previewlistener="true"
            >
              <img src="/images/logo-main.png" alt="" width="200" />
            </a>
          </div>
          <div class="container-fluid">
            <a href="/" class="navbar-brand">
              <img src="logo-main.png" alt="" width="200" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact Us</a>
                </li>
              </ul>
              <div class="d-flex">
                <button type="button" class="btn btn-outline-primary me-2"><a href="{{route('login')}}">Login</a>
                  
                </button>
                <button type="button" class="btn btn-primary"><a href="{{route('register')}}">Sign-up</a></button>
              </div>
            </div>
             
          </div>
            
        </nav>
      </div>
    </div>

    <!-- header section -->
    <div class="px-4 py-5 my-5 text-center">
      <img
        class="d-block mx-auto mb-4"
        src="/images/logo-main.png"
        alt=""
        width="300"
      />
      <h1 class="display-5 fw-bold text-body-emphasis">
        Welcome to Health Fuel.
      </h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">
          At HealthFuel, we believe that personalized nutrition is the key to a
          healthier, happier life. Our advanced diet recommendation system is
          designed to cater to your unique health goals and dietary preferences,
          ensuring you receive the best nutrition plan tailored just for you.
        </p>
      </div>
    </div>
    <!-- header section -->

    <!-- features section -->

    <section id="features-home">
      <div class="container px-4 py-5" id="featured-3">
        <h2 class="pb-2 border-bottom">Our Plans</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="feature col">
            <div
              class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3"
            >
              <img src="/images/001-weight-loss.png" width="50" alt="" />
            </div>
            <h3 class="fs-2 text-body-emphasis">Weight Loss</h3>
            <p>
              Calorie deficit with nutrient-dense foods. Portion control and
              balanced meals.
            </p>
          </div>
          <div class="feature col">
            <div
              class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3"
            >
              <img src="/images/002-muscle.png" width="50" alt="" />
            </div>
            <h3 class="fs-2 text-body-emphasis">Muscle Gain</h3>
            <p>
              High protein intake for muscle growth and recovery. Includes
              strength training meal support.
            </p>
          </div>
          <div class="feature col">
            <div
              class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3"
            >
              <img src="/images/004-gain-weight.png" width="50" alt="" />
            </div>
            <h3 class="fs-2 text-body-emphasis">Weight Gain</h3>
            <p>
              Calorie surplus with healthy, nutrient-rich foods. Emphasis on
              protein and healthy fats.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- features section -->

    <!-- why choose us  -->
    <section id="features-home">
      <div class="container px-4 py-5" id="featured-3">
        <h2 class="pb-2 border-bottom">Why Choose Us?</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="feature col">
            <div
              class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3"
            >
              <img src="/images/001-weight-loss.png" width="50" alt="" />
            </div>
            <h3 class="fs-2 text-body-emphasis">
              Personalized Nutrition Plans
            </h3>
            <p>
              Our advanced algorithm creates meal plans tailored to your
              specific dietary needs and health goals, ensuring you get the most
              effective and personalized nutrition advice.
            </p>
          </div>
          <div class="feature col">
            <div
              class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3"
            >
              <img src="/images/002-muscle.png" width="50" alt="" />
            </div>
            <h3 class="fs-2 text-body-emphasis">Comprehensive Food Database</h3>
            <p>
              Access a vast database of food items with detailed nutritional
              information, making it easy to track your intake and make informed
              dietary choices.
            </p>
          </div>
          <div class="feature col">
            <div
              class="feature-icon d-inline-flex align-items-center justify-content-center bg-gradient fs-2 mb-3"
            >
              <img src="/images/004-gain-weight.png" width="50" alt="" />
            </div>
            <h3 class="fs-2 text-body-emphasis">Easy-to-Use Interface</h3>
            <p>
              HealthFuel is designed with user experience in mind, providing an
              intuitive and seamless interface that makes managing your diet
              straightforward and enjoyable.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- why choose us  -->

    <!-- footer section  -->
    <div class="container">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">Home</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">Services</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">About Us</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link px-2 text-body-secondary">Contact Us</a>
          </li>
        </ul>
        <p class="text-center text-body-secondary">© 2024 HealthFuel, Inc</p>
      </footer>
    </div>
    <!-- footer section  -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
