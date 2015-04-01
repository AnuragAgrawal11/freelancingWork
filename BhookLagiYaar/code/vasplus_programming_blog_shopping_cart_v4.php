<?php
/*
********================================*****************
* Shopping Cart Version 4.0 
* Written by Vasplus Programming Blog
* Website: www.vasplus.info
* All Copy Rights Reserved by Vasplus Programming Blog
*********=================================****************
*/
session_start(); //Start a session which should always be at the very top of your page as defined here

include("config.php"); //Include the database connection settings file


if(isset($_POST['page']) && !empty($_POST['page']))
{
	if($_POST['page'] == "submit_cart")
	{
		$vpb_fullname = strip_tags($_POST["vpb_fullname"]);
		$vpb_email = strip_tags($_POST["vpb_email"]);
		$vpb_address = strip_tags($_POST["vpb_address"]);
		$vpb_phone = strip_tags($_POST["vpb_phone"]);
					
		$vpb_check_items = mysql_query("select * from `products_added` where `username` = '".mysql_real_escape_string($_SESSION["REMOTE_ADDR"])."'");
			
			
		if(mysql_num_rows($vpb_check_items) < 1)
		{
			?>
			<div id="vpb_shopping_cart_is_currently_empty" align="left">
			Hello There, <br /><br />Your shopping cart is empty at the moment. <br />Please click on the add to cart buttons at the bottom of each item at the left to add an item of your choice to cart.<br /><br />Thanks You...
			</div>
			<?php
		}
		else
		{
			while($vpb_get_all_items = mysql_fetch_array($vpb_check_items))
			{	
				$item_name = strip_tags($vpb_get_all_items["item_added"]);
				$price = strip_tags($vpb_get_all_items["price"]);
				$quantity = strip_tags($vpb_get_all_items["quantity"]);
				$amount = strip_tags($vpb_get_all_items["amount"]);
				
				mysql_query("insert into `products_bought` values('', '".mysql_real_escape_string($vpb_fullname)."', '".mysql_real_escape_string($vpb_email)."', '".mysql_real_escape_string($vpb_address)."', '".mysql_real_escape_string($vpb_phone)."', '".mysql_real_escape_string($item_name)."', '".mysql_real_escape_string($price)."', '".mysql_real_escape_string($quantity)."', '".mysql_real_escape_string($amount)."', '".mysql_real_escape_string(date("d-m-Y"))."')");
			}
			mysql_query("delete from `products_added` where `username` = '".mysql_real_escape_string($_SESSION["REMOTE_ADDR"])."'");
			?>
			<div id="vpb_shopping_cart_is_currently_empty" align="left">
				Congrats <?php echo $vpb_fullname; ?>, <br /><br />Your items have been submitted to us successfully.<br /><br />We will get back to you as soon as possible.<br /><br />Thanks You...<br /><br /><b>Information! Information!! Information!!!</b><br /><br />Well, as you can see, the cart has been submitted successfully. Here you can redirect every user that successfully submits a cart to your payment page or a Paypal website where the user can make payment as you wish.<br /><br />This is only for demonstration purpose and that's it.<br /><br />Have fun...
				</div>
			<?php
		}
		
	}
	elseif($_POST['page'] == "clear_cart") //Clear the entire cart
	{
		mysql_query("delete from `products_added` where `username` = '".mysql_real_escape_string($_SESSION["REMOTE_ADDR"])."'");
		?>
        <div id="vpb_shopping_cart_is_currently_empty" align="left">
    	Hello There, <br /><br />Your shopping cart is empty at the moment. <br />Please click on the add to cart buttons at the bottom of each item at the left to add an item of your choice to cart.<br /><br />Thanks You...
    </div>
        <?php
	}
	elseif($_POST['page'] == "remove_this_item") //Remove a specific item from the cart
	{
		mysql_query("delete from `products_added` where `id` = '".mysql_real_escape_string(strip_tags($_POST["item_id"]))."' and `username` = '".mysql_real_escape_string($_SESSION["REMOTE_ADDR"])."'");
		$vpb_check_items = mysql_query("select * from `products_added` where `username` = '".mysql_real_escape_string($_SESSION["REMOTE_ADDR"])."'");
		if(mysql_num_rows($vpb_check_items) < 1)
		{
			echo '<font style="font-size:0px;">empty</font>';
			?>
			<div id="vpb_shopping_cart_is_currently_empty" align="left">
			Hello There, <br /><br />Your shopping cart is empty at the moment. <br />Please click on the add to cart buttons at the bottom of each item at the left to add an item of your choice to cart.<br /><br />Thanks You...
			</div>
			<?php
		}
		else 
		{
			$vpb_check_itemsTotal = mysql_query("select sum(amount) as `items_total` from `products_added` where `username` = '".mysql_real_escape_string($_SESSION["REMOTE_ADDR"])."'");
					
			$vpb_get_itemsTotal = mysql_fetch_array($vpb_check_itemsTotal);
			echo strip_tags($vpb_get_itemsTotal["items_total"]);
		}
	}
	else //The below code performs Add to Cart process and as well displays the cart status
	{
		//Check for valid item name and item price to add a specified item to cart
		if(isset($_POST['item_name']) && !empty($_POST['item_name']) && isset($_POST['item_price']) && !empty($_POST['item_price']))
		{
			
			//Check if a specified user has already added a specified item to cart by checking the database products_added's table
			$vpb_check_items = mysql_query("select * from `products_added` where `username` = '".mysql_real_escape_string($_SESSION["REMOTE_ADDR"])."' and `item_added` = '".mysql_real_escape_string($_POST['item_name'])."'");
			
			//If the specified user has not already added the specified item to database products_added's table
			if(mysql_num_rows($vpb_check_items) < 1)
			{
				//Add the specified item to the database products_added's table now
				mysql_query("insert into `products_added` values('', '".mysql_real_escape_string($_SESSION["REMOTE_ADDR"])."', '".mysql_real_escape_string($_POST['item_name'])."', '".mysql_real_escape_string($_POST['item_price'])."', '".mysql_real_escape_string("1")."', '".mysql_real_escape_string($_POST['item_price'])."', '".mysql_real_escape_string(date("d-m-Y"))."')");
				
				//Check all the items that the specified user has added to the database products_added's table
				$vpb_check_all_items = mysql_query("select * from `products_added` where `username` = '".mysql_real_escape_string($_SESSION["REMOTE_ADDR"])."' order by `id` asc");
				
				//If no product has been added still, display a no product added to cart message to the specified user
				if(mysql_num_rows($vpb_check_all_items) < 1)
				{
					?>
					<div id="vpb_shopping_cart_is_currently_empty" align="left">
					Hello There, <br /><br />Your shopping cart is empty at the moment. <br />Please click on the add to cart buttons at the bottom of each item at the left to add an item of your choice to cart.<br /><br />Thanks You...
					</div>
					<?php
				}
				else
				{
					//Check the databse products_added's table and sum up the total of all added items to cart
					$vpb_check_itemsTotal = mysql_query("select sum(amount) as `items_total` from `products_added` where `username` = '".mysql_real_escape_string($_SESSION["REMOTE_ADDR"])."'");
					
					//Get all these items
					$vpb_get_itemsTotal = mysql_fetch_array($vpb_check_itemsTotal);
					$groundtotal = ($vpb_get_itemsTotal["items_total"]); //Get total of all added items
					
					?>
					<div align="center">
					<div id="vpb_item_numbers" class="vpb_all_tops">No</div>
					<div id="vpb_item_namess" class="vpb_all_tops" align="left">Item Name</div>
					<div id="vpb_item_prices" class="vpb_all_tops">Price</div>
					<div id="vpb_item_quantities" class="vpb_all_tops">Qty</div>
					<div id="vpb_item_amounts" class="vpb_all_tops">Amount</div>
					<div id="vpb_item_actions" class="vpb_all_tops">Action</div><br clear="all" />
					<?php
					$number_of_items = 1; //Item numbers assigned to 1 to later increment by 1
					
					//Fetch all added items and display to the screen for the specified user
					while($vpb_get_all_items = mysql_fetch_array($vpb_check_all_items))
					{
						$item_id = strip_tags($vpb_get_all_items["id"]);
						$item_name = strip_tags($vpb_get_all_items["item_added"]);
						$price = strip_tags($vpb_get_all_items["price"]);
						$quantity = strip_tags($vpb_get_all_items["quantity"]);
						$amount = strip_tags($vpb_get_all_items["amount"]);
						$date = strip_tags($vpb_get_all_items["date"]);
						?>
						<div id="items_cover<?php echo $item_id; ?>" style="">
						<div id="vpb_item_numbers" style="border-top:0px solid #FFF;"><?php echo $number_of_items++; ?></div>
						<div id="vpb_item_namess" style="border-top:0px solid #FFF;" align="left"><?php echo $item_name; ?></div>
						<div id="vpb_item_prices" style="border-top:0px solid #FFF;">$<?php echo $price; ?></div>
						<div id="vpb_item_quantities" style="border-top:0px solid #FFF;"><?php echo $quantity; ?></div>
						<div id="vpb_item_amounts" style="border-top:0px solid #FFF;">$<?php echo $amount; ?></div>
						<div id="vpb_item_actions" style="padding-bottom:9px; padding-top:9px;border-top:0px solid #FFF;"><a href="javascript:void(0);" style="width:10px; height:10px; padding:3px;padding-left:8px;padding-right:8px; text-decoration:none;" id="vpb_cart_buttons" title="Remove this item" onclick="vpb_remove_this_item('<?php echo $item_id; ?>');">X</a></div>
						<br clear="all" /></div>
						<?php
					}
					?>
					 <div style="border:1px solid #E2E2E2;border:0px solid #FFF;width:495px;margin-top:25px;">
                    <div style="width:295px;float:left; padding-top:1px; font-weight:bold;" align="left">
                    <input type="text" class="vpb_total_field" disabled="disabled" id="new_sum" value="Items Total: $<?php echo $groundtotal; ?>" />
                    </div>
                    <div style="width:100px;float:left;" align="right"><input type="button" value="Clear Cart" title="Clear entire cart items" id="vpb_cart_buttons" onclick="vpb_clear_cart('<?php echo $_SESSION["REMOTE_ADDR"]; ?>');" /></div>
                     <input type="hidden" id="vpb_main_total_cart_items" value="<?php echo $groundtotal; ?>" />
                    <div style="width:100px;float:left;" align="right"><input type="button" value="Checkout" title="Check out to make payment" id="vasplus_p_blog_add_to_cart_button" onclick="vpb_checkout('<?php echo $groundtotal; ?>');" /></div>
                    </div><br clear="all" />
					<?php
				}
			}
			else
			{
				
					$vpb_get_items = mysql_fetch_array($vpb_check_items);
					$item_quantity = strip_tags($vpb_get_items["quantity"])+1;
					$item_amount = strip_tags($vpb_get_items["amount"])+strip_tags($_POST['item_price']);
					
					//Update products_added's table to avoid repetition of a specified item and increment items quantity and amount to display new info
					mysql_query("update `products_added` set `quantity` = '".mysql_real_escape_string($item_quantity)."', `amount` = '".mysql_real_escape_string($item_amount)."' where `username` = '".mysql_real_escape_string($_SESSION["REMOTE_ADDR"])."' and `item_added` = '".mysql_real_escape_string($_POST['item_name'])."'");
				
				
				//Check all added items to cart from the database repetition's table to display on the screen to the specified user
				$vpb_check_all_items = mysql_query("select * from `products_added` where `username` = '".mysql_real_escape_string($_SESSION["REMOTE_ADDR"])."' order by `id` asc");
				
				if(mysql_num_rows($vpb_check_all_items) < 1)// If no item exist then, display a no item message to the specified user
				{
					?>
					<div id="vpb_shopping_cart_is_currently_empty" align="left">
					Hello There, <br /><br />Your shopping cart is empty at the moment. <br />Please click on the add to cart buttons at the bottom of each item at the left to add an item of your choice to cart.<br /><br />Thanks You...
					</div>
					<?php
				}
				else
				{
					//From this point, follow the same comments as specified on the codes above
					$vpb_check_itemsTotal = mysql_query("select sum(amount) as `items_total` from `products_added` where `username` = '".mysql_real_escape_string($_SESSION["REMOTE_ADDR"])."'");
					
					$vpb_get_itemsTotal = mysql_fetch_array($vpb_check_itemsTotal);
					$groundtotal = ($vpb_get_itemsTotal["items_total"]);
					?>
					<div align="center">
					<div id="vpb_item_numbers" class="vpb_all_tops">No</div>
					<div id="vpb_item_namess" class="vpb_all_tops" align="left">Item Name</div>
					<div id="vpb_item_prices" class="vpb_all_tops">Price</div>
					<div id="vpb_item_quantities" class="vpb_all_tops">Qty</div>
					<div id="vpb_item_amounts" class="vpb_all_tops">Amount</div>
					<div id="vpb_item_actions" class="vpb_all_tops">Action</div><br clear="all" />
					<?php
					$number_of_items = 1;
					while($vpb_get_all_items = mysql_fetch_array($vpb_check_all_items))
					{
						$item_id = strip_tags($vpb_get_all_items["id"]);
						$item_name = strip_tags($vpb_get_all_items["item_added"]);
						$price = strip_tags($vpb_get_all_items["price"]);
						$quantity = strip_tags($vpb_get_all_items["quantity"]);
						$amount = strip_tags($vpb_get_all_items["amount"]);
						$date = strip_tags($vpb_get_all_items["date"]);
						?>
						<div id="items_cover<?php echo $item_id; ?>" style="">
						<div id="vpb_item_numbers" style="border-top:0px solid #FFF;"><?php echo $number_of_items++; ?></div>
						<div id="vpb_item_namess" style="border-top:0px solid #FFF;" align="left"><?php echo $item_name; ?></div>
						<div id="vpb_item_prices" style="border-top:0px solid #FFF;">$<?php echo $price; ?></div>
						<div id="vpb_item_quantities" style="border-top:0px solid #FFF;"><?php echo $quantity; ?></div>
						<div id="vpb_item_amounts" style="border-top:0px solid #FFF;">$<?php echo $amount; ?></div>
						<div id="vpb_item_actions" style="padding-bottom:9px; padding-top:9px;border-top:0px solid #FFF;"><a href="javascript:void(0);" style="width:10px; height:10px; padding:3px;padding-left:8px;padding-right:8px; text-decoration:none;" id="vpb_cart_buttons" title="Remove this item" onclick="vpb_remove_this_item('<?php echo $item_id; ?>');">X</a></div>
						<br clear="all" /></div>
						<?php
					}
					?>
					 <div style="border:1px solid #E2E2E2;border:0px solid #FFF;width:495px;margin-top:25px;">
                    <div style="width:295px;float:left; padding-top:1px; font-weight:bold;" align="left">
                    <input type="text" class="vpb_total_field" disabled="disabled" id="new_sum" value="Items Total: $<?php echo $groundtotal; ?>" />
                    </div>
                    <div style="width:100px;float:left;" align="right"><input type="button" value="Clear Cart" title="Clear entire cart items" id="vpb_cart_buttons" onclick="vpb_clear_cart('<?php echo $_SESSION["REMOTE_ADDR"]; ?>');" /></div>
                     <input type="hidden" id="vpb_main_total_cart_items" value="<?php echo $groundtotal; ?>" />
                    <div style="width:100px;float:left;" align="right"><input type="button" value="Checkout" title="Check out to make payment" id="vasplus_p_blog_add_to_cart_button" onclick="vpb_checkout('<?php echo $groundtotal; ?>');" /></div>
                    </div><br clear="all" />
					<?php
				}
			}	
		}
		else
		{
			?>
			<div id="vpb_shopping_cart_is_currently_empty" align="left">
			Hello There, <br /><br />No data is passed at the moment. Please try again or contact the site admin to report this error message if the problem persist.<br /><br />Thanks You...
			</div>
			<?php
		}
	}
}
else
{
	?>
	<div id="vpb_shopping_cart_is_currently_empty" align="left">
	Hello There, <br /><br />No data is passed at the moment. Please try again or contact the site admin to report this error message if the problem persist.<br /><br />Thanks You...
	</div>
	<?php
}
?>