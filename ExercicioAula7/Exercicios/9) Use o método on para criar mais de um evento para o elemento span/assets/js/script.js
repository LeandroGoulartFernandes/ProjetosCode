$(document).ready(function(){
$('span').on({
		dblclick: function(){
			$(this).css("color", "blue");
		},
		click: function(){
			$(this).css("background-color", "black");
		}
	})

});