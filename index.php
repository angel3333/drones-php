<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251">
<title>������� � ��������</title>
<body link="#00ff00" alink="#00ffff" vlink="#ff0000">
<a name="begin">
<center><img src="header.jpg"></center>
<center><h4><?php
$mydate = date("d.m.Y");
$mytime = date("H:i");
echo "���������! ���� � $mydate, ����� � ������� � $mytime";
?></h4></center>
<center><h3><font color="red">
<?php
$d1=strtotime("September 23");
$d2=ceil(($d1-time())/60/60/24);
echo "������� " . $d2 ." ��� �� ��������� �� ��� :)";
?></font></h3></center>
 <?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 
<?php
	    $u_agent = $_SERVER['HTTP_USER_AGENT'];
	    $bname = 'Unknown';
	    $platform = 'Unknown';
	    $version= "";
	 
	    //First get the platform?
	    if (preg_match('/linux/i', $u_agent)) {
	        $platform = 'linux';
	    }
	    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
	        $platform = 'mac';
	    }
	    elseif (preg_match('/windows|win32/i', $u_agent)) {
	        $platform = 'windows';
	    }
	 
	    // Next get the name of the useragent yes seperately and for good reason
	    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
	    {
	        $bname = 'Internet Explorer';
	        $ub = "MSIE";
	    }
	    elseif(preg_match('/Firefox/i',$u_agent))
	    {
	        $bname = 'Mozilla Firefox';
	        $ub = "Firefox";	        
	    }
	    elseif(preg_match('/Chrome/i',$u_agent))
	    {
	        $bname = 'Google Chrome';
	        $ub = "Chrome";
	    }
	    elseif(preg_match('/Safari/i',$u_agent))
	    {
	        $bname = 'Apple Safari';
	        $ub = "Safari";
	    }
	    elseif(preg_match('/Opera/i',$u_agent))
	    {
	        $bname = 'Opera';
	        $ub = "Opera";
	    }
	    elseif(preg_match('/Netscape/i',$u_agent))
	    {
	        $bname = 'Netscape';
	        $ub = "Netscape";
	    }
	 
	    // finally get the correct version number
	    $pos=strpos($u_agent,$ub);
	    $m=$pos+strlen($ub)+1;
	    if ($ub=='MSIE')
	    	$l=strpos($u_agent,';',$m)-$m;
	    else
		    $l=strpos($u_agent,' ',$m)-$m;
		if ($l<=0) $l=10;
		$version=substr($u_agent,$m,$l);
?>
<table style="border: 1px solid #000000;width: 600px" align="center">
	<tr>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 17pt;text-align: center;width: 298px; color: #2214B9;border-style: solid;border-width: 1px;">
		<strong>Your Information</strong></td>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 17pt;text-align: center;color: #2214B9;border-style: solid;border-width: 1px; width: 298px;">
		<strong>Value</strong></td>
	</tr>
	<tr>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; width: 298px; color: #2214B9;border-style: solid;border-width: 1px;">
		IP Address</td>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; color: #2214B9;border-style: solid;border-width: 1px; width: 298px;">
		<?php echo $_SERVER['REMOTE_ADDR']?></td>
	</tr>
	<tr>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; width: 298px; color: #2214B9;border-style: solid;border-width: 1px;">
		Operating System</td>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; color: #2214B9;border-style: solid;border-width: 1px; width: 298px;">
		<?php echo $platform ?></td>
	</tr>
	<tr>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; width: 298px; color: #2214B9;border-style: solid;border-width: 1px;">
		Web Browser Name</td>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; color: #2214B9;border-style: solid;border-width: 1px; width: 298px;">
		<?php echo $bname?></td>
	</tr>
	<tr>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; width: 298px; color: #2214B9;border-style: solid;border-width: 1px;">
		Web Browser Version</td>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; color: #2214B9;border-style: solid;border-width: 1px; width: 298px;">
		<?php echo $version ?></td>
	</tr>
	<tr>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; width: 298px; color: #2214B9;border-style: solid;border-width: 1px;">
		Page Refered to this page</td>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; color: #2214B9;border-style: solid;border-width: 1px; width: 298px;">
		<?php if (isset( $_SERVER["HTTP_REFERER"])) echo $_SERVER["HTTP_REFERER"]; else echo '<i>None</i>'?></td>
	</tr>
</table>

