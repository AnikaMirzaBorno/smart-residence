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
   <title>Contact Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>
<!-- faq section starts  -->

<section class="faq">

   <h2 class="head">FREQUENTLY ASKED QUESTIONS</h2>
   <br><br><br>
   <h4 class="head1">ABOUT SmartHome</h4>
   <br>
   <div class="box-container">

      <div class="box">
         <h3><span>What is SmartHome?</span><i class="fas fa-angle-down"></i></h3>
         <p>The “SmartHome” is an online community for Residence Searching professionals run on behalf of its members. Our goal is to create a valuable resource of information and ideas for Residence Searching professionals and their clients. We aim to help empower people by providing tools to help promote business and connect with peers all over the country and also in abroad.</p>
      </div>

      <div class="box">
         <h3><span>What is the benefits of joining us?</span><i class="fas fa-angle-down"></i></h3>
        <p>It creates an instant Internet presence that is very rapidly indexed and ranked by search engines,Networks and shares ideas with other residence searching professionals throughout the whole country.You can gain access to a great referral network for out of area referrals and take advantages of many free communication tools such as a personalized email.You can also increase your visibility to home buyers and sellers.</p>
      </div>
   </div>
      <br><br>
      <h4 class="head1">FOR RESIDENCE OWNER</h4>
      <br>
    <div class="box-container">
      <div class="box">
         <h3><span>How do I list my residence online?</span><i class="fas fa-angle-down"></i></h3>
         <p>Login with a valid Username & Password (provided by SmartHome) link on the homepage and follow the onscreen instructions.</p>
      </div>

      <div class="box">
         <h3><span>How many residences can I list?</span><i class="fas fa-angle-down"></i></h3>
         <p>There is a range of packages available from a single listing to various multiple listing options from 1 to 100s properties depend on the type of membership.</p>
      </div>

      <div class="box">
         <h3><span>How do I add or remove a residence</span><i class="fas fa-angle-down"></i></h3>
         <p>Sign in to your account and select land/property from the left hand side menu. You will then see all the properties you have listed and can edit, upload or delete them accordingly.</p>
      </div>

      <div class="box">
         <h3><span>What if I need assistance?</span><i class="fas fa-angle-down"></i></h3>
         <p>Our Affiliate Team is here to work with and support you. We want to do everything we can to help you maximize your affiliate earnings. You'll periodically receive mails from us with program news and updates, special promotions, and tips for increasing your results. If you have additional questions, the best way to reach us is via email at anikamirza21@gmail.com</p>
      </div>
    </div>
   <br><br>
   <h4 class="head1">FOR RESIDENCE SEEKER</h4>
      <br>
   <div class="box-container">
    <div class="box">
       <h3><span>How do I find a residence?</span><i class="fas fa-angle-down"></i></h3>
       <p>SmartHome Portal is designed to make this as easy as possible.Go Home and enter location then select residence type, size and other criteria . Once you've found a property you are interested in, select contact seller and we'll email them with your enquiry and for you may add the residence on “Saved” which is an exclusive feature of SmartHome; what will help you to find out your exact choice and we hope it will help you to save your valuable time. The seller can then contact you directly.</p>
    </div>

    <div class="box">
       <h3><span>Which countries can I find residence searching?</span><i class="fas fa-angle-down"></i></h3>
       <p>Only in Bangladesh</p>
    </div>

    
      
  </div>


</section>

<!-- faq section ends -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>