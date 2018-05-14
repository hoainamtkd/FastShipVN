@extends('backend.app')
@section('title', 'Page Title')
@section('content')
@include('backend.global.options')

<div class="col-md-10">
	<div class="header-pages">
		<div class="search-box text-right">
			<form method="GET">
				<input type="text" value="<?php  echo isset($_GET['search']) ? $_GET['search'] : ''; ?>" name="search" class="form-control" placeholder="Nhập từ khóa tìm kiếm">
				<button type="submit" class="btn btn-default action_excute" >Tìm kiếm </button>
			</form>
		</div>
		<ul>
			<li>
				<select class="form-control action">
					<option>Chọn thao tác</option>
					<option>Xóa</option>
				</select>
			</li>
			<li>
				<button class="btn btn-default action_excute" >Thực hiện </button>
			</li>
			<li class="pull-right"><a href="/fs/cpanel/pages/add" class="btn btn-success btn-add-pages">+ Thêm mới </a></li></li>
		</ul>	
	</div>
	<div class="wrapper-pages">
		<table class="table table-striped" id="pages-table">
			<thead>
				<tr>
					<th class="text-center"></th>
					<th>Tiêu đề</th>
					<th class="text-center">Tác giả</th>
					<th class="text-center">Trạng thái</th>
					<th class="text-center">Ngày đăng</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@if($pages)
					<?php getPagesTableRecursive($pages); ?>
				@else
				<tr>
					<td colspan="6" class="text-center ">Không có dữ liệu nào.</td>
				</tr>
				@endif
			</tbody>
		</table>
	</div>
</div>
@endsection