const buttons = document.getElementsByClassName('slide-button');
const band = document.getElementById('band');
const slides = document.getElementsByClassName('slide');
const nbImage = slides.length;
console.log(nbImage);
let leftOffset = 0;
let index = 1;

for(let i = 0; i < buttons.length; i ++) {
    buttons[i].addEventListener('click', function(){
        if (i === 1) {
            index ++;
            if (index > nbImage) {
                index = 1;
                leftOffset = 0;
            } else {
                leftOffset -=502;
            }
        } else{
            index --;
            if (index < 1) {
                index = nbImage;
                leftOffset = - (nbImage-1) * 502;
            } else {
                leftOffset += 502;
            }
        }
        band.style.marginLeft = leftOffset + "px";
        console.log("index:" + index);
        console.log("offset:" + leftOffset);

    })

}