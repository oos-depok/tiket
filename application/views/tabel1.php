<!DOCTYPE html>
<html>
<head>
<title>Tiket Information System</title>
</head>
<body>
<hr />
<h2>Ticket Class and Price</h2>
<table border = "1" style="border-collapse:collapse" width="25%">
	<tr style="background:gray">
		<th>Ticket ID</th>
		<th>Ticket Class</th>
		<th>Price</th>
	</tr>
	<?php foreach($dataticket as $dataticket){?>
	<tr>
		<td><?php echo $dataticket['ticket_id'];?></td>
		<td><?php echo $dataticket['ticket_class'];?></td>
		<td><?php echo $dataticket['standard_max_price'];?></td>
	</tr>
	<?php } ?>
</table>
</body>
</html>
