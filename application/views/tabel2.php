<!DOCTYPE html>
<html>
<head>
<title>Tiket Information System</title>
</head>
<body>
<hr />
<h2>Ticket Ready and Check out for the Available </h2>
<table border = "1" style="border-collapse:collapse" width="50%">
	<tr style="background:gray">
		<th>Event Id</th>
		<th>Ticket Id</th>
		<th>Ticket Price</th>
		<th>Ticket Status</th>
		<th>Ticket Available</th>
		<th>Ticket Sell Start</th>
		<th>Ticket Sell End</th>
	</tr>
	<?php foreach($dataeventticket as $dataeventticket){?>
	<tr>
		<td><?php echo $dataeventticket['event_name'];?></td>
		<td><?php echo $dataeventticket['ticket_class'];?></td>
		<td><?php echo $dataeventticket['ticket_price'];?></td>
		<td><?php echo $dataeventticket['ticket_status'];?></td>
		<td><?php echo $dataeventticket['ticket_available'];?></td>		
		<td><?php echo $dataeventticket['ticket_sell_start'];?></td>		
		<td><?php echo $dataeventticket['ticket_sell_end'];?></td>		
		</tr>
	<?php } ?>
</table>
</body>
</html>
