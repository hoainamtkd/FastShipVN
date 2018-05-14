@extends('backend.app')

@section('title', 'Page Title')

@section('content')
<div class="col-md-10">
	<div class="content-box-large">
		<div class="form-group">
			<table class="table">
				<tbody>
					<tr>
						<td width="15%">Tên Website:</td>
						<td><input type="text" name="" class="form-control"></td>
					</tr>
					<tr>
						<td>Logo Website:</td>
						<td><input type="file" name="" class="form-control"></td>
					</tr>
					<tr>
						<td> Địa chỉ:</td>
						<td><textarea class="form-control"></textarea></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="" class="form-control"></td>
					</tr>
					<tr>
						<td>Số điện thoại:</td>
						<td><input type="text" name="" class="form-control"></td>
					</tr>
					<tr>
						<td>Facebook:</td>
						<td><input type="text" name="" class="form-control"></td>
					</tr>
					<tr>
						<td>Instagram:</td>
						<td><input type="text" name="" class="form-control"></td>
					</tr>
					<tr>
						<td>Twitter:</td>
						<td><input type="text" name="" class="form-control"></td>
					</tr>
					<tr>
						<td>Linkedin:</td>
						<td><input type="text" name="" class="form-control"></td>
					</tr>
					<tr>
						<td></td>
						<td><button class="btn btn-success"> Cập nhật </button></td>
					</tr>


				</tbody>
			</table>

		</div>
	</div>
</div>
@endsection