<html>
<head >
</head>

<body bgcolor=#E3F2FD >
<meta name="viewport" content ="width=device-width,initial-scale=1.0">

<?php
if( count($_GET)==1  &&  isset($_REQUEST['tvdat']) ) 
{
$con=mysqli_connect("localhost","shresthasroot","userroot@123","dev17muj7cab72"); 

$i=0; $j=0;
if($con)
{
$date=$_REQUEST['tvdat'];
$a="select * from tablemuj77cool"; 
$result=mysqli_query($con,$a);

echo "<table  cellpadding='10' cellspacing='5'  align=left width=350  style='font-size:105%' border=1 frame=void rules=rows bordercolor=#000000>";

for($i=0;$i<=24;$i++)
{
$result=mysqli_query($con,$a);
while($row=mysqli_fetch_array($result))
{
$tm=$row[4];
$tm=substr($tm, 0, 2);

if($row[6]=='D'  &&  $tm==$i  &&  $row[2]=='Bus Stand'  &&   $row[3]==$date)
{
$j=1;
echo "<tr>";
echo  "<td width=250 align=left>".$row[0]."</td>";
echo  "<td width=60 align=left>  <a href='$row[1]'  style='text-decoration:none' >"  .   $row[1] . "</a></td>";
echo "<td width=40 align=left>" .$row[4] ."hrs"."</td>";
echo "</tr>";

}
}

}

if($j==0)
echo "<br><i><div style='color:#000000 ; text-align:left ; font-size:18; '>Presently no students have been found.You may check after sometime...</div></i> "  ; 
}

mysqli_close($con);
}

?>

</body>
</html>












