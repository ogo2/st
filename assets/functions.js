$(document).ready(function(){
	let arr = [];
  	$('button').click(function(){
  		if (this.value == '='){
  			var primer = arr.join('');
  			var primer = arr.join('');
  			$('#sosat').attr('placeholder', eval(primer));
  			arr = [];
  		}else if(this.value == 'C'){
			$('#sosat').attr('placeholder', ' ');
  		}else{
			arr.push(this.value);
			var primer = arr.join('');
  			$('#sosat').attr('placeholder', primer);
  		}
  	})
})