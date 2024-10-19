<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>

<?php include 'php/max_file_size.php'; ?>
<?php include 'php/check_registered_files.php'; ?>
<?php 
//echo $_SERVER['HTTP_HOST'];
//echo '<pre>'; print_r($_SERVER); echo '</pre>';
//print_r ($_SERVER["HTTP_X_REAL_IP"]);
//echo '<pre>'; print_r($_SERVER['HTTP_X_REAL_IP']); echo '</pre>';

// $ip = isset($_SERVER['HTTP_CLIENT_IP']) 
//     ? $_SERVER['HTTP_CLIENT_IP'] 
//     : (isset($_SERVER['HTTP_X_FORWARDED_FOR']) 
//       ? $_SERVER['HTTP_X_FORWARDED_FOR'] 
//       : $_SERVER['REMOTE_ADDR']);

// echo 'O IP E: '.$ip;

$filesCounter = checkRegisteredFiles();

?>