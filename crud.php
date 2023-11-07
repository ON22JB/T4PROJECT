<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="crudstyle.css">
</head>
<body>
<div class="container">
	<h2 class="text-center">Table of conversions</h2>
	<div id="crud">
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
				<div class="col-md-12">
					<h2>Unit List
					<button class="btn btn-primary pull-right" @click="showAddModal = true"><span class="glyphicon glyphicon-plus"></span> Unit</button>
					</h2>
				</div>
			</div>

			<div class="alert alert-danger text-center" v-if="errorMessage">
				<button type="button" class="close" @click="clearMessage();"><span aria-hidden="true">&times;</span></button>
				<span class="glyphicon glyphicon-alert"></span> {{ errorMessage }}
			</div>
			
			<div class="alert alert-success text-center" v-if="successMessage">
				<button type="button" class="close" @click="clearMessage();"><span aria-hidden="true">&times;</span></button>
				<span class="glyphicon glyphicon-ok"></span> {{ successMessage }}
			</div>

			<table class="table table-bordered table-striped">
				<thead>
					<th>px</th>
					<th>pt</th>
					<th>em</th>
					<th>in</th>
					<th>cm</th>
					<th>mm</th>
					<th>Action</th>
				</thead>
				<tbody>
					<tr v-for="unit in crud">
						<td>{{ unit.px }}</td>
						<td>{{ unit.pt }}</td>
						<td>{{ unit.em }}</td>
						<td>{{ unit.inch }}</td>
						<td>{{ unit.cm }}</td>
						<td>{{ unit.mm }}</td>
						<td>
							<button class="btn btn-success" @click="showEditModal = true; selectUnit(unit);"><span class="glyphicon glyphicon-edit"></span> Edit</button> <button class="btn btn-danger" @click="showDeleteModal = true; selectUnit(unit);"><span class="glyphicon glyphicon-trash"></span> Delete</button>

						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<?php include('modal.php'); ?>
	</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="crudapp.js"></script>
</body>
</html>
