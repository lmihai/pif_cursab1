<!DOCTYPE html>
<html>
<head>
	<title>Survey</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="./model/style.css">
</head>
<body>
<div class="row">
	<div class="col-md-8">
		<form name="form3" method="post" action="Answers.php">
			Name(optional)
			<br/>
			<input type="text" name="name" value=""></input>
			<br/>
			Email(optional)
			<br/>
			<input type="text" name="email" value=""></input>
			<br/>
			<br/>
			<table>
			<tr>
				<td>
				I Bought  ...*
				</td>
				<td>
				It tasted  ...*
				</td>
				<td>
				The Style was ...*
				</td>
			</tr>
			<tr>
				<td>
				<input type="checkbox" name="BreakfastFood" value="Breaskfast" >Breakfast food</input>
				</td>
				<td>
				<input type="checkbox" name="TasteExcellent" value="Excellent" >Excellent</input>
				</td>
				<td>
				<input type="checkbox" name="StyleExcellent" value="Excellent" >Excellent</input>
				</td>
			</tr>
			<tr>
				<td>
				<input type="checkbox" name="BakedGoods" value="BakedGoods" >Baked goods</input>
				</td>
				<td>
				<input type="checkbox" name="TasteGood" value="Good" >Good</input>
				</td>
				<td>
				<input type="checkbox" name="StyleGood" value="Good" >Good</input>
				</td>
			</tr>
			<tr>
				<td>
				<input type="checkbox" name="Cake" value="Cake" >Cake/Cupcakes</input>
				</td>
				<td>
				<input type="checkbox" name="TasteNeutral" value="Neutral" >Neutral</input>
				</td>
				<td>
				<input type="checkbox" name="StyleNeutral" value="Neutral" >Neutral</input>
				</td>
			</tr>
			<tr>
				<td>
				<input type="checkbox" name="Beverage" value="Beverage" >Beverage</input>
				</td>
				<td>
				<input type="checkbox" name="TasteBad" value="Bad" >Bad</input>
				</td>
				<td>
				<input type="checkbox" name="StyleBad" value="Bad" >Bad</input>
				</td>
			</tr>
			<tr>
				<td>
				
				</td>
				<td>
				<input type="checkbox" name="TasteHorrible" value="Horrible" >Horrible</input>
				</td>
				<td>
				<input type="checkbox" name="StyleHorrible" value="Horrible" >Horrible</input>
				</td>
			</tr>

			</table>
			<br/>
			<br />
			How satisfied are you with...*
				<br/>
			<table>
			<tr>
				<td>
				
				</td>
				<td>
				Very Satisfied
				</td>
				<td>
				Satisfied
				</td>
				<td>
				Neutral
				</td>
				<td>
				Unsatisfied
				</td>
				<td>
				Very unsatisfied
				</td>
			</tr>
			<tr>
				<td>
				The purchase you made
				</td>
				<td>
				<input type="radio" name="PurchaseGreat" value="Great" ></input>
				</td>
				<td>
				<input type="radio" name="PurchaseGood" value="Good" ></input>
				</td>
				<td>
				<input type="radio" name="PurchaseNeutral" value="Neutral" ></input>
				</td>
				<td>
				<input type="radio" name="PurchaseBad" value="Bad" ></input>
				</td>
				<td>
				<input type="radio" name="PurchaseHorrible" value="Horrible" ></input>
				</td>
			</tr>
			<tr>
				<td>
				The service you received
				</td>
				<td>
				<input type="radio" name="ServiceGreat" value="Great" ></input>
				</td>
				<td>
				<input type="radio" name="ServiceGood" value="Good" ></input>
				</td>
				<td>
				<input type="radio" name="ServiceNeutral" value="Neutral" ></input>
				</td>
				<td>
				<input type="radio" name="ServiceBad" value="Bad" ></input>
				</td>
				<td>
				<input type="radio" name="ServiceHorrible" value="Horrible" ></input>
				</td>
			</tr>
			<tr>
				<td>
				Our company overall
				</td>
				<td>
				<input type="radio" name="CompanyGreat" value="Great" ></input>
				</td>
				<td>
				<input type="radio" name="CompanyGood" value="Good" ></input>
				</td>
				<td>
				<input type="radio" name="CompanyNeutral" value="Neutral" ></input>
				</td>
				<td>
				<input type="radio" name="CompanyBad" value="Bad" ></input>
				</td>
				<td>
				<input type="radio" name="CompanyHorrible" value="Horrible" ></input>
				</td>
			</tr>
			</table>
			<br/>
			</table>
			<br/>
			<br />
			How likely are you to...*
				<br/>
			<table>
			<tr>
				<td>
				
				</td>
				<td>
				Very Satisfied
				</td>
				<td>
				Satisfied
				</td>
				<td>
				Neutral
				</td>
				<td>
				Unsatisfied
				</td>
				<td>
				Very unsatisfied
				</td>
			</tr>
			<tr>
				<td>
				Buy from us again
				</td>
				<td>
				<input type="radio" name="BuyGreat" value="Great" ></input>
				</td>
				<td>
				<input type="radio" name="BuyGood" value="Good" ></input>
				</td>
				<td>
				<input type="radio" name="BuyNeutral" value="Neutral" ></input>
				</td>
				<td>
				<input type="radio" name="BuyBad" value="Bad" ></input>
				</td>
				<td>
				<input type="radio" name="BuyHorrible" value="Horrible" ></input>
				</td>
			</tr>
			<tr>
				<td>
				Recommend our products to others
				</td>
				<td>
				<input type="radio" name="ProductsGreat" value="Great" ></input>
				</td>
				<td>
				<input type="radio" name="ProductsGood" value="Good" ></input>
				</td>
				<td>
				<input type="radio" name="ProductsNeutral" value="Neutral" ></input>
				</td>
				<td>
				<input type="radio" name="ProductsBad" value="Bad" ></input>
				</td>
				<td>
				<input type="radio" name="ProductsHorrible" value="Horrible" ></input>
				</td>
			</tr>
			<tr>
				<td>
				Recommend our shop to others
				</td>
				<td>
				<input type="radio" name="ShopGreat" value="Great" ></input>
				</td>
				<td>
				<input type="radio" name="ShopGood" value="Good" ></input>
				</td>
				<td>
				<input type="radio" name="ShopNeutral" value="Neutral" ></input>
				</td>
				<td>
				<input type="radio" name="ShopBad" value="Bad" ></input>
				</td>
				<td>
				<input type="radio" name="ShopHorrible" value="Horrible" ></input>
				</td>
			</tr>
			</table>
			<br/>
			<input type="submit" name="takeSurvey" value="Send Survey"></input>
		</form>
	</div>	
		

</div>

</body>
</html>