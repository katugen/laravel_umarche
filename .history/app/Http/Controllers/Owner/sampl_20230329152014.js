document.querySelector('.toggle-image').style.display = "none";

const target = document.querySelector('.construction-ex-bt');

target.addEventListener('click', function () {
if( style = "block"){
    document.querySelector('.toggle-image').style.display = "none";
}else{
    document.querySelector('.toggle-image').style.display ="block";
}
});

