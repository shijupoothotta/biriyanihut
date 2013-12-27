// Validation Rules realshopppe_validation.js
$(document).ready(function() {
			jQuery.validator.addMethod("lettersonly", function(value, element) {
					return this.optional(element) || /^[a-z]+$/i.test(value);
					}, "Please enter only letters without space."); 
					
			// validate contact form on keyup and submit
			$("#form").validate({
			
			 errorElement: "span", 
			 
			 
			//set the rules for the fields
			rules: {
			
				rootid: {
					required: true,
					minlength: 2,
					maxlength:20,
				},
				adminid: {
					required: true,
					minlength: 2,
					maxlength:20,
				},				
				password: {
					required: true,
					minlength: 2,
					maxlength:20,
				}		

				
			},
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element.closest('.control-group').removeClass('error').addClass('success');
				
			}				

		});
	});