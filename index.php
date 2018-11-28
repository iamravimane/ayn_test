<div class = "page-header">
   
   <h1>
      User 
      <small>User List</small>
   </h1>
   
</div>
<div class="pull-right">
	<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success">Add</a> 
</div>
<div class="clearfix"></div>
<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Actions</th>
    </tr>
	<?php foreach($user as $u){ ?>
    <tr>
		<td><?php echo $u['id']; ?></td>
		<td><?php echo $u['name']; ?></td>
		<td><?php echo $u['email']; ?></td>
		<td><?php echo $u['mobile']; ?></td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$u['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
			<a href="<?php echo site_url('user/show/'.$u['id']); ?>" class="btn btn-info btn-xs">View</a> 
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
