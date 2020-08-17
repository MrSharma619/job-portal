<?php include 'inc/header.php'; ?>
<style>
	body{
		background-image: url('images/back-wall.png');
		background-repeat: no-repeat;
		background-size: 100% 50%;
	}
</style>
<h2 class="page-header">
<?php
echo $job->job_title;
?>
(<?php echo $job->location; ?>)
</h2>
<small>posted by <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?></small>
<hr>

<p class="lead"><?php echo $job->description; ?></p>
<ul class="list-group-item">
	<li><strong>Company: </strong><?php echo $job->company; ?></li><br>
	<li><strong>Salary: </strong><?php echo $job->salary; ?></li><br>
	<li><strong>Contact Info: </strong><?php echo $job->contact_email; ?></li>
	</ul>
<br><br>

<a href="index.php">&lt;&lt; Go back</a>
<br><br>

<div class="well">
	<a href="edit.php?id=<?php echo $job->id; ?>" class = "btn btn-default">Edit</a>

	<form action="job.php" method="POST" style="display: inline;">
		<input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
		<input type="submit" class="btn btn-danger" value="Delete">
	</form>
</div>
<br><br>

<?php include 'inc/footer.php'; ?>