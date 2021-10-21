<!DOCTYPE html>

<head> 
   <title>Order</title>
</head>

<body style="background:url(7.jpg); background-size: 30%" >

<div><br><br> <font color="150570" size="5px">

<?php
  if (isset($_GET['name']))
  {
	  $n=$_GET['name'];
  }
  
  if (isset($_GET['s']))
  {
	   $total=0;
	   $order= "<center><strong> Your Order: <br><br></strong></center>";
	   
	   if (isset($_GET['t1']))
	   {
		   $total +=50;
		   $order=$order."Wintermelon Tall 50 <br>";
	   }
	   
	   if (isset($_GET['t2']))
	   {
		   $total +=70;
		   $order=$order."Wintermelon Grande 70 <br>";
	   }
	   
	   if (isset($_GET['t3']))
	   {
		   $total +=50;
		   $order=$order."Dark Choco Tall 50 <br>";
	   }
	   
	   if (isset($_GET['t4']))
	   {
		   $total +=70;
		   $order=$order."Dark Choco Grande 70 <br>";
	   }
	   
	   if (isset($_GET['t5']))
	   {
		   $total +=50;
		   $order=$order."Matcha Tall 50 <br>";
	   }
	   
	   if (isset($_GET['t6']))
	   {
		   $total +=70;
		   $order=$order."Matcha Grande 70 <br>";
	   }
	   
	   if (isset($_GET['t7']))
	   {
		   $total +=80;
		   $order=$order."Mango Fruit Tea Grande 90<br>";
	   }
	   
	   if (isset($_GET['t8']))
	   {
		   $total +=90;
		   $order=$order."Strawberry Fruit Tea Grande 90<br>";
	   }
	   
	   if (isset($_GET['t9']))
	   {
		   $total +=90;
		   $order=$order."Apple Fruit Tea Grande 90 <br>";
	   }
	   
	   if (isset($_GET['a']))
	   {
		   $total +=10;
		   $order=$order."Cream Cheese 10 <br>";
	   }
	   
	   if (isset($_GET['b']))
	   {
		   $total +=10;
		   $order=$order."Pearl 10<br>";
	   }
	   
	   if (isset($_GET['c']))
	   {
		   $total +=10;
		   $order=$order."Caramel 10 <br>";
	   }
	    
	   if (isset($_GET['d']))
	   {
		   $total +=10;
		   $order=$order."Crystals 10<br>";
	   }
	   
	   
	   
	   
	   echo "<center><strong> Happy Day:".$n. "</strong></center>";
	   echo "<center><strong> <br> <br>".$order. "<br></strong></center>";
	   echo "<center><strong> Total Amount:<br>P".$total. "</strrong></center>";
  }  
  
  ?>
  
  
  
  
</font></div>
</body>
</html>