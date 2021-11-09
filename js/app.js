let body = document.body;
debugger


//// dark mode java script

var night;
let time_btn = document.querySelector(".time_btn");
let time_img = document.querySelector("#time_img");


window.addEventListener('load', () => {
    if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
        night = true;
        body.classList.add("night");
        time_img.src = "img/sun.png";
    } else {
        night = false;
        body.classList.remove("night");
        time_img.src = "img/moon.png";
    }
});


time_btn.addEventListener("click", () => {
    if (night === false) {
        body.classList.add("night");
        time_img.src = "img/sun.png";
        night = true;
    } else if (night === true) {
        body.classList.remove("night");
        time_img.src = "img/moon.png";
        night = false;
    }
})



/// caluclator java script
let first_num = document.querySelector("#first_num");
let second_num = document.querySelector("#second_num");
let oprator = document.querySelector("#oprator");
let sub_btn = document.querySelector("#sub");
let del_btn = document.querySelector("#del");
let answer = document.querySelector(".num");
sub_btn.addEventListener("click", calculate);
del_btn.addEventListener("click", delet);
var result;


// function calculate() {
//     let val_one = first_num.value;
//     let val_two = second_num.value;
//     let op_val = oprator.value;
//     if (val_one.trim() === "" || val_two.trim() === "" || op_val === "") {
//         alert(" please fill all the field ");
//     } else {

//         switch (op_val) {
//             case "+":
//                 result = eval(val_one) + eval(val_two);
//                 break;
//             case "-":
//                 result = eval(val_one) - eval(val_two);
//                 break;
//             case "*":
//                 result = eval(val_one) * eval(val_two);
//                 break;
//             case "/":
//                 if (eval(val_two) === 0) {
//                     alert("The Number is Infinite")
//                 } else {
//                     result = eval(val_one) / eval(val_two);
//                 }
//                 break;
//         }

//         answer.textContent = result;
//     }
// }

function delet() {
    first_num.value = "";
    second_num.value = "";
    oprator.value = "";
    answer.textContent = "0";
}


// key code functions

window.addEventListener("keydown", (e) => {
    if (e.keyCode === 46) {
        delet()
    }
    if (e.keyCode === 13) {
        calculate()
    }
})
