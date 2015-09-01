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