/*tab-xiaohei-20170817*/
function tab3(nav, bot) {
		jQuery(nav).mouseenter(function() {
		var index = jQuery(this).index();
		jQuery(this).addClass("active").siblings().removeClass("active");
		var bnb = jQuery(this).parent().parent().nextAll(bot);
		bnb.hide();
		bnb.eq(index).show();
	})
}

function tab4(nav, bot) {
		jQuery(nav).mouseenter(function() {
		var index = jQuery(this).index();
		jQuery(this).addClass("focus").siblings().removeClass("focus");
		var bnb = jQuery(this).parent().parent().nextAll(bot);
		bnb.hide();
		bnb.eq(index).show();
	})
}


function tab5(nav, bot) {
		jQuery(nav).mouseenter(function() {
		var index = jQuery(this).index();
		jQuery(this).addClass("on").siblings().removeClass("on");
		var bnb = jQuery(this).parent().parent().nextAll(bot);
		bnb.hide();
		bnb.eq(index).show();
	})
}