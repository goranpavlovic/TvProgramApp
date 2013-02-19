function bodyLoad()
{
	var $startDatePicker = $( "#startDate" ).datepicker();
	$startDatePicker.change(function(){
		$form = document.getElementsByTagName('form');
		$form = document.getElementById('searchResponseForm');
		$form.submit();
	});
	var $endDatePicker = $( "#endDate" ).datetimepicker();
	$( "#broadcastType" ).dropdownchecklist({ emptyText: "...", width: 230 });
	$( "#televisions").dropdownchecklist({ emptyText: "...", width: 230 });
	$( "#submitButton").button();
	//$( "#televisions").dropdownchecklist( { emptyText: "Please select tv stations", width: 230 } );
}
