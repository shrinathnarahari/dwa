
    $(document).ready(function(){

   /***/
      $(".text").change(function() {
          validate();
      });

  /***Initiates the Calculates function**/
    $('button').click(function() {
        calculate()
    });

  function validate()
  {
      $("#mortgage").validate({
          rules: {
              loan_amt: {
                  required: true,
                  number: true
              },
              interestrate: {
                  required: true,
                  digits: true
              },
              term: {
                 required: true,
                 digits: true
              }
          }
      });
      
  }

    function calculate()
    {
        /**Declaring variables**/
        var  mpayment;
        var loan_amt = $('#loan_amt').val();
        
        var home_value = $('#home_value').val();
        var interestrate =$('#interestrate').val();
        var term = $('#term').val();
    
        /**Validates inout fields***/
  /**      if(loan_amt==""||home_value==""||term == ""){
            $("#error").text("Please fill in the required fields");
            return;
        
        }else if(term < 1 || term >40){
            $("#error1").text("Period should be between 1 and 40");
            return;
        }else {
          $("#error").text("");
          $("#error1").text("");
    **/      
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