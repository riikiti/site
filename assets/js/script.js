let burgerItem = document.querySelector(".burger")
let viewBody =document.querySelector("body");
let burCon =document.querySelector(".nav-h");
burgerItem.addEventListener("click", function bur(){

    if(!burgerItem.classList.contains("bur")){
        viewBody.classList.add("activeBody");
        burCon.classList.add("active-nav");
        burgerItem.classList.add("bur");
    }
    else {
        burgerItem.classList.contains("bur")
            viewBody.classList.remove("activeBody");
            burCon.classList.remove("active-nav");
            burgerItem.classList.remove("bur");

    }

});