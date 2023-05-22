<?php 
if($_FILES){
$target_dir = "./uploads/";
$target_file = $target_dir . $_FILES["file"]["name"];
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";}
}
?>

