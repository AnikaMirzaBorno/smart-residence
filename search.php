<?php  

@include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

include 'components/save_send.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Search Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- search filter section starts  -->

<div class="src">
<section class="filters">

   <form action="" method="post">
      
      <h3>Filter Your Search</h3>
         
         
            <div class="box">
            <p>Enter Location <span>*</span></p>
            <input type="text" name="location" required maxlength="50" placeholder="Enter City Name" class="input">
            </div>
            <div class="flex">
            <div class="box">
               <p>Residence Type</p>
               <select name="type" class="input" required>
                  <option value="flat">Flat</option>
                  <option value="house">House</option>
                  
               </select>
            </div>
            <div class="box">
               <p>Offer Type</p>
               <select name="offer" class="input" required>
                  <option value="sale">Sale</option>
                  <option value="resale">Resale</option>
                  <option value="rent">Rent</option>
               </select>
            </div>
            
            
            <div class="box">
               <p>Minimum Budget <span>*</span></p>
               <select name="minimum" class="input" required>
                  <option value="5000">5k</option>
                  <option value="10000">10k</option>
                  <option value="20000">20k</option>
                  <option value="30000">30k</option>
                  <option value="40000">40k</option>
                  <option value="40000">50k</option>
                  <option value="60000">60k</option>
                  <option value="70000">70k</option>
                  <option value="80000">80k</option>
                  <option value="90000">90k</option>
                  <option value="100000">1 lac</option>
                  <option value="500000">5 lac</option>
                  <option value="1000000">10 lac</option>
                  <option value="2000000">20 lac</option>
                  <option value="3000000">30 lac</option>
                  <option value="4000000">40 lac</option>
                  <option value="4000000">40 lac</option>
                  <option value="5000000">50 lac</option>
                  <option value="6000000">60 lac</option>
                  <option value="7000000">70 lac</option>
                  <option value="8000000">80 lac</option>
                  <option value="9000000">90 lac</option>
                  <option value="10000000">1 Cr</option>
                  <option value="20000000">2 Cr</option>
                  <option value="30000000">3 Cr</option>
                  <option value="40000000">4 Cr</option>
                  <option value="50000000">5 Cr</option>
                  <option value="60000000">6 Cr</option>
                  <option value="70000000">7 Cr</option>
                  <option value="80000000">8 Cr</option>
                  <option value="90000000">9 Cr</option>
                  <option value="100000000">10 Cr</option>
                  <option value="150000000">15 Cr</option>
               </select>
            </div>
            <div class="box">
               <p>Maximum Budget <span>*</span></p>
               <select name="maximum" class="input" required>
                  <option value="150000000">15 Cr</option>
                  <option value="100000000">10 Cr</option>
                  <option value="90000000">9 Cr</option>
                  <option value="80000000">8 Cr</option>
                  <option value="70000000">7 Cr</option>
                  <option value="60000000">6 Cr</option>
                  <option value="50000000">5 Cr</option>
                  <option value="40000000">4 Cr</option>
                  <option value="30000000">3 Cr</option>
                  <option value="20000000">2 Cr</option>
                  <option value="10000000">1 Cr</option>
                  <option value="9000000">90 lac</option>
                  <option value="8000000">80 lac</option>
                  <option value="7000000">70 lac</option>
                  <option value="6000000">60 lac</option>
                  <option value="5000000">50 lac</option>
                  <option value="4000000">40 lac</option>
                  <option value="3000000">30 lac</option>
                  <option value="2000000">20 lac</option>
                  <option value="1000000">10 lac</option>
                  <option value="500000">5 lac</option>
                  <option value="100000">1 lac</option>
                  <option value="90000">90k</option>
                  <option value="80000">80k</option>
                  <option value="70000">70k</option>
                  <option value="60000">60k</option>
                  <option value="50000">50k</option>
                  
                  
               </select>
            </div>
            <div class="box">
               <p>How Many BHK</p>
               <select name="bhk" class="input" required>
                  <option value="1">1 BHK</option>
                  <option value="2">2 BHK</option>
                  <option value="3">3 BHK</option>
                  <option value="4">4 BHK</option>
                  <option value="5">5 BHK</option>
                  <option value="6">6 BHK</option>
                  <option value="7">7 BHK</option>
                  <option value="8">8 BHK</option>
                  <option value="9">9 BHK</option>
               </select>
            </div>
            <div class="box">
               <p>Status</p>
               <select name="status" class="input" required>
                  <option value="Ready To Move">ready to move</option>
                  <option value="Under Construction">under construction</option>
               </select>
            </div>
            <div class="box">
               <p>Furnished</p>
               <select name="furnished" class="input" required>
                  <option value="unfurnished">Unfurnished</option>
                  <option value="furnished">Furnished</option>
                  <option value="semi-furnished">Semi-furnished</option>
               </select>
            </div>
         </div>
         <input type="submit" value="Search Residence" name="filter_search" class="btn">
   </form>

</section>
</div>


<!-- search filter section ends -->

<div id="filter-btn" class="fas fa-filter"></div>

<?php

