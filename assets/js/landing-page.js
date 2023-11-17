/*=============== NAVBAR DROPDOWN ===============*/
// function checkDropdownPosition() {
//     var dropdown = document.querySelector('.dropdown');
//     var body = document.querySelector('body');

//     var dropdownTop = dropdown.style.top;

//     if (dropdownTop === '0px') {
//         body.style.overflow = 'hidden';
//     } else {
//         body.style.overflow = 'visible'; // or 'auto' if you want to revert to the default behavior
//     }
// }

// document.getElementById("tHeader-menu").addEventListener("click", function() {
//     var dropdown = document.querySelector(".dropdown");

//     // Change the top position to 0
//     dropdown.style.top = "0"; 
//     checkDropdownPosition()
// });

// document.getElementById("dHeader-menu").addEventListener("click", function() {
//     var dropdown = document.querySelector(".dropdown");

//     var currentTop = parseInt(dropdown.style.top);

//     if (currentTop === 0) {
//         dropdown.style.top = "-800px";
//     }

//     checkDropdownPosition()
// });


/*=============== NAVBAR DISSAPPEAR IN HOME ===============*/

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    var headerTrue = document.getElementById("headerTrue");
    // var heroBottomContent = document.getElementById("heroBottomContent");

    // console.log(window.scrollY)

    // if(window.scrollY < 200){
    //     heroBottomContent.remove("hidden");
    // }
    // else{
    //     heroBottomContent.add("hidden");
    // }

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

    // Add an event listener to check if the elements are in the viewport
    window.addEventListener('scroll', function() {

        if (
            isCollide(home) ||
            isCollide(newCollectionSection)
            // isCollide(testimonyCarouselSection)
        ) {
            changeColor("white");
        } else {
            changeColor("black");
        }
    });
});


/*=============== SHOW SCROLL UP ===============*/ 
const scrollUp = () =>{
	const scrollUp = document.getElementById('scroll-up')
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scrollup class
	this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
						: scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)


/*=============== SCROLL REVEAL ANIMATION ===============*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
    // reset: true // Animation repeat
})

sr.reveal(`.home__title, .featured__container, .collection__container,
           .advantages__container, .ourStory__right-container`)
sr.reveal(`.home__subtitle, .button__container, .collection__button-container, 
           .featured__button-container, .newcollect__title, .newcollect__para, 
           .newcollect__button-container, .ourStory__frame-container,
           .ourStory__btn`, {origin: 'left'})
