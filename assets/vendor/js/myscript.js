//tombol hapus
$('.tombol-hapus').on('click', function(e) {

	e.preventDefault();

	const href = $(this).attr('href');

	Swal.fire({
		  title: 'Apakah anda yakin?',
		  text: "Data yang dihapus tidak bisa dikembalikan!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Hapus Data!'
		}).then((result) => {
		  if (result.value) {
		  	document.location.href = href;
  		}
	})

});

const activationData = $('.activation-data').data('activation');

if(activationData){
	Swal.fire({
		  title: '<h1><font color=white> Halo ! <br/><font color=lemonchiffon>' + activationData + '</font></h1>',
		  text: 'ourcitrus.id',
		  showConfirmButton: true,
		  timer: 5000,
		  width: 400,
		  padding: '2em',
		  background: '#fff url(https://ourcitrus.id/assets/images/register.gif)',
		  backdrop: `
		    rgba(0,0,123,0.4)
		    url("https://ourcitrus.id/assets/images/ohno2.gif")
		    left top
		    no-repeat
		  `
	});
}

const errorpasswordData = $('.errorpassword-data').data('errorpassword');

if(errorpasswordData){
	Swal.fire({
		  title: '<h1><font color=white> Halo ! <br/><font color=lemonchiffon>' + errorpasswordData + '</font></h1>',
		  text: 'ourcitrus.id',
		  showConfirmButton: true,
		  timer: 5000,
		  width: 400,
		  padding: '2em',
		  background: '#fff url(https://ourcitrus.id/assets/images/error.gif)',
		  backdrop: `
		    rgba(0,0,123,0.4)
		    url("https://ourcitrus.id/assets/images/ohno2.gif")
		    left top
		    no-repeat
		  `
	});
}

const registerData = $('.register-data').data('register');

if(registerData){
	Swal.fire({
		  title: '<h1><font color=white> Halo ! <br/><font color=lemonchiffon>' + registerData + '</font></h1>',
		  text: 'ourcitrus.id',
		  showConfirmButton: true,
		  timer: 5000,
		  width: 400,
		  padding: '2em',
		  background: '#fff url(https://ourcitrus.id/assets/images/register2.gif)',
		  backdrop: `
		    rgba(0,0,123,0.4)
		    url("https://ourcitrus.id/assets/images/register.gif")
		    left top
		    no-repeat
		  `
	});
}

const loginsData = $('.logins-data').data('logins');

if(loginsData){
	Swal.fire({
		  title: '<h1><font color=white> Halo ! <br/><font color=lemonchiffon>' + loginsData + '</font></h1>',
		  text: 'ourcitrus.id',
		  showConfirmButton: true,
		  timer: 5000,
		  width: 400,
		  padding: '2em',
		  background: '#fff url(https://ourcitrus.id/assets/images/success2.gif)',
		  backdrop: `
		    rgba(0,0,123,0.4)
		    url("https://ourcitrus.id/assets/images/success.gif")
		    left top
		    no-repeat
		  `
	});
}