if(isset($_POST['search'])){

   $location = $_POST['location'];
   $location = filter_var($location, FILTER_SANITIZE_STRING);
   $type = $_POST['type'];
   $type = filter_var($type, FILTER_SANITIZE_STRING);
   $bhk = $_POST['bhk'];
   $bhk = filter_var($bhk, FILTER_SANITIZE_STRING);
   $minimum = $_POST['minimum'];
   $minimum = filter_var($minimum, FILTER_SANITIZE_STRING);
   $maximum = $_POST['maximum'];
   $maximum = filter_var($maximum, FILTER_SANITIZE_STRING);

   $select_residences = $conn->prepare("SELECT * FROM `residence` WHERE address LIKE '%{$location}%' AND type LIKE '%{$type}%' AND offer LIKE '%{$bhk}%' AND price BETWEEN $minimum AND $maximum ORDER BY date DESC");
   $select_residences->execute();

}elseif(isset($_POST['filter_search'])){

   $location = $_POST['location'];
   $location = filter_var($location, FILTER_SANITIZE_STRING);
   $type = $_POST['type'];
   $type = filter_var($type, FILTER_SANITIZE_STRING);
   $offer = $_POST['offer'];
   $offer = filter_var($offer, FILTER_SANITIZE_STRING);
   $bhk = $_POST['bhk'];
   $bhk = filter_var($bhk, FILTER_SANITIZE_STRING);
   $minimum = $_POST['minimum'];
   $minimum = filter_var($minimum, FILTER_SANITIZE_STRING);
   $maximum  = $_POST['maximum'];
   $maximum  = filter_var($maximum , FILTER_SANITIZE_STRING);
   $status = $_POST['status'];
   $status = filter_var($status, FILTER_SANITIZE_STRING);
   $furnished = $_POST['furnished'];
   $furnished = filter_var($furnished, FILTER_SANITIZE_STRING);

   $select_residences = $conn->prepare("SELECT * FROM `residence` WHERE address LIKE '%{$location}%' AND type LIKE '%{$type}%' AND offer LIKE '%{$offer}%' AND bhk LIKE '%{$bhk}%' AND status LIKE '%{$status}%' AND furnished LIKE '%{$furnished}%' AND price BETWEEN $minimum AND $maximum ORDER BY date DESC");
   $select_residences->execute();

}else{
   $select_residences = $conn->prepare("SELECT * FROM `residence` ORDER BY date DESC LIMIT 6");
   $select_residences->execute();
}

?>

<!-- listings section starts  -->

<section class="listings">

   <?php 
      if(isset($_POST['search']) or isset($_POST['filter_search'])){
         echo '<h1 class="heading">Search Results</h1>';
      }else{
         echo '<h1 class="heading">Latest Listings</h1>';
      }
   ?>

   <div class="box-container">
      <?php
         $total_images = 0;
         if($select_residences->rowCount() > 0){
            while($fetch_residence = $select_residences->fetch(PDO::FETCH_ASSOC)){
            $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_user->execute([$fetch_residence['user_id']]);
            $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);

            if(!empty($fetch_residence['image_02'])){
               $image_coutn_02 = 1;
            }else{
               $image_coutn_02 = 0;
            }
            if(!empty($fetch_residence['image_03'])){
               $image_coutn_03 = 1;
            }else{
               $image_coutn_03 = 0;
            }
            if(!empty($fetch_residence['image_04'])){
               $image_coutn_04 = 1;
            }else{
               $image_coutn_04 = 0;
            }
            

            $total_images = (1 + $image_coutn_02 + $image_coutn_03 + $image_coutn_04 );

            $select_saved = $conn->prepare("SELECT * FROM `saved` WHERE residence_id = ? and user_id = ?");
            $select_saved->execute([$fetch_residence['id'], $user_id]);

      ?>
      <form action="" method="POST">
         <div class="box">
            <input type="hidden" name="residence_id" value="<?= $fetch_residence['id']; ?>">
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
            <div class="thumb">
               <p class="total-images"><i class="far fa-image"></i><span><?= $total_images; ?></span></p> 
               <img src="uploaded_files/<?= $fetch_residence['image_01']; ?>" alt="">
            </div>
            <div class="admin">
               <h3><?= substr($fetch_user['name'], 0, 1); ?></h3>
               <div>
                  <p><?= $fetch_user['name']; ?></p>
                  <span><?= $fetch_residence['date']; ?></span>
               </div>
            </div>
         </div>
         <div class="box">
            <div class="price"><i class="fa-solid fa-bangladeshi-taka-sign"></i><span><?= $fetch_residence['price']; ?></span></div>
            <h3 class="name"><?= $fetch_residence['residence_name']; ?></h3>
            <p class="location"><i class="fas fa-map-marker-alt"></i><span><?= $fetch_residence['address']; ?></span></p>
            <div class="flex">
               <p><i class="fas fa-house"></i><span><?= $fetch_residence['type']; ?></span></p>
               <p><i class="fas fa-tag"></i><span><?= $fetch_residence['offer']; ?></span></p>
               <p><i class="fas fa-bed"></i><span><?= $fetch_residence['bhk']; ?> BHK</span></p>
               <p><i class="fas fa-trowel"></i><span><?= $fetch_residence['status']; ?></span></p>
               <p><i class="fas fa-couch"></i><span><?= $fetch_residence['furnished']; ?></span></p>
               <p><i class="fas fa-maximize"></i><span><?= $fetch_residence['carpet']; ?>sqft</span></p>
            </div>
            <div class="flex-btn">
               <a href="view_residence.php?get_id=<?= $fetch_residence['id']; ?>" class="btn">View Residence</a>
               <input type="submit" value="send enquiry" name="send" class="btn">
            </div>
         </div>
      </form>
      <?php
         }
      }else{
         echo '<p class="empty">No Results Found!</p>';
      }
      ?>
      
   </div>

</section>

<!-- listings section ends -->











<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>


</body>
</html>