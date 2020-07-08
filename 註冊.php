<?php

	$type = $_POST['type'];
	$name = $_POST['name'];
	$account = $_POST['account'];
	$password = $_POST['password'];
	$ID_card = $_POST['ID_card'];
	$database = "dish";
	$connect =	mysqli_connect("localhost","root","12345678","dish"); 
	mysqli_query($connect,"SET NAMES 'utf8'");
	if($type == "廚師")		
	{
		if(substr($account, 0,1)=="B")
		{
			$inser_sql = "INSERT INTO `後台` (`type`, `name`, `account`, `password`, `ID_card`) VALUES ('".$type."', '".$name."', '".$account."', '".$password."', '".$ID_card."')";
			if($result = mysqli_query($connect, $inser_sql))
			{
				echo "<script>alert('已將資料放入後台，請等待資料確認後才能使用');history.back(-1)</script>";
			}	
			else
			{
				echo "<script>alert('廚師資料已經存在');history.back(-1)</script>";
			}
		}
		else
		{
			echo "<script>alert('廚師帳號第一個字為B');history.back(-1)</script>";
		}
	}
	if($type == "管理者")
	{
		if(substr($account, 0,1)=="A")
		{
			$inser_sql = "INSERT INTO `後台` (`type`, `name`, `account`, `password`, `ID_card`) VALUES ('".$type."', '".$name."', '".$account."', '".$password."', '".$ID_card."')";
			if($result = mysqli_query($connect, $inser_sql))
			{
				echo "<script>alert('已將資料放入後台，請等待資料確認後才能使用');history.back(-1)</script>";
			}
			else
			{
				echo "<script>alert('管理者資料已經存在');history.back(-1)</script>";
			}
		}
	
		else
		{
			echo "<script>alert('管理者帳號第一個字為A');history.back(-1)</script>";
		}
	}
	if($type == "客戶")
	{
		if(substr($account, 0,1)=="C")
		{
			$inser_sql = "INSERT INTO `客戶資料` (`name`, `account`, `password`, `ID_card`) VALUES ('".$name."', '".$account."', '".$password."', '".$ID_card."')";
			if($result = mysqli_query($connect, $inser_sql))
			{
				echo "<script>alert('註冊帳號成功');history.back(-1)</script>";
			}
			else
			{
				echo "<script>alert('客戶資料已經存在');history.back(-1)</script>";
			}
		}
		else
		{
			echo "<script>alert('客戶帳號第一個字為C');history.back(-1)</script>";
		}
	}
	
?>