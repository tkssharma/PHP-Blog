function validateEmail(email){
	var rgx = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(?:[A-Z]{2}|com|org|net|edu|gov|mil|biz|info|mobi|name|aero|asia|jobs|museum)\b/;
	return rgx.test(email);
}

$(document).ready(function(){
	$('#homeDiv').fadeIn('slow');
    $('.carousel').carousel();
	$('#brandName').click(function(){
		$('#tutorialsDiv').hide();
		$('#aboutDiv').hide();
		//$('#navbarButton:visible').click();
		$('.navHeaderCollapse').removeClass('in');
		$('#homeDiv').fadeIn('slow');		
	});
	$('#navHome').click(function(){
		$('#tutorialsDiv').hide();
		$('#aboutDiv').hide();
		//$('#navbarButton:visible').click();
		$('.navHeaderCollapse').removeClass('in');
		$('#homeDiv').fadeIn('slow');		
	});
	$('#navTutorials').click(function(){		
		$('#homeDiv').hide();
		$('#aboutDiv').hide();
		//$('#navbarButton:visible').click();
		$('.navHeaderCollapse').removeClass('in');
		$('#tutorialsDiv').fadeIn('slow');
	});
	$('#navAbout').click(function(){
		$('#homeDiv').hide();
		$('#tutorialsDiv').hide();
		//$('#navbarButton:visible').click();
		$('.navHeaderCollapse').removeClass('in');
		$('#aboutDiv').fadeIn('slow');
	});	
	$('#navContact').click(function(){
		//$('#navbarButton:visible').click();
		$('.navHeaderCollapse').removeClass('in');
		$('#contact').find('.form-group').removeClass('has-error');
	});
	$('#navHomeToTutorials').click(function(){		
		$('#homeDiv').hide();
		$('#aboutDiv').hide();
		$('#tutorialsDiv').fadeIn('slow');
	});		
	$('.alertMessage:visible').fadeIn(3000).delay(3000).fadeOut("slow");
	$('#submitContact').click(function(e){
		var ok = true;		
		
		if($.trim($('#contact-name').val())){
			$('#contact-name').parents('.form-group').removeClass('has-error');
		} else if (ok){ 
			$('#errorMessage').text("please enter your name");
			$('#errorMessageDiv').fadeIn(1000).delay(2000).fadeOut("slow");
			$('#contact-name').parents('.form-group').addClass('has-error');
			$('#contact-name').focus();
			ok = false; 
		}
		
		if(ok && !validateEmail($('#contact-email').val())){
			$('#errorMessage').text("please enter valid email");
			$('#errorMessageDiv').fadeIn(1000).delay(2000).fadeOut("slow");
			$('#contact-email').parents('.form-group').addClass('has-error');
			$('#contact-email').focus();
			ok = false;
		}else{
			$('#contact-email').parents('.form-group').removeClass('has-error');
		}
		
		if($.trim($('#contact-msg').val())){
			$('#contact-msg').parents('.form-group').removeClass('has-error');
		} else if (ok){ 
			$('#errorMessage').text("please enter your message");
			$('#errorMessageDiv').fadeIn(1000).delay(2000).fadeOut("slow");
			$('#contact-msg').parents('.form-group').addClass('has-error');
			$('#contact-msg').focus();
			ok = false; 
		}
		
		if($.trim($('input[name=captcha_code]').val() == $('input[name=captcha]').val() )){
			$('input[name=captcha_code]').parents('.form-group').removeClass('has-error');
		} else if (ok){ 
			$('#errorMessage').text("please enter captcha code");
			$('#errorMessageDiv').fadeIn(1000).delay(2000).fadeOut("slow");
			$('input[name=captcha_code]').parents('.form-group').addClass('has-error');
			$('input[name=captcha_code]').focus();
			ok = false; 
		}
			
		if(!ok){
			if (!e)
			  e = window.event;
			if (e.stopPropagation) {
			  e.stopPropagation();
			}
			else {
			  e.cancelBubble = true;
			}
		}else{
			$(this).attr('type','submit');
			return true;
		}
	});
});