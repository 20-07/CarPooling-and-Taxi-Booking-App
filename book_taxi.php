<?php
if(  count($_GET)==2  &&  isset($_REQUEST['uno'])  && isset($_REQUEST['bookst'])  )
{

$con=mysqli_connect("localhost","shresthasroot","userroot@123","dev17muj7cab72"); 

if($con)
{
$num=$_REQUEST['uno'];$book_status=$_REQUEST['bookst'];
$a="update tablemuj77cool set  Book='$book_status'   where  Phone_no='$num'  "; 
mysqli_query($con,$a);
}

mysqli_close($con);

}
?>