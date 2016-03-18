$("#contactForm").validator().on("submit", function(event) {
	if (event.isDefaultPrevented()) {
		//handle the invalid form...
		console.log("Unsuccessful.")
		return false;
	} else {
		//everything looks good!
		console.log("Successful.");
		event.preventDefault();
		submitForm();
	}
});

function submitForm() {
	//Initiate Variables with Form Content
	var name = $("#name").val();
	var email = $("#email").val();
	var message = $("#message").val();

	$.ajax({
		type: "POST",
		url: "php/process.php",
		data: "firstname=" + firstname + "&lastname=" + lastname+ "&email=" + email + "&message=" +  message,
		success: function(text) {
			if (text == "success") {
				formSuccess();
			}
		}
	});
}
function formSuccess() {
	$("#msgSubmit").removeClass("hidden");
}