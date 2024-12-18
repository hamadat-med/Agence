<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

    <!-- Swipe css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- Font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

   <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- Header section starts -->

<section class="header">
    <a href="home.php" class="logo">travel.</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>

    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
        

</section>

<!-- Header section end -->
    


<div class="heading" style="background:url(image/eiffel-tower.jpg) no-repeat">
    <h1>Book </h1>
</div>
    

<!-- booking section starts -->

<section class="booking">
    <h1 class="heading-title">book your trip</h1>

    <form action="book_form.php" methot="post" class="book-form">


        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
                <span>adress :</span>
                <input type="text" placeholder="enter your adresse" name="adress">
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>
            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date"  name="arrivals">
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>
        </div>  

        <input type="submit" value="submit" class="btn" name="send" >


    </form>

</section>

<!-- booking section ends -->






<!-- Footer section starts -->



<section class="footer">
    <div class="box-container">
        <div class="box">

            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>

           
            

        </div>


        <div class="box">

            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
            
           
            

        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> + 33 631919119</a>
            <a href="#"> <i class="fas fa-phone"></i> + 33 111333444</a>
            <a href="#"> <i class="fas fa-envelope"></i> Agence@contact.com</a>
            <a href="#"> <i class="fas fa-map"></i>Courbevoie, Hautes Seins FRANCE </a>
           
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
        </div>    
     </div>

     <div class="credit">created by <span>mr. web designer</span>© 2021 Copyright  | all rights reserved! </div>



</section>





<!-- Footer section ends -->











<!-- Swipe js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
 <script src="script.js"></script>
</body>
</html>
