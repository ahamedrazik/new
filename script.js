
const bg=document.getElementById("header");
window.addEventListener('scroll',function(){
    bg.style.backgroundSize = 160 - +window.pageYOffset/12+'%'; 
    bg.style.opacity = 1 - +window.pageYOffset/700+''; 
});

let t1 = gsap.timeline({

    scrollTrigger:{
        trigger:'#main',
        start:"center center",
        end:"bottom top",
        markers:false,
        pin:true,
        scrub:true,

    }
});

t1.from("#main",{x:1000,opacity:1,duration:1});













