<?php 
if (isset($_POST['submit'])) {
// Initialize error array.
  $errors = array();
  // Check for a proper First name
  if (!empty($_POST['name'])) {
  $firstname = $_POST['name'];
  $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
  if (preg_match($pattern,$firstname)){ $firstname = $_POST['name'];}
  else{ $errors[] = 'Vaše ime može da sadrži samo _, 1-9, A-Z or a-z 2-20 long.';}
  } else {$errors[] = 'Zaboravili ste unijeti vaše ime.';}
  
  //Check for a valid phone number
  if (!empty($_POST['tel'])) {
  $phone = $_POST['tel'];
  $pattern = "/^[0-9\_]{7,20}/";
  if (preg_match($pattern,$phone)){ $phone = $_POST['tel'];}
  else{ $errors[] = 'Vaš broj telefona mora biti samo u brojevima.';}
  } else {$errors[] = 'Zaboravili ste unijeti broj telefona.';}
  }
  //End of validation 
  if (isset($_POST['submit'])) {
  if (empty($errors)) { 
  $from = "From: Our Site!"; //Site name
  // Change this to your email address you want to form sent to
  $to = "dositejgrbovic@agro-fungi.ba"; 
  $subject = "Poruka sa sajta! " . "-" . " " . $firstname;
  
  // Check for a proper Message
  if (!empty($_POST['message'])) {
  $poruka = $_POST['message'];
  $pattern = "/^[a-zA-Z0-9 \_]{2,20}/";// This is a regular expression that checks if the message is valid characters
  if (preg_match($pattern,$poruka)){ $poruka = $_POST['message'];}
  else{ $errors[] = 'Vasa poruka moze da sadrzi samo _, 1-9, A-Z or a-z 2-20 long.';}
  } else {$errors[] = 'Zaboravili ste unijeti poruku.';}
  
  $message = "Ime: " . $firstname . "<br>" . "Tel: " . $phone . "<br>" . "Poruka: " . $poruka;
  }
}
?>
<?php 
  //Print Errors
  if (isset($_POST['submit'])) {
  // Print any error messages. 
  if (!empty($errors)) { 
  echo '<hr /><h3>Vaša poruka se nije mogla poslati jer ima grešaka.</h3><ul>'; 
  echo '</ul><h3>Desilo se:</h3><hr />';
  // Print each error. 
  foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
  echo "<hr /><br>";}
   else{echo '<hr /><h3 align="center">Uspješno ste poslali poruku. Hvala!</h3><hr /><p>Ispod je poruka koju ste poslali:</p>'; 
  echo "Poslao: " . $firstname . " " . " 
Tel: ".$phone." 
" . "Poruka: " . $poruka;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
mail($to,$subject,$message,$headers);
  }
  }
//End of errors array
  ?>