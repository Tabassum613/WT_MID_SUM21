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
     $postal="";
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
     $about=[];
     $err_about="";
     
       $hasError = false;
       
       $arr1= array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
     $arr2= array("January","February","March","April","May","June","July","Agust","September","Octobor","November","December");
     $arr3= array("1990","1991","1992","1993","1994","1995","1996","1997","1998","1999","2000","2001","2002","2003","2004","2005","2006","2007","2008","2009","2010","2011","2012","2013","2014","2015","2016","2017","2018","2019","2020");
        
		    function About($aboutus){
				global $about;
				foreach($about as $a){
					if($a == $aboutus){ return true; }
				}
				return false;
			}
              

              
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                 
				 
				//****************************Name*********************
				
                if(empty($_POST["name"])){
               $err_name="Name Required";
               $hasError = true;
               }
			   elseif (is_numeric($_POST["name"]) ) 
		       {
				$err_name="Number is not allowed";
			    $hasError = true;
		       }
			   elseif(strpos($_POST["name"]," ") && !is_numeric($_POST["name"])){
                $name=$_POST["name"];
				}
				else{
                $err_name="Invalid Name";
				$hasError = true;
                 }
		  
          //**************************Username**********************
		  if (strlen($_POST["uname"])<6) {
                $err_uname="Username must contain at least 6 characters";
				$hasError = true;
            }
            elseif(strpos($_POST["uname"]," ")){
                $err_uname=" Space is not allowed";
				$hasError = true;
            }
            else{
                $uname=$_POST["uname"];
            }
		  
          
          
          
          //*************************Password**********************
		  
		        if(empty($_POST["pass"])){
			     $err_pass="Password Required";
				 $hasError = true;
				 }
	        	elseif(strlen($_POST["pass"])<=8 && is_numeric($_POST["pass"]) && ctype_upper($_POST["pass"]) && ctype_lower($_POST["pass"]) && (strpos($_POST["pass"],'#') || strpos($_POST["pass"],'?')))   
	            {
			     $pass=$_POST["pass"];
		        }
                 else{
					 $err_pass="Required";
					 $hasError = true;
				     }
                   
			       
          //************************Confirm password************************
              if(empty($_POST["cpass"])){
			     $err_cpass="Confirm Password Required";
				 $hasError = true;
				 }
	        	elseif(strlen($_POST["cpass"])<=8 && is_numeric($_POST["cpass"]) && ctype_upper($_POST["cpass"]) && ctype_lower($_POST["cpass"]) && (strpos($_POST["cpass"],'#') || strpos($_POST["cpass"],'?')))   
	            {
			     $cpass=$_POST["cpass"];
		        }
                 else{
					 $err_cpass="Required";
					 $hasError = true;
				     }
         
          
          //**********************Email************************
		      
		       
			if(empty($_POST["email"])){
                  
                $err_email="Email must contain @ and at least one .(dot) after @";
				 $hasError = true;
                 }
                
               else if(strpos($_POST["email"],"@"))
               {
                 if(strpos($_POST["email"],"."))
                 {
                  $email=$_POST["email"];
                }
                else{
                     $err_email="Not accepted";
					 $hasError = true;
                }
               }
              
                else if(strpos($_POST["email"],"."))
               {
                 if(strpos($_POST["email"],"."))
                 {
                   $err_email="use .(dot) after @";
				   $hasError = true;
                 }
                 
               }
               
               else{
                   $err_email="Invalid email";  
				   $hasError = true;
                }
				
              
			  //***************************Phone*************************

               if(empty($_POST["code"]) && empty($_POST["num"]))  
     	       {
			    $err_code="Code & ";
				$err_num="Number Recuired";
			    $hasError = true;
		       }

		       elseif (is_numeric($_POST["code"]) && is_numeric($_POST["num"])) 
		       {
				$code=$_POST["code"];
				$num=$_POST["num"];
			    $hasError = true;
		       }
               elseif (is_numeric($_POST["code"]) && empty($_POST["num"])) 
		       {
				$err_num="Number Recuired";
			    $hasError = true;
		       }
			    elseif (empty($_POST["code"]) && is_numeric($_POST["num"])) 
		       {
				$err_code="Code Recuired";
			    $hasError = true;
		       }
		       elseif (!is_numeric($_POST["code"]) && !is_numeric($_POST["num"])) 
		       {
				$err_phone="Invalid";
			    $hasError = true;
		       }
		        elseif (is_numeric($_POST["code"]) && !is_numeric($_POST["num"])) 
		       {
				$err_num="Number Invalid";
			    $hasError = true;
		       }
			   elseif (!is_numeric($_POST["code"]) && is_numeric($_POST["num"])) 
		       {
				$err_code="Code Invalid";
			    $hasError = true;
		       }
			  

                      
             
                 //*****************Address***********************
				 
				 if(empty($_POST["add"])){
                 $err_add="Address Required";
				 $hasError = true;
                 }
                 else{
                 $add=$_POST["add"];
				 $hasError = true;
                 }
				 
				 
				 
				 //******************City & State***********************
				 
				 if(empty($_POST["city"]) && empty($_POST["state"])){ 
                  $err_city="City and "; 
				  $err_state="State Required";
				  $hasError = true;
                  } 
                 else if(empty($_POST["city"])){ 
                 $err_city="Confirm City"; 
				 $hasError = true;
                  } 
                 else if (empty($_POST["state"])){ 
                 $err_state="Confirm State"; 
				 $hasError = true;
				 } 
                else { 
                $city=$_POST["city"]; 
                $state=$_POST["state"]; 
				$hasError = true;
                  } 
                 
				  
				  
				  
				//************************Postal/Zip**************************
				  
               if(empty($_POST["postal"])){ 
                   $err_postal="Zip Required"; 
				   $hasError = true;
                 } 
                 else{ 
                    $postal=$_POST["postal"]; 
					$hasError = true;
                     }        
			 
             //*********************Day-Month-Year*****************************

             if (!isset($_POST["day"]))
            {
            $err_day="Day must be selected";
			$hasError = true;
            }
            else
            {
            $day=$_POST["day"];
			$hasError = true;
            }
            if (!isset($_POST["month"]))
            {
                $err_month="Month must be selected";
				$hasError = true;
            }
            else
            {
            $month=$_POST["month"];
			$hasError = true;
            }

            if (!isset($_POST["year"]))
            {
            $err_year="Year must be selected";
			$hasError = true;
            }
            else
            {
            $year=$_POST["year"];
			$hasError = true;
            }
             			 
					  
			//**********************Gender***************
			
			if(!isset($_POST["gender"])){
				$err_gender="Gender Required";
				$hasError = true;
			}
				else{
				$gender=$_POST["gender"]; 
				$hasError = true;
            }        
			
			
			//*********************About***************************
			 
			if(!isset($_POST["about"]))
            {
            $err_about="At least one source have to be ticked";
			$hasError = true;
            }
            else
            {
            $about=$_POST["about"];
			$hasError = true;
            }
			
			//************************Bio*******************************
			
			
			if (empty($_POST["bio"]))
            {
                $err_bio="Bio Required";
				$hasError = true;
            }
            else
            {
                $bio=$_POST["bio"];
				$hasError = true;
            }
			   
			}
          
          ?>



      <html>
       <head>
	    <title>Form Submission</title>
	   </head>
       <body>
          <fieldset>
             <legend><h1> Club Member Registration </h1></legend>
               <form action="" method="post">
                    <table >
                         <tr>
                              <td align="right">Name: </td>
                              <td><input type="text" name="name" value="<?php echo $name; ?>" size="25"></td>
                              <td><span><?php echo $err_name;?></span></td>
                              
                         </tr>
                         <tr>
                              <td align="right">Username: </td>
                              <td><input type="text" name="uname" value="<?php echo $uname; ?>" size="25"></td>
                              <td><span><?php echo $err_uname;?></span></td>
                         </tr>
                         <tr>
                              <td align="right">Password: </td>
                              <td><input type="password" name="password" value="<?php echo $pass; ?>" size="25"></td>
                              <td><span><?php echo $err_pass;?></span></td>
                         </tr>
                         
                         
                         <tr>
                              <td align="right">Confirm Password: </td>
                              <td><input type="password" name="confirm password" value="<?php echo $cpass; ?>" size="25"></td>
                              <td><span><?php echo $err_cpass;?></span></td>
                         </tr>
                         
                         <tr>
                              <td align="right">Email: </td>
                              <td><input type="text" name="email" value="<?php echo $email; ?>" size="25"></td>
                              <td><span><?php echo $err_email;?></span></td>
                         </tr>
                         


                     <tr>
                       <td align="right">
                            Phone:
                       </td>
                          <td><input type="text" name="code" placeholder="code" value="<?php echo $code; ?>" size="4">-
						  <input type="text" name="num" placeholder="Number" value="<?php echo $num; ?>" size="14">
                       
                         </td>
                           <td><span><?php echo $err_phone;?></span><span><?php echo $err_code;?></span><span><?php echo $err_num;?></span></td>
                  </tr>

                  <tr>
                              <td align="right">Address: </td>
                              <td><input type="text" name="add" placeholder="address" value="<?php echo $add; ?>" size="25"></td>
							  <td><span><?php echo $err_add;?></span></td>
                         </tr>

                         <tr>
                              <td></td>
                              <td><input type="text" name="city" placeholder="City" value="<?php echo $city; ?>" size="9">-
							  <input type="text" name="state" placeholder="State" value="<?php echo $state; ?>" size="9"></td>
                              <td><span><?php echo $err_city;?></span><span><?php echo $err_state;?></span></td>
                         </tr>


                          <tr>
                              <td> </td>
                              <td><input type="text" name="postal" placeholder="Postal/Zip Code" value="<?php echo $postal; ?>" size="25"></td>
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
                                        {       if($day == $d)
                                                   echo "<option selected>$d</option>";
											    else
                                                   echo "<option>$d</option>"; 													
                                        }
                                     ?>
                                 </select>
                                    
                                 <select name="month">
                                           <option selected="Month" disabled="Month">Month</option>";
                                    <?php
                                        foreach ($arr2 as $m) 
                                        {                                            
                                                if($month == $m)
                                                   echo "<option selected>$m</option>";
											    else
                                                   echo "<option>$m</option>";                                            
                                        }
                                     ?>
                                 </select>

                                 <select name="year">
                                           <option selected="Year" disabled="Year">Year</option>";
                                     <?php
                                        foreach ($arr3 as $y) 
                                        {                                  
                                                if($year == $y)
                                                   echo "<option selected>$y</option>";
											    else
                                                   echo "<option>$y</option>";    
                                        }
                                     ?>
                                 </select>
                            
                              </td>
                               <td><?php echo "$err_day"."  "."$err_month"."  "."$err_year"?></td>
                          </tr>

                         
                         

                         <tr>
                              <td align="right">Gender: </td>
                              <td><input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "checked"?> > Male 
                                  <input type="radio" name="gender" value="Female" <?php if($gender == "Female") echo "checked"?> > Female</td>
                              <td><span><?php echo $err_gender;?></span></td>
                              
                         </tr>
                         
                         
                         
                         <tr>
                              <td align="right">Where did you hear<br>about us?:  </td>
                              <td>
                                   <input type="checkbox" value="A Friend or Colleague" <?php if(About("A Friend or Colleague")) echo "checked" ?> name="about[]"> A Friend or Colleague<br>
                                   <input type="checkbox" value="Google" <?php if(About("Google")) echo "checked" ?> name="about[]"> Google<br>
                                   <input type="checkbox" value="Blog Post" <?php if(About("Blog Post")) echo "checked" ?> name="about[]"> Blog Post<br>
                                   <input type="checkbox" value="News Article" <?php if(About("News Article")) echo "checked" ?> name="about[]"> News Article
                              </td>
                              <td><span><?php echo $err_about;?></span></td>
                         </tr>
                         <tr>
                              <td align="right">Bio:  </td>
                              <td> <textarea cols="25" rows="3" name="bio"><?php echo $bio; ?></textarea></td>
                              <td><span><?php echo $err_bio;?></span></td>
                         </tr>
                         <tr>
                              <td align="center" colspan="2"><input type="submit" value="register"></td>
                         </tr>
                         
                    </table>
               </form>
          </fieldset>
     </body>
    </html>