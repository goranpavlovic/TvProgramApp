function bodyLoad()
{
	$minDateInput = document.getElementById('minDate');
	$minDate = $minDateInput.value;
	$maxDateInput = document.getElementById('maxDate');
	$maxDate = $maxDateInput.value;
	$startPicker = $( "#startDate" ).datepicker({
		numberOfMonths: 1,
        firstDay: 1,
        dateFormat: 'yy-mm-dd',
        minDate: $minDate,
        maxDate: $maxDate
	});
	$startPicker.change(function(){
		$form = document.getElementsByTagName('form');
		$form = document.getElementById('searchResponseForm');
		$form.submit();
	});
	/*
	var $startDatePicker = $( "#startDate" ).datepicker();
	
	var $endDatePicker = $( "#endDate" ).datetimepicker();
	$( "#broadcastType" ).dropdownchecklist({ emptyText: "...", width: 230 });
	$( "#televisions").dropdownchecklist({ emptyText: "...", width: 230 });
	$( "#submitButton").button();
	*/
	//$( "#televisions").dropdownchecklist( { emptyText: "Please select tv stations", width: 230 } );
}
