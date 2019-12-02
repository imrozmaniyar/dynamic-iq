/*
Name: 			Tables / Ajax - Examples
Written by: 	 - (http://)
Theme Version: 	1.4.1
*/

(function( $ ) {

	'use strict';

	var datatableInit = function() {

		var $table = $('#datatable-ajax');
		$table.dataTable({
			bProcessing: true,
			sAjaxSource: $table.data('url')
		});

	};

	$(function() {
		datatableInit();
	});

}).apply( this, [ jQuery ]);
