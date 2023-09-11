<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
   header('location:login.php');
}

include 'components/save_send.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>saved</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="listings">

   <h1 class="heading">Saved Listings</h1>

   <div class="box-container">
      <?php
         $total_images = 0;
         $select_saved_residence = $conn->prepare("SELECT * FROM `saved` WHERE user_id = ?");
         $select_saved_residence->execute([$user_id]);
         if($select_saved_residence->rowCount() > 0){
         while($fetch_saved = $select_saved_residence->fetch(PDO::FETCH_ASSOC)){
         $select_residences = $conn->prepare("SELECT * FROM `residence` WHERE id = ? ORDER BY date DESC");
         $select_residences->execute([$fetch_saved['residence_id']]);
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
            <button type="submit" name="save" class="save"><i class="fas fa-heart"></i><span>Remove From Saved</span></button>
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
               <a href="view_residence.php?get_id=<?= $fetch_residence['id']; ?>" class="btn">view residence</a>
               <input type="submit" value="send enquiry" name="send" class="btn">
            </div>
         </div>
      </form>
      <?php
               }
            }else{
               echo '<p class="empty">No Residences Added Yet! <a href="post_residence.php" style="margin-top:1.5rem;" class="btn">Add new</a></p>';
            }
         }
      }else{
         echo '<p class="empty">No Residences Saved Yet! <a href="listings.php" style="margin-top:1.5rem;" class="btn">Discover more</a></p>';
      }
      ?>
      
   </div>

</section>






<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>