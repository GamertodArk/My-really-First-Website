function send_form() {
	var name = $('#name').val();
	var lastName = $('#lastName').val();
	var email = $('#email').val();
	var subject = $('#subject').val();
	var hidden = $('#hidden').val();
	var messageForm = $('#messageForm').val();
	var data = 'name=' + name + '&lastName=' + lastName + '&email=' + email + '&subject=' + subject
	 + '&hidden='+ hidden +'&messageForm=' + messageForm; 

	var ajax = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4 && ajax.status == 200) {
			if (ajax.responseText == 1) {

				$('#message').removeClass('form_loading');
				$('#message').removeClass('form_error');
				$('#message').addClass('form_sent');
				document.getElementById('message').innerHTML = '<p>Form successfully sent!</p>';

				document.getElementById('name').value = '';
				document.getElementById('lastName').value = '';
				document.getElementById('email').value = '';
				document.getElementById('subject').value = '';
				document.getElementById('messageForm').value = '';


			} else if (ajax.responseText == 2) {
				$('#message').removeClass('form_loading');
				$('#message').removeClass('form_sent');
				$('#message').addClass('form_error');
				document.getElementById('message').innerHTML = '<p>You need to fill all the spaces!</p>';

			}
		} else {

			$('#message').removeClass('form_sent');
			$('#message').removeClass('form_error');
			document.getElementById('message').innerHTML = '<p>Sending form....</p>';
			$('#message').addClass('form_loading');
		}
	}

	ajax.open('POST' , 'app/controllers/contactControllers.php',  true);
	ajax.setRequestHeader('Content-Type' , 'application/x-www-form-urlencoded');
	ajax.send(data);
}

