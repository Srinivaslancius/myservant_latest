<?php
include_once('../admin_includes/config.php');
include_once('../admin_includes/common_functions.php');
if(!empty($_POST["grocery_category_id"])) {
	
	$query ="SELECT * FROM grocery_sub_categories WHERE lkp_status_id = 0 AND grocery_category_id = '" . $_POST["grocery_category_id"] . "'";
	$results = $conn->query($query);
?>
	<option value="">Select Sub Category</option>
<?php
	foreach($results as $sub_category) {
?>
	<option value="<?php echo $sub_category["id"]; ?>"><?php echo $sub_category["sub_category_name"]; ?></option>
<?php
	}
}
?>
