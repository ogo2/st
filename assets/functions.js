$(document).ready(function(){
	let arr = [];

	$('form').on( "submit", function( event ) {
		// event.preventDefault();

		var otv = $('#sosat').val();
		console.log(otv);
		$.ajax({
	        url: '../functions.php',
	        type: 'POST',
	        data: otv,
	        success: function(data){
	            console.log(123);
	        },
	        error: function(){
	            console.log('ERROR');
	        }
    	})
		
	})

  	$('button').click(function(){
  		if (this.value == '='){
  			var primer = arr.join('');
  			$('#sosat').attr('placeholder', eval(primer));
  			$('#sosat').attr('value', eval(primer));
  			arr = [];
  		}else if(this.value == 'C'){
			$('#sosat').attr('placeholder', ' ');
			arr = [];
  		}else{
			arr.push(this.value);
			var primer = arr.join('');
  			$('#sosat').attr('placeholder', primer);
  		}
  	})
})