var deletePages = function(id) {
	var data = {
		'_token' : $('meta[name=csrf-token]').attr('content'),
		'id' : id
	};
	if(confirm('Bạn có muốn xóa row này không ? ')){
		$.ajax({
			url : '/fs/cpanel/pages/delete/'+id,
			data : data,
			type : 'POST',
			success:function(data){
				if(data.code == '201'){
					$('.page-item-'+id).remove();
					toastr.success(data.message);
				}else if(data.code == '403'){
					toastr.warning(data.message);
				}
			},
			error:function(response){
				
			}
		});
	}
}

var addMenuNavs = function(){
	var name = $(".frm_MenuNavs input[name='name']").val();
	var href = $(".frm_MenuNavs input[name='href']").val();
	var parent = $(".frm_MenuNavs input[name='parent']").val();
	if(name == ''){
		alert('Tên menu không được bỏ trống');
		return false;
	}
	if(href == ''){
		alert('Đường dẫn không được bỏ trống');
	}
	var length = $('ul.menu-main li').length + 1;
	if(parent != 0 && parent != undefined){
		$('ul.menu-main').append('<li class="menu-items" data-id="'+length+'"><div class="menu-name-label">#'+length+' - '+name+'</div><div class="body-menu"><span><i>URL</i></span><input type="text" class="form-control" name="url'+length+'" value="'+href+'"><span><i>Nhãn điều hướng</i></span><input type="text" class="form-control" value="'+name+'" name="name'+length+'"><div class="wrapper-action-menu"><span class="action-menu"><a href="" class="remove-items-menu">Gỡ bỏ</a></span>|<span class="action-menu"><a href="">Hủy</a></span></div></div></li>');
	}else{
		alert('312');
	}
	
	return false;
}
