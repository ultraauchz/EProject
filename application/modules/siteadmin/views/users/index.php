<?php echo bread_crumb($menu_id);?>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
		<div class="box">
			<form method="get" enctype="multipart/form-data">
			<div class="box-header">
			  <h3 class="box-title">Search</h3>			  
			</div><!-- /.box-header -->
			<div style="float:left;width:100%;">
			  <div class="col-xs-3">
			  	<span>Fullname / Username</span> 
			  	<input type="text" class="form-control" placeholder="Enter Fullname / Username">
			  </div>
			  <div class="col-xs-1">
			  	<span>Register Date</span> 
			  	<input type="text" class="form-control datepicker" class="datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
			  </div>
			  <div class="col-xs-3">
			  	<br>
			  	<input type="submit" name="b" class="btn btn-primary" value="Search">
			  </div>
			</div>
			</form>
			<div class="box-body">
			  <?php echo $pagination;?>
			  <table id="example1" class="table table-bordered table-striped table-hover table_data">
			    <thead>
			      <tr>
			        <th>Fullname</th>
			        <th>Username</th>
			        <th>Usergroup</th>
			        <th>Register date</th>
			        <th class="th_ordering">Ordering</th>
			        <th class="th_manage">Manage</th>
			      </tr>
			    </thead>
			    <tbody>
					<?php foreach($rs as $item): ?>
						<tr>
							<td><?php echo $item['fullname'];?></td>
							<td><?php echo $item['username'];?></td>
							<td><?php echo $item['usergroup_name'];?></td>
							<td><?php echo $item['register_date'];?></td>
							<td class="td_ordering">
								<a class="btn btn-default">
				                    <i class="fa fa-angle-up"></i> 
				                </a>
				                <a class="btn btn-default">
				                    <i class="fa fa-angle-down"></i> 
				                </a>
							</td>
							<td>
								<a class="btn btn-info" href="siteadmin/users/form/<?=$item['id'];?>">
				                    <i class="fa fa-edit"></i> Edit
				                </a>
								<a class="btn btn-danger btn_delete" href="#">
				                    <i class="fa fa-trash-o"></i> delete
				                </a>
							</td>
						</tr>
					<?php endforeach;?>	      
			    </tbody>
			    <tfoot>
			      <tr>
			        <th>Fullname</th>
			        <th>Username</th>
			        <th>Usergroup</th>
			        <th>Register date</th>
			        <th>Ordering</th>
			        <th>Manage</th>
			      </tr>
			    </tfoot>
			  </table>
			  <div style="text-align:right;">
			  	<a href="siteadmin/users/form" class="btn btn-info"><li class="fa fa-plus"></li> Create new</a>
			  </div>
			  <?php echo $pagination;?>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
  </div>
</section>