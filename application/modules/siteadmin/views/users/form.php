<?php echo bread_crumb($menu_id);?>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
		<div class="box">
			<form method="get" enctype="multipart/form-data">
			<div class="box-header">
			  <h3 class="box-title">Add/Edit User account</h3>			  
			</div><!-- /.box-header -->
			
			<div class="box-body">
				<div class="form-group">
		              <label for="exampleInputEmail1">Fullname</label>
		              <div class="input-group">
			              <span class="input-group-addon"><i class="fa fa-user"></i></span>
		              	  <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Fullname" value="<?php echo @$item['fullname'];?>">
		              </div>
	            </div>
				<div class="form-group">
		              <label for="exampleInputEmail1">Email address</label>
		              <div class="input-group">
			              <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
			              <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="<?php echo @$item['email'];?>">
		              </div>
	            </div>	            
	            <div class="form-group">
		              <label for="exampleInputEmail1">Username</label>
		              <div class="input-group">
			              <span class="input-group-addon">@</span>
		              	  <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" value="<?php echo @$item['username'];?>">
		              </div>
	            </div>
				<div class="form-group">
		              <label for="exampleInputEmail1">Password</label>
		              <div class="input-group">
			              <span class="input-group-addon"><i class="fa fa-shield"></i></span>
			              <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password" value="<?php echo @$item['password'];?>">
		              </div>
	            </div>
	            <div class="form-group">
		              <label for="exampleInputEmail1">Confirm Password</label>
		              <div class="input-group">
			              <span class="input-group-addon"><i class="fa fa-shield"></i></span>
			              <input type="text" class="form-control" id="password" name="password" placeholder="Enter Confirm password" value="<?php echo @$item['password'];?>">
		              </div>
	            </div>
	            <div class="form-group">
		              <label for="exampleInputEmail1">Register Date</label>
		              <div class="input-group">
			              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
			              <input type="text" class="form-control" disabled="disabled" id="register_date" name="register_date"  value="<?php echo @$item['register_date'];?>">
		              </div>
	            </div>
            </div>
			</form>						
		</div><!-- /.box -->
	</div>
  </div> 
</section>