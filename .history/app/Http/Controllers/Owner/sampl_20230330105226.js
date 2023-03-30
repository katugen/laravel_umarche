// 施工写真を非表示
document.querySelector('.toggle-images1').style.display = "none";
document.querySelector('.toggle-images2').style.display = "none";

// ボタンを取得
const target1 = document.querySelector('.construction-ex-bt1');
const target2 = document.querySelector('.construction-ex-bt2');



target1.addEventListener('click', function () {
if(document.querySelector('.toggle-images1').style.display === "none"){
    document.querySelector('.toggle-images1').style.display = "block";
}else{
    document.querySelector('.toggle-images1').style.display ="none";
}
});

target2.addEventListener('click', function () {
if(document.querySelector('.toggle-images2').style.display === "none"){
    document.querySelector('.toggle-images2').style.display = "block";
}else{
    document.querySelector('.toggle-images2').style.display ="none";
}
});


// displayImages(target1,'1');
// displayImages(target2,'2');


// let displayImages = (target,ImagesNum) => {
//     target.addEventListener('click', function () {
//         if(document.querySelector(`.toggle-images${ImagesNum}`).style.display === "none"){
//             document.querySelector(`.toggle-images${ImagesNum}`).style.display = "block";
//         }else{
//             document.querySelector(`.toggle-images${ImagesNum}`).style.display ="none";
//         }
//         });

