const flashData = $('.flash-data').data('flashdata');

if(flashData){
	Swal.fire({
		  title: '<h1><font color=white> Halo ! <br/><font color=lemonchiffon>' + flashData + '</font> </h1>',
		  text: 'ourcitrus.id',
		  showConfirmButton: true,
		  timer: 5000,
		  width: 400,
		  padding: '2em',
		  background: '#fff url(https://ourcitrus.id/assets/images/tenor.gif)',
		  backdrop: `
		    rgba(0,0,123,0.4)
		    url("https://ourcitrus.id/assets/images/leo.gif")
		    left top
		    no-repeat
		  `
	});
}

