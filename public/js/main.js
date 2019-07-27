

{
    'use strict';
    const clear_btn = document.getElementById('clear');
    clear_btn.addEventListener("click" ,e =>{
        const text = document.querySelector('input[type = "text"]');
        text.value = "";
        const textarea = document.querySelector('textarea');
        textarea.value = "";
    });
}