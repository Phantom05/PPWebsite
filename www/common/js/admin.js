$(function(){
	$("td").mouseover(function(){
		$("td").css("background-color", "rgba(0, 0, 0, 0.2)");
		$("td").css("color", "#FFFFFF");
	}).mouseout(function(){
		$("td").css("background-color", "rgb(255, 255, 255)");
		$("td").css("color", "#000000");
	});
});