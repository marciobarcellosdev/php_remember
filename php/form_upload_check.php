<?php

include 'notify_define.php';
$return_arr = array();

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_FILES["arquivo"]) && $_FILES["arquivo"]["error"] == 0){

    //CHECK FILE EXTENSION
    $fileName = $_FILES["arquivo"]["name"];
    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowed = array('zip', '7z', 'rar', 'mp3', 'xml', 'docx', 'jpg', 'png', 'jpeg', 'gif');  // excel, word, powerpoint, bmp
    if(in_array($fileExt, $allowed)){
      $return_arr['continueUpload'] = true;
    }else{
      $return_arr['continueUpload'] = false;
      $return_arr['notifyMsg'] = NAO_PERMITIDO_EXTENSAO;
      $return_arr['notifyType'] = TYPE_ERROR;
    }

    if($return_arr['continueUpload'] === true){
      //data.paramostrar: 40.000.000
      //data.paramostrar:  1.859.335
      
      //CHECK FILE SIZE
      $iniUploadMaxFileSize = ini_get("upload_max_filesize");
      $uploadMaxFileSize = (int) filter_var($iniUploadMaxFileSize, FILTER_SANITIZE_NUMBER_INT);
      $sizeLimit = ($uploadMaxFileSize-10) * 1000000;
      $sizeFile = $_FILES["arquivo"]["size"];
      
      $return_arr['sizeLimit'] = $sizeLimit;
      $return_arr['sizeFile'] = $sizeFile;                              
      
      if($sizeFile > $sizeLimit){
        $return_arr['continueUpload'] = false;
        $return_arr['notifyMsg'] = NAO_PERMITIDO_TAMANHO;
        $return_arr['notifyType'] = TYPE_ERROR;
      }else{
        $return_arr['continueUpload'] = true;
      }
    }
  }
}
echo json_encode($return_arr);

// memory_limit: máximo de memória que um script pode alocar
// upload_max_filesize: tamanho máximo de um arquivo para ser feito upload
// post_max_size: funcionalidade similar ao upload_max_filesize

// NET
// memory_limit 128M
// upload_max_filesize 5M
// post_max_size 50M

// LOCAL
// memory_limit 1024M
// upload_max_filesize 50M
// post_max_size 100M

?>

