<?php
$allowedExt = array();  // excel, word, powerpoint, bmp
//$allowedExt = array('zip', '7z', 'rar', 'mp3', 'xml', 'docx', 'jpg', 'png', 'jpeg', 'gif');  // excel, word, powerpoint, bmp


// IMAGES
array_push($allowedExt, 'jpg', 'jpeg', 'gif', 'png', 'bmp');

// ZIP
array_push($allowedExt, 'zip', '7z', 'rar');

// DOCUMENT
array_push($allowedExt, 'doc', 'docx', 'pdf');

// SHEET
array_push($allowedExt, 'xls', 'xlsx');

// OTHERS
array_push($allowedExt, 'xml', 'txt', 'mp3', 'pptx');



$allowedExtensions = implode(', ', $allowedExt);
?>