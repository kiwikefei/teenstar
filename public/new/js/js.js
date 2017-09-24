/**
 * @author yuyang
 */
$(document).ready(function() {
	$(".fx .wx").click(function() {
		var obj = $(this).next();
		if (obj.css("display") == "none") {
			obj.show();
		} else {
			obj.hide();
		}
	});
	$(".fx span").click(function() {
		$(this).parent().prev().text($(this).text());
	});
}).click(function(e) {
	e = e || window.event;
	if (e.target != $ ('.fx .wx')[0] && e.target != $ ('.fx span')[0]) {
		$('.fx span').hide();
	}
}); 