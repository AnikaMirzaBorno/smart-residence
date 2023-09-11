<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>Starting back in 2022, SmartHome has now become the only residence searching solutions provider in Bangladesh and its largest transacting residence company. Combining an unmatched online and offline presence with our incomparable database of information, SmartHome has become the pioneer that caters to the needs of those with residence queries, whether residence search or customization, providing supporting services such as legal, mortgage, and interior to ensure all solutions are under one roof.SmartHome utilizes technology to drive solutions for all stakeholders within the residence industry with the vision to ensure that all Bangladeshis have access to a trusted and secure smart residence searching service provider.A smart home refers to a convenient home setup where appliances and devices can be automatically controlled remotely from anywhere with an internet connection using a mobile or other networked device. Devices in a smart home are interconnected through the internet, allowing the user to control functions such as security access to the home, temperature, lighting, and a home theater remotely and our website helps to find your residence according to your choice.</p>
         <a href="contact.php" class="inline-btn">Contact Us</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Search Residence</h3>
         
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>Contact Agents</h3>
         
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Enjoy Residence</h3>
         
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- review section starts -->

<section class="reviews">

   <h1 class="heading">Client's Reviews</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/img-r-1.jpeg" alt="">
            <div>
               <h3>Anika Mirza</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
         <p>It's an amazing site where you can easily find your residence according to your choice</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/img-r-6.jpg" alt="">
            <div>
               <h3>Agnila Joye</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fa-regular fa-star"></i>

               </div>
            </div>
         </div>
         <p>By this website you can sell, buy, rent residence in an easy way..</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/img-r-2.jpg" alt="">
            <div>
               <h3>Arifa Tasfia</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <i class="fa-regular fa-star"></i>
               </div>
            </div>
         </div>
         <p>It's quite good but need some update</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/img-r-3.jpg" alt="">
            <div>
               <h3>Mahfuza Mohona</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fa-regular fa-star"></i>
               </div>
            </div>
         </div>
         <p></p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/img-r-4.webp" alt="">
            <div>
               <h3>Faria Rafa</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Highly recommended!You guys can try it...</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/img-r-5.jpg" alt="">
            <div>
               <h3>Sumaiya Ananna</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
         <p></p>
      </div>

   </div>

</section>

<!--review section ends -->







<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>