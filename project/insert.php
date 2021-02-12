<?php 
include "config.php";
include "header.php";
if(isset($_POST['submit'])) {
       $image=$_FILES['image']['name'];
        //$image = $_FILES;
        $target = "images/".basename($image);
     //   $target = "images/".basename($image);
       // move_uploaded_file($_FILES['image']['tmp_name'], $target);
       // print_r($image);


 move_uploaded_file($_FILES['image']['tmp_name'], $target);
   
$sql = "INSERT INTO books(  book_title, book_author, book_image,book_publish_date) VALUES ('".$_POST["title"]."','".$_POST["author"]."','". $image."','".$_POST['publish']."') ";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




}

?>
<div class="list-boks-container">
	<div class="container">
	<span>New Book </span>
	
</div>
</div>
<div class="form-container">
<form action="" method="POST" enctype="multipart/form-data">
	<label>title</label>
	<input type="text" name="title">
	<label>Author</label>
	<input type="text" name="author">
	<label>image</label>
	<input type="file" name="image">
	<label>pablished at</label>
	<input type="date" name="publish">
	<input type="submit" name="submit" style="width: 30%;margin:auto; background-color: #6001FF">
</form>
</div>
<?php 

include "footer.php";

?>