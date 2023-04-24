function removeBg(){
    var obj = document.getElementById("login");
    obj.style.removeProperty("background-color");
    obj.style.removeProperty("padding-left");
    obj.style.removeProperty("padding-right");
}

function InvalidMsg(textbox) {
  
    if (textbox.value === '') {
        textbox.setCustomValidity
              ('Insira seu nome de usuário!');
    } else if (textbox.validity.typeMismatch) {
        textbox.setCustomValidity
              ('Insira um nome de usuário válido.');
    } else {
        textbox.setCustomValidity('');
    }

    return true;
}

function InvalidMsgPass(textbox) {
  
    if (textbox.value === '') {
        textbox.setCustomValidity
              ('Insira sua senha!');
    } else if (textbox.validity.typeMismatch) {
        textbox.setCustomValidity
              ('Insira uma senha válida.');
    } else {
        textbox.setCustomValidity('');
    }

    return true;
}