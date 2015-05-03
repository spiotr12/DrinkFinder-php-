// filter table
$(document).ready(function () {
	// set table and filter
	var table = $('#tableResult');
	var filter = $('#tableFilter');
	var tableArray = table.find('tr').toArray();
	filter.find('input:checkbox').click(function () {
		var clickedCheckbox = $(this);
		var selectedTypes = getSelected();
		var str = "Rows which match filter:\n";
		$.each(tableArray, function (index, value) {
			var rowType = $(this).children("td.type");
			var rowName = $(this).children("td.name");
			if (selectedTypes.length > 0) {
				if ($.inArray(rowType.attr('value'), selectedTypes) == -1) {
					// creates string to perform test
//					str += "value: " + rowName.attr('value') + " -> inArray: " + $.inArray(rowType.attr('value'), selectedTypes) + "\n";
					// hide things which do not match filters			
					$(this).hide();
				} else {
					// show things which match filters
					$(this).show();
				}
			} else {
				// show all if no filter is selected
				$(this).show();
			}
		});
	});
});
/*
 * Returns array of all selected filter 
 */
function getSelected() {
	var filter = $('#tableFilter').find('input:checkbox').toArray();
	var selectedTypes = [];
	var str = "";
	$.each(filter, function (index, value) {
		if ($(this).is(':checked')) {
			selectedTypes.push($(this).attr('value'));
			str += $(this).attr('value') + ", ";
		}
	});
//	alert("Selected types:\n" + selectedTypes);
	return selectedTypes;
}