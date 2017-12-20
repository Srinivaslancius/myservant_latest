<?php include_once 'admin_includes/main_header.php'; error_reporting(0);?>
<?php $getServiceProviderRegistrations = getAllDataWithActiveRecent('service_provider_registration'); $i=1; ?>
     <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <a href="add_service_provider_registration.php" style="float:right">Add Service Provider Registration</a>
            <h3 class="m-t-0 m-b-5">Service Provider Registration</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <?php $getAllSpecilizationData = getAllDataWithActiveRecent('service_provider_registration');?>
              <div class="col s4 m9 l2">                  

                  <!-- <div class="form-group col-md-4">                    
                    <select id="select-specilization" class="custom-select">
                       <option value="">Select Specalization</option>
                        <?php while ($getSpecilizationData = $getAllSpecilizationData->fetch_assoc()) { ?>
                          <option value="<?php echo $getSpecilizationData['specalization']; ?>"><?php echo $getSpecilizationData['specalization']; ?></option>
                        <?php } ?>
                    </select>                    
                  </div> -->
                </div>
              <div class="clear_fix"></div>
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Created Date</th>
                    <th>Service Provide Type</th>
                    <th>Specialization</th>
                    <th>Status</th>
                    <th>Associate Or Not</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getServiceProviderRegistrations->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['mobile_number'];?></td>
                    <td><?php echo $row['created_at'];?></td>
                    <td><?php $getServiceProviderTypes = getAllDataWithStatus('service_provider_types','0'); while($getServiceProviderTypes1 = $getServiceProviderTypes->fetch_assoc()) { if($row['service_provider_type_id'] == $getServiceProviderTypes1['id']) { echo $getServiceProviderTypes1['service_provider_type']; } } ?></td>
                    <td><?php if($row['service_provider_type_id'] == 1) { $getSpecilazation = getIndividualDetails('service_provider_business_registration','service_provider_registration_id',$row['id']); 
                      if($getSpecilazation['sub_category_id'] == 0) { echo $getSpecilazation['specialization_name']; } else {
                        $getSpecilazationName = getIndividualDetails('services_sub_category','id',$getSpecilazation['sub_category_id']); echo $getSpecilazationName['sub_category_name']; } } else { $getSpecilazation1 = getIndividualDetails('service_provider_personal_registration','service_provider_registration_id',$row['id']); if($getSpecilazation1['sub_category_id'] == 0) { echo $getSpecilazation1['specialization_name']; } else { $getSpecilazationName1 = getIndividualDetails('services_sub_category','id',$getSpecilazation1['sub_category_id']); echo $getSpecilazationName1['sub_category_name']; } }  ?></td>
                    <td><?php if ($row['lkp_status_id']==0) { echo "<span class='label label-outline-success check_active1 open_cursor' data-incId=".$row['id']." data-status=".$row['lkp_status_id']." data-tbname='service_provider_registration'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active1 open_cursor' data-status=".$row['lkp_status_id']." data-incId=".$row['id']." data-tbname='service_provider_registration'>In Active</span>" ;} ?></td>
                    <?php if($row['service_provider_type_id'] == 1) { ?>
                    <td><?php $associateornot = getIndividualDetails('service_provider_business_registration','service_provider_registration_id',$row['id']); if ($associateornot['associate_or_not']==0) { echo "<span class='label label-outline-success check_associate_or_not open_cursor' data-incId=".$row['id']." data-status=".$associateornot['associate_or_not']." data-tbname='service_provider_registration'>Yes</span>" ;} else { echo "<span class='label label-outline-info check_associate_or_not open_cursor' style='border-color:red;color:red' data-status=".$associateornot['associate_or_not']." data-incId=".$row['id']." data-tbname='service_provider_registration'>No</span>" ;} ?></td>
                    <?php } else { ?>
                    <td><?php echo "--" ?> </td>
                    <?php } ?>
                    <td> <a href="edit_service_provider_registration.php?registrationid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-edit"></i></a> &nbsp; <!-- <a href="delete_service_provider_registration.php?registrationid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-delete zmdi-hc-fw" onclick="return confirm('Are you sure you want to delete?')"></i></a> &nbsp; -->&nbsp;<a target="_blank" href="service_provider_details.php?id=<?php echo $row['id']; ?>"><i class="zmdi zmdi-local-printshop"  class=""></i></a></td>
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
   <script type="text/javascript">
    $(".check_active1").click(function(){
          var check_active_id = $(this).attr("data-incId");
          var current_status = $(this).attr("data-status");
          if(current_status == 0) {
            send_status = 1;
          } else {
            send_status = 0;
          }
          $.ajax({
            type:"post",
            url:"mail_status.php",
            data:"check_active_id="+check_active_id+"&send_status="+send_status+"&current_status="+current_status,
            success:function(result){  
              if(result ==1) {
                window.location = "?msg=success";
              }
            }
          });
        });
   </script>
   <script type="text/javascript">
    $(".check_associate_or_not").click(function(){
          var check_associate_or_not_id = $(this).attr("data-incId");
          var check_associate_or_not = $(this).attr("data-status");
          if(check_associate_or_not == 0) {
            send_associate_or_not = 1;
          } else {
            send_associate_or_not = 0;
          }
          $.ajax({
            type:"post",
            url:"change_associate.php",
            data:"check_associate_or_not_id="+check_associate_or_not_id+"&send_associate_or_not="+send_associate_or_not,
            success:function(result){  
              if(result ==1) {
                window.location = "?msg=success";
              }
            }
          });
        });
   </script>