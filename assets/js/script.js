
/*
document.querySelector(".button--nav").addEventListener("click", function(){
    document.querySelector(".sidebar").classList.toggle("active");
});
 */
document.querySelector(".button--newPost").addEventListener("click", function(){
    console.log('coucouc');
     document.querySelector(".post--new").classList.add("active");
    document.querySelector(".header").classList.add("header__newpost--open");
});
/*
document.querySelector(".button--sendPost").addEventListener("click", function(){
    document.querySelector(".post--new").classList.toggle("active");
    document.querySelector(".header").classList.toggle("header__newpost--open");
});

document.querySelector(".botton--close").addEventListener("click", function(){
    document.querySelector(".popup--info").style.right = "-500px";
});
 */