	<!-- jQuery -->
	<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <!-- jQuery Easing -->  
	<script src="<?=base_url()?>assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?=base_url()?>assets/js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?=base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?=base_url()?>assets/js/magnific-popup-options.js"></script>
	<script src="<?=base_url()?>assets/js/config.js"></script>
    <script src="<?=base_url()?>assets/js/myscript.js"></script>
    <!-- google youtube -->
    <script src="https://apis.google.com/js/platform.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/ckeditor/ckeditor.js"></script>
		<script type="text/javascript">
		    CKEDITOR.replace('editor');
		</script>
	
<!-- Start of Emojics Code -->
<!-- Hotjar Tracking Code for https://ourcitrus.id -->
    <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1849446,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- End of Emojics Code -->
	<!-- Main JS (Do not remove) -->
	<script src="<?=base_url()?>assets/js/main.js"></script>
<!-- zoom image -->
    <script language="javascript" type="text/javascript">
        
    </script>
	<!--
	<script src="<?=base_url()?>assets/js/jquery.minipreview.js"
	></script>
	        <script>
            $(function() {
                $('#p1 a').miniPreview({ prefetch: 'pageload' });
                $('#p2 a').miniPreview({ prefetch: 'parenthover' });
                $('#p3 a').miniPreview({ prefetch: 'none' });
            });
        </script>
        -->

        <!-- Data Tables -->
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
 <!--Script Javascript-->
 <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
 <!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
 <script>
   $(document).ready(function() {
    $('#example').DataTable( {
      dom: 'Bfrtip',
      buttons: [
      'colvis'
      ]
    } );
  } );
</script> -->
<!-- <script src="<?=base_url()?>assets/js/script.js"></script> -->

<script type="text/javascript">
$(document).ready(function(){
<?php foreach($halloffameread as $v):?>
    $('.text-react<?=trim(str_replace(" ", "", $v->nama))?>-1').hide();
    $('#react<?=trim(str_replace(" ", "", $v->nama))?>-1').mouseenter(function(){
        $('.emoji-<?=trim(str_replace(" ", "", $v->nama))?>-1').css({
            'font-size': '3em'
        }).html('&#127818;');

        $('.text-react<?=trim(str_replace(" ", "", $v->nama))?>-1').show().css({
            'font-size': '1em'
        });
        $('#react<?=trim(str_replace(" ", "", $v->nama))?>-1').fadeTo(2000, 0.5);
    })         

        $('#react<?=trim(str_replace(" ", "", $v->nama))?>-1').mouseleave(function(){
            $('.text-react<?=trim(str_replace(" ", "", $v->nama))?>-1').hide();
    })
//---------------------------------------------------------------------------------------------------------------------------
        $('.text-react<?=trim(str_replace(" ", "", $v->nama))?>-2').hide();
        $('#react<?=trim(str_replace(" ", "", $v->nama))?>-2').mouseenter(function(){
        $('.emoji-<?=trim(str_replace(" ", "", $v->nama))?>-2').css({
            'font-size': '3em'
        }).html('&#127819;');

        $('.text-react<?=trim(str_replace(" ", "", $v->nama))?>-2').show().css({
            'font-size': '1em',
            'margin-left': '1em'
        });
        $('#react<?=trim(str_replace(" ", "", $v->nama))?>-2').fadeTo(2000, 0.5).css({
            'font-size':'45px'
        })
    })                                                      

        $('#react<?=trim(str_replace(" ", "", $v->nama))?>-2').mouseleave(function(){
            $('.text-react<?=trim(str_replace(" ", "", $v->nama))?>-2').hide();
    })
//---------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------
$('.text-react<?=trim(str_replace(" ", "", $v->nama))?>-3').hide();
        $('#react<?=trim(str_replace(" ", "", $v->nama))?>-3').mouseenter(function(){
        $('.emoji-<?=trim(str_replace(" ", "", $v->nama))?>-3').css({
            'font-size': '3em'
        }).html('&#127856;').fadeIn('slow');
        $('#react<?=trim(str_replace(" ", "", $v->nama))?>-3').css({
            'font-size':'45px'
        }).fadeTo(2000, 0.7);
        
        $('.text-react<?=trim(str_replace(" ", "", $v->nama))?>-3').show().css({
            'font-size': '1em',
            'margin-left': '0.5em'
        });

    })                                                      

        $('#react<?=trim(str_replace(" ", "", $v->nama))?>-3').mouseleave(function(){
            $('.text-react<?=trim(str_replace(" ", "", $v->nama))?>-3').hide();
    })
//---------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------
$('.text-react<?=trim(str_replace(" ", "", $v->nama))?>-4').hide();
        $('#react<?=trim(str_replace(" ", "", $v->nama))?>-4').mouseenter(function(){
        $('.emoji-<?=trim(str_replace(" ", "", $v->nama))?>-4').css({
            'font-size': '3em'
        }).html('&#127828;').fadeIn('slow');
        $('#react<?=trim(str_replace(" ", "", $v->nama))?>-4').css({
            'font-size':'45px'
        }).fadeTo(2000, 0.7);
        
        $('.text-react<?=trim(str_replace(" ", "", $v->nama))?>-4').show().css({
            'font-size': '1em',
            'margin-left': '0.5em'
        });

    })                                                      

        $('#react<?=trim(str_replace(" ", "", $v->nama))?>-4').mouseleave(function(){
            $('.text-react<?=trim(str_replace(" ", "", $v->nama))?>-4').hide();
    })
//---------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------
$('.text-react<?=trim(str_replace(" ", "", $v->nama))?>-5').hide();
        $('#react<?=trim(str_replace(" ", "", $v->nama))?>-5').mouseenter(function(){
        $('.emoji-<?=trim(str_replace(" ", "", $v->nama))?>-5').css({
            'font-size': '3em'
        }).html('&#127783;').fadeIn('slow');
        $('#react<?=trim(str_replace(" ", "", $v->nama))?>-5').css({
            'font-size':'45px'
        }).fadeTo(2000, 0.7);
        
        $('.text-react<?=trim(str_replace(" ", "", $v->nama))?>-5').show().css({
            'font-size': '1em',
            'margin-left': '0.2em'
        });

    })                                                      

        $('#react<?=trim(str_replace(" ", "", $v->nama))?>-5').mouseleave(function(){
            $('.text-react<?=trim(str_replace(" ", "", $v->nama))?>-5').hide();
    })
//---------------------------------------------------------------------------------------------------------------------------
<?php endforeach;?>
});  
</script>

	</body>
</html>
