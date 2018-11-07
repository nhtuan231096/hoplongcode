@extends('layouts.admin')
@section('main')
<div class="col-md-3">
	<form action="{{ route('post.store') }}" id="formDemo" method="POST" role="form">
		<legend>Thêm sản phẩm</legend>
	
		<div class="form-group">
			<label for="">Tên sản phẩm</label>
			<input type="text" name="title" ng-model="title" class="form-control" id="name" placeholder="Tên sản phẩm">
		</div>
		<div class="form-group">
			<label for="">Đường dẫn tĩnh</label>
			<input type="text" name="slug" class="form-control" ng-model="slug" id="slug" placeholder="đường dẫn">
		</div>
		<div class="form-group">
			<label for="">Thông số kỹ thuật</label>
			<textarea  ng-model="specification" name="specifications" class="form-control" ></textarea>
		</div>
		<div class="form-group">
			<label for="">Danh mục</label>
			<select name="" id="input" ng-model="category_id" class="form-control">
				<option value="7292">a</option>
				<option value="7291">b</option>
				<option value="7290">c</option>
			</select>
		</div>
	
		<button type="button" class="btn btn-primary" ng-click="app_pro()">Submit</button>
	</form>
</div>

<div class="col-md-9">
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Panel title</h3>
	</div>
	<div class="panel-body">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Tên sản phẩm</th>
				<th>Đường dẫn</th>
				<th>Danh mục</th>
				<th>Người tạo</th>
				<th>Order</th>
				<th>Trạng thái</th>
				<th>Ngày tạo</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr ng-repeat="p in prs.data">
				<td ng-bind="p.id">s</td>
				<td ng-bind="p.slug">s</td>
				<td ng-bind="p.category_id">s</td>
				<td ng-bind="p.created_by">s</td>
				<td ng-bind="p.sorder">s</td>
				<td ng-bind="p.status">s</td>
				<td ng-bind="p.created_at">s</td>
				<td>
					<a data-toggle="modal" href='#modal-id' class="btn btn-primary" ng-click="editpr(p)">Sửa</a>
					<a href="" class="btn btn-danger" ng-click="del_pro(p.id)">Xóa</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
	</div>
</div>
<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Cập nhật</h4>
			</div>
			<div class="modal-body">
				<form action="" method="PUT" id="formEdit" role="form">
					<div class="form-group">
						<label for="">Tên sản phẩm</label>
						<input type="text" class="form-control" ng-model="editpr.title" placeholder="Nhập tên sản phẩm">
					</div>
					<div class="form-group">
						<label for="">Đường dẫn</label>
						<input type="text" class="form-control" ng-model="editpr.slug" placeholder="Nhập tên sản phẩm">
					</div>
					<div class="form-group">
						<label for="">Thông số kỹ thuật</label>
						<input type="text" class="form-control" ng-model="editpr.specification" placeholder="Nhập tên sản phẩm">
					</div>
					<div class="form-group">
						<label for="">Danh mục</label>
						<select name="" ng-model="editpr.category_id" class="form-control" required="required">
							<option value="7292">1</option>
						</select>
					</div>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" ng-click="edit_pro(editpr)" class="btn btn-primary">Save changes</button>
				</form>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
@stop()