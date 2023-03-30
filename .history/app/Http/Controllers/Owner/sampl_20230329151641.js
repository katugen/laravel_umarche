document.querySelector('.toggle-image').style.display = "none";

const target = document.querySelector('.construction-ex-bt');

target.addEventListener('click', function () {
    let style = document.querySelector('.toggle-image').style.display;
if( document.querySelector('.toggle-image').style.display = "block"){
    document.querySelector('.toggle-image').style.display = "none";
}else{
    document.querySelector('.toggle-image').style.display ="block";
}
});

