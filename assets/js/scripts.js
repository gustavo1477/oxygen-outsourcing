// menu

const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId),
          nav = document.getElementById(navId)
    if(toggle && nav) {
        toggle.addEventListener('click', () => {
            nav.classList.toggle('show')            
        })
    }    
}

showMenu('main-menu-toggle','main-nav')

//Anchor animated

let anchorlinks = document.querySelectorAll('a[href^="#"]')
 
for (let item of anchorlinks) { // relitere 
    item.addEventListener('click', (e)=> {
        let hashval = item.getAttribute('href')
        let target = document.querySelector(hashval)
        target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        })
        history.pushState(null, null, hashval)
        e.preventDefault()
    })
}


 

// acordeon FAQ

$('.faq__container').on('click' , 'h3', function(){
	let t  = $(this);
	let tp = t.next();
	let p = t.parent().siblings().find('p');
	tp.slideToggle();
	p.slideUp();
});


// validando formulario

