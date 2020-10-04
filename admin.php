<script type="text/javascript" src="public/backend/js/custom.js"></script>
<?php 
	//file admin.php su dung de thao tac o phan backend
	//start session
	session_start();
	//load file config
	include "config.php";
	//load file model
	include "application/model.php";
	//load file controller
	include "application/controller.php";
	//kiem tra, neu user da dang nhap thi hien thi view layout, neu user chua dang nhap thi hien thi MVC login de yeu cau dang nhap
	if (isset($_SESSION["acc_username"]) == false) 
	{
		//hien thi MVC login
		include "controller/backend/controller_login.php";
	}else
	{
		//------------
		//xac dinh controller truyen tu url de load trang
		$controller = isset($_GET["controller"])&&$_GET["controller"]!=""?"controller_".$_GET["controller"].".php":"controller_home.php";
		//------------

		include "view/backend/view_layout_CanBo.php";
	}

 ?>
<ul>
    <li>maria ozawa</li>
    <li>fukuxiaD</li>
    <li>anukami</li>
</ul>

