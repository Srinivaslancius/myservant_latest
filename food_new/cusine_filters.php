<?php
include "../admin_includes/config.php";
include "../admin_includes/common_functions.php";
if(isset($cusine)) {
    $getFoodVendors="SELECT * FROM food_vendors WHERE cusine_type_id IN (".implode(',', $cusine).")";
    $getFoodVendorsData=$conn->query($getFoodVendors);
    $getFoodVendorsData1=$getFoodVendors->fetch_assoc();

    if(isset($getFoodVendorsData) && is_object($getFoodVendorsData) && count($getFoodVendorsData)) { $i=1;?>
    <?php foreach ($getFoodVendorsData as $key => $product) { ?>       
    <div class="row">
        <div class="col-md-8 col-sm-9">
            <div class="desc">
                <div class="thumb_strip">
                    <a href="view_rest_menu.php?key=<?php echo encryptPassword($product['id']);?>"><img src="<?php echo $base_url . 'uploads/food_vendor_logo/'.$product['logo'] ?>" alt=""></a>
                </div>
                
                <h4><?php echo $product['restaurant_name']; ?></h4>
                <div class="type">
                    <?php echo $product['description']; ?>
                </div>
                
                
                <div class="rating">
                        <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="#0">98 reviews</a></small>)
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-3">
            <div class="go_to">
                <div>
                    <a href="view_rest_menu.php?key=<?php echo encryptPassword($product['id']);?>" class="btn_1">View Menu</a>
                </div>
            </div>
        </div>
</div>
<?php } } } ?>