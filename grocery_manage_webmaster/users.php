<?php include_once 'admin_includes/main_header.php'; ?>

        <div class="site-content">
            <!-- <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="m-y-0 font_sz_view">Add Users</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        
                        <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Name</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="user_full_name" class="form-control" id="form-control-3" placeholder="User Name" data-error="Please enter Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Email</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="email" name="user_email" class="form-control" placeholder="Enter Email" id="user_input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"  data-error="Please enter a valid email address." onkeyup="checkUserAvailTest()" required>
                                    <span id="input_status" style="color: red;"></span>
                                    <div class="help-block with-errors"></div>
                                    <input type="hidden" id="table_name" value="users">
                                    <input type="hidden" id="column_name" value="user_email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Password</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="password" name="user_password" class="form-control" id="form-control-3" placeholder="Password" minlength="8" data-error="Please Enter Minimum 8 characters." required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Mobile Number</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" class="form-control" name="user_mobile" id="form-control-3" placeholder="Enter Mobile Number" required value="<?php echo $getGrocerySiteSettings['mobile'];?>" required maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">OTP</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="otp" class="form-control" id="form-control-3" placeholder="OTP" data-error="Please enter OTP" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form-control-3" class="col-sm-3 col-md-4 control-label">Log In Count</label>
                                <div class="col-sm-6 col-md-4">
                                    <input type="text" name="last_login_visit" class="form-control" id="form-control-3" placeholder="Last Login Visit" data-error="Please enter Last Login Visit" required>
                                </div>
                            </div>
                            <?php $getRegisterDeviceTypes = getAllData('lkp_register_device_types');?>
                            <div class="form-group">
                                <label class="col-sm-3 col-md-4 control-label" for="form-control-9">Choose your Register Device Type</label>
                                <div class="col-sm-6 col-md-4">
                                    <select name="lkp_register_device_type_id" id="form-control-1" class="form-control" data-plugin="select2" data-options="{ theme: bootstrap }" required>
                                        <option value="">-- Select Register Device Type --</option>
                                        <?php while($row = $getRegisterDeviceTypes->fetch_assoc()) {  ?>
                                          <option value="<?php echo $row['id']; ?>" ><?php echo $row['user_type']; ?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                          </div>

                             <div class="form-group">
                                <label class="col-sm-3  col-md-4 control-label" for="form-control-8">Testimonial</label>
                                <div class="col-sm-6 col-md-4">
                                    <textarea id="form-control-8" name= "description" class="form-control" rows="3" placeholder="Enter Testimonial" required></textarea>
                                </div>
                            </div>
                            <?php $getStatus = getAllData('lkp_status');?>
                            <div class="form-group">
                                <label class="col-sm-3  col-md-4 control-label" for="form-control-8">Choose Your Status</label>
                                <div class="col-sm-6 col-md-4">
                                    <select id="form-control-3" name="lkp_status_id" class="custom-select" data-error="This field is required." required>
                                      <option value="">Select Status</option>
                                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                                          <option value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
                                      <?php } ?>
                                   </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->
            <?php 
					$getUsers = "SELECT * FROM users WHERE lkp_admin_service_type_id = 3 ORDER BY lkp_status_id, id DESC";
					$getUsersData = $conn->query($getUsers); $i=1;
			?>
            <div class="panel panel-default panel-table m-b-0">
                <div class="panel-heading">
                    <h3 class="m-t-0 m-b-5 font_sz_view">Customers</h3>
                    
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered dataTable" id="table-2">
                            <thead>
                                <tr>
                                    <th>S.No</th>
				                    <th>Name</th>
				                    <th>Email</th>
				                    <th>Mobile</th>
				                    <th>Created Date</th>
				                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $getUsersData->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $row['user_full_name'];?></td>
				                    <td><?php echo $row['user_email'];?></td>
				                    <td><?php echo $row['user_mobile'];?></td>
				                    <td><?php echo $row['created_at'];?></td>
                                    <!-- <td><?php if ($row['lkp_status_id']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['lkp_status_id']." data-tbname='grocery_testimonials'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['lkp_status_id']." data-incId=".$row['id']." data-tbname='grocery_testimonials'>In Active</span>" ;} ?></td> -->
                                    <td><span> &nbsp;<a href="#"><i class="zmdi zmdi-eye zmdi-hc-fw" data-toggle="modal" data-target="#<?php echo $row['id']; ?>" class=""></i></a></span></td>
                                <div class="col-lg-2 col-sm-4 col-xs-6 m-y-5">
                                    <div id="<?php echo $row['id']; ?>" class="modal fade" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content animated flipInX">
                                                <div class="modal-header bg-info">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">
                                                            <i class="zmdi zmdi-close"></i>
                                                        </span>
                                                    </button>
                                                    <h4 class="modal-title">Customer Information</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-4">Name:</div>
                                                    <div class="col-sm-6"><?php echo $row['user_full_name'];?></div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-4">Email:</div>
                                                    <div class="col-sm-6"><?php echo $row['user_email'];?></div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-4">Mobile:</div>
                                                    <div class="col-sm-6"><?php echo $row['user_mobile'];?></div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-4">Date:</div>
                                                    <div class="col-sm-6"><?php echo $row['created_at'];?></div>
                                                  </div>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" data-dismiss="modal" class="btn btn-info">Continue</button>
                                                    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                                </tr>
                                <?php $i++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer">
          2017 © Cosmos
        </div>
<?php include_once 'admin_includes/footer.php'; ?>
  </body>
</html>