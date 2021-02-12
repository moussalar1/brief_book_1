<!-- Call the Header And The Config File -->
<?php 
include "config.php";
include "header.php";

?>
<!-- Start Bar Of Add Button And Title -->
<div class="list-boks-container">
	<div class="container">
	<span>List Of Books </span>
	<button onclick="window.location.href='insert.php'">Add</button>
</div>
</div>
<!--End Bar  -->
<!--Start Books Display Table  -->
       <table class="books-table">
       <tr>
       	<th>Title</th>
       	<th>Author</th>
       	<th>Image</th>
       	<th>Published at</th>
       	<th>Action </th>
       </tr>
<!--Start Adding Books To THe Table   -->
     <?php
     $target = "images/";
     $sql = "SELECT * FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    echo '  <tr>
       	<td>'.$row["book_title"].'</td>
       	<td>'.$row["book_author"].'</td>
       	<td>'.'<img src='.$target.$row['book_image'].' style="width:40px;height:40px;">'.'</td>
       	<td>'.$row["book_publish_date"].'</td>
       	<td> 
 		<form action="delet.php" method="post" style="display: inline-block;">
 		
 		<button type="submit"  style="background-color:red; border: none; outline:none; padding:10px;"  name="submit" value="'.$row['book_id'].'">Delet</button>
 		</form>
 		<form action="edit.php" method="post" style="display:inline-block">
 		<button type="submit" style="background-color:orange; border: none; outline:none; padding:10px;" name="sub" value="'.$row['book_id'].'">Update</button>
 		</form>



       	  </td>
       	
       </tr>';
  }
} else {
  echo "0 results";
}
     ?>

       </table>



	
	
	<div>
	<?php 

include "footer.php";

?>
</div>
