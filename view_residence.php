<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_GET['get_id'])){
   $get_id = $_GET['get_id'];
}else{
   $get_id = '';
   header('location:home.php');
}

include 'components/save_send.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>View residence</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- view residence section starts  -->

<section class="view-residence">

   <h1 class="heading">Residence Details</h1>

   <?php
      $select_residences = $conn->prepare("SELECT * FROM `residence` WHERE id = ? ORDER BY date DESC LIMIT 1");
      $select_residences->execute([$get_id]);
      if($select_residences->rowCount() > 0){
         while($fetch_residence = $select_residences->fetch(PDO::FETCH_ASSOC)){

         $residence_id = $fetch_residence['id'];

         $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
         $select_user->execute([$fetch_residence['user_id']]);
         $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);

         $select_saved = $conn->prepare("SELECT * FROM `saved` WHERE residence_id = ? and user_id = ?");
         $select_saved->execute([$fetch_residence['id'], $user_id]);
   ?>
   <div class="details">
     <div class="swiper images-container">
         <div class="swiper-wrapper">
            <img src="uploaded_files/<?= $fetch_residence['image_01']; ?>" alt="" class="swiper-slide">
            <?php if(!empty($fetch_residence['image_02'])){ ?>
            <img src="uploaded_files/<?= $fetch_residence['image_02']; ?>" alt="" class="swiper-slide">
            <?php } ?>
            <?php if(!empty($fetch_residence['image_03'])){ ?>
            <img src="uploaded_files/<?= $fetch_residence['image_03']; ?>" alt="" class="swiper-slide">
            <?php } ?>
            <?php if(!empty($fetch_residence['image_04'])){ ?>
            <img src="uploaded_files/<?= $fetch_residence['image_04']; ?>" alt="" class="swiper-slide">
            <?php } ?>
            
         </div>
         <div class="swiper-pagination"></div>
     </div>
      <h3 class="name"><?= $fetch_residence['residence_name']; ?></h3>
      <p class="location"><i class="fas fa-map-marker-alt"></i><span><?= $fetch_residence['address']; ?></span></p>
      <div class="info">
         <p><i class="fa-solid fa-bangladeshi-taka-sign"></i><span><?= $fetch_residence['price']; ?></span></p>
         <p><i class="fas fa-user"></i><span><?= $fetch_user['name']; ?></span></p>
         <p><i class="fas fa-phone"></i><a href="tel:1234567890"><?= $fetch_user['number']; ?></a></p>
         <p><i class="fas fa-building"></i><span><?= $fetch_residence['type']; ?></span></p>
         <p><i class="fas fa-house"></i><span><?= $fetch_residence['offer']; ?></span></p>
         <p><i class="fas fa-calendar"></i><span><?= $fetch_residence['date']; ?></span></p>
      </div>
      <h3 class="title">Details</h3>
      <div class="flex">
         <div class="box">
            <p><i>Rooms :</i><span><?= $fetch_residence['bhk']; ?> BHK</span></p>
            <p><i>Deposit Amount : </i><span><span class="fa-solid fa-bangladeshi-taka-sign" style="margin-right: .5rem;"></span><?= $fetch_residence['deposite']; ?></span></p>
            <p><i>Status :</i><span><?= $fetch_residence['status']; ?></span></p>
            <p><i>Bedroom :</i><span><?= $fetch_residence['bedroom']; ?></span></p>
            <p><i>Bathroom :</i><span><?= $fetch_residence['bathroom']; ?></span></p>
            <p><i>Balcony :</i><span><?= $fetch_residence['balcony']; ?></span></p>
         </div>
         <div class="box">
            <p><i>Carpet Area :</i><span><?= $fetch_residence['carpet']; ?>sqft</span></p>
            <p><i>Age :</i><span><?= $fetch_residence['age']; ?> years</span></p>
            <p><i>Total Floors :</i><span><?= $fetch_residence['total_floors']; ?></span></p>
            <p><i>Room Floor :</i><span><?= $fetch_residence['room_floor']; ?></span></p>
            <p><i>Furnished :</i><span><?= $fetch_residence['furnished']; ?></span></p>
            <p><i>Loan :</i><span><?= $fetch_residence['loan']; ?></span></p>
         </div>
      </div>
      <h3 class="title">Amenities</h3>
      <div class="flex">
         <div class="box">
            <p><i class="fas fa-<?php if($fetch_residence['lift'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Lift</span></p>
            <p><i class="fas fa-<?php if($fetch_residence['Security_System'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Security System</span></p>
            <p><i class="fas fa-<?php if($fetch_residence['play_ground'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Play Ground</span></p>
            <p><i class="fas fa-<?php if($fetch_residence['garden'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Gardens</span></p>
            <p><i class="fas fa-<?php if($fetch_residence['water_supply'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Water Supply</span></p>
            <p><i class="fas fa-<?php if($fetch_residence['power_backup'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Power Backup</span></p>
         </div>
         <div class="box">
            <p><i class="fas fa-<?php if($fetch_residence['parking_area'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Parking Area</span></p>
            <p><i class="fas fa-<?php if($fetch_residence['gym'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Gym</span></p>
            <p><i class="fas fa-<?php if($fetch_residence['Smart_energy_consumption'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Smart Energy Consumption</span></p>
            <p><i class="fas fa-<?php if($fetch_residence['Intelligent_Detection_and_Water_Management'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Intelligent Detection and Water Management</span></p>
            <p><i class="fas fa-<?php if($fetch_residence['Home_Automation'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Home Automation</span></p>
            <p><i class="fas fa-<?php if($fetch_residence['market_area'] == 'yes'){echo 'check';}else{echo 'times';} ?>"></i><span>Market Area</span></p>
         </div>
      </div>
      <h3 class="title">Description</h3>
      <p class="description"><?= $fetch_residence['description']; ?></p>
      <form action="" method="post" class="flex-btn">
         <input type="hidden" name="residence_id" value="<?= $residence_id; ?>">
         <?php
            if($select_saved->rowCount() > 0){
         ?>
         <button type="submit" name="save" class="save"><i class="fas fa-heart"></i><span>Saved</span></button>
         <?php
            }else{ 
         ?>
         <button type="submit" name="save" class="save"><i class="far fa-heart"></i><span>Save</span></button>
         <?php
            }
         ?>
         <input type="submit" value="send enquiry" name="send" class="btn">
      </form>
   </div>
   <?php
      }
   }else{
      echo '<p class="empty">Residence Not Found! <a href="post_residence.php" style="margin-top:1.5rem;" class="btn">Add New</a></p>';
   }
   ?>

</section>

<!-- view residence section ends -->










<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

<script>

var swiper = new Swiper(".images-container", {
   effect: "coverflow",
   grabCursor: true,
   centeredSlides: true,
   slidesPerView: "auto",
   loop:true,
   coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 200,
      modifier: 3,
      slideShadows: true,
   },
   pagination: {
      el: ".swiper-pagination",
   },
});

</script>

</body>
</html>