<div style="text-align: center">
<?php
$dd=array(
	'Server Address'=>$_SERVER['SERVER_ADDR'],
	'Server Name'=>$_SERVER['SERVER_NAME'],
	'Server Software'=>$_SERVER['SERVER_SOFTWARE'],
	'Document Root'=>$_SERVER['DOCUMENT_ROOT'],
	'HTTP Host'=>$_SERVER['HTTP_HOST'],
	'Remote Address'=>$_SERVER['REMOTE_ADDR'],
	'Remote Port'=>$_SERVER['REMOTE_PORT'],
	'Script File Name'=>$_SERVER['SCRIPT_FILENAME'],
	'Server Admin'=>$_SERVER['SERVER_ADMIN'],
	'Server Port'=>$_SERVER['SERVER_PORT'],
	'Script Name'=>$_SERVER['SCRIPT_NAME'],
	'Request URI'=>$_SERVER['REQUEST_URI'],	
	'PHP Self'=>$_SERVER['PHP_SELF']
);
?>
<table style="border: 1px solid #000000;width: 600px" align="center">
	<tr>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 17pt;text-align: center;width: 298px; color: #2214B9;border-style: solid;border-width: 1px;">
		<strong>Name</strong></td>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 17pt;text-align: center;color: #2214B9;border-style: solid;border-width: 1px; width: 298px;">
		<strong>Value</strong></td>
	</tr>
<?php
foreach ($dd as $key=>$value){
?>
	<tr>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; width: 298px; color: #2214B9;border-style: solid;border-width: 1px;">
		<?php echo $key?> </td>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; color: #2214B9;border-style: solid;border-width: 1px; width: 298px;">
		<?php echo $value?></td>
	</tr>
<?php } ?>
</table>

<div style="text-align: center">

