<div id="filters_col">
	<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters <i class="icon-plus-1 pull-right"></i></a>
	<div class="collapse" id="collapseFilters">
		<form id="search_form">
		<div class="filter_type">
        	<?php $getFoodCusineData = getAllDataWhere('food_cusine_types','lkp_status_id','0'); ?>
			<h6>Cusine</h6>
			<ul>
				<?php while($getFoodCusineData1 = $getFoodCusineData->fetch_assoc()) { ?>
				<li><label class="checkb"><?php echo $getFoodCusineData1['title']; ?><!--  <small>(49)</small>  --><input type="checkbox" <?php if($getFoodCusineData1['id'] == 2) { echo 'checked'; } ?> class="filter" name="cusine_type">
				<span class="checkmark1"></span></label></li>
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
<script type="text/javascript">
	$(document).on('change','.filter',function(){
		var url = "cusine_filters.php";
		$.ajax({
	     type: "POST",
	     url: url,
	     data: $("#search_form").serialize(),
	     success: function(data)
	     {                  
	        $('.filter_data').html(data);
	     }               
	   });
	  return false;
	});
</script>