<?php
$den_id=$_POST['doc'];
$target_dir = strtoupper(str_replace(" ", "_", $den_id));

$anexo1=$target_dir."usuario.png";

//para uso no final do formulário
$ck_anexo = strtolower(pathinfo(basename($_FILES["anexo1"]["name"]),PATHINFO_EXTENSION));
//para uso no final do formulário

$baseanexo1 = basename($_FILES["anexo1"]["name"]);

if (!file_exists($target_dir)){
mkdir("anexos/$target_dir");

} 

$target_anexo1 = "anexos/".$target_dir ."/". $anexo1;
$uploadOk = 1;

$imageFileType = strtolower(pathinfo(basename($_FILES["anexo1"]["name"]),PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
/*if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "2 - File is an image - " . $check["mime"] . "<br>1 - ";
        $uploadOk = 1;
    } else {
        echo "2 - File is not an image<br>";
        $uploadOk = 0;
    }
}
*/

// Check if file already exists
if (file_exists($target_anexo1)) {
    echo "3 - Sorry, file already exists<br>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["anexo1"]["size"] > 500000) {
    echo "err4 -Sorry, your file is too large<br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $erro = "err5 - Desculpe, somente formatos JPG & JPEG permitidos.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error

if ($uploadOk == 0) {

// if everything is ok, try to upload file
} else {
    
    if (move_uploaded_file($_FILES["anexo1"]["tmp_name"], $target_anexo1)) {
        //echo "<br>DUT ". basename( $_FILES["dut"]["name"]). " has been uploaded. | basedut = " . $basedut;
        $anexo1 = "<br><img src=".$target_anexo1." width=400vw>";
        $den_anexo = $target_anexo1;
    } else {
        $erro .= "<br>Sorry, there was an error uploading your DUT."; 
    }

}
//script de upload
?>