function bodyLoad()
{
	$( "#startDate" ).datetimepicker();
	$( "#endDate" ).datetimepicker();
	$( "#broadcastType" ).dropdownchecklist({ emptyText: "Choose ...", width: 230 });
	$( "#televisions").dropdownchecklist({ emptyText: "Choose ...", width: 230 });
	$( "#submitButton").button();
	//$( "#televisions").dropdownchecklist( { emptyText: "Please select tv stations", width: 230 } );
}