施工写真を非表示
document.querySelector('.toggle-images1').style.display = "none";
document.querySelector('.toggle-images2').style.display = "none";

const target1 = document.querySelector('.construction-ex-bt1');

target1.addEventListener('click', function () {
if(document.querySelector('.toggle-images1').style.display === "none"){
    document.querySelector('.toggle-images1').style.display = "block";
}else{
    document.querySelector('.toggle-image1').style.display ="none";
}
});
