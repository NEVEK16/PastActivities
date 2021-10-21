<!DOCTYPE html>
<html>
<head><title> MilkTea </title></head> 

<body style="background:url(1.jpg); background-size: 100%">
  <div class="header"><font color="F01547" size="10px">
    <center><strong><h1>" Yummy Milktea " </h1></strong></center>
  </font></div>
  
  <form action = order.php method = "GET">
	<td>Enter Your Name:  <td><input type=text name="name">
	<br><br>
	<center>"MENU"</center>
	<br> <br>
	<br>
	<picture>
	<source media="(min-width: 50px)" srcset="2.jpg">
	<img src="2.jpg" style="width:250px;">
	</picture>
	<picture>
	<source media="(min-width: 50px)" srcset="3.jpg">
	<img src="3.jpg" style="width:250px;">
	</picture>
	<picture>
	<source media="(min-width: 50px)" srcset="4.jpg">
	<img src="4.jpg" style="width:220px;">
	</picture>
	<picture>
	<source media="(min-width: 50px)" srcset="5.jpg">
	<img src="5.jpg" style="width:150px;">
	</picture>

	<br><br>
	<input type="checkbox" name="t1" value="w1"> Wintermelon Tall P50<br>
	<input type="checkbox" name="t2" value="w2"> Wintermelon Grande P70<br>
	<input type="checkbox" name="t3" value="d1"> Dark Choco Tall P50<br>
	<input type="checkbox" name="t4" value="d2"> Dark Choco Grande P70<br>
	<input type="checkbox" name="t5" value="m1"> Matcha Tall P50<br>
	<input type="checkbox" name="t6" value="m2"> Matcha Grande P70<br>
	<input type="checkbox" name="t7" value="f1"> Mango Fruit tea Grande P80<br>
	<input type="checkbox" name="t8" value="f2"> Strawberry Fruit Tea Grande P90<br>
	<input type="checkbox" name="t9" value="f3"> Apple Fruit Tea Grande P90<br>
	<br><br>
	
	<center>ADDS ON </center>
	<input type="checkbox" name="a" value="a1"> Cream Cheese P10<br>
	<input type="checkbox" name="b" value="b1"> Pearl P10<br>
	<input type="checkbox" name="c" value="c1"> Caramel P10<br>
	<input type="checkbox" name="d" value="d1"> Crystals P10<br>
	
	<center><input type="submit" name="s" value="Order"></center>
	<br><br>
	
</form>
  
<style> 
form, .content {
  width: 60%;
  margin: 10px auto;
  padding: 30px;
  border: 10px solid black;
  border-radius: 0px 0px 1px 1px;
  text-align: left;
  font-weight: bold;
  font-size: 20px;
}
</style>
</body>
</html>	