$(window).on('load', loop);

var slides = [].slice.call(document.querySelectorAll('.home-post-single')),
		tick = 0,
		tickMax = 1000;

function loop() {
	requestAnimationFrame(loop);
	if (tick > tickMax) {
		slides = changeSlide(slides);
		tick = 0;
	}
	else {
		tick++;
	}
}

function changeSlide(s) {
	var currentSlide = s[0];
	var nextSlide = s[1];
	var lastSlide = s[s.length - 1];
	
	s.splice(slides.length , 1, currentSlide);
	s.splice(0, 1);

        $(currentSlide).addClass('fade-out');
        $(nextSlide).addClass('fade-out');
	
	var featured = document.querySelector('#featured');
	var secondary = document.querySelector('#not-featured');
	while (featured.firstChild) { 
		featured.removeChild(featured.firstChild);
	} 
	featured.appendChild(nextSlide);   
	secondary.appendChild(currentSlide);


        $(currentSlide).removeClass('fade-out').addClass('fade-in');
        $(nextSlide).removeClass('fade-out').addClass('fade-in');
	
 
	return s;
}