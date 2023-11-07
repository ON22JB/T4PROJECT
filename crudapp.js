var app = new Vue({
	el: '#crud',
	data:{
		showAddModal: false,
		showEditModal: false,
		showDeleteModal: false,
		errorMessage: "",
		successMessage: "",
		crud: [],
		newUnit: {px: '', pt: '', em:'', inch:'', cm:'', mm:''},
		clickUnit: {}
	},

	mounted: function(){
		this.getAllcrud();
	},

	methods:{
		getAllcrud: function(){
			axios.get('api.php')
				.then(function(response){
					//console.log(response);
					if(response.data.error){
						app.errorMessage = response.data.message;
					}
					else{
						app.crud = response.data.crud;
					}
				});
		},

		saveUnit: function(){
			//console.log(app.newUnit);
			var memForm = app.toFormData(app.newUnit);
			axios.post('api.php?vueuser=create', memForm)
				.then(function(response){
					//console.log(response);
					app.newUnit = {px: '', pt:'', em:'', inch:'', cm:'', mm:''};
					if(response.data.error){
						app.errorMessage = response.data.message;
					}
					else{
						app.successMessage = response.data.message
						app.getAllcrud();
					}
				});
		},

		updateUnit(){
			var memForm = app.toFormData(app.clickUnit);
			axios.post('api.php?vueuser=update', memForm)
				.then(function(response){
					//console.log(response);
					app.clickUnit = {};
					if(response.data.error){
						app.errorMessage = response.data.message;
					}
					else{
						app.successMessage = response.data.message
						app.getAllcrud();
					}
				});
		},

		deleteUnit(){
			var memForm = app.toFormData(app.clickUnit);
			axios.post('api.php?vueuser=delete', memForm)
				.then(function(response){
					//console.log(response);
					app.clickUnit = {};
					if(response.data.error){
						app.errorMessage = response.data.message;
					}
					else{
						app.successMessage = response.data.message
						app.getAllcrud();
					}
				});
		},

		selectUnit(unit){
			app.clickUnit = unit;
		},

		toFormData: function(obj){
			var form_data = new FormData();
			for(var key in obj){
				form_data.append(key, obj[key]);
			}
			return form_data;
		},

		clearMessage: function(){
			app.errorMessage = '';
			app.successMessage = '';
		}

	}
});