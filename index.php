 <?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO contact_form(name,email,number,date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Dentist Website </title>

   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

  
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">dental<span>Care.</span></a>

         <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
         </nav>

         <a href="#contact" class="link-btn">make appointment</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>let us brighten your smile</h3>
            <p>We will conduct a complete dental examination and create an individualized treatment plan at our dental clinic</p>
            <p> FOR CONSULATION</p>
            <a href="#contact" class="link-btn">make appointment</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="about-img.jpg" class="w-100 mb-5 mb-md-0" alt="doctorrrrrrrrrrr">
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>True Healthcare For Your Family</h3>
            <p> dentalCare. is one of the top dental clinics in Kashmir, India and 2nd best dental center in the world (GCR Rating), with multi-specialty practice, in-patient facility and 24 hr. emergency dental services. Being pioneers in the concept of multi-specialty practice, dentalCare has 10 Specialities of dentistry under one roof supported by state-of-the-art equipments and a world class CAD-CAM supported dental laboratory.
</p>
            <a href="#contact" class="link-btn">make appointment</a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">our services</h1>

   <div class="box-container container">

      <div class="box">
         <img src="icon-1.svg" alt="">
         <h3>Tooth filling</h3>
         <p>Tooth fillings are a type of treatment used to replace tooth structure that has been lost due to decay or trauma.</p>
      </div>

      <div class="box">
         <img src="icon-2.svg" alt="">
         <h3>Cosmetic dentistry</h3>
         <p>It is the branch of dentistry that aims to improve the colour, shape, alignment, and overall appearance of your teeth.</p>
      </div>

      <div class="box">
         <img src="icon-3.svg" alt="">
         <h3>Gum disease</h3>
         <p>Gum disease is known as gingivitis, here the gums can become swollen, red, and bleed.</p>
      </div>

      <div class="box">
         <img src="icon-4.svg" alt="">
         <h3>Root canal specialist</h3>
         <p>It is the process of removing the infection from the deeper portions of the tooth.</p>
      </div>

      <div class="box">
         <img src="icon-5.svg" alt="">
         <h3>Dental Implants</h3>
         <p>When a tooth is lost, the best replacement for the root would be an implant with a crown that will be fixed on top of it.</p>
      </div>

      <div class="box">
         <img src="icon-6.svg" alt="">
         <h3>Teeth whitening</h3>
         <p>it is a simple, non-invasive single visit dental procedure that changes the colour of natural tooth to shade of white </p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- process section starts  -->

<section class="process">

   <h1 class="heading">work process</h1>

   <div class="box-container container">

      <div class="box">
         <img src="process-1.png" alt="">
         <h3>Cosmetic Dentistry</h3>
         <p>A cosmetic dentist can provide services that go far beyond what most people expect, such as veneers and teeth whitening. You can improve your appearance, smile, and self-esteem and confidence with the help of a experienced cosmetic dentist.</p>
      </div>

      <div class="box">
         <img src="process-2.png" alt="">
         <h3>Pediatric Dentistry</h3>
         <p>Pediatric dentistry is an age-defined specialty and is distinguished by the art of behavior guidance. Whether introducing a toddler to dentistry or continuing to care for a middle-aged patient with intellectual disability.</p>
      </div>

      <div class="box">
         <img src="process-3.png" alt="">
         <h3>Dental Implants</h3>
         <p>When a tooth is lost, the best replacement for the root would be an implant with a crown that will be fixed on top of it. The crown fixed acts as an active tooth and will aid in all the functions same as the natural tooth.</p>
      </div>

   </div>

</section>

<!-- process section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> satisfied clients </h1>

   <div class="box-container container">

      <div class="box">
         <img src="GSS3.jpg" alt="">
         <p> Great experience as a first timer. The staff and Dr. Amaan were all very friendly and helpful. I especially loved how Dr. Amaan really took his time to explain my conditions with me as well as my treatment options. I had a great visit so I highly recommend this clinic.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>gurdeep singh</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="anna1.jpg" alt="">
         <p>The services that I receive from dentalCare is excellent. Dr.Rezvana and the staff are friendly and ensure that I am properly informed about my teeth and care. I would have no qualms in recommending them to friendly and friends. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>anna shah</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="modi.jpeg" alt="">
         <p>Wonderful experience with dentalCare. Dr.Riyaz was a wonderful surgeon, and the staff was always helpful and kind. They ensured I had a smooth prep, surgery, and follow-up. I am so glad I choose dentalCare and would highly recommend to anyone<</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>narender modi</h3>
         <span>satisfied client</span>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading">make appointment</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make appointment" name="submit" class="link-btn">
   </form>  


</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+91 6006141636</p>
         <p>+91 8899088441</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>Srinagar, Kashmir, India - 190001</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>00:07am to 10:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>gurdeep7909@gmail.com</p>
         <p>anna.shah.771@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>mr.gurdeep singh & ms.anna firdous shah</span>  </div>

</section>

<!-- footer section ends -->










<!--  js file link  -->
<script src="script.js"></script>

</body>
</html>