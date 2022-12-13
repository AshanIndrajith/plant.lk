<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="plant_login.css" type="text/css" rel="stylesheet">
    <link href="styleother.css" type="text/css" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

  <div class="back"></div>
    <nav class="nav-main">
      <a class="nav-a" href="#">About</a>
      <a class="nav-a" href="#">Works</a>
      <a class="nav-a" href="#">Partners</a>
      <a class="nav-a" href="#">Price</a>
      <a class="nav-a" href="#">Contacts</a>
      <a class="nav-a" href="login.php">Login</a>
      <a class="nav-a" href="registration.php">Register</a>
    </nav><br><br>


    <!-- Body of Form starts -->
  	<div class="container">
      <form method="post" autocomplete="on" onsubmit="return allLetter()">
        <!--First name-->
    		<div class="box">
          <label for="firstName" class="fl fontLabel"> First Name: </label>
    			
    			<div class="fr">
    					<input type="text" id="firstName" placeholder="First Name"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--First name-->


        <!--Second name-->
    		<div class="box">
          <label for="secondName" class="fl fontLabel"> Seconed Name: </label>
    			
    			<div class="fr">
    					<input type="text" required id="secondName"
              placeholder="Last Name" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Second name-->


			 <!--last name-->
			 <div class="box">
				<label for="lastName" class="fl fontLabel"> last Name: </label>
					  
					  <div class="fr">
							  <input type="text" required id="lname"
					placeholder="Last Name" class="textBox">
					  </div>
					  <div class="clr"></div>
				  </div>
				  <!--last name-->




				  <br><br>


				  <!--First address-->
				  <div class="box">
					<label for="first_line" class="fl fontLabel"> Address line 01: </label>
						  
						  <div class="fr">
								  <input type="text" id="firstline" placeholder="Address line 01"
						class="textBox" autofocus="on" required>
						  </div>
						  <div class="clr"></div>
					  </div>
					  <!--First address-->
		  
		  
				  <!--Second address-->
					  <div class="box">
					<label for="secondaddress" class="fl fontLabel"> Address line 02: </label>
						  
						  <div class="fr">
								  <input type="text" required id="secondline"
						placeholder="Address line 02" class="textBox">
						  </div>
						  <div class="clr"></div>
					  </div>
					  <!--Second address-->
		  
		  
					   <!--last address-->
					   <div class="box">
						  <label for="thirdlin" class="fl fontLabel"> City: </label>
								
								<div class="fr">
										<input type="text" required id="thirdline"
							  placeholder="Address line 03 " class="textBox">
								</div>
								<div class="clr"></div>
							</div>
							<!--last address-->

						<br>
						<br>

    		


    		<!---Email ID---->
    		<div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>
    		
    			<div class="fr">
    					<input type="email" required name="email" placeholder="Email Id" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->

            <!---Date of birth---->
    		<div class="box">
                <label for="email" class="fl fontLabel"> date of birth: </label>
                  
                      <div class="fr">
                              <input type="date" required name="birth" placeholder="xxxx-xx-xx" class="textBox">
                      </div>
                      <div class="clr"></div>
                  </div>
                  <!--Date of birth----->



    		<!---Gender----->
    		<div class="box radio">
          <label for="gender" class="fl fontLabel"> Gender: </label>
    				<input type="radio" name="Gender" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
    				<input type="radio" name="Gender" value="Female" required> Female
    		</div>
    		<!---Gender--->


            <!---password---->
    		<div class="box">
          <label for="password" class="fl fontLabel"> Password: </label>
    		
    			<div class="fr">
    					<input type="password" required name="pass" placeholder="password" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--password----->


    		<!--Terms and Conditions------>
    		<div class="box terms">
    				<input type="checkbox" name="Terms" required> &nbsp; I accept the terms and conditions
    		</div>
    		<!--Terms and Conditions------>



    		<!---Submit Button------>
    		<div class="box" style="background: ##f1f2ed">
    				<input type="Submit" name="Submit" class="submit" value="SUBMIT">
    		</div>
    		<!---Submit Button----->
      </form>
  </div>
  <!--Body of Form ends--->




 <!--Name validation--->
 <script>
 
	function allLetter()
  {
	 
   var letters = /^[A-Za-z]+$/;
   var lettersandnum = /^[0-9A-Za-z]+$/;

   var name = document.getElementById('firstName').value;
   var sname=document.getElementById('secondName').value;
   var lname=document.getElementById('lname').value;

   var firstline = document.getElementById('firstline').value;
   var secondline = document.getElementById('secondline').value;
   var thirdline = document.getElementById('thirdline').value;







   if((name.match(letters)) && (sname.match(letters)) && (lname.match(letters)))
     {
		   
          
		 			 if((firstline.match(lettersandnum)) && (secondline.match(lettersandnum)) && (thirdline.match(lettersandnum)))
    						 {
		   
       						   return true;
	  
    						 }
  								 else
   							  {
   								  alert("Dont't include Special characters");
    							  return false;
   							  }
	  
     }
   else
     {
		 
     alert("Dont't include Special characters and numbers");
     return false;
     }
  }
    </script>
    
  </body>
</html>
