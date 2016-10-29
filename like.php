<?php
	include('connect.php');
	$no=$_POST['no'];
	$x=$_POST['x'];
	//$no=1;
	if($x==0)
	{
		$query1=mysqli_query($con,"select * from `like`.`count` where `article_no`='$no';");
		$res=mysqli_fetch_assoc($query1);
		$ans=$res['views'];
		echo $ans;
	}
	else{
		$query1=mysqli_query($con,"select * from `like`.`count` where `article_no`='$no';");
		$res=mysqli_fetch_assoc($query1);
		$ans=$res['views'];
		$views=$ans+1;
		$query=$mysqli_query($con,"UPDATE `like`.`count` SET `views` = '$views' WHERE `count`.`article_no` = '$no';");
		echo $no;
	}
	
?>