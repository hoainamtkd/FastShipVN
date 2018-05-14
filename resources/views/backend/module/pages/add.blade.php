@extends('backend.app')
@section('title', 'Page Title')
@section('content')
@include('backend.global.options')
<div class="col-md-10">
	<div class="back-link">
		<a href="{{ route('pages-index') }}"><span class="glyphicon glyphicon-arrow-left"></span> Quay lại</a>
	</div>
	<div class="row">
		@if( isset($pages->edit) )
			<form class="frm-edit" action="{{ url('/fs/cpanel/pages/edit/'.$pages->id)}}" method="POST">
		@else
			<form class="frm-add" method="POST">
		@endif
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="col-sm-9">
				<div class="content-box-large">
					<span>Tiêu đề:</span>
					<input type="text" class="form-control" name="name" value="{{ isset($pages->post_name) ? $pages->post_name : '' }}" placeholder="Nhập tiêu đề"> </br>
					<span>Nội dung:</span>
					<textarea class="form-control" id="content" name="content" placeholder="Nhập nội dung" rows="4" cols="50">{{ isset($pages->post_content) ? $pages->post_content : '' }}</textarea> </br>
					<span>Từ khóa:</span>
					<input type="text" name="keyword" placeholder="Nhập từ khóa SEO" value="{{ isset($pages->post_keyword )? $pages->post_keyword : '' }}" class="form-control"></br>
					<span>Mô tả trang:</span>
					<textarea rows="4" cols="50" name="excerpt" placeholder="Nhập mô tả trang" class="form-control">{{ isset($pages->post_excerpt) ? $pages->post_excerpt : '' }}</textarea>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="content-box-large">
					<span>Trang cha: </span>
					<select class="form-control" name="parent">
						<option value="">(no parent)</option>
						@if( isset($pages->edit) )
							<?php getPagesOptionsRecursive($parent,0,'',$pages->post_parent); ?>	
						@else
							<?php getPagesOptionsRecursive($pages); ?>	
						@endif	
					</select>
					<span>Trạng thái: </span>
					<div class="status-box">
						@if( isset($pages->edit) )
							<span><input type="radio"  name="status" value="1" {{ ($pages->post_status == 1) ? 'checked' : '' }}> Bật</span>
							<span><input type="radio" name="status" value="0" {{ ($pages->post_status == 0) ? 'checked' : '' }}> Tắt </span>
						@else
							<span><input type="radio"  name="status" value="1" checked> Bật</span>
							<span><input type="radio" name="status" value="0"> Tắt </span>
						@endif
					</div>
					<button type="submit" class="btn btn-success btn-add text-right" >
						@if( isset($pages->edit) )
						 	Cập nhật
						 @else
						 	Thêm mới  
						 @endif
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection