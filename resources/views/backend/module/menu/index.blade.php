@extends('backend.app')
@section('title', 'Page Title')
@section('content')
@include('backend.global.options')

<div class="col-md-10">
	<div class="manage-menus">
		<form method="GET">
			<span>Chọn menu để sửa :</span>
			<input type="hidden" name="action" value="edit">
			<select name="menu" id="select-menu-to-edit">
				@if(isset($data['navs_menu']) && !empty($data['navs_menu']) )
				@foreach($data['navs_menu'] as $key => $val)
				<option value="{{ $val['term_id'] }}">{{ $val['name']. (!empty($val['display_position']) ? ('('.$val['display_position'].')') : '') }}</option>
				@endforeach
				@endif
			</select>
			<span class="submit-btn">
				<input type="submit" class="button" value="Chọn">
			</span>
			<span class="add-new-menu-action pull-right">
				<a href="/fs/cpanel/menu?module=add-menu" class="btn btn-default btn-add-menu">Thêm mới </a>
			</span>
		</form>
	</div>
	<div class="manage-management">
		
		<div class="col-md-3 padding-left-zero">

			<div class="manage-menus-right ">
				<form class="frm_MenuNavs">
					<h3>Liên kết </h3>
					<span><i>Tên menu:</i></span>
					<input type="text" class="form-control" required name="name" value="" placeholder="#">
					<span><i>Đường dẫn tỉnh:</i></span>
					<input type="text" class="form-control" required name="href" value="" placeholder="http://">
					<span><i>Mục cha: (Không bắt buộc)</i></span>
					<input type="text" placeholder="#1" name="parent">
					<div class="margin-top-10">
						<button class="btn btn-add-menu" onclick="return addMenuNavs()">Thêm menu</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-9">
			@if(isset($_GET['action']) && $_GET['action'] == 'edit')
			<form class="frm-add-menu" method="POST" action="/fs/cpanel/menu/update/{{ (isset($_GET['menu']) && !empty($_GET['menu'])) ? $_GET['menu'] : 0 }}">
				@else
				<form class="frm-add-menu" method="POST" action="/fs/cpanel/menu/add">
					@endif
					<div class="row">
						<div class="manage-menus">

							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="menu" value="{{ (isset($_GET['menu']) && !empty($_GET['menu'])) ? $_GET['menu'] : 0 }}">
							<span><i>Tên menu</i></span>
							<input type="text" class="menu-name" required name="name" 
							@if(isset($_GET['action']) && ($_GET['action'] == 'edit') && isset($_GET['menu']))
								@if(isset($data['navs_menu']) && !empty($data['navs_menu']))
									@foreach($data['navs_menu'] as $val)
										@if($val['term_id'] == $_GET['menu'])
										value="{{ trim($val['name']) }}"
										@endif
									@endforeach
								@endif
							@endif
							>
							<span class="add-new-menu-action pull-right">
								<button type="submit" class="btn btn-default btn-add-menu">
									@if(!isset($_GET['module']))
										Lưu menu
									@else
										Tạo menu
									@endif
								</button>
							</span>
					</div>

					@if(!isset($_GET['module']))
					<div class="body">
						<h3>Danh mục Menu</h3>
						<p>Nhấp chuột vào mũi tên bên phải để thiết lập tuỳ chỉnh cho mỗi mục</p>
						<ul class="menu-main">
						</ul>
					</div>
					<div class="footer">
						<h3>Tùy Chỉnh Trình Đơn</h3>
						<table width="100%">
							<tbody>
								<tr>
									<td class="vertical-top" width="20%"><i>Hiển thị vị trí</i></td>
									<td>
										@if(isset($data['position']) && !empty($data['position']))
										@foreach($data['position'] as $key => $val)
										<label class="checkbox-inline">
											<input type="checkbox" name="display_position" value="{{ $val['id'] }}">
											{{ $val['position'] }}
										</label>
										<br/>
										@endforeach
										@endif
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					@else
					<div class="body">
						<p>Đặt tên cho Menu, sau đó nhấp chuột vào Tạo Menu.</p>
					</div>
					@endif

				</div>
			</form>
		</div>
		
	</div>
</div>
@endsection