<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Food-Good</title>
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap"
    rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" />
          </a>

          <div class="navbar-collapse" id="">
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1"> </span>
                <span class="s-2"> </span>
                <span class="s-3"> </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.html">HOME</a>
                <a href="drink.php">Drink</a>
                <a href="food.php">Food</a>
                <a href="contact.php">Contact Us</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- dish section -->
  <section class="dish_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="dish_container">
            <div class="box">
              <img src="images/choco.jpg" style="border-radius:20px" alt="">
            </div>
            <div class="box">
              <img src="images/hotdog.jpg" style="border-radius:20px"alt="">
            </div>
            <div class="box">
              <img src="images/meatburger.jpg"style="border-radius:20px" alt="">
            </div>
            <div class="box">
              <img src="images/pizza.jpg" style="border-radius:20px" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <hr>
              <h2>
                About <br>
                Our <br>
                Food
              </h2>
            </div>
            <p>
            Our food service specializes in delicious American-style cuisine,
             offering a variety of classic dishes that cater to all tastes.
              From juicy burgers and crispy fries to rich, creamy milkshakes,
             our menu is designed to provide a genuine American dining experience.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end dish section -->

  <!-- hot section -->

  <section class="hot_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Food List
        </h2>
        <hr>
      </div>
      <p>
      You can choose whatever you want!
      </p>
    </div>
  </section>
  <div class="container">
       <div class="row">
    <?php
error_reporting(1);
include('connection.php');
$data="SELECT * FROM foodlist ORDER BY id DESC";
$val=$con->query($data);
if ($val->num_rows > 0) {
while(list($id,$name,$price,$dis,$img) = mysqli_fetch_array($val)){
    echo "<div class='col-4'>
    <div class='card'>
    <img src='admin/img/$img'
    height='300' width='300' style='border-radius:20px;'  />
    <div class='card-content'>
        <h2 >$name</h2>
        <p style='color:green'>Price - $price MMK</p>
        <p>$dis</p>
        <center>  <a href='order.php?name=$name&price=$price'>
        <img src='images/buy.jpg' width=80 class='imageee'/> </a></center>
    </div>
</div>
<br><br>
    </div>";
  
}}else{
    echo "<h1 colspan='8' class='text-center'>
   <b> No data available</b></h1>";
}
?>
</div>
</div>
  <section class="container-fluid footer_section">
    <p>
      &copy; 2024 All Rights Reserved. Design by
      <a href="https://www.facebook.com/yiuwa.koko/">Kise</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>

  <style>
    
.card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1rem;
}

.card {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 300px;
    margin: 1rem;
    transition: transform 0.2s;
}

.card:hover {
    transform: scale(1.05);
}

.imageee:hover {
  transform: scale(1.3);
}

.card-content {
    padding: 1rem;
}

.card-content h2 {
    margin-top: 0;
    font-size: 1.5rem;
}

.card-content p {
    color: #555;
}
  </style>

  <!-- owl carousel script -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 35,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  <!-- end owl carousel script -->

</body>

</html>