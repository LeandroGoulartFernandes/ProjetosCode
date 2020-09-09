$(function () {

	function mudarProgressBar(percentual){

		$('.button').attr('aria-valuenow', percentual);
		$('.progress-bar').css("width", percentual + "%");

	}

	function tooltip(){
		$('[data-toggle="tooltip"]').tooltip()
	}

	function popover(){
		$('[data-toggle="popover"]').popover();
	}

  	function initFuntions(){

  		popover();
  		tooltip();
  		mudarProgressBar("100");

  	}

  	initFuntions();

})