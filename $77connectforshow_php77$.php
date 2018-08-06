
<html>
<head >
</head>

<body bgcolor=#E3F2FD >
<meta name="viewport" content ="width=device-width,initial-scale=1.0">

<?php
if( count($_GET)==1  &&  isset($_REQUEST['unum'])  &&  strlen($_REQUEST['unum'])==10 && !isset($_REQUEST['uname']) && ctype_digit($_REQUEST['unum'])) 
{
$con=mysqli_connect("localhost","shresthasroot","userroot@123","dev17muj7cab72"); 

$i=0;
if($con)
{
$keynum=$_REQUEST['unum'];

$q="select * from tablemuj77cool where Phone_No='$keynum'";
$tar=mysqli_query($con,$q);
$target=mysqli_fetch_array($tar); 
$t1= $target[4];
$t1=substr($t1, 0, 2); 

$a="select * from tablemuj77cool"; 
$result=mysqli_query($con,$a);

echo "<table  cellpadding='10' cellspacing='5'  align=left width=350  style='font-size:105%' border=1 frame=void rules=rows bordercolor=#000000>";

while($row=mysqli_fetch_array($result))
{
$t2=$row[4];
$t2=substr($t2, 0, 2); 
if($row[1]!=$target[1] && $row[2]==$target[2] && $row[3]==$target[3] && $row[5]==$target[5]  && abs($t1-$t2)<=1  && $row[2]!='-1' && $row[3]!='-1' && $row[4]!='-1' && $row[5]!='-')   
{
if($i==0)
echo  "<i><div style='color:#000000 ; text-align:left ; font-size:18; '> #Student(s) listed below match your query's destinition & date and are within 1:30hrs of your leaving time.</div></i><br><br>"; 
$i=1;
echo "<tr>";
echo  "<td width=250 align=left>".$row[0]."</td>";
echo  "<td width=60 align=left>  <a href='$row[1]'  style='text-decoration:none' >"  .   $row[1] . "</a></td>";
echo "<td width=40 align=left>" .$row[4] ."hrs"."</td>";
echo "</tr>";
}

}
if($i==0)
echo "<br><i><div style='color:#000000 ; text-align:left ; font-size:18; '>We couldn't find any student within 1:30hrs. of your leaving time.You may check status after sometime...</div></i> "  ; 
}

mysqli_close($con);
}

?>

</body>
</html>

