<?php
$find = array("akash","ashmit","abhishek");
$replace = array("alex","starc","virat");
if(isset($_POST['user_input']) && !empty($_POST['user_input'])){
  echo $_POST['user_input'];
 $user_input = $_POST['user_input'];
 $user_input_new = str_ireplace($find,$replace,$user_input);
 echo $user_input_new;



}
 ?>
 <hr>
 <form action = "word_censoring.php" method = "POST" >
    <textarea name = "user_input" rows = "6" cols = "30" ></textarea><br><br>
    <input type = "submit" value = "submit">
  </form>
