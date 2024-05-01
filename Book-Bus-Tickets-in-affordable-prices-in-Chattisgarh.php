<?php
if (isset($_POST['submit'])) {
  $source = $_POST['source'];
  $destination = $_POST['destination'];
  $date = $_POST['date'];

  header("Location: book-bus.php?source=$source&destination=$destination&date=$date");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>New Shamim Transport</title>
  <link rel="stylesheet" href="./css/nav.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- jQuery UI library -->
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $(document).ready(function() {
      var currentDate = new Date();
      var minDate = currentDate.toISOString().split("T")[0]; // Get current date in YYYY-MM-DD format

      var availablePlaces = ["Raipur", "Ambikapur", "Bastar", "Jashpur", "Kunkuri"];

      $(".input-icon-source").autocomplete({
        source: availablePlaces,
        select: function(event, ui) {
          var selectedPlace = ui.item.value;
          $(".input-icon-destination option[value='" + selectedPlace + "']").remove();
        }
      });

      $(".input-icon-destination").autocomplete({
        source: availablePlaces,
        select: function(event, ui) {
          var selectedPlace = ui.item.value;
          $(".input-icon-source option[value='" + selectedPlace + "']").remove();
        }
      });

      $(".input-icon-date").on("change", function() {
        var selectedDate = $(this).val();
        if (selectedDate < minDate) {
          alert("Please select a date equal to or after today.");
          $(this).val(""); // Clear the date input
        }
      });
    });

    function menuOpen() {
      const navbar = document.querySelector('.navbar-list');
      const menu = document.getElementById('menu_btn');
      const close = document.getElementById('close_btn');
      navbar.style.display = 'flex';
      menu.style.display = 'none';
      close.style.display = 'block';
    }

    function menuClose() {
      const navbar = document.querySelector('.navbar-list');
      const close = document.getElementById('close_btn');
      const menu = document.getElementById('menu_btn');
      navbar.style.display = 'none';
      close.style.display = 'none';
      menu.style.display = 'block';
    }
  </script>
  <script>
    $(document).ready(function() {
      $("form").submit(function(event) {
        var source = $("input[name='source']").val();
        var destination = $("input[name='destination']").val();

        if (source === destination) {
          alert("To and from places cannot be the same");
          event.preventDefault();
        }
      });
    });
  </script>
  
    <script>
function setTodaysDate() {
    const today = new Date();
    const year = today.getFullYear();
    const month = String(today.getMonth() + 1).padStart(2, '0');
    const day = String(today.getDate()).padStart(2, '0');
    const formattedDate = `${year}-${month}-${day}`;

    const links = document.querySelectorAll(".nlink");
    links.forEach(link => {
        const currentHref = link.getAttribute("href");
        const newHref = currentHref + formattedDate;
        link.setAttribute("href", newHref);
    });
}
</script>
</head>

<body onload="setTodaysDate()">
  <header class="header">
    <img src="images/company_logo.png" alt="" class="logo">

    <nav class="navbar">
      <ul class="navbar-list">
        <i id="close_btn" onclick="menuClose()" class="fa-solid fa-xmark"></i>
        <li><a class="navbar-link" href="">Home</a></li>
        <li><a class="navbar-link" href="">Booking Details</a></li>
         &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; 
        <li><a class="navbar-link" href="">Services</a></li> 
        <li><a class="navbar-link" href="">Login</a></li>
        <div id="google_translate_element"></div>

      </ul>


    </nav>
    <div class="mobile-navbar-btn">
      <i id="menu_btn" onclick="menuOpen()" class="fa-solid fa-bars"></i>
    </div>
  </header>

  <main>
    <section class="section-hero">
      <div class="wrapper">
        <div class="typing-demo">
          Your <br>
          <p class="d">Perfect Journey</p>
          Starts Here.
        </div>
      </div>
      <div class="lists">
        <h3 class="link-head">Currently Running Buses</h3>
        <hr class="line">
        <div class="place-item first-item">
          <div class="place-count">
            <p class="count">1 </p>
          </div>
          <div class="links"><a class="nlink" href="book-bus.php?source=Ambikapur&destination=Jashpur&date=">Ambikapur To Jashpur</a></div>
          <div class="place-item">
            <div class="place-count">
              <p class="count">2 </p>
            </div>
            <div class="links"><a class="nlink" href="book-bus.php?source=Jashpur&destination=Ambikapur&date=">Jashpur To Ambikapur</a></div>
            <p class="dtext">Click above to book</p>
          </div>
        </div>
    </section>
  </main>

  <main>
    <div class="text-animation-container">
      <h2>Top Destinations:</h2>

      <marquee direction="left">
        Click for more details &nbsp; &nbsp; &nbsp; &nbsp;
        
        <a class="nlink" href="book-bus.php?source=Ambikapur&destination=Jashpur&date=">Ambikapur To Jashpur</a>&nbsp; &nbsp; &nbsp; &nbsp;
        
        <a class="nlink" href="book-bus.php?source=Jashpur&destination=Ambikapur&date=">Jashpur to Ambikapur </a>
        Book Tickets in Affordable Prices... Pay when you board... Wish you a Happy Journey
      </marquee>
    </div>

  </main>
  <br><br>
  <div class="feature">
    <div class="h">
      WE PROMISE TO DELIVER!
    </div>
    <p class="new">Our Salient Features</p>
    <div class="cards-container">

      <div class="cards" data-aos="fade-right" data-aos-once="true">
        <div class="card-content">

          <p class="card-title">Online Payment</p>
          <img src="images/fpayment.svg" alt="">
          <br>
        </div>
      </div>
      <div class="cards" data-aos="fade-up" data-aos-once="true">
        <div class="card-content">

          <p class="card-title">Best Offers</p>
          <img src="images/fdiscount.svg" alt="">

        </div>
      </div>
      <div class="cards" data-aos="fade-down" data-aos-once="true">
        <div class="card-content">

          <p class="card-title">Customer Support</p>
          <img src="images/fcustomer.jpg" alt="">
        </div>
      </div>
      <div class="cards" data-aos="fade-left" data-aos-once="true">
        <div class="card-content">
          <p class="card-title">Ladies Seat Reserved</p>
          <img src="images/fseat.jpg" alt="">
        </div>

      </div>
    </div>

  </div>
  <!--image slider start-->
  <h1 class="gallery">Gallery</h1>
  <div class="slider">

    <div class="slides">
      <!--radio buttons start-->
      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">
      <!--radio buttons end-->
      <!--slide images start-->
      <div class="slide first">
        <img src="images/bus-parked-road_69593-7793.jpg" alt="">
      </div>
      <div class="slide">
        <img src="images/bus_main1.jpg" alt="">
      </div>
      <div class="slide">
        <img src="images/bus_prem1.jpg" alt="">
      </div>
      <div class="slide">
        <img src="images/bus-white_161488-534.jpeg" alt="">
      </div>
      <!--slide images end-->
      <!--automatic navigation start-->
      
      <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>
      </div>
      <!--automatic navigation end-->
    </div>
  </div>
  <!--image slider end-->
  <!-- <h1 class="gallery"  data-aos-offset="80" data-aos-once="true">Our Amenities </h1> -->
  <p class="g" data-aos-offset="80" data-aos-once="true">Hear What Our Customers Say</p>

  <br>sample<br>
  <br>



  <script type="text/javascript">
    var counter = 1;
    setInterval(function() {
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if (counter > 4) {
        counter = 1;
      }
    }, 2000);
  </script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="index.js"></script>
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
          pageLanguage: 'en'
        },
        'google_translate_element'
      );
    }
  </script>
  <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?
