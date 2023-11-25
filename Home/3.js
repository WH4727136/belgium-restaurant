document.addEventListener("DOMContentLoaded",function(){
	var btns = document.querySelectorAll('.li-btn-slide');
	var slides = document.querySelectorAll('.ul-slide-wrap');
	var left = document.querySelector(".btn-left");
	var right = document.querySelector(".btn-right");
	var ptsSlides=0;
	for (var i = 0 ; i < btns.length ; i++)
	{
		btns[i].addEventListener('click',function () {
			for(var j = 0 ; j < btns.length ; j++)
			{
				btns[j].classList.remove('click');
			}

			this.classList.add('click');

			var slideClick = this;
			for(ptsSlides = 0 ; slideClick = slideClick.previousElementSibling ; ptsSlides++);
			{}

			for(var s = 0 ; s < slides.length; s++)
			{
				slides[s].classList.remove('appear');
			}
			slides[ptsSlides].classList.add('appear');
		})	
	}

	left.addEventListener('click',function(){
		for(var l = 0; l<btns.length; l++)
		{
			btns[l].classList.remove('click');
			slides[l].classList.remove('appear');
		}
		if(ptsSlides>0)
		{
			slides[ptsSlides-1].classList.add('appear');
			btns[ptsSlides-1].classList.add('click');
			ptsSlides--;
		}
		else
		{
			slides[btns.length-1].classList.add('appear');
			btns[btns.length-1].classList.add('click');
			ptsSlides=btns.length-1;
		}
	})

	right.addEventListener('click',function (){
		for(var r = 0; r < btns.length; r++)
		{
			btns[r].classList.remove('click');
			slides[r].classList.remove('appear');
		}
		if(ptsSlides<slides.length-1)
		{
			slides[ptsSlides+1].classList.add('appear');
			btns[ptsSlides+1].classList.add('click');
			ptsSlides++;
		}
		else
		{
			slides[0].classList.add('appear');
			btns[0].classList.add('click');
			ptsSlides = 0;
		}
	})

	setInterval(function() {
		for(var t = 0; t<btns.length;t++)
		{
			btns[t].classList.remove('click');
			slides[t].classList.remove('appear');
		}
		if(ptsSlides < btns.length-1)
		{	
			slides[ptsSlides+1].classList.add('appear');
			btns[ptsSlides+1].classList.add('click');
			ptsSlides++;
		}
		else
		{
			slides[0].classList.add('appear');
			btns[0].classList.add('click');
			ptsSlides = 0;
		}
	},3000)
},false)