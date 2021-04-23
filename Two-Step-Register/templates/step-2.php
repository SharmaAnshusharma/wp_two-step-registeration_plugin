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
			Qualification<input type="text" name="Qualification" class="form-control" placeholder="Qualification" required><br>
			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			<input type="hidden" name="action" value="secondStep">
			<!--  <a href="?page=wp-regsiter-step-2-plugin" class="btn btn-primary" >Save and Next</a><br>-->
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
				success:function(html)
				{
					jQuery("#msg").html(html);
				}
			});
		return false;
		}
		</script>
</body>
</html>


