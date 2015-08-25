(function($) {

	if( $('.floating-labels').length > 0 ) floatLabels();
	function floatLabels() {
		var inputFields = $('.floating-labels .contact-label').next();
		console.log(inputFields);
		inputFields.each(function(){
			var singleInput = $(this);
			console.log(singleInput);
			//check if user is filling one of the form fields
			checkVal(singleInput);
			singleInput.on('change keyup', function(){
				checkVal(singleInput);
			});
		});
	}

	function checkVal(inputField) {
		( inputField.val() == '' ) ? inputField.prev('.contact-label').removeClass('float') : inputField.prev('.contact-label').addClass('float');
	};

	$( window ).load(function() {
		$('.listProductsGrid').masonry({
		  itemSelector: '.card'
		});
	});

	$( document ).ready(function() {

		$("#toggle").on('click',function() {
			var $this=$(this);
    			if($this.hasClass('on')){return;};
    			$this.addClass('on');
    			$("#menu").stop().slideToggle(1,function(){
        		$this.removeClass('on');
    			});
			});
		});



})(jQuery);
