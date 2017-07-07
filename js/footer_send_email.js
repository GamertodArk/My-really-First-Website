
	function send_email() {
		var correo = $('#emailFooter').val();
		var modalWrap = $('#modalWrap');
		var textModal = $('#textModal');
		var check = $('#check');
		var correo2 = 'email=' + correo;
		var loading = $('#loading');
		modalWrap.slideDown('fast');
		modalWrap.css('display' , 'flex');

		connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		connect.onreadystatechange = function () {
			if (connect.readyState == 4 && connect.status == 200) {
				
				if (connect.responseText == 1) {
					document.getElementById('textModal').innerHTML = 'the email was successfully sent!';
					loading.css('display', 'none');
					check.css('display', '');
					check.removeClass('fa-exclamation-triangle');
					check.addClass('fa-check');
					check.css('color' , '#82FA58');
					textModal.css('color' , '#64FE2E');

				} else if (connect.responseText == 2) {
					document.getElementById('textModal').innerHTML = 'You need to write a email';
					loading.css('display', 'none');
					$('#check').removeClass('fa-check');
					check.css('display' , '');
					check.addClass('fa-exclamation-triangle');
					check.css('color' , '#F7D358' );
					textModal.css('color' , '#FE2E2E');
				}	

			} else if (connect.readyState != 4) {
					document.getElementById('textModal').innerHTML = 'Sending Email...';
					check.css('display' , 'none');
					loading.css('display' , '');
					textModal.css('color' , '#fff');
			} 

		}

		connect.open('POST' , 'app/Processors/footer_send_email.php', true);
		connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		connect.send(correo2);


		$('#cerrar').click(function () {
			modalWrap.slideUp('fast');
		});
	}

	function stopDefault(e) {
		if (e.keyCode == 13) {
			e.preventDefault();
			send_email();
		}
	}