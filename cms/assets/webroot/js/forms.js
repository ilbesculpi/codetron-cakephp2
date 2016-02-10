var forms = {
	
	initialize: function() {
		// form validation
		var self = this;
		$('form').each(function(element) {
			var dataValidation = $(this).attr('data-validation');
			if( dataValidation ) {
				var rules = self.rules();
				$(this).bootstrapValidator( rules[dataValidation] );
			}
		});
	},
	
	rules: function() {
		return {
			"form-products": {
				fields: {
					"title": {
						validators: { 
							notEmpty: {}
						}
					},
					"description": {
						validators: {
							notEmpty: {}
						}
					}
				}
			}
		};
	}
	
};