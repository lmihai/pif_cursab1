<?php
print ("How likely are you to: ");
print("<br/>");
print (" - buy from us again:");
if(isset($_POST["BuyGreat"]) && $_POST["BuyGreat"]==="Great"){
	print ("very satisfied");
	print("<br/>");
}
if(isset($_POST["BuyGood"]) && $_POST["BuyGood"]==="Good"){
	print ("satisfied");
	print("<br/>");
}
if(isset($_POST["BuyNeutral"]) && $_POST["BuyNeutral"]==="Neutral"){
	print ("neutral");
	print("<br/>");
}if(isset($_POST["BuyBad"]) && $_POST["BuyBad"]==="Bad"){
	print ("unsatisfied");
	print("<br/>");
}if(isset($_POST["BuyHorrible"]) && $_POST["BuyHorrible"]==="Horrible"){
	print ("very unsatisfied");
	print("<br/>");
}
print("<br/>");
print (" - recommend our products to others:");
if(isset($_POST["ProductsGreat"]) && $_POST["ProductsGreat"]==="Great"){
	print ("very satisfied");
	print("<br/>");
}
if(isset($_POST["ProductsGood"]) && $_POST["ProductsGood"]==="Good"){
	print ("satisfied");
	print("<br/>");
}
if(isset($_POST["ProductsNeutral"]) && $_POST["ProductsNeutral"]==="Neutral"){
	print ("neutral");
	print("<br/>");
}if(isset($_POST["ProductsBad"]) && $_POST["ProductsBad"]==="Bad"){
	print ("unsatisfied");
	print("<br/>");
}if(isset($_POST["ProductsHorrible"]) && $_POST["ProductsHorrible"]==="Horrible"){
	print ("very unsatisfied");
	print("<br/>");
}
print("<br/>");
print (" - recommend our shop to others:");
if(isset($_POST["ShopGreat"]) && $_POST["ShopGreat"]==="Great"){
	print ("very satisfied");
	print("<br/>");
}
if(isset($_POST["ShopGood"]) && $_POST["ShopGood"]==="Good"){
	print ("satisfied");
	print("<br/>");
}
if(isset($_POST["ShopNeutral"]) && $_POST["ShopNeutral"]==="Neutral"){
	print ("neutral");
	print("<br/>");
}if(isset($_POST["ShopBad"]) && $_POST["ShopBad"]==="Bad"){
	print ("unsatisfied");
	print("<br/>");
}if(isset($_POST["ShopHorrible"]) && $_POST["ShopHorrible"]==="Horrible"){
	print ("very unsatisfied");
	print("<br/>");
}
