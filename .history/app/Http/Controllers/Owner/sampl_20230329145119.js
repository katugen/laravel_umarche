let toggleImages = document.querySelector('.toggle-image');
toggleImages.style.display = "none";

const target = document.querySelector('.construction-ex-bt');
target.addEventListener('click', function(){
if( toggleImages.style.display = "block"){
toggleImages.style.display = "none";
}else{
toggleImages.style.display ="block";
}
});



