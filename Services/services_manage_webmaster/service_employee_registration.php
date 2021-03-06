<?php include_once 'admin_includes/main_header.php'; ?>
<?php $getServiceEmployeesData = getAllDataWithActiveRecent('services_employee_registration'); $i=1; ?>
     <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <a href="add_service_employee_registration.php" style="float:right">Add Service Employee</a>
            <h3 class="m-t-0 m-b-5">Service Employees</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <?php $getAllSpecilizationData = getAllDataWithActiveRecent('services_employee_registration');?>
              <div class="col s4 m9 l2">                  

                  <div class="form-group col-md-4">                    
                    <select id="select-specilization" class="custom-select">
                       <option value="">Select Specalization</option>
                        <?php while ($getSpecilizationData = $getAllSpecilizationData->fetch_assoc()) { ?>
                          <option value="<?php echo $getSpecilizationData['specalization']; ?>"><?php echo $getSpecilizationData['specalization']; ?></option>
                        <?php } ?>
                    </select>                    
                  </div>
                </div>
              <div class="clear_fix"></div>

                <div class="form-group col-md-4">
                  <div class="custom-controls-stacked checkbox_new_div">
                    <label class="custom-control custom-control-primary custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="test5" name="type" onchange="filterme()" value="Active">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-label" for="test5">Active Service Employee</span>
                    </label>
                    <label class="custom-control custom-control-primary custom-checkbox">
                      <input class="custom-control-input" type="checkbox" id="test6" name="type" onchange="filterme()" value="In Active">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-label" for="test6">In Active Service Employee</span>
                    </label>
                  </div>
                </div>
                <div class="clear_fix"></div>
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Status</th>
                    <th>Specilization</th>
                    <th>Photo</th>
                    <th>Created Date</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getServiceEmployeesData->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['mobile_number'];?></td>
                    <td><?php if ($row['lkp_status_id']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['lkp_status_id']." data-tbname='services_employee_registration'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['lkp_status_id']." data-incId=".$row['id']." data-tbname='services_employee_registration'>In Active</span>" ;} ?></td>
                    <td><?php echo $row['specalization'];?></td>
                    <td><img src="<?php echo $base_url . 'uploads/service_employee_photo/'.$row['photo'] ?>" height="100" width="100"/></td>
                    <td><?php echo $row['created_at'];?></td>
                   
                   <td> <a href="edit_service_employee_registration.php?seid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-edit"></i></a> &nbsp;<!--  <a href="delete_service_employee_registration.php?seid=<?php echo $row['id']; ?>&table=<?php echo "services_employee_registration";?>"><i class="zmdi zmdi-delete zmdi-hc-fw" onclick="return confirm('Are you sure you want to delete?')"></i></a>&nbsp; --><a target="_blank" href="service_employee_details.php?id=<?php echo $row['id']; ?>"><i class="zmdi zmdi-local-printshop"  class=""></i></a></td>
                  </tr>
                  <?php  $i++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
   <?php include_once 'admin_includes/footer.php'; ?>
   <script src="js/tables-datatables.min.js"></script>