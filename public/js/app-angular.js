var app = angular.module('admin',[]);

app.controller('Admintrl',function($scope,$http){
	$scope.name = "Helllo angualr";
	function get_prs(){
		$http.get('http://localhost:8888/hoplongtech-master/api/product').then(function(res){
			$scope.prs = res.data;
		});
	}
	get_prs();
	$scope.del_pro = function(pro_id){
		$http.get('http://localhost:8888/hoplongtech-master/admin/product-del/'+pro_id).then(function(res){
			get_prs();
			toastr.error('DElete ok!', 'ok', {timeOut: 5000});
		});
	}
	$scope.app_pro = function(){
		var url = $('#formDemo').attr('action');
		var slug = $('#slug').val();
		$http.post(url,{
			title:$scope.title,
			slug:slug,
			specifications:$scope.specifications,
			category_id:$scope.category_id,
		}).then(function(res){
			get_prs();
			toastr.error('DElete ok!', 'ok', {timeOut: 5000});
			console.log(res);
		});
		
	}
	$scope.editpr = function(pro){
		// console.log(pro);
		$scope.editpr = pro;
		
	}

	$scope.edit_pro = function(data){
		console.log($scope.editpr);
		// $http.post('http://localhost:8888/hoplongtech-master/admin/product-index/edit/'+data.id,{
		// 	title:$scope.title,
		// 	slug:slug,
		// 	specifications:$scope.specifications,
		// 	category_id:$scope.category_id,
		// }).then(function(res){
		// 	get_prs();
		// 	toastr.error('DElete ok!', 'ok', {timeOut: 5000});
		// 	console.log(res);
		// });
	}
});