<hr width=100% size=3 color="gray">
<a name="I"><font color="pink"><center><h2>����� ������������ ������?</h2></center></font>
<font color="magenta"><h3>��������� �������������  ���������� ��������� �������, ����� �� ���������� ��� ������������, ��� ��������� � �� ��������� �� ������� �����, ��� ����� ������, ����������� ������ � ����. ���� �� ��������� �������� ������, ���������. ���� ������� � ������������ ��������� �������. ��������� �� ���� ������������ ���������� ��� �� ������������� ������� � ������� �� GPS ������� - �������� ���� �� � ����������� �� ������������� ����������. ���� ���� ��� ���� ��� ������� �����, �������������� � ������� � ��� ��-������ - ������ �� � ������ ��� � ������� ���������. ����, ����� ��������� ������, �, �� ���� ����� ����������.</h3></font>
<hr width=100% size=3 color="gray">
<a name="II"><font color="pink"><center><h2>�� ����� �� ��������?</h2></center></font>
<font color="magenta"><h3>���������� �� ���������� ����������� � ���������� ��� ��� ������ �� ������������ �� ������������� �������� �� ���������� �� �������� ����� �� �������. � ����������� �� �� ���������� ����� �� ������ �� ����������� �� ������������ ��������, �������, ������������.<br>
������������ ��� �� ������������ ����� ��������� ����� �� ������� �� �������� ���������� ��������� �������, ���� ����� �� ����� ��� �� �������� ����� ���� �� ������������ �� ����. ����������� ����� ����� ���� � �������� ��������� ����� ����������, ����� ���� ���� ����� ������ �� ����������� � � ����������� �� �������� �������� ������ �� ��������� ������. ���� ����� ������� ������� ����������� �� ��������� ������� ���� ��� ���� �� ����� �� �����������, ��������� �� ������������ �� ���� �� �� ������� ������ �� ����� ��������� ������.<br>
������ ����� � ��������� � �������������, ����� ����� �� �������� ���� �� �� ������. ������ �� ��������� �������� �� 170 ���� � ���� �� ��������� �� 700 ������. ������ �������� �� ����� �������.<br>
������������� ������� � ������� �� �������� � ������� �� �������.<br>
���������� ��������������� ������� � ����� ������ ���������� ��������� ������ ������� �� ���� �����.<br>
��� �������� ��� �������� �� ���������� �������, ����� ��������� ���������� � ��������� �� ����� ������ ��������.<br>
������� ������� �� ��������� ������.<br>
��� �������� ������� ������������, �� �� ������� � ��������� ��������� �� ����� ����. ���� ���������� �������� �� ���������� � ���� �� ���-������� ������ �� ������� � ������� �� ����� ���������.<br>
� ������ � ������� ���������� ������������ �������.<br>
� ��� � ������� �� ��������� ������ �� ��������� � ������.<br>
� ������ �� ����� ��� ��������� ������� �� ��������� �� ������ � ���������.<br>
������� ������ ������ �� ������ - �������, ������, ����, �������� �� ����.<br>
����������� ����������� �� ��������� ������ � �������� � �� �������. ��������� �� ��� ������ � � ��������� �� �����.<br>
��������� ������ ������ ������ �� ���� ����� ��� �� ������������. ���� ������ �� ����� �������, �� �� ��������� ����� ������ �� �����������, ������ "������ ���� �� �������", ������ ���������������.<br>
����� ������ � ������ �� ������� ��� ���� �����, ����� ������, �� �� �� ������� ��� ���������� � ����� ������� ��������. ���� ��� �� ������.<br>
���������� ������ Domino�s ������� ���� ��������� ��, ���� ����� ����� �� ����, �������� ���� - ��� �����. �� ����� �� �������, ��� ������ ������� ������ ���������� ���������� - ��������� ������. �� ������ �� ����� ����.<br>
������������ ������������� ���� ������ ������, �� ���������� �������� ���� �������� ���� ��. ��������� ����� �� �������� �������� ����������� �� ��������� - ���� ��������� �� ��������� �������, ��� �� �������� ���������� �� � ���� ���� ����� �� ��� �� ����� ��� ���������.</h3></font>
<hr width=100% size=3 color="gray">
<a name="III"><font color="pink"><center><h2>������ ������� � ������������ ��</h2></center></font>
<font color="magenta"><h3>�������� ������ ��:<br>
<center><font color="cyan">"������"</font></center>
<img src="Flyabiliy-Gimball-2.png" width="300" height="300">
��������� ���� �� ��-���� � ��-�������� �� �������. �� �������� �� �� ��������� �� ���������� � ����� ������������ ��� ����� ���� ��������. �� ���� � � "������", ����� � ������ �� ������ �����. ��� � ����������� �� Flyability, ���� �� ��������� - ���� ��������� �� ������ ����� ������ �� �� ��������� �� ��������, ������ �� ������� �� �����, ��� ����� �����������. "������" � � ����� ��� � �� �� �������� �� ����� ���� ��� ���������. ���� �� �� �������� � ������ ��� ������� ������.
������� � �����������, �� ������� �� �������� �� ������ ������ ������������ ����� �� ����������� ������� ��������. ���� �� ����� �� ������������ � �����, ������ ��������� 39 �����, �� "������" ���� �����������. �����, ����� �� � ������, �� �������� �� ���������� ������ �������� - ������ ������� �� ������� � ���������. ���� �� "������": <a href="http://www.flyability.com/product/" target="_blank">www.flyability.com</a><br><br>
<center><font color="cyan">"����"</font></center>
<img src="LILY.jpg" width="300" height="200">
���� �� ��� ������ �� ���� �� ��������� � ������� - ����� �� �������� ���� ������ ����? �� �� �� � ������ �� ��� ����� ���������� ���, �� �� �� �������� ��� ��� � �� �� ������ ������? ��� ������ ������� �� ���� ���� �����. "����" � ������ ���������� ������� ����������, ����� � ���������� �� ������ ����� ���� �������� ������������ �� GPS �����, ����� ������ �� ������� ��. �� ���� � ������������� � �� ������ �� ������� � ����� �������� �� ������� ��������, �� �� ��������� ������� �������. "����" ������ ����� 500 ������. ���� �� "����":
<a href="https://www.lily.camera" target="_blank">www.lily.camera</a><br><br>
<center><font color="cyan">"����"</font></center><br>
<img src="SOLO.jpg" width="600" height="200">
���� �� � ��� ���������� �������-������� �� ��������� �� ��������� � ���������� �� ����� ������. ���� � ����, �������� �� ���������� ������� � ����������������, ������������ �� ������ ������ ������������������ ������, ��������� � ������� ����� �������, ������� � �������� �� ���. �� ���� ���� - "������" � ������� �������, ����� �������� ����� ������� �� ����������� �� GoPro ����������� �� ����� �� ����� �����. ���� �� �������� �������������� �� �� ����������� ����� ���, ������ ������ �� ��������� �����������. ��� � ����� �� �����, ������� "����������", ����� ������� ��� ������ ������� �� ������ �� � ���� �� ����������, ���������� ���� � ����� ���������� ��. ��� ������ �� �� � ������ �� ������� �� ������ � �� �������, � �������� �� �� ����� ������ �������� ������, ���� � ������ ���� �� �� �������. ���� �� "����": <a href="https://3drobotics.com/solo-drone/" target="_blank">3drobotics.com/solo-drone</a><br><br></h3>
<hr width=100% size=3 color="gray">
<a name="IV"><font color="pink"><center><h2>���������</h2></center></font>
<font color="magenta"><h3>��������� �� ������ ������ ��� ����� ������ - �������� ������� ���������� ������ ����� ��� ������ �� ������ �������� � �� ������ �� �� ��������. ���� ����� � ������ ������� ������ � ����� ����� �� ��������� ����� �����. ��������� �� bTV ������� � ���� �������� �� �� 1,5 ���. ���� � ���� ����������. �� ���, ����, ���� ��� ����������� �� �������� � ����� ������ ����� ����������.
�� �� � �� ���� � ��� �� ����� � ���? ��������� �� �� ���� ������� ���������� �� ���������� � ��������� �����. ��� �� � � ����� �� ���������, ����� ������ ����� ������� ������. ��-�������� ���������� �������� �������� � ���� �� 1000 ������. �� ���� ������ �������, �� �� ��������� � �������� ��������� ����������, ����� ����� �� ������ ��������� �������.<br>
�������� �� ��� 30 000 ����� � ������ �� 2020 ������, ������ Washington Times.
������ ������������ ����� � ����������� �� ���������� ��������� ����, �� �� ��������� ��-���������� ��������� � �������. ��� �������������� ��������� �� �� ��������� � ���� �������, �� �� �� �������� �� ������ ������ � �� ��������, ����� "�������". ��� ����� "��� ������" ���� �� ��������� ��-�������������, ��� � � ������, ������ �� Slate.
����� ��, �� ������������ �� �� ������ ������������� � �� ��������� ������. � ��� �� �������������� ���� ������, �� � ��� �� ������ 70% ������ ������� � ���������������.
������ � ���-�������� ��������� �� ���������� ��������� ������� � �������� �� ���������. ���������� �������� Aerospace Industries � ������� ������� �� ������ �� ��� ������ ������ �� ����� ����.</h3></font>
<center><table border="0" width=50%>
<tr>
<td>
<h4><font color="black">������� ���� ����� ��� ������������������ �� �������� �� ����� ������</font></h4>
<a>
<a href="http://vbox7.com/play:e802377e83" target="_blank"><img src="images.jpeg" width="100" height="50">
</a>
</td>
<td>
<h4><font color="black">������� �� ������� � YouTube</font></h4>
<a>
<a href="https://www.youtube.com/results?search_query=drone" target="_blank"><img src="youtubebutton.jpeg" width="100" height="50">
</a>
</td>
<td>
<h4><font color="black">�������� �� ���-����������� ������� �� ������� 2015�.</font></h4>
<a>
<a href="http://myfirstdrone.com/tutorials/buying-guides/best-drones-for-sale/ "target="_blank"><img src="bw8.gif" widht="50">
</a>
</td>
<td>
<h4><font color="black">�-������� �� ������� � ��������</font></h4>
<a>
<a href="http://www.zigifly.com/magazin/kvadrokopteri-ufo-dron/"target="_blank"><img src="logo.png" width="100" height="50">
</a>
</td>
</tr>
</table></center>
<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
    $nameErr = "������ � ������������!";
   } else {
     $name = test_input($_POST["name"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "��������� �� ���� �����";
     }
   }
  
   if (empty($_POST["email"])) {
     $emailErr = "������ � ������������!";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "��������� email";
     }
   }
    
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "������ URL";
     }
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "������ � ������������!";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>������ ��������:</h2>
<p><span class="error"><font color="red">*�������� �� ������������.</font></span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   ���: <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Website: <input type="text" name="website" value="<?php echo $website;?>">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   ��������: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
   <br><br>
   ���:
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="�������">
</form>

<?php
echo "<h2>������ �����:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
<center><h2><a href="#begin">������</a></h2></center>
<center>� 2010-<?php echo date("Y");
?> ����� ����� ������ ����� ��������.</center>
</body>
</head>
</html>