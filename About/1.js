document.addEventListener("DOMContentLoaded",function(){
	var maudo=document.querySelector('.menu');
	var anh=document.querySelector('.anhqc')
	
		window.addEventListener('scroll',function(){
		var vitri=window.pageYOffset;
			if(vitri>100)
			{
				maudo.classList.add('mauden');
			}
			else
			{
				maudo.classList.remove('mauden');
			}
		})
},false)