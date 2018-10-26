
<?php

include_once "../config.php";
include_once "../application/model.php";
include_once "../application/controller.php";
header('Content-Type: application/json');

class data extends controller
{
	function __construct()
	{
		parent::__construct();
		if (isset($_POST["academicyear_id"])) 
		{
			
			$string = '';
			$academicyear = $_POST["academicyear_id"];
			$arr_class = $this->model->fetch("select * from tbl_class where academicYear_id = $academicyear");
			foreach ($arr_class as $rows) 
			{
				$giatri = $rows->class_name;
				$string = $string."<option value='$rows->class_id'>$giatri</option>";
			}

		}
		echo json_encode($string);
	}
}
new data();
?>