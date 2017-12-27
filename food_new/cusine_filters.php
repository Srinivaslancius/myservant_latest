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

    <?php while($getResults = $getSearchResults->fetch_assoc()) { ?>
    <div class="col-md-6 filter_data ajax_result">
        <div class="strip_list wow fadeIn" data-wow-delay="0.1s">
                <div class="row">
                        <div class="col-md-8 col-sm-9">
                                <div class="desc">
                                        <div class="thumb_strip">
                                            <a href="view_rest_menu.php?key=<?php echo encryptPassword($getResults['id']);?>"><img src="<?php echo $base_url . 'uploads/food_vendor_logo/'.$getResults['logo'] ?>" alt=""></a>
                                        </div>
                                        
                                        <h4><?php echo $getResults['restaurant_name']; ?></h4>
                                        <div class="type">
                                            <?php echo substr($getResults['description'], 0,150); ?>
                                        </div>
                                        
                                        
                                        <div class="rating">
                                                <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-4 col-sm-3">
                                <div class="go_to">
                                        <div>
                                            <a href="view_rest_menu.php?key=<?php echo encryptPassword($getResults['id']);?>" class="btn_1">View Menu</a>
                                        </div>
                                </div>
                        </div>
                </div><!-- End row-->
        </div><!-- End strip_list-->
    </div>
    <?php } ?>