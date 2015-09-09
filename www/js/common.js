$(document).ready(function() {
	$(".my-controll:first-child").addClass('active');
	checkKastomize();
	if(window.innerWidth <768) {
		$("#leftmenu").buildMbExtruder({
        position:"left",
        width:300,
        extruderOpacity:.8,
        hidePanelsOnClose:true,
        accordionPanels:true,
        onExtOpen:function(){},
        onExtContentLoad:function(){},
        onExtClose:function(){}
    });
		$(".contact-info").insertBefore(".maps-first");
		$(".contact-info2").insertBefore(".my-form");
	}
	$("#owl-my").owlCarousel({
	    slideSpeed : 1000,
	    paginationSpeed : 1000,
	    singleItem:true,
	    pagination : false,
	    autoPlay: 3000
	  });

	var owl = $(".owl-carousel").data('owlCarousel');
	$(".my-controll").click(function() {
		var self1 = $(this);
		owl.goTo(self1.index());
		$(this).addClass('active');
		$(".slider-main-wrapper .inner-controls .icon").each(function(index) {
		});
	});
	setInterval(function(){
		var owl2 = $(".owl-carousel");
		var current = owl.currentItem;
		$(".my-controll").removeClass('active');
		$(".my-controll").eq(current).addClass('active');

	}, 1500);
});

function checkKastomize(){
	$(".my-check").click(function() {
		var $selfBox = $(this);
		if ($selfBox.is(":checked")) {
			var group = "input:checkbox[name='" + $selfBox.attr("name") + "']";
			$(group).prop("checked", false);
    		$selfBox.prop("checked", true);
		}else {
			$selfBox.prop("checked", false);
		}
	});
}

/*------------------------------
	add active
------------------------------*/

