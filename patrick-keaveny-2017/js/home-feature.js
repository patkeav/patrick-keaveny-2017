$(window).on('load', loop);

var slides = document.querySelectorAll('.home-post-single'),
		tick = 0,
		tickMax = 500,
		slideNumber = 0;

function loop() {

	if ($(window).width() > 1000) {
		requestAnimationFrame(loop);
	}
	

	if (tick == tickMax - 50) {
		$(slides[slideNumber]).addClass('pre-slide');
	}
	if (tick > tickMax) {
		changeSlideAnim(slides);
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

function changeSlideAnim(s) {
	var currentSlide = s[slideNumber];
	var nextSlide = s[slideNumber + 1];
	$(currentSlide).removeClass('current');
	$(nextSlide).addClass('current');
	$(currentSlide).removeClass('pre-slide');

	if (slideNumber == s.length - 1) {
		slideNumber = 0;
		$(slides).removeClass('current');
		$(s[0]).addClass('current');
	}
	else {
		
		slideNumber++;
	}
}

