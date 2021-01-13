

var menu = document.getElementById("menu");
var sidebar = document.getElementById("sidebar");
var closeSidebar = document.getElementById("close-sidebar");

document.querySelector('#menu .fas').addEventListener('click', function(){
	sidebar.classList.toggle('visible');	
});

document.onclick = function(e){
	if(e.target == sidebar){
		sidebar.classList.add('visible');
	}else if(e.target !== document.querySelector('#menu .fas')){
		sidebar.classList.remove('visible');
	}
}
closeSidebar.addEventListener('click', function(e){
	sidebar.classList.remove('visible');
});

var viewMore = document.getElementById("viewMore");
var section = document.querySelector("section#sectionHide");

viewMore.addEventListener('click', function(e){
	if(section.classList.contains("flex")){
		this.innerHTML = "View more";
	}else{
		this.innerHTML = "View less";
	}
	e.preventDefault();
	section.classList.toggle('flex');		
});



var loginToggle = document.getElementById("login-toggle");
var loginToggleAlt = document.getElementById("login-toggle-alt");
var containerModal = document.getElementById("containerModal");
var closeModalButton = document.getElementById("closeModalButton");

closeModalButton.addEventListener('click', function(){
	containerModal.style.display = 'none';
});

loginToggleAlt.addEventListener('click', function(e){
	e.preventDefault();
	containerModal.style.display = 'block';
});

loginToggle.addEventListener('click', function(e){
	e.preventDefault();
	containerModal.style.display = 'block';
	sidebar.classList.add('hidden');
});

var header = document.getElementById("header");
var headRight = document.getElementById("head-right");
var sitename = document.getElementById("sitename");
var linkRight = document.getElementById("link-right");
var dropDownShop = document.getElementById("dropDown-shop");

linkRight.children[0].onmouseenter = function() {	
	linkRight.children[0].children[0].children[1].style.animationName = 'fadeInText';
	linkRight.children[0].children[0].children[1].style.animationTimingFunction = 'ease-out';
	linkRight.children[0].children[0].children[1].style.animationDuration = '.2s';
	linkRight.children[0].children[0].children[1].style.animationFillMode = 'forwards';
}
linkRight.children[1].onmouseenter = function() {	
	linkRight.children[1].children[0].children[1].style.animationName = 'fadeInText';
	linkRight.children[1].children[0].children[1].style.animationTimingFunction = 'ease-out';
	linkRight.children[1].children[0].children[1].style.animationDuration = '.3s';
	linkRight.children[1].children[0].children[1].style.animationFillMode = 'forwards';
}

linkRight.children[0].onmouseleave = function() {	
	linkRight.children[0].children[0].children[1].style.animationName = 'fadeOutText';
	linkRight.children[0].children[0].children[1].style.animationTimingFunction = 'ease-out';
	linkRight.children[0].children[0].children[1].style.animationDuration = '.2s';
	linkRight.children[0].children[0].children[1].style.animationFillMode = 'forwards';
}
linkRight.children[1].onmouseleave = function() {	
	linkRight.children[1].children[0].children[1].style.animationName = 'fadeOutText';
	linkRight.children[1].children[0].children[1].style.animationTimingFunction = 'ease-out';
	linkRight.children[1].children[0].children[1].style.animationDuration = '.3s';
	linkRight.children[1].children[0].children[1].style.animationFillMode = 'forwards';
}

window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (window.scrollY > 50) {
    header.style.height = "50px";
    headRight.style.height = "50px";
    menu.style.height = "50px";
    menu.style.lineHeight = "50px";
    sitename.style.paddingLeft = "50px"; 
    sitename.style.lineHeight = "50px";    
    linkRight.style.lineHeight = "50px";     
    linkRight.style.height = "50px";     
    headRight.style.right = "50px";     
    dropDownShop.style.top = "50px";	
    linkRight.children[0].style.height = "50px";
    linkRight.children[1].style.height = "50px";


  } else {
  	var h = 100 - window.scrollY;   

    if(h <= 50){    	
    	header.style.height = "50px"; 
    	headRight.style.height = "50px"; 
    	menu.style.height = "50px";
    	menu.style.lineHeight = "50px";

    	sitename.style.paddingLeft = "50px";
    	sitename.style.lineHeight = "50px";
    	linkRight.style.lineHeight = "50px";
    	linkRight.style.height = "50px";     

    	headRight.style.right = "50px";  
    	dropDownShop.style.top = "50px";	
    	linkRight.children[0].style.height = "50px";
    	linkRight.children[1].style.height = "50px";
    }else{
    	// alert('ok')
    	header.style.height = h + "px";
    	headRight.style.height = h + "px";
    	menu.style.height = h + "px";
    	menu.style.lineHeight = h + "px";

    	sitename.style.paddingLeft = h+"px";
    	sitename.style.lineHeight = h+"px";
    	linkRight.style.lineHeight = h + "px";
    	linkRight.style.height = h + "px";     

    	headRight.style.right = h+"px";
    	dropDownShop.style.top = h+"px";
    	linkRight.children[0].style.height = h+"px";
    	linkRight.children[1].style.height = h+"px";
    }
  }

}

var shopMenu = document.getElementById("shopMenu");

let enter = false;
dropDownShop.onmouseover = function() {
	enter = true;
	shopOff(enter);	

};
dropDownShop.onmouseout = function() {
	enter = false;
	shopOff(enter);
};

shopMenu.onmouseover = function() {shopOn()};
shopMenu.onmouseout = function() {shopOff()};
function shopOn(){	
	dropDownShop.style.display = "flex";
	dropDownShop.style.animationName = 'fadeIn';
	dropDownShop.style.animationTimingFunction = 'ease-out';
	dropDownShop.style.animationDuration = '.2s';
}
function shopOff(){		
	setTimeout(function(){		
		if(enter){
			dropDownShop.style.display = "flex";
		}else{			
			dropDownShop.style.animationName = 'fadeOut';
			dropDownShop.style.animationTimingFunction = 'ease-out';
			dropDownShop.style.animationDuration = '.2s';
			dropDownShop.style.animationFillMode = 'forwards';
		}
	},500);	
}


document.querySelector('#categoriesImg1').onmouseenter = function() {
	animateCount("count-items-1", 0, 34, 700);	
} 
document.querySelector('#categoriesImg2').onmouseenter = function() {
	animateCount("count-items-2", 0, 40, 700);	
}
document.querySelector('#categoriesImg3').onmouseenter = function() {
	animateCount("count-items-3", 0, 24, 700);	
}

function animateCount(id, start, end, duration){
	if(start === end) return;
	var range = end - start;
	var current = start;
	var increment = end > start ? 1 : -1;
	var stepTime = Math.abs(Math.floor(duration / range));
	var obj = document.getElementById(id);
	var timer = setInterval(function(){
		current += increment;
		obj.innerHTML = current;
		if(current == end){
			clearInterval(timer);
		}
	}, stepTime)
}	
