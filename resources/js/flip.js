// const { flip } = require("lodash");

let btns= document.querySelectorAll('.flip'); // flip card to see the back
let btns2= document.querySelectorAll('.theflip');
let btns3= document.querySelectorAll('p'); // getting the info on the card after flip
const mypopup =document.querySelector('.my-popup'); // first pop-up info
const mypopupy =document.querySelector('.reddy'); // redeeming popup card
const vent = document.querySelector('.vent'); // redeeming popup card
var closePopup = document.getElementById("closePopup"); //closing pop-up (finish card)
let count = 0;


// first popup
const butty = document.querySelector(".butty")

window.onload = function(){
    setTimeout(function(){
        mypopup.style.display="block";
        blurs.classList.add("blurs");  
    },200)
}
butty.addEventListener('click', () => {
    mypopup.style.display="none";
    blurs.classList.remove("blurs");
})
// end first popup


// redeeming popup card
vent.addEventListener('click', () => {
    reddy.style.display="none";
    blurs.classList.remove("blurs");
});
// end redeeming popup card


// refresh page to default
window.onbeforeunload = function(){
    document.cookie = 'status=; expires=Thu, 01 Jan 1970 00:00:00UTC; secure'
}



// function closePopup() {
//     popup.classList.remove("open-popup");
//     blurs.classList.remove("blurs");
// }

// make page cookie assignment
function checkpro(x, a){
    
    if (x === "Sorry, Please Try Again") {
        document.cookie = "status=none; secure";
    } else {
        document.cookie = "status=win; secure";
    }
}
console.log(closePopup);
closePopup.addEventListener("click", function() {
    popup.classList.remove("open-popup");
    blurs.classList.remove("blurs");
}, false);

    btns.forEach (item =>{
        item.addEventListener('click', event => {
            count += 1;
            let decode = decodeURIComponent(document.cookie);
            let decodeSplit = decode.split(";");
            // console.log(decodeSplit);

            if(decodeSplit[2] != undefined){
                let deco = decodeSplit[2].split("=");

                var statusCode = deco[1]==="win";
            }
            
            if(statusCode === false || decodeSplit[2] === undefined){
                if(count <= 3){
                    
                    const mono = event.target.parentElement.parentElement;
                    mono.classList.toggle('flipped');
                    let x = item.innerHTML - 1;
                    let xValue = btns3[x].innerHTML;

                    checkpro(xValue, item);

                    // let decode = decodeURIComponent(document.cookie);
                    // let decodeSplit = decode.split(";");

                    // console.log(decodeSplit);
                }
                else{
                    blurs.classList.add("blurs");
                    popup.classList.add("open-popup");
                }
            }else{

                reddy.style.display="block";
                blurs.classList.add("blurs");  
                // alert("Please redeem your promo.");
            }
        })
    });
