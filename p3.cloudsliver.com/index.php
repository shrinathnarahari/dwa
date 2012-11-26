<!DOCTYPE html>
<html>

<head>  
<link href="/css/styles.css" rel="stylesheet" type="text/css" media="screen" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
	<!-- JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>

		<!--script type="text/javascript" src="/mortgagecalc.js"></script-->			
<style>  p { color:blue; width:200px; font-size:14px; }  </style> 
 <!--script src="http://code.jquery.com/jquery-latest.js"--></script>
 </head>
 <body>   
 
 <p>Just roll the mouse over me.</p>  
 <p>Or me to see a color change.</p>  
 <script>  $("p").mouseover(function () 
 {    $(this).css("color","red");  });
 
 </script>
 <script>
 
    $(document).ready(function(){

  /***Initiates the Calculates function**/
    $('button').click(function() {
        calculate()
    });
	
	 function calculate()
    {
        /**Declaring variables**/
        var  mpayment;
        var loan_amt = $('#loan_amt').val();
        
        var home_value = $('#home_value').val();
        var interestrate =$('#interestrate').val();
        var term = $('#term').val();
    
        /**Calculates the input fields***/
        var term = term * 12;
		var interestrate = interestrate/100;
		console.log("hello");

        var mpayment = (loan_amt*(interestrate(interestrate+1)*term))/((interestrate+1)*term - 1);
        
      
        //Results
        $('#mpayment').text(mpayment).show;
        $('#term').text(term).show();

        }
    }
     }); 
 </script>
      <div class="wrapper">
            
                <div id="heading">
                <span >Mortgage Calculator</span><br>
                </div>
                <div class="user-input" id="calculator">
                    <small>(*) fields are Required to be filled.</small>
                    <form id="mortgage">
                        <p>Home Value:<br><span id="tick">*</span><input type="text" class="text" id="home_value"name="home_value" value="" size="10" />%</p>
                    <p>Loan Amount<br><span id="tick">*</span><input type="text" class="text"id="loan_amount"name="loan_amount" value="" size="10" /></p>
                    <p>Interest Rate %:<br><span id="tick">*</span><input type="text" class="text"id="interestrate" name="interestrate" value="" size="10" /></p>
                    <p>Loan Term:<br><span id="tick">*</span><input type="text" id="term" class="text"name="term" value="" size="10" /> In Years</p>
                   </form>
                    <div id="error"></div>
                    <div id="error1"></div>
                    <p>
                        <button onclick="calculate()">Calculate</button>
                    </p>
            </div>

            <div id="mortgageresults">
                <h3>Monthly Payment</h3>
                <p>The monthly payment is <b><span id="mpayment"></span></b></p>
                <p>Number of Payments: <b><span id="term"></span></b>, &nbsp;<b><span id="term"></span></b>&nbsp;.</p>
              
                </p>
            </div>
        </div>
    </body>
    <div id="footer">
        <p></p>
<span>Copyright &copy; 2012 | All Rights Reserved. </span>

</div>
 

 </body></html>