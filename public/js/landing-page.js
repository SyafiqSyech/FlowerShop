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
