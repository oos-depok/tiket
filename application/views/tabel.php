<!DOCTYPE html>
<html>
<head>
<title>Tiket Information System</title>
</head>
<body>
<h2>Event Ready and Check out for the date </h2>
<table border = "1" style="border-collapse:collapse" width="50%">
	<tr style="background:gray">
		<th>Event ID</th>
		<th>Event Name</th>
		<th>Event Type</th>
		<th>Event Status</th>
		<th>Artist Type</th>
		<th>Event Date</th>
		<th>Event Location</th>
		<th>Action</th>		
	</tr>
	<?php foreach($dataevent as $dataevent){?>
	<tr>
		<td><?php echo $dataevent['event_id'];?></td>
		<td><?php echo $dataevent['event_name'];?></td>
		<td><?php echo $dataevent['event_type'];?></td>
		<td><?php echo $dataevent['event_status'];?></td>
		<td><?php echo $dataevent['artist_type'];?></td>
		<td><?php echo $dataevent['event_date'];?></td>
		<td><?php echo $dataevent['event_location'];?></td>
		<td>
			<a href="<?php echo base_url()."index.php/crud/edit/".$dataevent['event_id']; ?>">Edit </a> - 
		    <a href="<?php echo base_url()."index.php/crud/delete/".$dataevent['event_id']; ?>">Delete </a>
		</td>		
	</tr>
	<?php } ?>
</table>

<a href="<?php echo base_url()."index.php/crud/add/"; ?>">Add Event</a>
</body>
</html>
