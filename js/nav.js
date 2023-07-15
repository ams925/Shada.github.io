//Javacript for responsive navigation menu
const menuBtn = document.querySelector(".menu-btn");
const navigation = document.querySelector(".navigation");

menuBtn.addEventListener("click", () => {
    menuBtn.classList.toggle("active");
    navigation.classList.toggle("active");
});












// $(document).ready(function(){
//     var sticky = 20;

// $(window).bind('scroll', function(){
//     if($(window).scrollTop()>sticky){
//         $('.navbar').addClass('nav-sticky');
//     }
//     else{
//         $('.navbar').removeClass('nav-sticky');
//     }
// });
// });




