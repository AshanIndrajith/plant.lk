<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="plant_reg.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- Body of Form starts -->
  	<div class="container">
      <form method="post" autocomplete="on" onsubmit="return allLetter()">
       


        




				  

    		<!---Email ID---->
    		<div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>
    		
    			<div class="fr">
    					<input type="email" required name="email" placeholder="Email Id" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->

          


            <!---password---->
    		<div class="box">
          <label for="password" class="fl fontLabel"> Password: </label>
    		
    			<div class="fr">
    					<input type="password" required name="pass" placeholder="password" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--password----->


    		


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
