<?php
if(isset($_POST['user_password']) && !empty($_POST['user_password'])){
echo $user_password = md5($_POST['user_password']);
$filename = 'md5.txt';
$handle = fopen($filename,'r');
echo $filepassword = fread($handle,filesize($filename));
  if($filepassword != $user_password){
    echo 'Password is not  correct';
  }
  else{
    echo 'Password is correct';
  }
}
else{
  echo 'Please enter the password';
}

 ?>
 <form action = 'md5encription.php' method = 'POST'>
   Password:<input type = 'text' name = 'user_password'><br><br>
   <input type = 'submit' value = 'submit'><br>
 </form>
