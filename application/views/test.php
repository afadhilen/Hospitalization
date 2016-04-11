<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table class ="table table-striped table-hover">
		<?php foreach ($list_data as $data) { ?>
		<tr>
			<!-- <td><?php echo htmlentities($data['shift_1']);?> </td> -->
			<td><?php echo $data['day_name']; ?> </td>
			<td><?php echo $data['shift_1']; ?> </td>
			<td><?php echo $data['shift_2'];?> </td> 
		</tr>
		<?php } ?>
	</table>
</body>
</html>