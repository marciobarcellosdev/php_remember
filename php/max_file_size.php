<?php
$iniUploadMaxFileSize = ini_get("upload_max_filesize");
//$iniPostMaxSize = ini_get("post_max_size");

$uploadMaxFileSize = (int) filter_var($iniUploadMaxFileSize, FILTER_SANITIZE_NUMBER_INT);
$fixedSize = $uploadMaxFileSize-10;
$uploadMaxFileSizeString = $fixedSize.' MB';
//$postMaxSize = (int) filter_var($iniPostMaxSize, FILTER_SANITIZE_NUMBER_INT).' MB';
?>