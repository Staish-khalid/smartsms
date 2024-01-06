$(document).ready(function() {
  //tooltip;
  $('.tip').tooltip();
  //datepicker
  $("#inputDate").datepicker();

  //taginput
  $('#source-tags').tagsinput();

  //String to Slug
	$("#title").stringToSlug({
		setEvents: 'keyup keydown blur',
		getPut: '#slug',
		space: '-'
	});

});