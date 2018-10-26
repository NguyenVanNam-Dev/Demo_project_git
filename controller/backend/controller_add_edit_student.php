<?php
class controller_add_edit_student extends controller{
	public function __construct()
	{
		parent::__construct();
			//-----------------

		
		$act = isset($_GET["act"]) ? $_GET["act"] : "";
		switch ($act) 
		{
			case 'edit':
			$stu_id = isset($_GET["stu_id"])? $_GET["stu_id"] : 0;
			$form_action = "admin.php?controller=add_edit_student&act=do_edit&stu_id=$stu_id";
			//lay ban ghi co id truyen vao 
			$arr = $this->model->fetch_one("SELECT * FROM tbl_student WHERE stu_id = '$stu_id' ");
			$arr2 = $this->model->fetch("select * from tbl_class");
			
			break;

			case 'do_edit':
			$stu_id = isset($_GET["stu_id"])? $_GET["stu_id"] : 0;

			$stu_birthday = $_POST["stu_birthday"];

			$stu_birthplace = $_POST["stu_birthplace"];
			$stu_address = $_POST["stu_address"];
			$stu_fathername = $_POST["stu_fathername"];
			$stu_fatherphone = $_POST["stu_fatherphone"];
			$stu_mothername = $_POST["stu_mothername"];
			$stu_motherphone = $_POST["stu_motherphone"];

			$class_name = $_POST["class_name"];
			$class_id = id_class($class_name);

					//update ban ghi co id truyen vao
			$this->model->execute("UPDATE tbl_student SET stu_birthday = '$stu_birthday',stu_birthplace='$stu_birthplace',stu_address='$stu_address',stu_fathername = '$stu_fathername',stu_fatherphone = '$stu_fatherphone', stu_mothername  = 'stu_mothername',stu_motherphone = '$stu_motherphone',class_id = '$class_id'
				WHERE tbl_student.stu_id = '$stu_id'");
			header("location:admin.php?controller=hocsinh");	
			break;

			case 'add':
			$form_action="admin.php?controller=add_edit_student&act=do_add";
			/*danh sách các khóa của trường tiểu học Ba Đình*/
			$arr2 = $this->model->fetch("select * from tbl_academicyear where school_id='120'");
			break;

			case 'do_add':
			$class_id = $_POST["class_name"];
			$stu_code = $_POST["stu_code"];
			$stu_name = $_POST["stu_name"];
			$stu_gender = $_POST["stu_gender"];
			$stu_birthday = $_POST["stu_birthday"];
			$stu_birthplace = $_POST["stu_birthplace"];
			$stu_address = $_POST["stu_address"];
			$stu_fathername = $_POST["stu_fathername"];
			$stu_fatherphone =  $_POST["stu_fatherphone"];
			$stu_mothername = $_POST["stu_mothername"];
			$stu_motherphone = $_POST["stu_motherphone"];
			$stu_createdate =  $_POST["stu_createdate"];
			//insert ban ghi
			// insert tbl_user
			echo "x:$class_id";
			$sql = " insert into tbl_student(stu_code ,stu_name ,stu_gender ,stu_birthday ,stu_birthplace ,stu_address ,class_id ,stu_fathername ,stu_fatherphone ,stu_mothername ,stu_motherphone ,stu_createdate ) values (	'$stu_code', '$stu_name', '$stu_gender', '$stu_birthday',	'$stu_birthplace', '$stu_address','$class_id', '$stu_fathername', '$stu_fatherphone', '$stu_mothername', '$stu_motherphone', '$stu_createdate' )";
			
			$this->model->execute($sql);
			//insert
			

			
			// header("location:admin.php?controller=hocsinh");
			break;



		}
			//-----------------
			//load view
		include "view/backend/view_add_edit_student.php";
	}
}
new controller_add_edit_student();
?>