         <?php 
include "config.php";
include "header.php";

			$title = "";
			$author =   "" ;
			$image =  "" ;
			$publish = "";
			$value= "";
if(isset($_POST['change'])){
  
   $sql = "UPDATE books SET book_title='".$_POST['title']."' , book_author='".$_POST['author']."' , book_image='".$_FILES['image']['name']."' , book_publish_date='".$_POST['publish']."'  WHERE book_id='".$_POST['val']."' ";
if (mysqli_query($conn, $sql)) {
	echo $image;
  function msg(){ echo "<div style='
 	width: 100%;
  height: 50px;
  background-color: green;
  text-align: center;
  color: white;
  padding-top:20px;

     '>A record deleted successfully</div>";}
     msg();
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}






}
    if(isset($_POST['sub'])){
			$result = mysqli_query($conn,"SELECT * FROM books WHERE book_id='" . $_POST['sub'] . " ");
			$row= mysqli_fetch_array($result);
			$title = $row["book_title"];
			$author =   $row['book_author'] ;
			$image =   $row['book_image'] ;
		
			$publish = $row['book_publish_date'] ;
			$value= $_POST['sub'];
        

    }

?>


<div class="form-container">
<form action="" method="POST" enctype="multipart/form-data">
	<label>title</label>
	<input type="text" name="title" value="<?php echo $title ?>">
	<label>Author</label>
	<input type="text" name="author" value="<?php echo  $author ?> ">
	<label>image</label>
	<input type="file" name="image" value="<?php echo  $image ?>">
	<label>pablished at</label>
	<input type="text" name="publish"  value="<?php echo  $publish  ?> ">
	<input type="hidden" name="val" value="<?php echo  $value  ?>">
	<input type="submit" name="change"  style="width: 30%;margin:auto; background-color: #6001FF">

</form>
</div>
	<?php 

$_FILES['image']['name']= $image ;
?>
</div>
	<?php 

include "footer.php";

?>