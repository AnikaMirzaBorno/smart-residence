<?php

if(isset($_POST['save'])){
   if($user_id != ''){

      $save_id = create_unique_id();
      $residence_id = $_POST['residence_id'];
      $residence_id = filter_var($residence_id, FILTER_SANITIZE_STRING);

      $verify_saved = $conn->prepare("SELECT * FROM `saved` WHERE residence_id = ? and user_id = ?");
      $verify_saved->execute([$residence_id, $user_id]);

      if($verify_saved->rowCount() > 0){
         $remove_saved = $conn->prepare("DELETE FROM `saved` WHERE residence_id = ? AND user_id = ?");
         $remove_saved->execute([$residence_id, $user_id]);
         $success_msg[] = 'Removed From Saved!';
      }else{
         $insert_saved = $conn->prepare("INSERT INTO`saved`(id, residence_id, user_id) VALUES(?,?,?)");
         $insert_saved->execute([$save_id, $residence_id, $user_id]);
         $success_msg[] = 'Listing Saved!';
      }

   }else{
      $warning_msg[] = 'Please Login First!';
   }
}

if(isset($_POST['send'])){
   if($user_id != ''){

      $request_id = create_unique_id();
      $residence_id = $_POST['residence_id'];
      $residence_id = filter_var($residence_id, FILTER_SANITIZE_STRING);

      $select_receiver = $conn->prepare("SELECT user_id FROM `residence` WHERE id = ? LIMIT 1");
      $select_receiver->execute([$residence_id]);
      $fetch_receiver = $select_receiver->fetch(PDO::FETCH_ASSOC);
      $receiver = $fetch_receiver['user_id'];

      $verify_request = $conn->prepare("SELECT * FROM `requests` WHERE residence_id = ? AND sender = ? AND receiver = ?");
      $verify_request->execute([$residence_id, $user_id, $receiver]);

      if(($verify_request->rowCount() > 0)){
         $warning_msg[] = 'Request Sent Already!';
      }else{
         $send_request = $conn->prepare("INSERT INTO `requests`(id, residence_id, sender, receiver) VALUES(?,?,?,?)");
         $send_request->execute([$request_id, $residence_id, $user_id, $receiver]);
         $success_msg[] = 'Request Sent Successfully!';
      }

   }else{
      $warning_msg[] = 'Please Login First!';
   }
}

?>