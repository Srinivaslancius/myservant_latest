<?php 
include "admin_includes/config.php";
include "admin_includes/common_functions.php";

if (isset($_POST['cart_id'])){

$cartId = $_POST['cart_id'];

$getCartQuantity = getIndividualDetails('grocery_cart','id',$cartId);
$itemPrevQuan = $getCartQuantity['product_quantity'];

$itemPrevQuantity = $itemPrevQuan+1;
    
$updateItems = "UPDATE grocery_cart SET product_quantity = '$itemPrevQuantity' WHERE id = '$cartId' ";
$upCart = $conn->query($updateItems);

if($_SESSION['CART_TEMP_RANDOM'] == "") {
    $_SESSION['CART_TEMP_RANDOM'] = rand(10, 10).sha1(crypt(time())).time();
}
$session_cart_id = $_SESSION['CART_TEMP_RANDOM'];
if(isset($_SESSION['user_login_session_id']) && $_SESSION['user_login_session_id']!='') {
    $user_session_id = $_SESSION['user_login_session_id'];
    $cartItems1 = "SELECT * FROM grocery_cart WHERE (user_id = '$user_session_id' OR session_cart_id='$session_cart_id') AND product_quantity!='0'";
    $cartItems = $conn->query($cartItems1);
} else {
  $cartItems1 = "SELECT * FROM grocery_cart WHERE  product_quantity!='0' AND session_cart_id='$session_cart_id' ";
  $cartItems = $conn->query($cartItems1);
}

$cartTotal = 0;

echo '<table>
		<thead>
			<tr>
				<th>Product</th>
				<th>Quantity</th>
				<th>Total</th>
				<th></th>
			</tr>
		</thead>
		<tbody>';
		while ($getCartItems = $cartItems->fetch_assoc()) { 
			$getProductImage = getIndividualDetails('grocery_product_bind_images','product_id',$getCartItems['product_id']);
			$cartTotal = $getCartItems['product_price']*$getCartItems['product_quantity'];

			$getProductName = getIndividualDetails('grocery_product_name_bind_languages','product_id',$getCartItems['product_id']);
			$img = $base_url . 'grocery_admin/uploads/product_images/'.$getProductImage['image'];
			echo'<tr>
				<td>
					<div class="img-product">
						<img src="'.$img.'" alt="">
					</div>
					<div class="name-product">
						'.$getProductName['product_name'].'
					</div>
					<div class="price">
						 Rs . '.$getCartItems['product_price'].'
					</div>
					<div class="clearfix"></div>
				</td>
				<td>
					<div class="quanlity">
        				<span class="btn-down" onclick="remove_cart_item1('.$getCartItems['id'].')"></span>
        				<input type="text" readonly name="number" id="number" value="'.$getCartItems['product_quantity'].'" min="0" placeholder="Quantity">
        				<span class="btn-up" onclick="add_cart_item1('.$getCartItems['id'].')"></span>
            		</div>
				</td>
				<td>
					<div class="total">
						 Rs . '.$cartTotal.'
					</div>
				</td>
				<td>
					<a href="#" title="">
						<img src="images/icons/delete.png" alt="">
					</a>
				</td>
			</tr>';
		}
		echo'</tbody>
	</table>
	<div class="box-cart style2">
		<div class="btn-add-cart pull-right">
			<a href="shop_checkout.php" style="cursor:pointer">Proceed To Checkout</a>
		</div>								
	</div>
</div>';
}