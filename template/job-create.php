<?php include 'inc/header.php'; ?>
<h2 class="page-header">Create Job listing</h2>
<form action="create.php" method="POST">

<style>
	body{
		background-image: url('images/back-wall.png');
		background-repeat: no-repeat;
		background-size: 100% 50%;
	}
</style>

<div class="form-group">	
<label>Company</label>
<input type="text" class="form-control" name="company" placeholder="xyz">
</div>

<div class="form-group">	
<label>Category</label>
<select name="category" class="form-control">
	<option value="0">Choose Category...</option>
        		<?php 
        		foreach ($categories as $category):
        		?>
        		<option value="<?php echo $category->id; ?>">
        			<?php echo $category->name; ?>
        		</option>
        	<?php endforeach ?>

</select>
</div>

<div class="form-group">	
<label>Job Title</label>
<input type="text" class="form-control" name="job_title" placeholder="xyz">
</div>

<div class="form-group">	
<label>Description</label>
<textarea class="form-control" name="description"></textarea>
</div>

<div class="form-group">	
<label>Location</label>
<input type="text" class="form-control" name="location" placeholder="xyz">
</div>

<div class="form-group">	
<label>Salary</label>
<input type="text" class="form-control" name="salary" placeholder="$$">
</div>

<div class="form-group">	
<label>Contact User</label>
<input type="text" class="form-control" name="contact_user" placeholder="xyz">
</div>

<div class="form-group">	
<label>Contact Email</label>
<input type="text" class="form-control" name="contact_email" placeholder="xyz@abc.in">
</div>

<input type="submit" class="btn btn-default" value="Create" name="submit">

</form>


<?php include 'inc/footer.php'; ?>