<?php
		include("connect.php");
		if(isset($_POST['b1']) && !empty($_POST['27']) )
		{
			$r = $_POST['27']."  ".$_POST['q27'];
			echo $r;
			$q = mysqli_query($con, "insert into about_teacher set
							  question = '".$r."' ");
			
			$num = mysqli_insert_id($con);
			if($num > 0)
			{
				echo "Success"; 
			}
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="?" name="r">
	<label>
      <input type="radio" name="27" value="Excellent" id="27_100" required/>
      Excellent</label>
      <label>
        <input type="radio" name="27" value="Very Good" id="27_101">
        Very Good</label>
      <label>
        <input type="radio" name="27" value="Good" id="27_102">
        Good</label>
      <label>
			<label>
        <input type="radio" name="27" value="Average" id="27_103">
        Average</label> 
        <label>
        <input type="radio" name="27" value="Unsatisfactory" id="27_104">
        Unsatisfactory</label>
		<br />
        <label>
      <input type="radio" name="q27" value="Excellent" id="q27_95" required/>
      Excellent</label>
      <label>
        <input type="radio" name="q27" value="Very Good" id="q27_96">
        Very Good</label>
      <label>
        <input type="radio" name="q27" value="Good" id="q27_97">
        Good</label>
      <label>
        <input type="radio" name="q27" value="Average" id="q27_98">
        Average</label>
      <label>
        <input type="radio" name="q27" value="Unsatisfactory" id="q27_99">
        Unsatisfactory</label>
        <br />
        <input type="submit" name="b1" id="b1" value="Save" />
</form>
</body>
</html>