function initDataTable(tableId) {
	$("#" + tableId).DataTable();
}

$(document).ready(function () {
	initDataTable("dataTable1");
	initDataTable("dataTable2");
	initDataTable("dataTable3");
	initDataTable("dataTable4");
	initDataTable("dataTable5");
});
