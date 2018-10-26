

<?php

if ($act == 'edit') {

	?>
	<div class="col-md-6 col-md-offset-1">
		<div class="panel panel-primary">
			<div class="panel-heading">edit</div>
			<div class="panel-body">
				<form method="post" action="<?php echo $form_action?>">
					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">Fullname</div>
							<div class="col-md-10">
								<input type="text" name="stu_name" class="form-control" <?php echo isset($arr->stu_name)?"disabled":"required"; ?>  value="<?php echo isset($arr->stu_name)?$arr->stu_name:""; ?>">
							</div>
						</div>
					</div>
					<!-- end row -->

					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">birthday</div>
							<div class="col-md-10">
								<input type="text" name="stu_birthday" value="<?php echo isset($arr->stu_birthday)?$arr->stu_birthday:""; ?>" class="form-control" >
							</div>
						</div>
					</div>
					<!-- end row -->


					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">birthplace</div>
							<div class="col-md-10">
								<input type="text" name="stu_birthplace" value="<?php echo isset($arr->stu_birthplace)?$arr->stu_birthplace:""; ?>" class="form-control" >
							</div>
						</div>
					</div>
					<!-- end row -->

					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">address</div>
							<div class="col-md-10">
								<input type="text" name="stu_address" value="<?php echo isset($arr->stu_address)?$arr->stu_address:""; ?>" class="form-control" >
							</div>
						</div>
					</div>
					<!-- end row -->
					<!-- row --------------------------------------------------------------------------->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">Class</div>
							<div class="col-md-10">
								<select name="class_name">
									<?php foreach ($arr2 as $rows) {
										?>
										<option value="<?php echo $rows->class_name; ?>"> <?php echo $rows->class_name ?> </option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">fathername</div>
							<div class="col-md-10">
								<input type="text" name="stu_fathername" value="<?php echo isset($arr->stu_fathername)?$arr->stu_fathername:""; ?>" class="form-control" >
							</div>
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">fatherphone</div>
							<div class="col-md-10">
								<input type="text" name="stu_fatherphone" value="<?php echo isset($arr->stu_fatherphone)?$arr->stu_fatherphone:""; ?>" class="form-control" >
							</div>
						</div>
					</div>
					<!-- end row -->
					<!-- row -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2">mothername</div>
							<div class="col-md-10">
								<input type="text" name="stu_mothername" value="<?php echo isset($arr->stu_mothername)?$arr->stu_mothername:""; ?>" class="form-control" >
							</div>
						</div>
					</div>
					<!-- end row -->

					<div class="form-group">
						<div class="row">
							<div class="col-md-2">motherphone</div>
							<div class="col-md-10">
								<input type="text" name="stu_motherphone" value="<?php echo isset($arr->stu_motherphone)?$arr->stu_motherphone:""; ?>" class="form-control" >
							</div>
						</div>
					</div>
							<!-- end ro

								<!-- row -->
								<div class="form-group">
									<div class="row">
										<div class="col-md-2"></div>
										<div class="col-md-10">
											<input type="submit" name="" value="Add" class="btn btn-primary">
											<input type="reset" name="" value="reset" class="btn btn-danger">
										</div>
									</div>
								</div>
								<!-- end row -->
							</form>
						</div>
					</div>
				</div>

		<!--
			////=====================================
			////ADD
			////=====================================
		-->

	<?php }else if ($act =='add') {
		?>

		<style type="text/css">
		#add_record{
			text-decoration: none;
		}
		#add_record:hover{
			cursor: pointer;
		}

		.add_student{
			width: 1000px;
			height: 400px;
			overflow: auto!important;

		}
		input[type='text']{
			width: 100px;
			margin: -7px;
			border: none;
			
		}
		.add_student>table>thead>tr>th{
			font-size: 12px!important;
		}
		.add_student input[type='date']{
			border: none;
			
		}
	</style>

	<script type="text/javascript">
		$(document).ready(function(){

			$("#add_record").click(function(){
						// alert("xin chào
						let html = "";
						html += '<tr>';

						html += '<td><input type="text" required="" class="form-control" placeholder="" name="stu_code"></td>';
						html += '<td><input type="text" required="" class="form-control" placeholder="" name="stu_name"></td>';
						html += '<td><select name="stu_gender">';
						html += '<option value="Nam">Nam</option>';
						html += '<option value="Nu">Nu</option>';
						html += '</select></td>';
						html += '<td><input type="date" name="stu_birthday" ></td>';
						html += '<td><input type="text" required="" class="form-control" placeholder="birthplace" name="stu_birthplace"></td>';
						
						html +=' <td><input type="text" required="" class="form-control" placeholder="address" name="stu_address"></td>';
						html +=' <td><input type="text" required="" class="form-control" placeholder="fathername" name="stu_fathername"></td>';
						html +=' <td><input type="text" required="" class="form-control" placeholder="fatherphone" name="stu_fatherphone"></td>';
						html +=' <td><input type="text" required="" class="form-control" placeholder="mothername" name="stu_mothername"></td>';
						html +=' <td><input type="text" required="" class="form-control" placeholder="motherphone" name="stu_motherphone"></td>';
						html +=' <td><input type="date" name="stu_createdate"></td>'



						html += '</tr>';



						$(html).insertAfter("#row_add");
					});
		});

	</script>
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">Add student</div>
			<div class="panel-body">
				<form method="post" action="<?php echo $form_action?>">
					<style type="text/css">

				</style>
				<div class="col-md-12" style="height: 100px;border: solid 1px #00000045;padding-top: 33px;    margin-bottom: 10px;">
					<div class="row">
						<div class="col-md-3">
							
							<label style="float: left;margin-right: 10px;">Khóa:</label>
							<select class="form-control" style="width: 169px;" id="academic" onchange="send_data()">
								<option></option>
								<?php foreach ($arr2 as $rows) {

									?>
									<option value="<?php echo $rows->academicYear_id; ?>"> <?php echo $rows->academicYear_name ?> </option>
								<?php } ?>
							</select>
						</div>
						<div class="col-md-3">
							<label style="float: left;margin-right: 10px;">lớp:</label>
							<select class="form-control" style="width: 169px;" id="class_name" onchange="send_id_class()" name="class_name">


							</select>
						</div>
					</div>
				</div>
				<div class="add_student" style="border: 1px solid #0000002e">
					<table class="table table-bordered table-hover">
						<thead style="background-color: blue;color: white">
							<tr>
								<th>Code</th>
								<th>Name</th>
								<th>Gender</th>
								<th>Birthday</th>							
								<th>Birthplace</th>
								<th>Address</th>
								<th>Fathername</th>
								<th>Fatherphone</th>
								<th>Mothername</th>
								<th>Motherphone</th>
								<th>Createdate</th>						
							</tr>
						</thead>
						<tbody>
							<tr id="row_add">
								<td><input type="text" required class="form-control" placeholder="" name="stu_code" ></td>
								<td><input type="text" required class="form-control" placeholder="" name="stu_name" ></td>
								<td>
									<select name="stu_gender">
										<option value="Nam" style="font-size: 12px">Nam</option>
										<option value="Nu" style="font-size: 12px">Nu</option>
									</select>
								</td>
								<td><input type="date" name="stu_birthday" ></td>
								<td><input type="text" required class="form-control" placeholder="birthplace" name="stu_birthplace"></td>
								<td><input type="text" required class="form-control" placeholder="address" name="stu_address"></td>
								<td><input type="text" required class="form-control" placeholder="fathername" name="stu_fathername"></td>
								<td><input type="text" required class="form-control" placeholder="fatherphone" name="stu_fatherphone"></td>
								<td><input type="text" required class="form-control" placeholder="mothername" name="stu_mothername"></td>
								<td><input type="text" required class="form-control" placeholder="motherphone" name="stu_motherphone"></td>
								<td><input type="date" name="stu_createdate"></td>
							</tr>
							
						</tbody>
					</table>
				</div>

				<!-- row -->
				<div class="form-group">
					<div class="col-md-10">
						<a class="glyphicon glyphicon-plus" id="add_record" style=""></a>
					</div>
					<div class="row">
						<div class="col-md-10">
							
						</div>
						<div class="col-md-2">
							<input type="submit" name="" value="Add" class="btn btn-primary" >
							<input type="reset" name="" value="reset" class="btn btn-danger">
						</div>
					</div>

				</div>
				<!-- end row -->
			</form>

		</div>
	</div>
</div>
<?php }else if ($act == 'delete') {
	# code...

	?>

	<!-- Modal -->
	<div class="" id="myModalx">
		<div class="modal-dialog">
			<div class="col-md-8 col-md-offset-1">
				<div class="panel-primary" style="background-color: pink;">
					<div class="panel-heading">Xác nhận xóa</div>
					<div class="panel-body">
						<div style="height: 80px;text-align: center;line-height: 80px;">
							<p class="active">Bạn có chắc chắn muốn xóa tài khoản này</p>
						</div>
						<div class="row" >
							<div class="col-md-2 " style="margin-right: 5px;">
								<a href="" class="btn btn-danger">Close</a>
							</div>
							<div class="col-md-2 ">
								<form method="post" action="<?php echo $form_action ?>">
									<input type="submit" name="" class="btn btn-primary" value="delete">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>      
		</div>
	</div>
<?php } ?>
