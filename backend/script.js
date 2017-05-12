$('#dummy-paramter__edit').click(function() {
	$.post('setConfigValueAjax.php', {'key' : 'dummy_parameter', 'value' : $("#dummy_parameter").val()})
	.done(function() { 
		$('#ok').show(30, function() {
			$(this).hide('slow');
		})
	});
});