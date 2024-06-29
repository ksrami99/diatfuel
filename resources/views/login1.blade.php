<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>

  <style>
    .login-container {
      display: flex;
      /* border: 1px solid green; */
      justify-content: space-around;
      height: 80vh;
      align-items: center;
    }
    h2 {
      text-align: center;
      text-decoration: underline;
    }
    .r-content {
      /* border: 1px solid red; */
      padding: 25px;
      box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }
  </style>
  <body>
    <!-- Navbar -->
    <<!-- navbar  -->
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
                <button type="button" class="btn btn-outline-primary me-2">
                  Login
                </button>
                <button type="button" class="btn btn-primary">Sign-up</button>
              </div>
            </div>
             
          </div>
            
        </nav>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="login-container">
          <div class="col-md-5 r-content">
            <h2>Login</h2>
            <form action="{{ Route('Admin.login') }}" method="POST">
                @csrf
              <div class="form-floating mb-3">
                <input
                  type="email"
                  class="form-control"
                  id="floatingInput"
                  placeholder="name@example.com"
                />
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input
                  type="password"
                  class="form-control"
                  id="floatingPassword"
                  placeholder="Password"
                />
                <label for="floatingPassword">Password</label>
                <div id="emailHelp" class="form-text text-end">
                  Forgot Password ?
                </div>
              </div>
              <div class="submit-btn m-2" style="text-align: center">
                <button type="submit" class="btn btn-success">Login</button>
              </div>

              <div id="emailHelp" class="form-text text-center">
                New User ? <a href="#">Click here</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>
