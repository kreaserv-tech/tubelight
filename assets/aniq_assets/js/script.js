var point = 0;
var lastBox;

$(document).ready(function(){

	// Lockr.flush();
	// return false;

	var base_url = "http://inoxbrightesttubelight.com/index.php/";

	// if(Lockr.get('user_details')!=undefined){

	// 	$('#username').html(Lockr.get('user_details').username);
	// 	$('#profile').html("<img src='"+Lockr.get('user_details').profile+"' class='profile_img' alt='' />");
	// 	// location.href = base_url+'home/homePage';
	// }

	// var qa = [];
	//  qa["1"] = "2";
	//  qa["2"] = "1";
	//  qa["3"] = "1";
	//  qa["4"] = "1";
	//  qa["5"] = "3";
	//  qa["6"] = "4";
	//  qa["7"] = "2";
	//  qa["8"] = "1";
	//  qa["9"] = "2";
	// qa["10"] = "1";
	// qa["11"] = "1";
	// qa["12"] = "2";
	// qa["13"] = "1";
	// qa["14"] = "4";
	// qa["15"] = "1";
	// qa["16"] = "3";
	// qa["17"] = "3";
	// qa["18"] = "4";
	// qa["19"] = "4";
	// qa["20"] = "4";
	// qa["21"] = "3";
	// qa["22"] = "3";
	// qa["23"] = "4";
	// qa["24"] = "1";
	// qa["25"] = "2";
	// qa["26"] = "1";
	// qa["27"] = "2";
	// qa["28"] = "3";
	// qa["29"] = "1";
	// qa["30"] = "1";
	// qa["31"] = "1";
	// qa["32"] = "3";
	// qa["33"] = "1";
	// qa["34"] = "2";
	// qa["35"] = "1";
	// qa["36"] = "1";
	// qa["37"] = "3";
	// qa["38"] = "3";
	// qa["39"] = "2";
	// qa["40"] = "2";
	// qa["41"] = "4";
	// qa["42"] = "1";
	// qa["43"] = "3";
	// qa["44"] = "4";
	// qa["45"] = "2";
	// qa["46"] = "1";
	// qa["47"] = "2";
	// qa["48"] = "3";
	// qa["49"] = "4";

	$(".submit").click(function(){

		this.disabled = true;

		// var id = $(this).parents(':eq(2)').attr('id');
		// console.log(id);
		
		var parent = $(this).parents(':eq(2)');
		var id = $(this).data('que');

		console.log("question no "+id);

		var radio_nm = 'quiz'+id;

		var val = $("input[type='radio'][name='"+radio_nm+"']:checked").val();

		if(val) { 

			// if (qa[id] == val) {

			// 	point = point+10;

			// } else {

			// 	if (point > 0) {
			// 		point = point-10;
			// 	}
			// }


			// $('.score_text').html(point);
			// $('#continue').css('display','none');


			// console.log("point is "+point);

	        $.ajax({
	        	type:'POST',
	        	url: base_url+'home/insert_score',
	        	data:{
	        		// score: point,
	        		// que_no: id,
	        		id:id,
	        		val:val
	        	},
	        	success:function(result){

	        		var result = JSON.parse(result);

	        		console.log(result);

	        		if(result.status=='success'){

	        			point = point+10;

						parent.fadeOut();
						parent.next().delay(500).fadeIn();

						$('.score_text').html(point);
						$('#continue').css('display','none');

						console.log('plus point'+point);

						// console.log(point);
	        		}else{



						if (point > 0) {
							point = point-10;
						}

						parent.fadeOut();
						parent.next().delay(500).fadeIn();

						$('.score_text').html(point);
						$('#continue').css('display','none');

						console.log('minus point'+point);

						
	        		}
	        	}
	        })

		} else {
			
			this.disabled = false;
			$('.error').html("Select a answer");
			return false;
		}

		$('.error').html('');

	})

	// $('.submit').click(function(){
	// 	$('.error').html("");
	// 	var parent = $(this).parents(':eq(2)');
	// 	var id = parent.attr('id');
	// 	var selectedVal = "";
	// 	var selected = $("#"+id+" :input[type='radio'][name='quiz']:checked");

	// 	if (selected.length > 0) {
	// 		console.log('id is '+id);
	// 		console.log('selected value  is '+selected.val());
	// 		parent.fadeOut();

	// 	    if(qa[id] == selected.val()){

	// 	    	point = point+10;
	// 			parent.next().delay(500).fadeIn();

	// 	    }else{
	// 	    	point = point-10;
	// 	    	parent.next().delay(500).fadeIn();
	// 	    }

	// 	    $('.score_text').html(point);
	// 	 	$('#continue').css('display','none');
	// 		console.log(point);

	// 	}else{

	// 		$('.error').html("Select a answer");
	// 	    // alert('Please select the answer');
	// 	}
		
	// });

	$('.result').click(function(){

		lastBox =  $(this).parents(':eq(2)').attr('id');
		$('.quiz_box').fadeOut();

		if (point > 0) {
			$('.score_text').html(point);
		} else {
			$('.score_text').html('0');
		}

		$('.result-box').delay(500).fadeIn();
		$('#continue').css('display','block');

	});

	$('#continue').click(function(){

		$('.result-box').fadeOut();
		$('#'+lastBox).delay(500).fadeIn();

	});

	$('#update').click(function(){

			var name = $('#name').val();
			var mobile = $('#mobile').val();
			var birthday = $('#birthday').val();
			var email = $('#email').val();

			$.ajax({

	        	type:'POST',
	        	url: base_url+'home/update',
	        	data:{
	        		// social_id:Lockr.get('user_details').social_id,
	        		name:name,
	        		mobile:mobile,
	        		birthday:birthday,
	        		email:email,

	        	},
	        	success:function(result){

	        		// console.log(result);
	        		var result = JSON.parse(result);
	        		if(result.status=='success'){

	        			// var social_id = Lockr.get('user_details').social_id;
	        			// var profile = Lockr.get('user_details').profile;

	        			// Lockr.set('user_details',{social_id:social_id,username:name,mobile:mobile,
	        			// 	birthday:birthday,email:email,profile:profile});

	        			$('#success').html('Update Successfull');
	        		}
	        	},
	        	error:function(error){

	        	}
	        })
	});

});

$(window).load(function(){

	$('.preloader').fadeOut();
})


