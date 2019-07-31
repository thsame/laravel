

{
    'use strict';
    const clear_btn = document.getElementById('clear');
    clear_btn.addEventListener("click" ,e =>{
        const text = document.querySelector('input[type = "text"]');
        text.value = "";
    });

    window.onload = function(){
        const test = document.getElementById("test");
        var test_text = "test";
        test.innerHTML = test_text;
    }
}