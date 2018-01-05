<?php
include "../admin_includes/config.php";
include "../admin_includes/common_functions.php";
include "../admin_includes/food_common_functions.php";

if(isset($_POST['cusine_type']) && $_POST['cusine_type']!='' ) {
    $getFoodVendors="SELECT * FROM food_vendors WHERE cusine_type_id IN (".implode(',', $_POST['cusine_type']).") AND `lkp_status_id`= '$status' AND id IN (SELECT restaurant_id FROM food_products WHERE lkp_status_id = 0) ORDER BY id DESC";
    $getSearchResults=$conn->query($getFoodVendors); 
} else {
    $getSearchResults = getAllRestaruntsWithProducts('0','','');
}
?>
    <input type="hidden" id="get_res_cnt" value="<?php echo  $getReCount = $getSearchResults->num_rows;?>">
    <?php while($getResults = $getSearchResults->fetch_assoc()) { ?>
    <div class="col-md-6 filter_data ajax_result">
        <div class="strip_list wow fadeIn" data-wow-delay="0.1s">
                <div class="row">
                        <div class="col-md-12 col-sm-12">
                                <div class="desc">
                                        <div class="thumb_strip">
                                            <a href="view_rest_menu.php?key=<?php echo encryptPassword($getResults['id']);?>"><img src="<?php echo $base_url . 'uploads/food_vendor_logo/'.$getResults['logo'] ?>" alt=""></a>
                                        </div>
                                        <div class="row">
    									<div class="col-md-7 col-sm-7">
                                        <h4><?php echo $getResults['restaurant_name']; ?></h4>
										</div>
										<div class="col-md-5 col-sm-5">
										 <div class="go_to"style="height:10px">                                       
                                            <a href="view_rest_menu.php?key=<?php echo encryptPassword($getResults['id']);?>" class="btn_1 hidden-xs" style="padding:10px">View Menu</a>                                        
										</div>
										</div>
										</div>
                                        <div class="type"style="text-align:justify">
                                            <?php echo substr($getResults['description'], 0,150); ?>
                                        </div>                                       
                                        <div class="rating">
                                                <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
                                        </div><br>
										<a href="view_rest_menu.php?key=<?php echo encryptPassword($getResults['id']);?>" class="btn_1 visible-xs" style="padding:10px">View Menu</a>
                                </div>
                        </div>
                      
                </div><!-- End row-->
        </div><!-- End strip_list-->
    </div>
    <?php } ?>