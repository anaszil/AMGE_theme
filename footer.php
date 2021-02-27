<?php wp_footer(); $template_uri = get_template_directory_uri();?>
	<section id="contact" style="background-color:#f4f5f9;padding: 65px 0;margin-bottom: 0;">
		<div class="container" style="text-align: center;">
			<div id="last_evn_title">Contactez-nous</div>		
			<div id="text_env" class="description"></div>
			<div id="img_container">
				<img src="<?php echo $template_uri; ?>/images/design_2.png">
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg call_us" id="adress_cont" data-aos="fade-right">
					<!-- 
					<div id="our_adress" class="title_info">ADRESSE</div>
					<div id="our_adress_det" class="description_us"></div>

					<div id="our_adress" class="title_info">TELEPHONE</div>
					<div id="our_adress_det" class="description_us"></div>
					-->
					<div id="our_adress" class="title_info">EMAIL</div>
					<div id="our_adress_det" class="description_us">contact@amge-lyon.com</div>
				</div>
				<div class="col-7 call_us" data-aos="fade-left" id="form_cont">
					<div class="inp_container">
							<input required placeholder="Nom" type="text" name="name" id="name_inp">
							<input required placeholder="Email" type="email" name="email" id="email_inp">
							<input required placeholder="Sujet" type="text" name="sub" id="sub_inp">
							<textarea required placeholder="Message" name="msg" id="message"></textarea>
							<button id="send_msg" name="send_email" type="submit" class="btn btn-lg">ENVOYER</button>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>

<script type="text/javascript">
AOS.init();

//jQuery('.image_row_col').on('click', function(){
//    jQuery(this).closest('div.post_col').next().find('.image_details_col').toggle();
//});
if (jQuery(window).width() < 992) {   
   jQuery("#ocp_text").detach().appendTo("#logo_row");
   jQuery("#atw_logo").detach().prependTo("#text_row");
}

if (jQuery(window).width() < 992) {   
	jQuery(".to_change_order").each(function(){
	    var num_ele = jQuery(this).attr('number');
	    jQuery("#tcow-" + num_ele).after(jQuery(this));
	});
}


jQuery('#send_msg').click(function() {
	var name = jQuery("#name_inp").val();
    var email = jQuery("#email_inp").val();
    var sub = jQuery("#sub_inp").val();
    var send_email = jQuery("#send_msg").val();
    var msg = jQuery("#message").val();

    jQuery.ajax({
        url: '<?php echo admin_url("mail_sender.php"); ?>',
        type: 'POST',
        data: {
            email: email,
            name : name,
            sub: sub,
            send_email: send_email,
            msg: msg,
        },
        success: function(msg) {
            alert('Message envoyé!');
        }               
    });
});
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
	showSlides(slideIndex += n);
}

function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	if (n > slides.length) {slideIndex = 1}    
	if (n < 1) {slideIndex = slides.length}
	for (i = 0; i < slides.length; i++) {
	  slides[i].style.display = "none";  
	}
	slides[slideIndex-1].style.display = "block";  
}

var slide_Index = 1;
currentSlide(slide_Index);

function currentSlide(n){
	var i;
	var slides = document.getElementsByClassName("slides");
	var dot = document.getElementsByClassName("dot");

	if (n > slides.length) {slide_Index = 1}    
	if (n < 1) {slide_Index = slides.length}
	for (i = 0; i < slides.length; i++) {
	  slides[i].style.display = "none";  
	  dot[i].style.backgroundColor = "#f4f5f9";  

	}
	dot[n-1].style.backgroundColor = "#e74c3c";  
	slides[n-1].style.display = "block";  
}


jQuery(".tag_li").click(function($){
    jQuery(".active_li").removeClass( "active_li" );
    jQuery(this).addClass( "active_li" );

    var tag_show = jQuery(this).text();
    jQuery(".tag-container").fadeOut(0);
    jQuery("#tag_"+tag_show).fadeIn(0);
});

</script>
</html>