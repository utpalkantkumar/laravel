$(document).ready(function(){
    $('#siteList').DataTable();//table sorting
	
	$('#submitbtn').click(function () {
            if (contact_us_form_submit()){
				//form are validated sucessfully / now form submit
				$('#contactForm').submit();
				
			}else{
				//form field in error
				//alert('hhhhh');
			}
                
        })
	
});

function contact_us_form_submit(){
	 var $returnStatus = 'true';
	 
	 
	 
	 
    if (validate_span('f_name', '', false) == 'false')
        $returnStatus = 'false';
	if (validate_span('l_name', '', false) == 'false')
        $returnStatus = 'false';
	if (validate_span('email', 'Please Enter valid email address', 'email') == 'false')
        $returnStatus = 'false';
	if (validate_span('phone', '', 'mobile') == 'false')
        $returnStatus = 'false';
    if ($returnStatus == 'false')
        return false;
    else {
        return true;
    }
}


function validate_numeric(txtboxid) {
    $('#' + txtboxid).keyup(function() {
        this.value = this.value.replace(/[^0-9\.]/g, '');
    });
}
function validate_span(txtboxid, error_text, input_type) {
    var input = $('#' + txtboxid);
    if (error_text == '')
        error_text = 'Please Enter ' + input.attr('placeholder');
    var numericExpression = /^[1-9]{1}[0-9]{9}$/;
    if (input_type == 'email') {

        var txtemail = $('#' + txtboxid).val().trim();
        if (txtemail == '')
        {
            $('#' + txtboxid).css("border", "1px solid red");
            $('#' + txtboxid).css("color", "red");
            $('#error_' + txtboxid).html(error_text);
            $('#error_' + txtboxid).fadeIn(500);
            //$('#'+txtboxid).focus();
            return "false";
        }
        else if (IsEmail(input.val()) == false) {
            $('#' + txtboxid).css("border", "1px solid red");
            $('#' + txtboxid).css("color", "red");
            $('#error_' + txtboxid).html('Enter Valid Email Address');
            $('#error_' + txtboxid).fadeIn(500);
            //$('#'+txtboxid).focus();
            return "false";
        }
        else {
            $('#' + txtboxid).css("border", "");
            $('#' + txtboxid).css("color", "");
            $('#error_' + txtboxid).html('');
            $('#error_' + txtboxid).fadeOut(500);
        }
    }
    if (input_type == 'mobile') {
        var numericExpression = /^[1-9]{1}[0-9]{9}$/;
        var txtMobileNumber = $('#' + txtboxid).val();
        if (txtMobileNumber == '')
        {
            $('#' + txtboxid).css("border", "1px solid red");
            $('#error_' + txtboxid).html(error_text);
            $('#error_' + txtboxid).addClass('error');
            $('#error_' + txtboxid).fadeIn(500);
            return "false";
        }

        if (!(txtMobileNumber.match(numericExpression))) {
            //console.log('num');
            $('#' + txtboxid).css("border", "1px solid red");
            $('#' + txtboxid).css("color", "red");
            $('#error_' + txtboxid).html('Enter Valid Mobile Number');
            $('#error_' + txtboxid).fadeIn(500);
            return "false";
        }
        else {
            // console.log('cvalid');
            $('#' + txtboxid).css("border", "");
            $('#' + txtboxid).css("color", "");
            $('#error_' + txtboxid).html('');
            $('#error_' + txtboxid).fadeOut(500);
            return "true";
        }
    }
    else {
        if ($('#' + txtboxid).val() == '' || (input.val() == input.attr('placeholder'))) {
            $('#' + txtboxid).css("border", "1px solid red");
            $('#' + txtboxid).css("color", "red");
            $('#error_' + txtboxid).html(error_text);
            $('#error_' + txtboxid).fadeIn(500);
            return "false";
        } else {

            $('#' + txtboxid).css("border", "");
            $('#' + txtboxid).css("color", "");
            $('#error_' + txtboxid).html('');
            $('#error_' + txtboxid).fadeOut(500);
        }
    }

}
function IsEmail(email) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(email)) {
        return true;
    }
    else {
        return false;
    }
}	
	

