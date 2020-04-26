<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->

	<link rel="stylesheet" href="assets/css/datatables.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>



	<div class="container mt-5 bg-light p-5 shadow">
		<button id="add-student-btn" class="btn btn-sm btn-success">Add Student</button>
		<div id="add-student-modal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h2>Add New Student</h2>
					</div>
					<div class="modal-body">
						<div class="notification">

						</div>
						<form id="add-student-form" action="" method="POST">
							<div class="form-group">
								<label for="">Student Name</label>
								<input name="sname" class="form-control" type="text">
							</div>

							<div class="form-group">
								<label for="">Student Roll</label>
								<input name="sroll" class="form-control" type="text">
							</div>
							<div class="form-group">
								<label for="">Student Age</label>
								<input name="sage" class="form-control" type="text">
							</div>

							<div class="form-group">
								<label for="">Student Cell</label>
								<input name="scell" class="form-control" type="text">
							</div>
							<div class="form-group">
								<label for=""></label>
								<input class="btn btn-sm btn-success" type="submit" value="Add New Student">
							</div>
						</form>
					</div>
					<div class="modal-footer"></div>
				</div>
			</div>
		</div>


		<hr>
		<h3>All Students Data</h3>
		<table id="student-table" class="table">
			<thead>
				<tr>
					<th>Student Name</th>
					<th>Student Roll</th>
					<th>Age</th>
					<th>Cell</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Ayesha</td>
					<td>123456</td>
					<td>23</td>
					<td>01913212321</td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>








	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/datatables.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>



	<script type="text/javascript">
		(function($) {

			$(document).ready(function() {
				//add student modal showing
				$('button#add-student-btn').click(function() {

					$('#add-student-modal').modal('show');
				});
				//make yajra table
				$('table#student-table').DataTable();



				$('form#add-student-form').submit(function(e) {
					e.preventDefault();

					let name = $('input[name="sname"]').val();

					let roll = $('input[roll="sroll"]').val();
					let age = $('input[age="age"]').val();
					let cell = $('input[cell="cell"]').val();


					if (name == '' || roll == '' || age == '' || cell == '') {
						$('.notification').html('<p class="alert alert-danger">All fields are required!<button class="close" data-dismiss="alert">&times;</button</p>');
					} else {
						$('.notification').html('<p class="alert alert-success"> New Student Added <button class="close" data-dismiss="alert">&times;</button</p>');
					}



				});


			});
		})(jQuery)
	</script>
</body>

</html>