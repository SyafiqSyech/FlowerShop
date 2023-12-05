/*=============== NAVBAR DISSAPPEAR IN HOME ===============*/
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    var headerTrue = document.getElementById("headerTrue");

    if (window.scrollY < window.innerHeight/2) {
        headerTrue.classList.add("hidden");
    } else {
        headerTrue.classList.remove("hidden");
    }
}

/*=============== NAVBAR COLOR CHANGE ===============*/ 
document.addEventListener('DOMContentLoaded', function() {
    const ntShopName = document.getElementById('navTrueShopName');
    const ntShopLogo = document.getElementById('navTrueShopLogo');
    const ntListRight = document.getElementById('navTrueListRight');
    const home = document.getElementById('home');
    const darkSections = document.querySelectorAll('.darkSection');
    const newCollectionSection = document.getElementById('new-collection');
    const testimonyCarouselSection = document.getElementById('testimony-carousel');
    
    function changeColor(color) {
        ntShopLogo.style.fill = color;
        ntListRight.style.color = color;
    }

    function isCollide(b) {
        var aRect = ntShopName.getBoundingClientRect();
        var bRect = b.getBoundingClientRect();
    
        return !(
            ((aRect.top + aRect.height/3) < (bRect.top)) ||
            ((aRect.top + aRect.height/3) > (bRect.top + bRect.height))
        );
    }

    // Add an event listener to check if the dark sections collided with navbar, it changes color
    window.addEventListener('scroll', function() {
      var f = 0
      darkSections.forEach((n) => {
        if (isCollide(n)){
          f = 1
        } else {
          changeColor("black");
        }
      });
      if (f == 1){ changeColor("white"); }
    });
});

/*=============== OPEN DROPDOWN ===============*/
var f = 1;
var navColor = 'black';

function toggleDiv(divId) {
    var div = document.getElementById(divId)
    if (f == 1) {
        f = 0
        div.style.transform = 'translateY(0)'
        document.body.style.overflow = 'hidden'
        navColor = document.getElementById('navTrueShopLogo').style.fill
        document.getElementById('navTrueShopLogo').style.fill = 'white'
        document.getElementById('navTrueListRight').style.color = 'white'
    } else {
        f = 1
        div.style.transform = 'translateY(-100%)'
        document.body.style.overflow = 'auto'
        document.getElementById('navTrueShopLogo').style.fill = navColor
        document.getElementById('navTrueListRight').style.color= navColor
    }
}