<!--ADD-->
<div class="myModal" v-if="showAddModal">
	<div class="modalContainer">
		<div class="modalHeader">
			<span class="headerTitle">Add New Unit</span>
			<button class="closeBtn pull-right" @click="showAddModal = false">&times;</button>
		</div>
		<div class="modalBody">
			<div class="form-group">
				<label>px:</label>
				<input type="text" class="form-control" v-model="newUnit.px">
			</div>
			<div class="form-group">
				<label>pt:</label>
				<input type="text" class="form-control" v-model="newUnit.pt">
			</div>
			<div class="form-group">
				<label>em:</label>
				<input type="text" class="form-control" v-model="newUnit.em">
			</div>
			<div class="form-group">
				<label>in:</label>
				<input type="text" class="form-control" v-model="newUnit.inch">
			</div>
			<div class="form-group">
				<label>cm:</label>
				<input type="text" class="form-control" v-model="newUnit.cm">
			</div>
			<div class="form-group">
				<label>mm:</label>
				<input type="text" class="form-control" v-model="newUnit.mm">
			</div>
		</div> <br>
		<div class="modalFooter">
			<div class="footerBtn pull-right">
				<button class="btn btn-default" @click="showAddModal = false"><span class="glyphicon glyphicon-remove"></span> Cancel</button> <button class="btn btn-primary" @click="showAddModal = false; saveUnit();"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</div>
		</div>
	</div>
</div>

<!--EDIT-->
<div class="myModal" v-if="showEditModal">
	<div class="modalContainer">
		<div class="editHeader">
			<span class="headerTitle">Edit Unit</span>
			<button class="closeEditBtn pull-right" @click="showEditModal = false">&times;</button>
		</div>
		<div class="modalBody">
			<div class="form-group">
				<label>px:</label>
				<input type="text" class="form-control" v-model="clickUnit.px">
			</div>
			<div class="form-group">
				<label>pt:</label>
				<input type="text" class="form-control" v-model="clickUnit.pt">
			</div>
			<div class="form-group">
				<label>em:</label>
				<input type="text" class="form-control" v-model="clickUnit.em">
			</div>
			<div class="form-group">
				<label>in:</label>
				<input type="text" class="form-control" v-model="clickUnit.inch">
			</div>
			<div class="form-group">
				<label>cm:</label>
				<input type="text" class="form-control" v-model="clickUnit.cm">
			</div>
			<div class="form-group">
				<label>mm:</label>
				<input type="text" class="form-control" v-model="clickUnit.mm">
			</div>
		</div>
		<br>
		<div class="modalFooter">
			<div class="footerBtn pull-right">
				<button class="btn btn-default" @click="showEditModal = false"><span class="glyphicon glyphicon-remove"></span> Cancel</button> <button class="btn btn-success" @click="showEditModal = false; updateUnit();"><span class="glyphicon glyphicon-check"></span> Save</button>
			</div>
		</div>
	</div>
</div>

<!--DELETE-->
<div class="myModal" v-if="showDeleteModal">
	<div class="modalContainer">
		<div class="deleteHeader">
			<span class="headerTitle">Delete Unit</span>
			<button class="closeDelBtn pull-right" @click="showDeleteModal = false">&times;</button>
		</div>
		<div class="modalBody">
			<h5 class="text-center">Are you sure you want to Delete</h5>
			<h2 class="text-center">{{clickUnit.px}} px <br>{{clickUnit.pt}} pt<br>{{clickUnit.em}} em <br>{{clickUnit.inch}} inch <br>{{clickUnit.cm}} cm <br>{{clickUnit.mm}} mm</h2>
		</div>
		<br>
		<div class="modalFooter">
			<div class="footerBtn pull-right">
				<button class="btn btn-default" @click="showDeleteModal = false"><span class="glyphicon glyphicon-remove"></span> Cancel</button> <button class="btn btn-danger" @click="showDeleteModal = false; deleteUnit(); "><span class="glyphicon glyphicon-trash"></span> Yes</button>
			</div>
		</div>
	</div>
</div>