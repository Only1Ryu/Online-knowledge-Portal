<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-image: url(img/cloudy_sky-wide.jpg);
	background-repeat: repeat;
	color: #FFF;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table rules="none" width="80%" border="1" align="center">
    <tr>
      <td bgcolor="#0152AD"><img src="img/elearning-online-content-banner.jpg" width="1000" height="250" /></td>
    </tr>
    <tr>
      <td bgcolor="#0152AD">&nbsp;</td>
    </tr>
    <tr>
      <td width="798"><p><a href="studentpanel.php"></a></p>
        <table rules="none" width="593" border="1" align="center" cellpadding="5" cellspacing="5">
        <tr>
        <td colspan="2" align="center"><h1>Student Details </h1></td>
          </tr>
            <tr>
    <?php 
	 
	 
       include 'conn.php';
	 session_start();
$em=""; 
if(isset($_REQUEST['t1']))
	  $em=$_REQUEST['t1'];
	  
$sql = "SELECT * FROM student WHERE studentregid ='". $em. "'";
$result = $conn->query($sql);
$i=0;
while($row = $result->fetch_assoc())
 {
     

?>
  
          <td width="228" height="37">Student Id</td>
		  <td width="324" height="37"><?php echo $row["studentregid"];?></td>
        
        </tr>
            <tr>
              <td height="37">Email</td>
              <td><?php echo $row["emailid"];?></td>
            </tr>
            <tr>
              <td height="37">Password</td>
              <td><?php echo $row["password"];?></td>
            </tr>
            <tr>
              <td height="37">Mobile</td>
              <td><?php echo $row["mobile"];?></td>
            </tr>
            <tr>
              <td height="37">Course</td>
              <td><?php echo $row["cource"];?></td>
            </tr>
            <tr>
              <td height="37">Branch</td>
              <td><?php echo $row["branch"];?></td>
            </tr>
            <tr>
              <td height="37">Semester</td>
              <td><?php echo $row["semture"];?></td>
            </tr>
            <tr>
              <td height="37">Date Of Addmission</td>
              <td><?php echo $row["dateofaddmission"];?></td>
            </tr>
            <tr>
              <td height="37">Full Address</td>
              <td><?php echo $row["address"];?></td>
            </tr>
            <tr>
              <td height="37">Date Of Birth</td>
              <td><?php echo $row["dateofbirth"];?></td>
            </tr>
              <?php 
		 }
		 ?>
        </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td bgcolor="#0152AD">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>