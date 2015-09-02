$(document).ready(function() {
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
	}
	$("#owl-my").owlCarousel({
	    slideSpeed : 1000,
	    paginationSpeed : 1000,
	    singleItem:true,
	    autoPlay: 5000,
	    pagination : false
	  });

	var owl = $(".owl-carousel").data('owlCarousel');
	$(".my-controll").click(function() {
		owl.goTo($(this).index());
	});
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
setInterval("slider()",3000);
var slider = function(){
	var i=0;
	$(".icon").eq(i).addClass('active');
	return i+=1;
}
