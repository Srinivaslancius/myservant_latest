<?php include_once 'admin_includes/main_header.php'; ?>
<?php
$id = $_GET['tid'];
//echo $music_number;
$target_dir = '../uploads/grocery_category_web_images/';
$target_dir1 = '../uploads/grocery_category_app_images/';
$target_dir2 = '../uploads/food_testimonials_images/';

$getImgUnlink = getImageUnlink('category_web_image','grocery_category','id',$id,$target_dir);
$getImgUnlink1 = getImageUnlink('category_app_image','grocery_category','id',$id,$target_dir1);
$getImgUnlink2 = getImageUnlink('category_icon','grocery_category','id',$id,$target_dir2);

$qry = "DELETE FROM grocery_category WHERE id ='$id'";
$result = $conn->query($qry);
if(isset($result)) {
   echo "<script>alert('Category Deleted Successfully');window.location.href='manage_categories.php';</script>";
} else {
   echo "<script>alert('Category Not Deleted');window.location.href='manage_categories.php';</script>";
}
?>