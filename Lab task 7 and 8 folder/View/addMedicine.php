<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../CSS/storeOfficerRegistration.css">
	<link rel="stylesheet" href="../CSS/storeOfficer.css">
	<script> 
		function checkMedicineName() 
		{
			if (document.getElementById("medicineName").value == "") 
			{
			  	document.getElementById("medicineNameErr").innerHTML = "Medicine name can't be blank";
			  	document.getElementById("medicineNameErr").style.color = "red";
			  	document.getElementById("medicineName").style.borderColor = "red";
			}
			else
			{
			  	document.getElementById("medicineNameErr").innerHTML = "";
				document.getElementById("medicineName").style.borderColor = "black";
			}	
	    }

	    function checkPricePerPiece() 
		{
			if (document.getElementById("pricePerPiece").value == "") 
			{
			  	document.getElementById("pricePerPieceErr").innerHTML = "Price per piece can't be blank";
			  	document.getElementById("pricePerPieceErr").style.color = "red";
			  	document.getElementById("pricePerPiece").style.borderColor = "red";
			}
			else
			{
			  	document.getElementById("pricePerPieceErr").innerHTML = "";
				document.getElementById("pricePerPiece").style.borderColor = "black";
			}	
	    }
	    function checkQuantity()
	    {
	    	if (document.getElementById("quantity").value == "") 
	    	{
			  	document.getElementById("quantityErr").innerHTML = "Quantity can't be blank";
			  	document.getElementById("quantityErr").style.color = "red";
			  	document.getElementById("quantity").style.borderColor = "red";
			}
			else
			{
				document.getElementById("quantityrErr").innerHTML = "";
				document.getElementById("quantity").style.borderColor = "black";
	    	}
	    }
	</script>
</head>
<body>
	<div class="header">
		<?php 
		include 'Head.php';
		require '../Controller/addMedicineValidation.php';
		?>
	</div>

	<div class="row">
		<div class="col-3 menu">
			<?php include 'Account.php';?>
		</div>

		<div class="col-6">
			<form method="post">
				<h1>Add New Medicine</h1>
				<div class="inset">
					<p>
						<label for="medicineName">MEDICINE NAME</label>
						<input type="text" name="medicineName" id="medicineName" onkeyup="checkMedicineName()" onblur="checkMedicineName()" value="<?php echo $medicineName;?>">
					</p>
					<span id="medicineNameErr"></span><span class="error"><?php echo $medicineNameErr;?></span>

				    <p>
						<label for="pricePerPiece">PRICE PER PIECE</label>
						<input type="text" name="pricePerPiece" id="pricePerPiece" onkeyup="checkPricePerPiece()" onblur="checkPricePerPiece()" value="<?php echo $pricePerPiece;?>">
					</p>
					<span id="pricePerPieceErr"></span><span class="error"><?php echo $pricePerPieceErr;?></span>

					<p>
						<label for="quantity">QUANTITY</label>
						<input type="text" name="quantity" id="quantity" onkeyup="checkQuantity()" onblur="checkQuantity()" value="<?php echo $quantity;?>">
					</p>
					<span id="quantityErr"></span><span class="error"><?php echo $quantityErr;?></span>
				</div>

				<p class="p-container">
					<input type="submit" name="submit" value="Add">
				</p>
			</form>
		</div>
	</div>

	<div class="footer">
		<?php include 'Foot.php';?>
	</div>
</body>
</html>