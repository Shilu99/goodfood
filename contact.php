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

  <!-- contact section -->

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page With Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<br>
<center>
    <div class="contact-from">
        <div class="form-area">
            <div class="animated fadeInDown">
                <h2>Contact Us</h2>
                <br>
            </div>

            <?php
    error_reporting(1);
    include('connection.php');
    if(isset($_POST['sub'])) {  
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Enclose `order` table name in backticks
        $query = "INSERT INTO `contact` (name, email, message) VALUES ('$name', '$email', '$message')";
        $con->query($query); 
        
        echo "<p style='color:green'>Message Sent Successfully!</p>";
    }
?>

            
            <div class="contact">
                <div class="map animated fadeInLeft">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15273.570255272043!2d96.10553905541991!3d16.8564644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c195c9d6d23607%3A0xf72027aa1bc7109d!2sGood%20Food!5e0!3m2!1smy!2smm!4v1717583674062!5m2!1smy!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
                </div>

                <form method="post" class="form animated fadeInUp">
                   

                    <label>
                        <input type="text" class="subject" id="subject" name="name" required>
                        <div class="label subject-text">Name</div>
                    </label>

                    <label>
                        <input type="email" class="email" id="email" name="email" required>
                        <div class="label email-text">E-mail</div>
                    </label>

                    <label>
                        <textarea class="help-box" id="helpBox" cols="30" rows="10" required name="message"></textarea>
                        <div class="label help-text">Message</div>
                    </label>

                   <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                        <input type="submit" value="Submit" name="sub" class="btn btn-outline-success" >
                        </div>
                        <div class="col-4"></div>
                   </div>   
                </form>
            </div>
        </div>
    </div>
<br>

    </center>

  <!-- end subscribe section -->

  <section class="container-fluid footer_section">
    <p>
      &copy; 2024 All Rights Reserved. Design by
      <a href="https://www.facebook.com/yiuwa.koko/">Kise</a>
    </p>
  </section>

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

  <!-- end owl carousel script -->
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

.contact-from {
    width: 1150px;
    height: 560px;
    padding: 50px 80px;
    background: url(../images/images.png);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    display: flex;
    justify-content: center;    
    transition: .5s all ease;

    .form-area {      

        h2 {
            font-weight: 500;
            font-size: 28px;
            color: #4F4F4F;
            text-align: center;
            transition: .5s all ease;
        }

        p {
            max-width: 340px;
            font-weight: 300;
            color: #464646;
            margin: auto;
            text-align: center;
        }
    }

    .contact {
        margin-top: 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: .5s all ease;

        .map {
            width: 400px;
            margin-right: 35px;
            animation-duration: 1.5s;

            iframe {
                width: 100%;
                height: 300px;
                box-shadow: 0 0 8px rgba(0,0,0, .3);
                
            }
        }

        .form {
            width: 525px;
            transition: .5s all ease;
            animation-duration: 1.5s;

            .label {
                background-color: white;
                color: #6b6b6b;
                font-size: 17px;
                font-weight: 300;
                margin: 0 8px;
                padding: 0 5px;
                position: absolute;
                transition: 0.5s all cubic-bezier(0.5, 1.35, 0.5, 1.35);
            }
            
            .email-text {
                transform: translateY(-51px);
            }

            .subject-text {
                transform: translateY(-52px);
            }

            .help-text {
                transform: translateY(-112px);
            }
           
            input, textarea {
                width: 100%;
                padding: 10px;
                border: 1px solid #DADCE0;
                border-radius: 5px;
                outline: none;
                margin-bottom: 20px;
                transition: .3s;

                &:focus {
                    border: 1px solid #4285F4;
                    box-shadow: inset 1px 1px 0 #4285F4, inset -1px -1px 0 #4285F4;
                }    
                
                &:focus + .label, &:valid + .label {
                    font-size: 13px;
                    font-weight: 600;
                    color: #4285F4;                  
                }
                
                &:focus + .email-text, &:valid + .email-text  {
                    transform: translateY(-67px);               
                }

                &:focus + .subject-text, &:valid + .subject-text {
                    transform: translateY(-67px);                
                }
                
                &:focus + .help-text, &:valid + .help-text {
                    transform: translateY(-127px);                
                }
            }

            textarea {
                max-height: 90px;   
                max-width: 100%;            
            }

            .submit-area {
                position: relative;

                #submit {
                    position: relative;
                    display: inline-block;
                    width: 105px;
                    text-align: left;
                    padding: 10px 20px;
                    border: none;
                    border-radius: 1px;
                    cursor: pointer;
                    background-color: #33B5E5;
                    color: #fff;
                    text-transform: uppercase;
                    font-size: 11px;
                    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
                    transition: .1s all ease;
    
                    &:hover {
                        box-shadow: 0 7px 15px transparentize(#000, .75);
                    }                    
                }
                i.fa-paper-plane {
                    position: absolute;
                    left: 70px;
                    top: 9px;
                    color: #fff;
                    font-size: 13px;
                }                
            }           
        }
    }
}



@media screen and (max-width: 1200px){
    .contact-from {
        width: 960px;
        padding: 50px 60px;

        .contact {
            .map {
                width: 320px;
            }

            .form {
                width: 485px;
            }
        }
    }
}
@media screen and (max-width: 992px){
    .contact-from {
        width: 710px;
        height: auto;
       
      .form-area{
            margin-top: 200px;
        }

        .contact {
            flex-direction: column;

            .map {
                width: 100%;
                margin-right: 0;
                margin-bottom: 30px;
            }

            .form {
                width: 100%;
            }
        }
    }
}
@media screen and (max-width: 768px){
    .contact-from {
        width: 100%;
    }
}
</style>



</body>

</html>