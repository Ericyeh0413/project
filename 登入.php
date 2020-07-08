<?php

	$type = $_POST['type'];
	$account = $_POST['account'];
	$password = $_POST['password'];
	
	$database = "dish";
	$connect =	mysqli_connect("localhost","root","12345678","dish"); 
	mysqli_query($connect,"SET NAMES 'utf8'");
	if($type == "廚師")
	{
		$query = "SELECT `account`, `password` FROM `廚師資料` WHERE `account` = '".$account."' AND `password`='".$password."'";
		if($result = mysqli_query($connect, $query))
		{
			echo "<script>alert('登入成功');history.back(-1)</script>";
		}
		else
		{
			echo "<script>alert('登入失敗，尚未有此廚師帳號');history.back(-1)</script>";
		}
	}
	if($type == "管理者")
	{
		$query = "SELECT `account`, `password` FROM `管理者資料` WHERE `account` = '".$account."' AND `password`='".$password."'";
		if($result = mysqli_query($connect, $query))
		{
			echo "<script>alert('登入成功');history.back(-1)</script>";
		}
		else
		{
			echo "<script>alert('登入失敗，尚未有此管理者帳號');history.back(-1)</script>";
		}
	}
	if($type == "客戶")
	{
		$query = "SELECT `account`, `password` FROM `客戶資料` WHERE `account` = '".$account."' AND `password`='".$password."'";
		if($result = mysqli_query($connect, $query))
		{
			echo "<script>alert('登入成功');history.back(-1)</script>";
		}
		else
		{
			echo "<script>alert('登入失敗，尚未有此客戶帳號');history.back(-1)</script>";
		}
	}

	
?>