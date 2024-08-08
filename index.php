<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Landing Page</title>
  <?php include('head.php'); ?>
</head>

<body>
  <?php include('header.php'); ?>
  <section class="banner">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 my-auto">
          <div class="bannertext">
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod
            </h2>
            <h2 class="authorn">- Lorem ipsum</h2>
          </div>
        </div>
        <div class="col-md-6 my-auto">
          <div class="form">
            <h2>Reach us for more details</h2>
            <form action="mail.php" method="POST">
             
              <div class="col-12 ">
                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                <div id="dnameError" class="error-message"></div>
              </div>
              <div class="col-md-12 pt-4">
                <input type="tel" class="form-control" name="number" id="number" placeholder="Contact number">
                <div id="dnumberError" class="error-message"></div>
              </div>
              <div class="col-md-12 pt-4">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                <div id="emailError" class="error-message"></div>
              </div>
              <div class="col-md-12 pt-4">
                <select id="lookingfor" name="lookingfor" class="form-select">
                  <option selected disabled>Lorem Ipsum</option>
                  <option value="Option 1">Option 1</option>
                  <option value="Option 2">Option 2</option>
                  <option value="Option 3">Option 3</option>
                </select>
              </div>
              <div class="col-md-12 pt-2">
                <span>*Lorem ipsum dolor sit amet </span>
              </div>
              <div class="col-12">
                <button type="submit" class="btn-b animated-button animated-button-glow">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="countersec" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h2>About Us </h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="col-md-5">
          <img src="images/about.jpg" class="img-fluid zoomable" alt="alt">
        </div>
      </div>
    </div>
  </section>
  <section class="products" id="products">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Our Products</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="item">
            <div class="product-detail">
              <img src="images/product.jpg" alt="product-image" class="img-fluid zoomable">
            </div>
            <div class="product-content">
              <h3><a href="#">Lorem Ipsum
                </a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
              <a href="#" class="product-b animated-button animated-button-glow">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="item">
            <div class="product-detail">
              <img src="images/product.jpg" alt="product-image" class="img-fluid zoomable">
            </div>
            <div class="product-content">
              <h3><a href="#">Lorem Ipsum
                </a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
              <a href="#" class="product-b animated-button animated-button-glow">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="item">
            <div class="product-detail">
              <img src="images/product.jpg" alt="product-image" class="img-fluid zoomable">
            </div>
            <div class="product-content">
              <h3><a href="#">Lorem Ipsum
                </a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
              <a href="#" class="product-b animated-button animated-button-glow">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="item">
            <div class="product-detail">
              <img src="images/product.jpg" alt="product-image" class="img-fluid zoomable">
            </div>
            <div class="product-content">
              <h3><a href="#">Lorem Ipsum
                </a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
              <a href="#" class="product-b animated-button animated-button-glow">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="clientlogo" id="client">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Our Clients</h2>
          <div class="logos__marquee">
            <div class="marquee__logos">
              <img src="images/1.jpg" alt="">
              <img src="images/2.jpg" alt="">
              <img src="images/3.jpg" alt="">
              <img src="images/4.jpg" alt="">
              <img src="images/5.jpg" alt="">
              <img src="images/5.jpg" alt="">
            </div>
            <div class="marquee__logos">
              <img src="images/1.jpg" alt="">
              <img src="images/2.jpg" alt="">
              <img src="images/3.jpg" alt="">
              <img src="images/4.jpg" alt="">
              <img src="images/5.jpg" alt="">
              <img src="images/4.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="testimonials" id="testimonial">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 text-center">
          <h2>Testimonials</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-9">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h5>Lorem ipsum</h5>
              </div>
              <div class="carousel-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h5>Lorem ipsum</h5>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include('footer.php'); ?>
  <?php include('footerjs.php'); ?>
  <script>
    function onlyAlphabets(e, t) {
      try {
        if (window.event) {
          var charCode = window.event.keyCode;
        } else if (e) {
          var charCode = e.which;
        } else {
          return true;
        }
        if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
          return true;
        else
          return false;
      } catch (err) {
        alert(err.Description);
      }
    }

    $(function() {
      $("#name").on("input", function() {
        var name = $(this).val();
        var regex = /^[a-zA-Z\s]*$/; // Regular expression to allow alphabets and spaces
        if (!regex.test(name)) {
          // If the input contains characters other than alphabets or spaces
          $(this).val(name.replace(/[^a-zA-Z\s]/g, '')); // Remove non-alphabetic characters
          $("#dnameError").text("Only alphabets are allowed").show();
        } else {
          $("#dnameError").hide().text(""); // Clear error message if validation passes
        }
      });
    });
    $(function() {
      $("#number").on("input", function() {
        var number = $(this).val();
        var regex = /^[0-9]*$/; // Regular expression to allow numbers only
        if (!regex.test(number)) {
          // If the input contains characters other than numbers
          $(this).val(number.replace(/\D/g, '')); // Remove non-numeric characters
          $("#dnumberError").text("Only numbers are allowed").show();
        } else {
          $("#dnumberError").hide().text(""); // Clear error message if validation passes
        }
      });
    });
  </script>
</body>

</html>