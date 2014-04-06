var states = new Bloodhound({
		datumTokenizer: function(d) { 
		  return Bloodhound.tokenizers.whitespace(d.val); 
		},
		queryTokenizer: Bloodhound.tokenizers.whitespace,
		local: typeaheadData()
	});

states.initialize();

$('.states').typeahead(
	{ highlight: true }, 
	{ displayKey: 'val', source: states.ttAdapter() }
);

function changeValues(val) {
	$.ajax({
		url: 'js/ajax.php?q_val='+val,
		dataType: 'json',
		success: function(data) {
			
		}
	});
}