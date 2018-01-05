<div id="filters_col">
	<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters <i class="icon-plus-1 pull-right"></i></a>
	<div class="collapse" id="collapseFilters">
		<form id="search_form">
		<div class="filter_type">
        	<?php //$getFoodCusineData = getAllDataWhere('food_cusine_types','lkp_status_id','0'); ?>
        	<?php $getReFilt="SELECT * FROM food_vendors WHERE `lkp_status_id`= '0' AND id IN (SELECT restaurant_id FROM food_products WHERE lkp_status_id = 0 ) GROUP BY cusine_type_id DESC";
        		$getFoodCusineData = $conn->query($getReFilt);

        	?>
			<h6>Cusine Types</h6>
			<ul>
				<?php while($getFoodCusineData1 = $getFoodCusineData->fetch_assoc()) { ?>
				<?php $exp= explode(",", $getFoodCusineData1['cusine_type_id']); ?>
				<?php foreach($exp as $key => $value) { ?>
					<li><label class="checkb check_cousin_type"><?php $getRestCusItem = getIndividualDetails('food_cusine_types','id',$value); ?><?php echo $getRestCusItem['title']; ?><input type="checkbox" class="filter" name="cusine_type[]" value="<?php echo $value; ?>">
					<span class="checkmark1"></span></label></li>
				<?php } ?>
				<?php } ?>
			</ul>
		</div>
		</form>
		<!-- <div class="filter_type">
			<h6>Rating</h6>
			<ul>
				<li><label class="checkb"><input type="checkbox"><span class="checkmark1"></span><span class="rating">
				<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i>
				</span></label></li>
				
				
				<li><label class="checkb"><input type="checkbox"><span class="checkmark1"></span><span class="rating">
				<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
				</span></label></li>
				<li><label class="checkb"><input type="checkbox"><span class="checkmark1"></span><span class="rating">
				<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i>
				</span></label></li>
				<li><label class="checkb"><input type="checkbox"><span class="checkmark1"></span><span class="rating">
				<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
				</span></label></li>
				<li><label class="checkb"><input type="checkbox"><span class="checkmark1"></span><span class="rating">
				<i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i>
				</span></label></li>
			</ul>
		</div> -->
	</div><!--End collapse -->
</div><!--End filters col-->
