$(document).ready(function(){
	let arr = [];

	$('form').on( "submit", function( event ) {
		
		event.preventDefault();
		var otv = $('#sosat').val();
		$.ajax({
	        url: '../functions.php',
	        method: 'post',
	        type: 'POST',
	        data: {'otv': otv},
	        success: function(data){
	            console.log(data);
	        },
	        error: function(){
	            console.log('ERROR');
	        }
    	})
	})

  	$('button').click(function(){
  		if (this.value == '='){
  			var primer = arr.join('');
  			console.log(primer);
  			$('#sosat').attr('placeholder', primer + '=' + eval(primer));
  			$('#sosat').attr('value', primer + '=' + eval(primer));
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