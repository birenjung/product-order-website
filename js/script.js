const navSlide = ()=> {
    const burger = document.querySelector('.burger') ;
    const nav = document.querySelector('.nav-links') ;
    const navlinks = document.querySelectorAll('.nav-links li')

    burger.addEventListener('click',()=>{
        nav.classList.toggle('nav-active') ;
    

    // animate burger
    burger.classList.toggle('toggle') ;
   

    }) ;
   

   
    
}


navSlide();