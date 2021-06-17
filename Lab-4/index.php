       <?php
	       
	$name="";
	$err_name="";	
	$uname="";
	$err_uname="";	
	$pass="";
	$err_pass="";	
	$cpass="";
	$err_cpass="";
	$email="";
	$err_email="";
    $phone="";
	$err_phone="";	
	$code="";
	$err_code="";	
	$num="";
	$err_num="";	
	$add="";
	$err_add="";	
	$city="";
	$err_city="";	
	$state="";
	$err_state="";	
	$poatal="";
	$err_postal="";
	$day="";
	$err_day="";	
	$month="";
	$err_month="";	
	$year="";
	$err_year="";	
	$gender="";
	$err_gender="";
	$bio="";
	$err_bio="";	
	$aboutus=[];
	$err_aboutus="";
	  
	  $hasError = false;
	  
	  $arr1= array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
     $arr2= array("January","February","March","April","May","June","July","Agust","September","Octobor","November","December");
     $arr3= array("1990","1991","1992","1993","1994","1995","1996","1997","1998","1999","2000","2001","2002","2003","2004","2005","2006","2007","2008","2009","2010","2011","2012","2013","2014","2015","2016","2017","2018","2019","2020");
	  
	  
		  if($_SERVER["REQUEST_METHOD"] == "POST"){
			  
			 if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["name"]) >=6){
			$err_name="Name Required"; 
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		
		
		
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError = true;
		}	
		else{
			$uname=$_POST["username"];
		}
		
		
		
		if(empty($_POST["password"])) { 
       $err_pass="Password Required"; 
       $hasError = true; 
       } 
       else { 
          $pass=$_POST["password"]; 
            } 

 

         if(empty($_POST["confirm_password"])) { 
          $err_cpass="Confirm Password Required"; 
          $hasError = true; 
		  } 
         else { 
	         $cpass=$_POST["confirm_password"]; 
           } 
		
		
			if(empty($_POST["email"])){
			$err_email="Email Required";
			$hasError = true;
		    }	
		    else{
			$uname=$_POST["email"];
			}


			if(empty($_POST["code"]) && empty($_POST["num"])){ 
             $err_phone="Confirm Code and Number"; 
             $hasError = true; 
              } 
            elseif(empty($_POST["code"])){ 
            $err_phone="Confirm Code"; 
            $hasError = true; 
              } 
			  elseif (empty($_POST["num"])){ 
             $err_phone="Confirm Number"; 
           $hasError = true; 
		   } 
             else { 
			 $code=$_POST["code"]; 
			 $number=$_POST["num"]; 
                  } 
				  
		   
			  
			  if(empty($_POST["city"]) && empty($_POST["state"])){ 
             $err_add="Confirm City and State"; 
             $hasError = true; 
              } 
            elseif(empty($_POST["city"])){ 
            $err_add="Confirm City"; 
            $hasError = true; 
              } 
			  elseif (empty($_POST["num"])){ 
             $err_add="Confirm State"; 
           $hasError = true; 
		   } 
             else { 
			 $city=$_POST["city"]; 
			 $state=$_POST["state"]; 
                  } 
			if(empty($_POST["Postal"])){ 
            $err_postal=" Required"; 
           $hasError = true; 
           } 
           else { 
		   $postal=$_POST["postal"]; 
		   } 	  
				  
		  }
			$arr=$_POST["aboutus"];
			 foreach ($arr as $e) 
			 {
                 echo "$e <br>";   
			 }				 

		
		?>



<html>
	<head></head>
	<body>
		<fieldset>
		   <legend><h1> Club Member Registration </h1></legend>
			<form action="" method="post">
				<table >
					<tr>
						<td align="right">Name: </td>
						<td><input type="text" name="name"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td align="right">Username: </td>
						<td><input type="text" name="username"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td align="right">Password: </td>
						<td><input type="password" name="password"></td>
						<td><span><?php echo $err_pass;?></span></td>
					</tr>
					
					
					<tr>
						<td align="right">Confirm Password: </td>
						<td><input type="password" name="password"></td>
						<td><span><?php echo $err_cpass;?></span></td>
					</tr>
					
					<tr>
						<td align="right">Email: </td>
						<td><input type="text" name="email"></td>
						<td><span><?php echo $err_email;?></span></td>
					</tr>
					


                     <tr>
      	    	   	   <td align="right">
      	    	   	   	   Phone:
      	    	   	   </td>
                       <td>
      	    	   	   	   <input type="text" name="code" placeholder="code"> -	<input type="text" name="number" placeholder="Number">
      	    	   	   
			          </td>
					  <td><span><?php echo $err_phone;?></span></td>
      	    	   </tr>

                  <tr>
						<td align="right">Address: </td>
						<td><input type="text" name="address" placeholder="address"></td>
					</tr>

                   <tr>
						<td> </td>
						<td><input type="text" name="city" placeholder="City"> - <input type="text" name="state" placeholder="State"></td>
						<td><span><?php echo $err_add;?></span></td>
					</tr>


                    <tr>
						<td> </td>
						<td><input type="text" name="postal" placeholder="Postal/Zip Code"></td>
						<td><span><?php echo $err_postal;?></span></td>
					</tr>

                   <tr>
					
					 <tr>
      	    	   	   <td align="right">
      	    	   	   	   Birth Date:
      	    	   	   </td>

      	    	   	   <td>
      	    	   	   	        <select name="day">
                                    <option selected="Day" disabled="Day">Day</option>";
      	    	   	   	   	       <?php
                                        foreach ($arr1 as $d) 
                                        {
									    echo "<option>$d</option>";
                                        }
      	    	   	   	   	       ?>
      	    	   	   	        </select>
                                    
      	    	   	   	        <select name="month">
								   <option selected="Month" disabled="Month">Month</option>";
      	    	   	   	   	      <?php
                                        foreach ($arr2 as $m) 
                                        {                                       	
                                        echo "<option>$m</option>";                                        	
                                        }
      	    	   	   	   	       ?>
      	    	   	   	        </select>

      	    	   	   	        <select name="year">
								   <option selected="Year" disabled="Year">Year</option>";
      	    	   	   	   	       <?php
                                        foreach ($arr3 as $y) 
                                        {                                  
                                        echo "<option>$y</option>";    
                                        }
      	    	   	   	   	       ?>
      	    	   	   	        </select>
      	    	   	   	   
      	    	   	          </td>
      	    	           </tr>

					
					

					<tr>
						<td align="right">Gender: </td>
						<td><input type="radio" value="Male" name="gender"> Male <input type="radio" value="Female" name="gender"> Female</td>
						
						
					</tr>
					
					
					
					<tr>
						<td align="right">Where did you hear<br>about us?:  </td>
						<td>
							<input type="checkbox" value="A Friend or Colleague" name="aboutus[]"> A Friend or Colleague<br>
							<input type="checkbox" value="Google" name="aboutus[]"> Google<br>
							<input type="checkbox" value="Blog Post" name="aboutus[]"> Blog Post<br>
							<input type="checkbox" value="News Article" name="aboutus[]"> News Article
						</td>
	
					</tr>
					<tr>
						<td align="right">Bio:  </td>
						<td>
							<textarea cols="22" rows="3" name="bio"></textarea>
						</td>
						
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" value="register"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
	</body>
</html>

