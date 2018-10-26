<?php
class controller_hocsinh extends controller{
	public function __construct()
	{
		parent::__construct();
			//------------
			//quy dinh so ban ghi tren 1 trang
		$record_perpage = 4;
			//tinh tong so ban ghi
		$total = $this->model->num_rows("SELECT * FROM tbl_student INNER JOIN tbl_class ON tbl_student.class_id=tbl_class.class_id");
			//tinh so trang
		$num_page = ceil($total/$record_perpage);
			//lay bien p tu url (day la bien xac dinh vi tri trang)
		$page = isset($_GET["p"])&&$_GET["p"] > 1 ?($_GET["p"]-1):0;
			//xac dinh so ban ghi can lay cho tung trang
		$from = $page * $record_perpage;
			//thuc hien lay ban ghi trong csdl co phan trang
		$arr = $this->model->fetch("SELECT * FROM tbl_student INNER JOIN tbl_class ON tbl_student.class_id=tbl_class.class_id INNER JOIN tbl_academicyear ON tbl_class.academicYear_id=tbl_academicyear.academicYear_id WHERE tbl_class.school_id='120'");
		$arr2 = $this->model->fetch("select * from tbl_class where school_id = '120'");
		
			//---load view
		
		include "view/backend/view_hocsinh.php";
	}
} 
new controller_hocsinh();

?>