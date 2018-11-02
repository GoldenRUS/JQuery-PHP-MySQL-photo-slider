<?php
require_once("galleryCore.php");

$ds          = DIRECTORY_SEPARATOR; 
 
$storeFolder = 'uploads';  
 
if (!empty($_FILES)) {
 
    $tempFile = $_FILES['file']['tmp_name'];         
 
    $targetPath = $_SERVER['DOCUMENT_ROOT'] . $ds . $storeFolder . $ds; 
 
    $targetFile =  $targetPath. $_FILES['file']['name']; 
 
    move_uploaded_file($tempFile,$targetFile);
    AddGalleryItem($ds . $storeFolder . $ds . $_FILES['file']['name']);
 
}
?>