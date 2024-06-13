$('.addcart').click(function(e){
	e.preventDefault();
	
	var qty = $(this).value
	$.ajax({
		method: "POST",
		url: "sneaker_detail.php",
		data: {
			"prod_id": prod_id,
			"prod_qty": qty,
			"scope": "add"
		},
		success: function(response){
			if(response == 401){
				alert("Login To Continue");
			}
		}
	});
});