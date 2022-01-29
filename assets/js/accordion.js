let AccPoint =document.querySelectorAll('.condition-point');
let i;
/*console.log(AccPoint);*/
for(i = 0; i < AccPoint.length; i++){
    AccPoint[i].addEventListener("click",function (){
        this.classList.toggle("acc-active");
        let AccContent = document.querySelector('.condition-content');
        AccContent.classList.toggle("acc-c-active");
        let AccH3 = document.querySelector(' .conditions-tittle-h3');
        AccH3.classList.toggle("acc-c-active-h3");
    });
}
