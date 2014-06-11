$().ready(function() {
	var date = $('.gbwedding-date');
		pull 		= $('.menu-mb-link');
		menu 		= $('#menu-menu');
		menuHeight	= menu.height();	

    date.arctext({
    	radius: 640,
    	dir: -1
    });

    $(pull).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});

	$(window).resize(function(){
		var w = $(window).width();
		if(w > 320 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}
	});
});
