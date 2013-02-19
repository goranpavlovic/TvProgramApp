function bodyLoad()
{
	
	$minDateInput = document.getElementById('minDate');
	$minDate = $minDateInput.value;
	$maxDateInput = document.getElementById('maxDate');
	$maxDate = $maxDateInput.value;
	$startPicker = $( "#startDate" ).datetimepicker({
		numberOfMonths: 1,
        firstDay: 1,
        dateFormat: 'yy-mm-dd',
        minDate: $minDate,
        maxDate: $maxDate,
	});
	$endPicker = $( "#endDate" ).datetimepicker({
		numberOfMonths: 1,
        firstDay: 1,
        dateFormat: 'yy-mm-dd',
        minDate: $minDate,
        maxDate: $maxDate,
	});
	
	$( "#broadcastType" ).dropdownchecklist({ emptyText: "...", width: 230 });
	$( "#televisions").dropdownchecklist({ emptyText: "...", width: 230 });
	$( "#submitButton").button();
	//$( "#televisions").dropdownchecklist( { emptyText: "Please select tv stations", width: 230 } );
}

