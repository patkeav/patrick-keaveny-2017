/*==============================================================================
Variables
==============================================================================*/

var $win = $( window ),
	$doc = $( document ),
	$html = $( 'html' ),
	$body = $( 'body' ),
	$main = $( '.main' );

/*==============================================================================
Retina Class
==============================================================================*/

if (window.matchMedia) { 
	var mq = window.matchMedia("only screen and (-moz-min-device-pixel-ratio: 1.3), only screen and (-o-min-device-pixel-ratio: 2.6/2), only screen and (-webkit-min-device-pixel-ratio: 1.3), only screen  and (min-device-pixel-ratio: 1.3), only screen and (min-resolution: 1.3dppx)");
	if(mq && mq.matches) {
		document.documentElement.className += ' retina';
	}
}

/*==============================================================================
FastClick
==============================================================================*/

FastClick.attach( document.body );

/*==============================================================================
Loaded Class
==============================================================================*/

$win.on( 'load', function() {
	$html.addClass( 'loaded' );
});

/*==============================================================================
Venobox 
==============================================================================*/

$doc.ready(function(){
	$(".venobox").venobox({
        framewidth: "50%",
        frameheight: "auto",
        border: "25px",
        bgcolor: '#ffffff',
        numeratio : true,
        infinigall : true
    })
})

$doc.ready(function(){
	var top = 0;
	$('.home-post-single').each(function(s){
		
		$(this).css('top', top );
		top += 100;
	});
});