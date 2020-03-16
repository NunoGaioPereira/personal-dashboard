const hamb = document.querySelector(".hamburguer");
hamb.addEventListener('click', function(){
	// document.getElementById("moving-nav").style.width="0px";
	// document.querySelector(".main-wrapper").style.marginLeft="var(--side-nav-width)";
	document.getElementById("moving-nav").classList.toggle('open');
	document.querySelector(".main-wrapper").classList.toggle('open');
});

const extra = document.querySelector(".logout");
extra.addEventListener('click', function(){
	document.getElementById("extra-nav").classList.toggle('open');
	document.getElementById("cover").classList.toggle('open');
});

const extra_close = document.querySelector(".nav-close");
extra_close.addEventListener('click', function(){
	document.getElementById("extra-nav").classList.toggle('open');
	document.getElementById("cover").classList.toggle('open');
});

const popup = document.querySelector(".blah");
popup.addEventListener('click', function(){
	document.getElementById("popup").classList.toggle('open');
	document.getElementById("cover").classList.toggle('open');
});