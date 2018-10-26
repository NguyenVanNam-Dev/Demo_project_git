<div class="panel panel-primary" style="position: relative;">
	<div class="panel panel-heading">Trường tiểu học Ba Đình </div>
	<div class="panel panel-body">
		<!-- action -->
		<div class="action" >
			<div class="search-class" style="float: left;">
				<select style="width: 238px;height: 25px;margin-right: 50px;margin-left: 10px;">
					<?php foreach ($arr2 as $rows) {
						?>
						<option><?php echo $rows->class_name ?></option>
					<?php } ?>
				</select>
			</div>	
			<p id="delete">
				<button type="button" class="btn btn-default btn-sm">
					<span class="glyphicon glyphicon-trash" style="color: red"></span> Xóa 
				</button>
			</p>
			<p id="insert">
				<a href="admin.php?controller=add_edit_student&act=add" class="btn btn-default btn-sm">
					<span class="glyphicon glyphicon-plus" style="color: blue"></span>Thêm
				</a>
			</p>  
			<p id="save">
				<button type="button" class="btn btn-default btn-sm">
					<span class="glyphicon glyphicon-floppy-save"></span> Lưu
				</button>
			</p>
		</div>
		<!-- end action -->
		<style type="text/css">
		.body-table{
			width: 1000px;
			height: 400px;

			overflow: auto!important;
		}
	</style>
	<div class="student">
		<div class="body-table">
			<table id="example" class="table table-bordered table-hover" style="background-color: #42c0fb0f;">
				<thead style="background-color: #000bffc2;color: white">
					<tr>
						<th><input type="checkbox" name=""></th>
						<th>STT</th>
						<th>Code</th>
						<th>Name</th>
						<th>Gender</th>
						<th>Birthday</th>
						<th>class</th>
						<th>AcademicYear</th>
						<th>Birthplace</th>
						<th>Address</th>
						<th>Fathername</th>
						<th>Fatherphone</th>
						<th>Mothername</th>
						<th>Motherphone</th>
						<th>Createdate</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($arr as $rows){?>
						<tr>
							<td><input type="checkbox" name="" disabled></td>
							<td style="text-align: center;"><?php echo $rows->stu_id ?></td>
							<td><?php echo $rows->stu_code ?></td>
							<td><?php echo $rows->stu_name ?></td>
							<td><?php echo $rows->stu_gender ?></td>
							<td><?php echo $rows->stu_birthday ?></td>
							<td><?php echo $rows->class_name?></td>
							<td><?php echo $rows->academicYear_name?></td>
							<td><?php echo $rows->stu_birthplace?></td>
							<td><?php echo $rows->stu_address?></td>
							<td><?php echo $rows->stu_fathername?></td>
							<td><?php echo $rows->stu_fatherphone?></td>
							<td><?php echo $rows->stu_mothername?></td>
							<td><?php echo $rows->stu_motherphone?></td>
							<td><?php echo $rows->stu_createdate?></td>



							<td><a href="admin.php?controller=add_edit_student&stu_id=<?php echo $rows->stu_id ?>">
								<span class="glyphicon glyphicon-remove" ></span>xóa</a>&nbsp;<br>
								<a href="admin.php?controller=add_edit_student&act=edit&stu_id=<?php echo $rows->stu_id ?>"><span class="glyphicon glyphicon-pencil"></span>sửa</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

</div>


