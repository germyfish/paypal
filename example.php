<html>
<head>
<title>Product</title>
</head>
<body>
	<div class="product">
	<span class="title">Health Bar 1 : $ 1</span>
	<span class="detail">Healthy</span>
	<form action="create.php" method="post">
	<input type="hidden" value="1" name="productid"/>
	<input type="hidden" value="Health Bar 1" name="itemname"/>
	<input type="hidden" value="1" name="itemprice"/>
	<input type="hidden" value="0" name="shipping"/>
	<input type="hidden" value="0" name="tax"/>
	<input type="hidden" value="USD" name="currencycode"/>
	<input type="hidden" value="Buy Health Bar 1" name="paypaldesc"/>
	<span class="quantity">
	<select name="quantity">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	</select>
	</span>
	<input class="submit" type="submit" value="Buy Now ($1 Each)" name="subbutton"/>
	</form>
	</div>
</body>
</html>