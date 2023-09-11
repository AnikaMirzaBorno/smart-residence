<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
   header('location:login.php');
}

if(isset($_POST['post'])){

   $id = create_unique_id();
   $residence_name = $_POST['residence_name'];
   $residence_name = filter_var($residence_name, FILTER_SANITIZE_STRING);
   $price = $_POST['price'];
   $price = filter_var($price, FILTER_SANITIZE_STRING);
   $deposite = $_POST['deposite'];
   $deposite = filter_var($deposite, FILTER_SANITIZE_STRING);
   $address = $_POST['address'];
   $address = filter_var($address, FILTER_SANITIZE_STRING);
   $offer = $_POST['offer'];
   $offer = filter_var($offer, FILTER_SANITIZE_STRING);
   $type = $_POST['type'];
   $type = filter_var($type, FILTER_SANITIZE_STRING);
   $status = $_POST['status'];
   $status = filter_var($status, FILTER_SANITIZE_STRING);
   $furnished = $_POST['furnished'];
   $furnished = filter_var($furnished, FILTER_SANITIZE_STRING);
   $bhk = $_POST['bhk'];
   $bhk = filter_var($bhk, FILTER_SANITIZE_STRING);
   $bedroom = $_POST['bedroom'];
   $bedroom = filter_var($bedroom, FILTER_SANITIZE_STRING);
   $bathroom = $_POST['bathroom'];
   $bathroom = filter_var($bathroom, FILTER_SANITIZE_STRING);
   $balcony = $_POST['balcony'];
   $balcony = filter_var($balcony, FILTER_SANITIZE_STRING);
   $carpet = $_POST['carpet'];
   $carpet = filter_var($carpet, FILTER_SANITIZE_STRING); 
   $age = $_POST['age'];
   $age = filter_var($age, FILTER_SANITIZE_STRING);
   $total_floors = $_POST['total_floors'];
   $total_floors = filter_var($total_floors, FILTER_SANITIZE_STRING);
   $room_floor = $_POST['room_floor'];
   $room_floor = filter_var($room_floor, FILTER_SANITIZE_STRING);
   $loan = $_POST['loan'];
   $loan = filter_var($loan, FILTER_SANITIZE_STRING);
   $description = $_POST['description'];
   $description = filter_var($description, FILTER_SANITIZE_STRING);

   if(isset($_POST['lift'])){
      $lift = $_POST['lift'];
      $lift = filter_var($lift, FILTER_SANITIZE_STRING);
   }else{
      $lift = 'no';
   }
   if(isset($_POST['Security_System'])){
      $Security_System = $_POST['Security_System'];
      $Security_System = filter_var($Security_System, FILTER_SANITIZE_STRING);
   }else{
      $Security_System = 'no';
   }
   if(isset($_POST['play_ground'])){
      $play_ground = $_POST['play_ground'];
      $play_ground = filter_var($play_ground, FILTER_SANITIZE_STRING);
   }else{
      $play_ground = 'no';
   }
   if(isset($_POST['garden'])){
      $garden = $_POST['garden'];
      $garden = filter_var($garden, FILTER_SANITIZE_STRING);
   }else{
      $garden = 'no';
   }
   if(isset($_POST['water_supply'])){
      $water_supply = $_POST['water_supply'];
      $water_supply = filter_var($water_supply, FILTER_SANITIZE_STRING);
   }else{
      $water_supply = 'no';
   }
   if(isset($_POST['power_backup'])){
      $power_backup = $_POST['power_backup'];
      $power_backup = filter_var($power_backup, FILTER_SANITIZE_STRING);
   }else{
      $power_backup = 'no';
   }
   if(isset($_POST['parking_area'])){
      $parking_area = $_POST['parking_area'];
      $parking_area = filter_var($parking_area, FILTER_SANITIZE_STRING);
   }else{
      $parking_area = 'no';
   }
   if(isset($_POST['gym'])){
      $gym = $_POST['gym'];
      $gym = filter_var($gym, FILTER_SANITIZE_STRING);
   }else{
      $gym = 'no';
   }
   if(isset($_POST['Smart_energy_consumption'])){
      $Smart_energy_consumption = $_POST['Smart_energy_consumption'];
      $Smart_energy_consumption = filter_var($Smart_energy_consumption, FILTER_SANITIZE_STRING);
   }else{
      $Smart_energy_consumption = 'no';
   }
   if(isset($_POST['Intelligent_Detection_and_Water_Management'])){
      $Intelligent_Detection_and_Water_Management = $_POST['Intelligent_Detection_and_Water_Management'];
      $Intelligent_Detection_and_Water_Management = filter_var($Intelligent_Detection_and_Water_Management, FILTER_SANITIZE_STRING);
   }else{
      $Intelligent_Detection_and_Water_Management = 'no';
   }
   if(isset($_POST['Home_Automation'])){
      $Home_Automation = $_POST['Home_Automation'];
      $Home_Automation = filter_var($Home_Automation, FILTER_SANITIZE_STRING);
   }else{
      $Home_Automation = 'no';
   }
   if(isset($_POST['market_area'])){
      $market_area = $_POST['market_area'];
      $market_area = filter_var($market_area, FILTER_SANITIZE_STRING);
   }else{
      $market_area = 'no';
   }

   $image_02 = $_FILES['image_02']['name'];
   $image_02 = filter_var($image_02, FILTER_SANITIZE_STRING);
   $image_02_ext = pathinfo($image_02, PATHINFO_EXTENSION);
   $rename_image_02 = create_unique_id().'.'.$image_02_ext;
   $image_02_tmp_name = $_FILES['image_02']['tmp_name'];
   $image_02_size = $_FILES['image_02']['size'];
   $image_02_folder = 'uploaded_files/'.$rename_image_02;

   if(!empty($image_02)){
      if($image_02_size > 2000000){
         $warning_msg[] = 'image 02 size is too large!';
      }else{
         move_uploaded_file($image_02_tmp_name, $image_02_folder);
      }
   }else{
      $rename_image_02 = '';
   }

   $image_03 = $_FILES['image_03']['name'];
   $image_03 = filter_var($image_03, FILTER_SANITIZE_STRING);
   $image_03_ext = pathinfo($image_03, PATHINFO_EXTENSION);
   $rename_image_03 = create_unique_id().'.'.$image_03_ext;
   $image_03_tmp_name = $_FILES['image_03']['tmp_name'];
   $image_03_size = $_FILES['image_03']['size'];
   $image_03_folder = 'uploaded_files/'.$rename_image_03;

   if(!empty($image_03)){
      if($image_03_size > 2000000){
         $warning_msg[] = 'image 03 size is too large!';
      }else{
         move_uploaded_file($image_03_tmp_name, $image_03_folder);
      }
   }else{
      $rename_image_03 = '';
   }

   $image_04 = $_FILES['image_04']['name'];
   $image_04 = filter_var($image_04, FILTER_SANITIZE_STRING);
   $image_04_ext = pathinfo($image_04, PATHINFO_EXTENSION);
   $rename_image_04 = create_unique_id().'.'.$image_04_ext;
   $image_04_tmp_name = $_FILES['image_04']['tmp_name'];
   $image_04_size = $_FILES['image_04']['size'];
   $image_04_folder = 'uploaded_files/'.$rename_image_04;

   if(!empty($image_04)){
      if($image_04_size > 2000000){
         $warning_msg[] = 'image 04 size is too large!';
      }else{
         move_uploaded_file($image_04_tmp_name, $image_04_folder);
      }
   }else{
      $rename_image_04 = '';
   }

   
   $image_01 = $_FILES['image_01']['name'];
   $image_01 = filter_var($image_01, FILTER_SANITIZE_STRING);
   $image_01_ext = pathinfo($image_01, PATHINFO_EXTENSION);
   $rename_image_01 = create_unique_id().'.'.$image_01_ext;
   $image_01_tmp_name = $_FILES['image_01']['tmp_name'];
   $image_01_size = $_FILES['image_01']['size'];
   $image_01_folder = 'uploaded_files/'.$rename_image_01;

   if($image_01_size > 2000000){
      $warning_msg[] = 'image 01 size too large!';
   }else{
      $insert_residence = $conn->prepare("INSERT INTO `residence`(id, user_id, residence_name, address, price, type, offer, status, furnished, bhk, deposite, bedroom, bathroom, balcony, carpet, age, total_floors, room_floor, loan, lift, Security_System, play_ground, garden, water_supply, power_backup, parking_area, gym, Smart_energy_consumption, Intelligent_Detection_and_Water_Management, Home_Automation, market_area, image_01, image_02, image_03, image_04, description) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"); 
      $insert_residence->execute([$id, $user_id, $residence_name, $address, $price, $type, $offer, $status, $furnished, $bhk, $deposite, $bedroom, $bathroom, $balcony, $carpet, $age, $total_floors, $room_floor, $loan, $lift, $Security_System, $play_ground, $garden, $water_supply, $power_backup, $parking_area, $gym, $Smart_energy_consumption, $Intelligent_Detection_and_Water_Management, $Home_Automation, $market_area, $rename_image_01, $rename_image_02, $rename_image_03, $rename_image_04, $description]);
      move_uploaded_file($image_01_tmp_name, $image_01_folder);
      $success_msg[] = 'residence posted successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Post Residence</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>
<div class="res">

<section class="residence-form">

   <form action="" method="POST" enctype="multipart/form-data">
      <h3>Residence Details</h3><br>
      <div class="flex">
      <div class="box">
         <p>Residence Name <span>*</span></p>
         <input type="text" name="residence_name" required maxlength="50" placeholder="Enter Residence Name" class="input">
      </div>
      <div class="box">
            <p>Residence Address <span>*</span></p>
            <input type="text" name="address" required maxlength="100" placeholder="Enter Residence Full Address" class="input">
         </div>
</div>
<div class="flex1">
      
         <div class="box">
            <p>Residence Price <span>*</span></p>
            <input type="number" name="price" required min="0" max="9999999999" maxlength="10" placeholder="Enter Residence Price" class="input">
         </div>
         <div class="box">
            <p>Deposite Amount <span>*</span></p>
            <input type="number" name="deposite" required min="0" max="9999999999" maxlength="10" placeholder="Enter Deposite Amount" class="input">
         </div>
         
         <div class="box">
            <p>Offer Type <span>*</span></p>
            <select name="offer" required class="input">
               <option value="sale">Sale</option>
               <option value="resale">Resale</option>
               <option value="rent">Rent</option>
            </select>
         </div>
         <div class="box">
            <p>Residence Type <span>*</span></p>
            <select name="type" required class="input">
               <option value="flat">Flat</option>
               <option value="house">House</option>
            </select>
         </div>
         <div class="box">
            <p>Residence Status <span>*</span></p>
            <select name="status" required class="input">
               <option value="ready to move">Ready To Move</option>
               <option value="under construction">Under Construction</option>
            </select>
         </div>
         <div class="box">
            <p>Furnished Status <span>*</span></p>
            <select name="furnished" required class="input">
               <option value="furnished">Furnished</option>
               <option value="semi-furnished">Semi-Furnished</option>
               <option value="unfurnished">Unfurnished</option>
            </select>
         </div>
         <div class="box">
            <p>How Many BHK <span>*</span></p>
            <select name="bhk" required class="input">
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
            <p>How Many Bedrooms <span>*</span></p>
            <select name="bedroom" required class="input">
               <option value="0">0 bedroom</option>
               <option value="1" selected>1 bedroom</option>
               <option value="2">2 bedroom</option>
               <option value="3">3 bedroom</option>
               <option value="4">4 bedroom</option>
               <option value="5">5 bedroom</option>
               <option value="6">6 bedroom</option>
               <option value="7">7 bedroom</option>
               <option value="8">8 bedroom</option>
               <option value="9">9 bedroom</option>
            </select>
         </div>
         <div class="box">
            <p>How Many Bathrooms <span>*</span></p>
            <select name="bathroom" required class="input">
               <option value="1">1 bathroom</option>
               <option value="2">2 bathroom</option>
               <option value="3">3 bathroom</option>
               <option value="4">4 bathroom</option>
               <option value="5">5 bathroom</option>
               <option value="6">6 bathroom</option>
               <option value="7">7 bathroom</option>
               <option value="8">8 bathroom</option>
               <option value="9">9 bathroom</option>
            </select>
         </div>
         <div class="box">
            <p>How Many Balconys <span>*</span></p>
            <select name="balcony" required class="input">
               <option value="0">0 balcony</option>
               <option value="1">1 balcony</option>
               <option value="2">2 balcony</option>
               <option value="3">3 balcony</option>
               <option value="4">4 balcony</option>
               <option value="5">5 balcony</option>
               <option value="6">6 balcony</option>
               <option value="7">7 balcony</option>
               <option value="8">8 balcony</option>
               <option value="9">9 balcony</option>
            </select>
         </div>
         <div class="box">
            <p>Carpet Area <span>*</span></p>
            <input type="number" name="carpet" required min="1" max="9999999999" maxlength="10" placeholder="How Many Squarefits?" class="input">
         </div>
         <div class="box">
            <p>Residence Age <span>*</span></p>
            <input type="number" name="age" required min="0" max="99" maxlength="2" placeholder="How Old Is Residence?" class="input">
         </div>
         <div class="box">
            <p>Total Floors <span>*</span></p>
            <input type="number" name="total_floors" required min="0" max="99" maxlength="2" placeholder="How Floors Available?" class="input">
         </div>
         <div class="box">
            <p>Floor Room <span>*</span></p>
            <input type="number" name="room_floor" min="0" max="99" maxlength="2" placeholder="Residence Floor Number" class="input">
         </div>
         <div class="box">
            <p>Loan <span>*</span></p>
            <select name="loan" required class="input">
               <option value="available">Available</option>
               <option value="not available">Not Available</option>
            </select>
         </div>
      </div>
      <div class="box">
         <p>Residence Description <span>*</span></p>
         <textarea name="description" maxlength="1000" class="input" required cols="30" rows="10" placeholder="Write About Residence..."></textarea>
      </div>
      <div class="checkbox">
         <div class="box">
            <p><input type="checkbox" name="lift" value="yes" />Lifts</p>
            <p><input type="checkbox" name="Security_System" value="yes" />Security System</p>
            <p><input type="checkbox" name="play_ground" value="yes" />Play Ground</p>
            <p><input type="checkbox" name="garden" value="yes" />Garden</p>
         </div>
      <div class="box">


            <p><input type="checkbox" name="water_supply" value="yes" />Water Supply</p>
            <p><input type="checkbox" name="power_backup" value="yes" />Power Backup</p>
            <p><input type="checkbox" name="parking_area" value="yes" />Parking Area</p>
            <p><input type="checkbox" name="gym" value="yes" />Gym</p>
         </div>
            <div class="box">

            <p><input type="checkbox" name="Smart_energy_consumption" value="yes" />Smart Energy Consumption</p>
            <p><input type="checkbox" name="Intelligent_Detection_and_Water_Management" value="yes" />Intelligent Detection and Water Management</p>
            <p><input type="checkbox" name="Home_Automation" value="yes" />Home Automation</p>
            <p><input type="checkbox" name="market_area" value="yes" />Market Area</p>
         </div>
      </div>
      <div class="box">
         <p>image 01 <span>*</span></p>
         <input type="file" name="image_01" class="input" accept="image/*" required>
      </div>
      <div class="flex"> 
         <div class="box">
            <p>image 02</p>
            <input type="file" name="image_02" class="input" accept="image/*">
         </div>
         <div class="box">
            <p>image 03</p>
            <input type="file" name="image_03" class="input" accept="image/*">
         </div>
         <div class="box">
            <p>image 04</p>
            <input type="file" name="image_04" class="input" accept="image/*">
         </div>  
      </div>
      <input type="submit" value="post residence" class="btn" name="post">
   </form>

</section>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>