
<!DOCTYPE html>
<html>
<head>
	<title>Step-1</title>
</head>
<body>
<div class="container">
	<h1>Personal Details</h1>
	<hr>
		<form method="post" id="form-data">
			<p id="msg"></p>
			Name<input type="text" name="name" class="form-control" placeholder="Name" required><br>
			Email<input type="email" name="email" class="form-control" placeholder="Email" required><br>
			Mobile<input type="text" name="mobile" class="form-control" placeholder="Mobile" required><br>
			Address<input type="text" name="Address" class="form-control" placeholder="Address" required><br>
			<input type="submit" name="submit" value="Save & Next" class="btn btn-primary">
			<input type="hidden" name="action" value="firstStep">
		</form>
		<script>
		jQuery("#form-data").submit(insert);
		function insert()
		{
			var formData = jQuery(this).serialize();

			jQuery.ajax({
				type:'post',
				url:'../wp-admin/admin-ajax.php',
				data:formData,
				dataType: 'json',
				success:function(html)
				{
					if(html.status == 'OK'){
						location.href = '?page=wp-register-step-2-slug';
					}
				}
			});
		return false;
		}
		</script>
</body>
</html>


