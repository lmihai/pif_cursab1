<?php
print("I bought: ");
if(isset($_POST["BreakfastFood"]) && $_POST["BreakfastFood"]==="Breakfast")
{
	print("Breakfast food ");
}
if(isset($_POST["BakedGoods"]) && $_POST["BakedGoods"] ==="BakedGoods"){
	print ("Baked goods ");
}
if(isset($_POST["Cake"]) && $_POST["Cake"]==="Cake"){
	print("Cake/Cupcakes ");
}
if(isset($_POST["Beverage"]) && $_POST["Beverage"]==="Beverage"){
	print("Beverage ");
}
print ("and it tasted ");

if(isset($_POST["TasteExcellent"]) && $_POST["TasteExcellent"]==="Excellent")
{
	print("EXCELLENT ");
}
if(isset($_POST["TasteGood"]) && $_POST["TasteGood"] ==="Good"){
	print ("GOOD ");
}
if(isset($_POST["TasteNeutral"]) && $_POST["TasteNeutral"]==="Neutral"){
	print("NEUTRAL ");
}
if(isset($_POST["TasteBad"]) && $_POST["TasteBad"]==="Bad"){
	print("BAD ");
}
if(isset($_POST["TasteHorrible"]) && $_POST["TasteHorrible"]==="Horrible"){
	print("HORRIBLE ");
}
print("<br/>");
print("And the service was ");
if(isset($_POST["StyleExcellent"]) && $_POST["StyleExcellent"]==="Excellent")
{
	print("EXCELLENT ");
}
if(isset($_POST["StyleGood"]) && $_POST["StyleGood"] ==="Good"){
	print ("GOOD ");
}
if(isset($_POST["StyleNeutral"]) && $_POST["StyleNeutral"]==="Neutral"){
	print("NEUTRAL ");
}
if(isset($_POST["StyleBad"]) && $_POST["StyleBad"]==="Bad"){
	print("BAD ");
}
if(isset($_POST["StyleHorrible"]) && $_POST["StyleHorrible"]==="Horrible"){
	print("HORRIBLE ");
}