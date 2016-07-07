$(function() {
	$('#submit-parent-info').submit(function(event) {
		event.preventDefault();
		$('#parent-info').hide();
		if($('#resideYes').is(':checked')) {
			$('#address').show();
		} else {
			$('#separate-addresses').show();
	}
	});








	function firstYes() {
		$('#address').show();
		$('#parent-info').hide();
		console.log('it is happening');
	}

	function firstNo () {
		$('#separate-addresses').show();
		$('#parent-info').hide();
		console.log('now what');
	}

	function firstChoice() {
		if($('input[type="checkbox"]').change(function() {
			console.log('do it');
			if($('#resideYes').is(':checked')) {
				console.log('now is the time');
				firstYes();
			} else {
				firstNo();
			}
		});
	}
});