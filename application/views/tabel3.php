<!DOCTYPE html>
<html>
<head>
<title>Tiket Information System</title>
</head>
<body>
<hr />
<h2>Ticket Sold & Cancelled</h2>
<table border = "1" style="border-collapse:collapse" width="50%">
	<tr style="background:gray">
		<th>Attendee Id</th>
		<th>Attendee Name</th>
		<th>Event Name</th>
		<th>Ticket Class</th>
		<th>Payment Status</th>
		<th>Total Person</th>
		<th>Payment Date</th>
	</tr>
	<?php foreach($dataattendee as $dataattendee){?>
	<tr>
		<td><?php echo $dataattendee['attendee_id'];?></td>
		<td><?php echo $dataattendee['attendee_name'];?></td>
		<td><?php echo $dataattendee['event_name'];?></td>
		<td><?php echo $dataattendee['ticket_class'];?></td>
		<td><?php echo $dataattendee['payment_status'];?></td>		
		<td><?php echo $dataattendee['num_of_person_going'];?></td>		
		<td><?php echo $dataattendee['payment_date'];?></td>		
		</tr>
	<?php } ?>
</table>
<hr />
powered by oos okt-2015
silahkan email ke oos777@gmail.com
</body>
</html>
