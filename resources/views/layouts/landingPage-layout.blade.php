<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/landing-page.css" />
    <link rel="stylesheet" href="assets/css/service.css" />
    <title>Sunday Clean</title>
  </head>
  <body>

    <header>
      <nav>
        <div class="container nav-wrapper">
          <div class="logo">
            <p>Sunday Clean</p>
          </div>
          <div class="menu-wrapper">
            <div class="close bx bx-x"></div>
            <div class="menu-link">
              <a href="/">Home</a>
            </div>
            <div class="menu-link"><a href="#">About</a></div>
            <div class="menu-link"><a href="/service">Services</a></div>
            <div class="menu-link"><a href="#">Testimonials</a></div>
            <div class="menu-link btn-contact"><a href=" https://wa.me/+6285707776649">Contact Us</a></div>
          </div>
          <div class="menu-toggle bx bx-menu"></div>
        </div>
      </nav>
    </header>
    @yield('content')
    <script src="assets/js/main.js"></script>
  </body>
</html>
