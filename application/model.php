<?php
	class model
	{
		//ham fetch tra ve danh sach nhieu ban ghi trong table 
		public function fetch($sql)
		{
			//khai bao bien $db la bien toan cuc
			
			global $db;
			$result = mysqli_query($db,$sql);
			$arr = array();
			while($rows = mysqli_fetch_object($result))
			{
				$arr[] = $rows;
			}
			return $arr;
		}
		//ham fech_one co nhiem vu lay ra mot ban ghi
		public function fetch_one($sql)
		{
			global $db;
			$result = mysqli_query($db,$sql);
			$rows = mysqli_fetch_object($result);
			return $rows; 
		}
		//thuc thi cau truy van
		public function execute($sql)
		{
			global $db;
			echo $sql;
			if (mysqli_query($db,$sql) == true) 
				//lay id cua ban ghi vua insert
				return mysqli_insert_id($db);
			return 0;

		}
		//dem so luong ban ghi
		public function num_rows($sql)
		{
			global $db;
			$result = mysqli_query($db,$sql);
			//dem so luong ban ghi bang ham mysqli_num
			$number = mysqli_num_rows($result);
			return $number;
		}
	} 
 ?>