cb=googleTranslateElementInit">
  </script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 158,
      duration: 1000,
    });
  </script>

</body>
<footer>
  <div class="row primary">
    <div class="column about">
      <h3>New Shamim Travels</h3>
      <p>With NST Buses (New Shamim Transport), we ensure comfortable and convenient bus travel experiences for individuals and groups alike. Whether you're planning a trip to Raipur, Ranchi, or any other city in Chattisgarh, our buses are equipped to cater to your transportation needs. Expect reliable service and a smooth journey with NST Buses.
      </p>
    </div>
    <div class="column_links">
      <h3>Quick Links</h3>
      <ul>
        <li>
          <a href="#faq">F.A.Q</a>
        </li><br>
        <li>
          <a href="#cookies-policy">Cookies Policy</a>
        </li><br>
        <li>
          <a href="#terms-of-services">Terms Of Service</a>
        </li><br>
        <li>
          <a href="#support">Support</a>
        </li><br>
        <li>
          <a href="#careers">Careers</a>
        </li>
      </ul>
    </div>
    <div class="column subscribe">
      <h3>Subscribe</h3>
      <div>
        <input type="email" placeholder="Your email id here" />
        <button>Subscribe</button>
      </div>
      <div class="social">
        <a href="facebook.com" style="text-decoration: none;color: aliceblue;"><i class="fa-brands fa-facebook-square"></i></a>
        <a href="instagram.com" style="text-decoration: none;color: aliceblue;"><i class="fa-brands fa-instagram-square"></i></a>
        <a href="twitter.com" style="text-decoration: none;color: aliceblue;"><i class="fa-brands fa-twitter-square"></i></a>
      </div>
    </div>
  </div>
  <div class="row secondary">
    <a href="tel:72847874">
      <div>
        <p><i class="fa fa-phone" aria-hidden="true"></i></p>
        <p>+91 9981195096 / 8103870116</p>
      </div>
    </a>
    <a href="mailto:shamimtransportnew@gmail.com">
      <div>
        <p><i class="fa fa-envelope" aria-hidden="true"></i></i></p>
        <p>shamimtransportnew@gmail.com</p>
      </div>
    </a>
    <a href="maps.com">
      <div>
        <p><i class="fas fa-map-marker-alt"></i></p>
        <p>Ring Road, Kharsia Naka, Ambikapur,
          Chhattisgarh -497001</p>
      </div>
    </a>
  </div>
  <div class="row copyright">
    <p>Copyright &copy; 2023 New Shamim Transport | All Rights Reserved</p>
  </div>
</footer>

</html>