<?php
if(isset($_POST['buttonupload'])){
$file=$_FILES['fileImage'];
print_r($file);
$fileName=$_FILES['fileImage']['name'];
$fileTmpName=$_FILES['fileImage']['tmp_name'];
$fileSize=$_FILES['fileImage']['size'];
$fileError=$_FILES['fileImage']['error'];
$fileType=$_FILES['fileImage']['type'];
echo "<hr>";
$fileExt=explode('.',$fileName);
$fileActualExt=strtolower(end($fileExt));

$allowed=array('jpg','jpeg','png');
if(in_array($fileActualExt,$allowed)){
    if($fileError===0){
        if($fileSize < 1000000){
            $fileNameNew=uniqid('',true).".".$fileActualExt;
            $fileDestination="uploads/".$fileNameNew;
            move_uploaded_file($fileTmpName,$fileDestination);
           header("Location: index.php?uploadsuccess");

        }
        else{
            echo "dosya boyutu çok büyük";
        }

    }else{
        echo "error uploading";

    }
}
    else{
        echo 'only image file types allowed';
    }

echo $fileError."<br>".$fileName."<br>".$fileSize."<br>".$fileTmpName."<br>".$fileType;
}