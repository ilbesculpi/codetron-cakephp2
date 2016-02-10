
var admin = {
	
	initialize: function() {
		
		// confirm
		$('[data-confirm]').click(function(e) {
			return confirm( $(this).attr('data-confirm') );
		});
		
		// datetime picker
		$('.datetime').datetimepicker({
			format: 'YYYY-MM-DD HH:mm',
			showClear: true
		});
		
	}
	
};
