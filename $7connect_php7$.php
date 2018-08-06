
<?php
if( ( count($_GET)==2 || count($_GET)==6 ) &&  isset($_REQUEST['uname'])  && isset($_REQUEST['unum']) && ctype_digit($_REQUEST['unum']) && strlen($_REQUEST['unum'])==10       )

{

$con=mysqli_connect("localhost","shresthasroot","userroot@123","dev17muj7cab72"); 

if($con)
{

if(isset($_REQUEST['udes']) && isset($_REQUEST['udate']) &&isset($_REQUEST['utime'])  &&isset($_REQUEST['uwere']) )

{
$num=$_REQUEST['unum'];$date=$_REQUEST['udate'];$time=$_REQUEST['utime'];$des=$_REQUEST['udes'];$were=$_REQUEST['uwere'];
$a="update tablemuj77cool set   GoingTo='$des'  ,      Date='$date'      ,     Time='$time'  , Were='$were'   where  Phone_no='$num'  "; 
mysqli_query($con,$a);
}

else 
{
  $num=$_REQUEST['unum'];$name=$_REQUEST['uname'];
$a="insert into tablemuj77cool (Student_Name,Phone_no,GoingTo,Date,Time,Were) values ('$name','$num','-1','-1','-1','-')"; 
mysqli_query($con,$a);

}


}

mysqli_close($con);

}
?>

