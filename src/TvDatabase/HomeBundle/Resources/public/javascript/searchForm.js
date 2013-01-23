function bodyLoad()
{
	$( "#startDate" ).datetimepicker();
	$( "#endDate" ).datetimepicker();
	$( "#broadcastType" ).dropdownchecklist({ emptyText: "...", width: 230 });
	$( "#televisions").dropdownchecklist({ emptyText: "...", width: 230 });
	$( "#submitButton").button();
	//$( "#televisions").dropdownchecklist( { emptyText: "Please select tv stations", width: 230 } );
}
