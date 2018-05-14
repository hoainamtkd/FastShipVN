@if (session('error'))
	<script type="text/javascript">
		var $alert = "{{ session('error') }}";
		toastr.error($alert);
	</script>
@endif

@if (session('success'))
	<script type="text/javascript">
		var $alert = "{{ session('success') }}";
		toastr.success($alert);
	</script>
@endif
