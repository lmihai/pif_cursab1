<?php
print ("How satisfied are you with: ");
print("<br/>");
print (" - the purchase you made:");
if(isset($_POST["PurchaseGreat"] ) && $_POST["PurchaseGreat"]=="Great"){
	print ("very satisfied");
	print("<br/>");
}
if(isset($_POST["PurchaseGood"] ) && $_POST["PurchaseGood"]==="Good"){
	print ("satisfied");
	print("<br/>");
}
if(isset($_POST["PurchaseNeutral"] ) && $_POST["PurchaseNeutral"]==="Neutral"){
	print ("neutral");
	print("<br/>");
}if(isset($_POST["PurchaseBad"] ) && $_POST["PurchaseBad"]==="Bad"){
	print ("unsatisfied");
	print("<br/>");
}if(isset($_POST["PurchaseHorrible"] ) && $_POST["PurchaseHorrible"]==="Horrible"){
	print ("very unsatisfied");
	print("<br/>");
}
print("<br/>");
print (" - the service you received:");
if(isset($_POST["ServiceGreat"]) && $_POST["ServiceGreat"]==="Great"){
	print ("very satisfied");
	print("<br/>");
}
if(isset($_POST["ServiceGood"]) && $_POST["ServiceGood"]==="Good"){
	print ("satisfied");
	print("<br/>");
}
if(isset($_POST["ServiceNeutral"] ) && $_POST["ServiceNeutral"]==="Neutral"){
	print ("neutral");
	print("<br/>");
}if(isset($_POST["ServiceBad"]) && $_POST["ServiceBad"]==="Bad"){
	print ("unsatisfied");
	print("<br/>");
}if(isset($_POST["ServiceHorrible"]) && $_POST["ServiceHorrible"]==="Horrible"){
	print ("very unsatisfied");
	print("<br/>");
}
print("<br/>");
print (" - our company overall:");
if(isset($_POST["CompanyGreat"]) && $_POST["CompanyGreat"]==="Great"){
	print ("very satisfied");
	print("<br/>");
}
if(isset($_POST["CompanyGood"]) && $_POST["CompanyGood"]==="Good"){
	print ("satisfied");
	print("<br/>");
}
if(isset($_POST["CompanyNeutral"]) && $_POST["CompanyNeutral"]==="Neutral"){
	print ("neutral");
	print("<br/>");
}if(isset($_POST["CompanyBad"]) && $_POST["CompanyBad"]==="Bad"){
	print ("unsatisfied");
	print("<br/>");
}if(isset($_POST["CompanyHorrible"]) && $_POST["CompanyHorrible"]==="Horrible"){
	print ("very unsatisfied");
	print("<br/>");
}