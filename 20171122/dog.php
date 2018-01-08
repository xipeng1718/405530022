
<form action="dog.php" method="post" enctype="multipart/form-data">
height : <input type="text" name="height">m <br>
weight : <input type="text" name="weight">kg <br>
檔案名稱:
<input type="file" name="file" id="file"> <br>
<input type="submit" name="submit" value="提交">    


</form>

<?php
extract($_POST);
if (!$weight || !$height) echo "please type in all information"."<br>";
else echo "BMI".$weight/($height*$height)."<br>";
if($_FILES["file"]["error"]>0){
   /* echo "error : " .$_FILES["file"]["error"];}*/
   if($_FILES["file"]["error"]==4) echo "Empty<br>";
}
else{
    if($_FILES["file"]["type"] && strstr($_FILES["file"]["type"],"image")==FALSE) echo "wrong file type"."<br>";   

        echo "檔案名稱: ". $_FILES["file"]["name"]."<br>";
        echo "檔案類型: ". $_FILES["file"]["type"]."<br>";
        echo "檔案大小: ". ($_FILES["file"]["size"]/1024)."kb<br>";
        echo "暫存名稱: ". $_FILES["file"]["tmp_name"]."<br>";

        $filename = $_FILES["file"]["name"];
        move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$filename);
        echo '<img src="upload/'.$filename.'"/>';

        

       }
?>