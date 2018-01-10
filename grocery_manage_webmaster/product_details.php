<?php include_once 'admin_includes/main_header.php'; ?>

      <div class="site-content">
        <?php $getProductsData = getAllDataWithActiveRecent('grocery_products'); $i=1; ?>
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <h3 class="m-t-0 m-b-5 font_sz_view">View Products</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
                
              <table class="table table-striped table-bordered dataTable" id="table-2">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Update Price
                    <th>Upload Images</th>
                    <th>Status</th>
                    <th>Action</th> 
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getProductsData->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['product_name'];?></td>
                    <td><?php $getGroceryCategories = getAllData('grocery_category'); while($getGroceryCategories1 = $getGroceryCategories->fetch_assoc()) {
                      if($row['grocery_category_id'] == $getGroceryCategories1['id']) { echo $getGroceryCategories1['category_name']; } } ?></td>
                    <td><a href="update_price.php?update_price=<?php echo $row['id']; ?>">Update Price</a></td>
                    <td><a href="product_images.php?upload_images=<?php echo $row['id']; ?>">Upload Images</a></td>
                    <td><?php if ($row['lkp_status_id']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['lkp_status_id']." data-tbname='grocery_products'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['lkp_status_id']." data-incId=".$row['id']." data-tbname='grocery_products'>In Active</span>" ;} ?></td>
                    <td><span><a href="edit_manage_products.php?cid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-edit zmdi-hc-fw"></i></a></span></td>
                  </tr>
                  <?php  $i++; } ?>
                </tbody>
                
              </table>
            </div>
          </div>
        </div>
        
        </div>
      </div>
      <div class="site-footer">
        2017 © Cosmos
      </div>
    </div>
    <?php include_once 'admin_includes/footer.php'; ?> 
  </body>
</html>