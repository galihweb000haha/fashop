	<?php require "views/temp/header.php" ?>

	<link rel="stylesheet" type="text/css" href="assets/css/pages/checkout.style.css">

	<form method="post" action="validation.php">
	<div id="checkout">
		<div class="form-left">
			<h2>Billing Address</h2>
				<ul>
					<li>
						<label for="fname">First name*</label>
						<input type="text" name="fname" id="fname" required>					
					</li>
					<li>
						<label for="lname">Last name*</label>			
						<input type="text" name="lname" id="lname" required>
					</li>
					<li>
						<label for="company">Company name (optional)</label>
						<input type="text" name="company" id="company">
					</li>
					<li>
						<label for="address">Address*</label>
						<input type="text" name="address" id="address" required>
					</li>
					<li>
						<label for="phone">Phone no*</label>
						<input type="number" name="phone" id="phone" required>
					</li>
					<li>
						<label for="email">Email address*</label>
						<input type="text" name="email" id="email" required>
					</li>
				</ul>							
		</div>
		<div class="form-right">
			<h2>Your order</h2>
			<table cellpadding="10" cellspacing="0" border="0">
				<tr>
					<td>PRODUCT</td>
					<td align="right">TOTAL</td>
				</tr>	
				<?php for($i=0; $i < (count($_COOKIE)-1); $i++) : ?>
				<tr>
					<td><?=$_COOKIE['id'.$i]?></td>
					<td align="right">$120.00</td>
				</tr>
				<?php endfor; ?>

				<tr>
					<td>SUBTOTAL</td>
					<td align="right">$120.00</td>
				</tr>
				<tr>
					<td>TOTAL</td>
					<td align="right">$120.00</td>
				</tr>
			</table>
			<h3>Payment method</h3>
			<ul>

				<li><input type="radio" name="payment" value="paypal" id="paypal" required="">
					<label for="paypal">PAYPAL</label>
				</li>
				<li><input type="radio" name="payment" value="dana" id="dana">
					<label for="dana">DANA</label>
				</li>
				<li><input type="radio" name="payment" value="cod" id="cod">
					<label for="cod">CASH ON DELIEVERY</label>
				</li>				
				<li><input type="radio" name="payment" value="credit" id="credit">
					<label for="credit">CREDIT CARD</label>
				</li>
			</ul>
			<button class="btnorder">ORDER NOW</button>
			<div id="viewMore"></div>
		</div>	
	</div>
	</form>
	
	<?php require "views/temp/footer.php" ?>
