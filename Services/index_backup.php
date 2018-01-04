<div class="col-md-5 col-sm-12 col-xs-12">
						<div class="your-order">
							<div class="default-title">
								<h2>Your Order</h2>
							</div>
							<ul class="orders-table">
								<li class="table-header clearfix">
									<div class="col">
										<strong>Product</strong>
									</div>
									<div class="col">
										<strong>Total</strong>
									</div>
								</li>
								<?php $cartTotal = 0; $service_tax = 0;
                              		while ($getCartItems = $cartItems->fetch_assoc()) { 
                               		$getSerName= getIndividualDetails('services_group_service_names','id',$getCartItems['service_id']); ?>

                               	<input type="hidden" name="category_id[]" value="<?php echo $getCartItems['service_category_id']; ?>">
                                <input type="hidden" name="sub_cat_id[]" value="<?php echo $getCartItems['service_sub_category_id']; ?>">
                                <input type="hidden" name="group_id[]" value="<?php echo $getCartItems['group_id']; ?>">
                                <input type="hidden" name="service_id[]" value="<?php echo $getCartItems['service_id']; ?>">
                                <input type="hidden" name="service_quantity[]" value="<?php echo $getCartItems['service_quantity']; ?>">
                                <input type="hidden" name="service_price_type_id[]" value="<?php echo $getSerName['service_price_type_id']; ?>">
                                	<?php if($getSerName['service_price_type_id'] == 1) {
			                            $cartTotal1 += $getSerName['service_price']*$getCartItems['service_quantity'];
			                        ?>
									<input type="hidden" name="service_price[]" value="<?php echo $getSerName['service_price']; ?>">
									<?php } elseif($getSerName['price_after_visit_type_id'] == 1) { 
										$cartTotal1 = $cartTotal;
									?>
									<input type="hidden" name="service_price[]" value="<?php echo $getSerName['price_after_visiting']; ?>">
									<?php } else { 
										$cartTotal1 = $cartTotal;
									?>
									<input type="hidden" name="service_price[]" value="<?php echo $getSerName['service_min_price']; ?> - <?php echo $getSerName['service_max_price']; ?>">
									<?php } ?>
                                <input type="hidden" name="service_selected_date[]" value="<?php echo $getCartItems['service_selected_date']; ?>">
                                <input type="hidden" name="service_selected_time[]" value="<?php echo $getCartItems['service_selected_time']; ?>">

								<li class="clearfix">
									<div class="col" style="text-transform:none;">
										<?php echo $getSerName['group_service_name']; ?>
									</div>
									<?php if($getSerName['service_price_type_id'] == 1) {
			                            $cartTotal += $getSerName['service_price']*$getCartItems['service_quantity'];
			                        ?>
									<div class="col second">
										Rs. <?php echo $getSerName['service_price']; ?> * <?php echo $getCartItems['service_quantity'];?>
									</div>
									<?php } elseif($getSerName['price_after_visit_type_id'] == 1) { ?>
									<div class="col second">
										<?php echo $getSerName['price_after_visiting']; ?>
									</div>
									<?php } else { ?>
									<div class="col second">
										Rs. <?php echo $getSerName['service_min_price']; ?> - <?php echo $getSerName['service_max_price']; ?>
									</div>
									<?php } ?>
								</li>
								<?php } ?>
								<input type="hidden" name="sub_total" id="sub_total" value="<?php echo $cartTotal1; ?>">
								<input type="hidden" name="coupon_code_type" id="coupon_code_type" value="">
								<input type="hidden" name="discount_money" id="discount_money" value="">
								<li class="clearfix">
									<div class="col" style="text-transform:none;">
										SubTotal
									</div>
									<div class="col second">
										Rs. <?php echo $cartTotal; ?>
									</div>
								</li>
								<li class="clearfix" id="discount_price">
									<div class="col" style="text-transform:none;">
										Discount Price<span style="color:green">(Coupon Applied Successfully.)</span>
									</div>
									<div class="col second" id="discount_price1">
									</div>
								</li>
								<?php if($getCount->num_rows == 0) { 
									$service_tax += ($getSiteSettingsData['service_tax']/100)*$cartTotal;
								?>
								<li class="clearfix">
									<div class="col" style="text-transform:none;">
										Service Tax(<?php echo $getSiteSettingsData['service_tax'] ; ?>%)
									</div>
									<div class="col second" >
										Rs. <?php echo $service_tax ; ?>
									</div>
								</li>
								<?php } ?>
								<input type="hidden" name="service_tax" id="service_tax" value="<?php echo $service_tax ; ?>">
								<li class="clearfix total">
									<div class="col">
										<strong>Order Total</strong>
									</div>
									<div class="col second" id="cart_total2">
										<strong>Rs. <?php echo $cartTotal+$service_tax; ?></strong>
									</div>
								</li>
								<input type="hidden" name="order_total" id="order_total" value="<?php echo $cartTotal1+$service_tax; ?>">
							</ul>
							<div class="coupon-code">
								<?php if($getCount->num_rows == 0) { ?>
								<div class="form-group">
									<div class="field-group has-feedback has-clear">
								      <input type="text" autocomplete="off" name="coupon_code" style="text-transform:uppercase" id="coupon_code" value="" placeholder="Coupon Code" class="form-control">
								      <span class="form-control-clear icon-cancel-1 form-control-feedback hidden"></span>
								    </div>
									<div class="field-group btn-field">
										<button type="button" class="btn_cart_outine apply_coupon">Apply</button>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
						<!--End Your Order-->
						
						<div class="place-order">
							<div class="default-title">
								<h2>Payment Method</h2>
							</div>
							<div class="payment-options">
								<ul>
									<?php if($getCount->num_rows == 0) { ?>
									<?php $getOnlineDeatils = getIndividualDetails('payment_gateway_options','id',2); ?>
									<?php if($getOnlineDeatils['enable_status'] == 0) { ?>
									<li>
										<div class="radio-option">
											<input type="radio" name="payment_group" id="payment-2" value="2" required>
											<label for="payment-2">Online Payment</label>
										</div>
									</li>
									<?php } } ?>
									<?php $getOnlineDeatils = getIndividualDetails('payment_gateway_options','id',1); ?>
									<?php if($getOnlineDeatils['enable_status'] == 0) { ?>
									<li>
										<div class="radio-option">
											<input type="radio" name="payment_group" id="payment-3" value="1" required>
											<label for="payment-3">COD
											</label>
										</div>
									</li>
									<?php } ?>
								</ul>
							</div>
							<div id="divId">
								<input type="submit" name="submit" class="btn_full" value="Place Order"></i>
							</div>
						</div>
						<!--End Place Order-->

					</div>