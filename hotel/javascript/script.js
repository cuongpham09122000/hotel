
const menuTitle = document.querySelector(".menu-title");
menuTitle.addEventListener("click",function(x){
    if(x.target.classList.contains("menu-button")){
        const Target = x.target.getAttribute("data-title");
        menuTitle.querySelector(".active").classList.remove("active");
        x.target.classList.add("active");

        const menuItem = document.querySelector(".service");
        menuItem.querySelector(".menu-item-content.active").classList.remove("active");
        menuItem.querySelector(Target).classList.add("active")

    }
})

const menuTitle_nv = document.querySelector(".menu-title-nv");
menuTitle_nv.addEventListener("click",function(x){
    if(x.target.classList.contains("menu-button-nv")){
        const Target = x.target.getAttribute("data-title");
        menuTitle_nv.querySelector(".active").classList.remove("active");
        x.target.classList.add("active");

        const menuItem = document.querySelector(".staff");
        menuItem.querySelector(".menu-item-nv.active").classList.remove("active");
        menuItem.querySelector(Target).classList.add("active")

    }
})