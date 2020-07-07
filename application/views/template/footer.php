	<!-- jQuery -->
	<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?= base_url() ?>assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
	<!-- sweetalert -->
	<script src="<?= base_url() ?>assets/sweet/sweetalert2.all.min.js"></script>
	<!-- Waypoints -->
	<script src="<?= base_url() ?>assets/js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?= base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url() ?>assets/js/magnific-popup-options.js"></script>
	<script src="<?= base_url() ?>assets/js/config.js"></script>
	<script src="<?= base_url() ?>assets/js/myscript.js"></script>
	<!-- google youtube -->
	<script src="https://apis.google.com/js/platform.js"></script>
	<script type="text/javascript" src="<?= base_url() ?>assets/ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
		CKEDITOR.replace('editor');
	</script>

	<!-- Start of Emojics Code -->
	<!-- Hotjar Tracking Code for https://ourcitrus.id -->
	<script>
		(function(h, o, t, j, a, r) {
			h.hj = h.hj || function() {
				(h.hj.q = h.hj.q || []).push(arguments)
			};
			h._hjSettings = {
				hjid: 1849446,
				hjsv: 6
			};
			a = o.getElementsByTagName('head')[0];
			r = o.createElement('script');
			r.async = 1;
			r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
			a.appendChild(r);
		})(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
	</script>
	<!-- End of Emojics Code -->
	<!-- Main JS (Do not remove) -->
	<script src="<?= base_url() ?>assets/js/main.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#reaction').fadeIn().show();
			$('.react').on('click', function(e) {
				const reaction = $(this).val();
				const name = $(this).attr('name');
				const value = $(this).attr('data-total');
				$.ajax({
					url: "<?= base_url() ?>Page/reaction",
					type: "post",
					data: "name=" + name + "&reaction=" + reaction,
					success: function(response) {
						if (response == 'love') {
							const emoji = "&#128157;";
							Swal.fire({
								title: emoji + name + " : " + value,
								text: "Thanks for your " + reaction + " reaction",
								icon: 'info',
								showCancelButton: true,
								confirmButtonColor: '#3085d6',
								cancelButtonColor: '#d33',
								confirmButtonText: 'Yeas Go ! '
							}).then((result) => {
								if (result.value) {
									location.reload();
								}
							})

						} else if (response == 'like') {
							const emoji = "&#128077;";
							Swal.fire({
								title: emoji + name + " : " + value,
								text: "Thanks for your " + reaction + " reaction",
								icon: 'info',
								showCancelButton: true,
								confirmButtonColor: '#3085d6',
								cancelButtonColor: '#d33',
								confirmButtonText: 'Yeas Go ! '
							}).then((result) => {
								if (result.value) {
									location.reload();
								}
							})
						} else if (response == 'clapping') {
							const emoji = "&#128079;";
							Swal.fire({
								title: emoji + name + " : " + value,
								text: "Thanks for your " + reaction + " reaction",
								icon: 'info',
								showCancelButton: true,
								confirmButtonColor: '#3085d6',
								cancelButtonColor: '#d33',
								confirmButtonText: 'Yeas Go ! '
							}).then((result) => {
								if (result.value) {
									location.reload();
								}
							})
						} else if (response == 'biceps') {
							const emoji = "&#128170;";
							Swal.fire({
								title: emoji + name + " : " + value,
								text: "Thanks for your " + reaction + " reaction",
								icon: 'info',
								showCancelButton: true,
								confirmButtonColor: '#3085d6',
								cancelButtonColor: '#d33',
								confirmButtonText: 'Yeas Go ! '
							}).then((result) => {
								if (result.value) {
									location.reload();
								}
							})
						} else if (response == 'fire') {
							const emoji = "&#128293;";
							Swal.fire({
								title: emoji + " " + name + " : " + value,
								text: "Thanks for your " + reaction + " reaction",
								icon: 'info',
								showCancelButton: true,
								confirmButtonColor: '#3085d6',
								cancelButtonColor: '#d33',
								confirmButtonText: 'Yeas Go ! '
							}).then((result) => {
								if (result.value) {
									location.reload();
								}
							})
						} else {
							Swal.fire("Nothing selected reaction");
						}
					}
				})
			})
		});
	</script>

	</body>

	</html>