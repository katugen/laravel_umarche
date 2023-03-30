document.querySelector('.toggle-image').style.display = "none";

const target = document.querySelector('.construction-ex-bt');

target.addEventListener('click', function () {
if(document.querySelector('.toggle-image').style.display === "none"){
    document.querySelector('.toggle-image').style.display = "block";
}else{
    document.querySelector('.toggle-image').style.display ="block";
}
});

