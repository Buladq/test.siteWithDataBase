const form=document.getElementById('form1')
const formFields=form.elements;

const submitBtn=form.querySelector('[type="submit"]');
// submitBtn.addEventListener('click',clearStorage);

for (let i=0;i<formFields.length;i++){
    formFields[i].addEventListener('change',changeHandler);
}






// function clearStorage(){
//     localStorage.clear();
// }

function changeHandler(){
    if (this.type!=='checkbox'){
        console.log(this.name,this.value);
        localStorage.setItem(this.name,this.value);
    }
    else{
        console.log(this.name,this.checked);
        localStorage.setItem(this.name,this.checked);
    }
}

function checkStorage(){
    for (let i=0;i<formFields.length;i++){
        if (formFields[i].type!=='submit'){
            if (formFields[i].type==='checked'){
                formFields[i].checked=localStorage.getItem(formFields[i].name)
            }
            else{
                formFields[i].value=localStorage.getItem(formFields[i].name)
            }
        }
    }
    attachEvents();
}

function attachEvents(){
    for (let i=0;i<formFields.length;i++){
        formFields[i].addEventListener('change',changeHandler);
    }
}



checkStorage();












//

"use strict";
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("form1");
    form.addEventListener("submit", formSend);
    async function formSend(e) {
        e.preventDefault();
        let error = formValidate(form);

        let formData = new FormData(form);

        if (error === 0) {
            for (const iterator of formData) {
                console.log(iterator);
                window.location.href = "test.php";
            }
        }
    }


    function formValidate(form) {
        let error = 0;
        let formReq = document.querySelectorAll("._req");
        for (let index = 0; index < formReq.length; index++) {
            const input = formReq[index];
            formRemoveError(input);

            if (input.classList.contains("_email")) {
                if (emailTest(input)) {
                    formAddError(input);
                    error++;
                }
            } else if (
                input.getAttribute("type") === "checkbox" &&
                input.checked === false
            ) {
                formAddError(input);
                error++;
            } else {
                if (input.value === "") {
                    formAddError(input);
                    error++;
                }
            }
        }
        return error;
    }
    function formAddError(input) {
        input.parentElement.classList.add("_error");
        input.classList.add("_error");
    }
    function formRemoveError(input) {
        input.parentElement.classList.remove("_error");
        input.classList.remove("_error");
    }
    function emailTest(input) {
        return !/^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,8})+$/.text(input.value);
    }
});









