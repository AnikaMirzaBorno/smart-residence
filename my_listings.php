<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
   header('location:login.php');
}

if(isset($_POST['delete'])){

   $delete_id = $_POST['residence_id'];
   $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);

   $verify_delete = $conn->prepare("SELECT * FROM `residence` WHERE id = ?");
   $verify_delete->execute([$delete_id]);

   if($verify_delete->rowCount() > 0){
      $select_images = $conn->prepare("SELECT * FROM `residence` WHERE id = ?");
      $select_images->execute([$delete_id]);
      while($fetch_images = $select_images->fetch(PDO::FETCH_ASSOC)){
         $image_01 = $fetch_images['image_01'];
         $image_02 = $fetch_images['image_02'];
         $image_03 = $fetch_images['image_03'];
         $image_04 = $fetch_images['image_04'];

         unlink('uploaded_files/'.$image_01);
         if(!empty($image_02)){
            unlink('uploaded_files/'.$image_02);
         }
         if(!empty($image_03)){
            unlink('uploaded_files/'.$image_03);
         }
         if(!empty($image_04)){
            unlink('uploaded_files/'.$image_04);
         }
         
      }
      $delete_saved = $conn->prepare("DELETE FROM `saved` WHERE residence_id = ?");
      $delete_saved->execute([$delete_id]);
      $delete_requests = $conn->prepare("DELETE FROM `requests` WHERE residence_id = ?");
      $delete_requests->execute([$delete_id]);
      $delete_listing = $conn->prepare("DELETE FROM `residence` WHERE id = ?");
      $delete_listing->execute([$delete_id]);
      $success_msg[] = 'Listing Deleted Successfully!';
   }else{
      $warning_msg[] = 'Listing Deleted Already!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>my listings</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="my-listings">

   <h1 class="heading">my listings</h1>

   <div class="box-container">

   <?php
      $total_images = 0;
      $select_residences = $conn->prepare("SELECT * FROM `residence` WHERE user_id = ? ORDER BY date DESC");
      $select_residences->execute([$user_id]);
      if($select_residences->rowCount() > 0){
         while($fetch_residence = $select_residences->fetch(PDO::FETCH_ASSOC)){

         $residence_id = $fetch_residence['id'];

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
         
         $total_images = (1 + $image_coutn_02 + $image_coutn_03 + $image_coutn_04);

   ?>
   <form accept="" method="POST" class="box">
      <input type="hidden" name="residence_id" value="<?= $residence_id; ?>">
      <div class="thumb">
         <p><i class="far fa-image"></i><span><?= $total_images; ?></span></p> 
         <img src="uploaded_files/<?= $fetch_residence['image_01']; ?>" alt="">
      </div>
      <div class="price"><i class="fas fa-indian-rupee-sign"></i><span><?= $fetch_residence['price']; ?></span></div>
      <h3 class="name"><?= $fetch_residence['residence_name']; ?></h3>
      <p class="location"><i class="fas fa-map-marker-alt"></i><span><?= $fetch_residence['address']; ?></span></p>
      <div class="flex-btn">
         <a href="update_residence.php?get_id=<?= $residence_id; ?>" class="btn">update</a>
         <input type="submit" name="delete" value="delete" class="btn" onclick="return confirm('delete this listing?');">
      </div>
      <a href="view_residence.php?get_id=<?= $residence_id; ?>" class="btn">view residence</a>
   </form>
   <?php
         }
      }else{
         echo '<p class="empty">No residences added yet! <a href="post_residence.php" style="margin-top:1.5rem;" class="btn">Add New</a></p>';
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