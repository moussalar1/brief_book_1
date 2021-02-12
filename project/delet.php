<?php 
include "config.php";
include "header.php";
$show= false;
if (isset($_POST['submit'])){
	$md= $_POST['submit'];
};

if(isset($_POST['call'])){

$sql = "delete from books where book_id = ".$_POST['call'].";";



if (mysqli_query($conn, $sql)) {
	$show = true;
     function msg(){ echo "<div style='
 	width: 100%;
  height: 50px;
  background-color: green;
  text-align: center;
  color: white;
  padding-top:20px;

     '>A record deleted successfully</div>";}
} else {
   header('Location:table-page.php');  
}

};








?>

<div style=" width: 30%;
margin: auto; background-color: grey; padding:30px; text-align: center; margin-bottom: 40px;margin-top: 40px">
	<p>Are You Shure You Want To Delete This Row ?</p>
	<form action="" method="post" style="display: inline-block;">
	<button name="call" value="<?php echo $md ?>" style="background-color:red; border: none; outline:none; padding:10px;">Yes</button>
	
	</form>
	<button  onclick='redirect()'style="background-color:blue; border: none; outline:none; padding:10px;">NO</button>
</div>
<?php

if ($show==true) {
   msg();
};

?>

<?php 

include "footer.php";

?>
<script type="text/javascript">
	function redirect(){
		window.location.href="table-page.php"
	}
</script>