
<div class = "page-header">
   
   <h1>
      User 
      <small>User List</small>
   </h1>
   
</div>
	



<div class="card" style="width: 120rem;">
  
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">
		<div class="form-group">
		<label for="name" class="col-md-4 control-label">Name:<?php echo ($user['name'] ? $user['name']: ''); ?></label>

	</div>

	<div class="form-group">
		<label for="email" class="col-md-4 control-label">Email: <?php echo ( $user['email'] ?  $user['email'] : ''); ?></label>
		
	</div>

	<div class="form-group">
		<label for="mobile" class="col-md-4 control-label">Mobile:<?php echo ( $user['mobile'] ?  $user['mobile'] : ''); ?></label>
		
	</div>
	<br/>

	</p>
   <a href="<?php echo site_url('user/download_pdf/'.$user['id']); ?>" class="btn btn-info btn-xs">Download PDF</a>
  </div>
</div>