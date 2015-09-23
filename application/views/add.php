<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
	<form method="POST" action="<?php echo base_url()."index.php/crud/insert"; ?>">
<table border = "1" style="border-collapse:collapse" width="50%">
	<tr style="background:gray">
		<td>Event Name</td>
		<td> <input type="text" name="event_name" /> </td>
	</tr>
	<tr style="background:gray">
		<td>Event Type</td>
		<td> <input type="text" name="event_type" /> </td>
	</tr>
	<tr style="background:gray">
		<td>Event Status</td>
		<td> <input type="text" name="event_status" /> </td>
	</tr>	
	<tr style="background:gray">
		<td>Artist Type</td>
		<td> <input type="text" name="artist_type" /> </td>
	</tr>	
	<tr style="background:gray">
		<td>Event Date</td>
		<td> <input type="date" name="event_date" /> </td>
	</tr>	
	<tr style="background:gray">
		<td>Event Location</td>
		<td> <input type="text" name="event_location" /> </td>
	</tr>
	<tr style="background:gray">
		<td></td>
		<td> <input type="submit" name="btnsubmit" value="Simpan" /> </td>
	</tr>
</table>
</form>
<a href="<?php echo base_url()."index.php/"; ?>">Back </a>
</body>
</html>
