// Открыть модальное окно контактов
if(btnOpenContact) {
var btnOpenContact = document.querySelector("#open_contact"); 
btnOpenContact.onclick = function() {
	var contactsModal = document.querySelector("#contacts-modal");
    contactsModal.style.display = "block";
    }
}

if(contactsModalCloseBtn) {
// Закрыть модальное окно контактов
var contactsModalCloseBtn = document.querySelector("#contacts-modal .close");
contactsModalCloseBtn.onclick = function () {
    var contactsModal = document.querySelector("#contacts-modal");
    contactsModal.style.display = "none";	
    }
}

if(btnOpenExit) {
// Открыть модальное окно авторизации
var btnOpenExit = document.querySelector("#open_exit");
btnOpenExit. onclick = function() {
    var exitModal = document.querySelector("#exit-modal");
    exitModal.style.display = "block";
    }
}



/* AJAX ЗАПРОС НА ДОБАВЛЕНИЯ СООБЩЕНИЙ */ 
var form = document.querySelector("#form");
form.onsubmit = function(sobitye) {
    
sobitye.preventDefault();

    var komu = form.querySelector("input[name='komu_user_id']");
    var ot = form.querySelector("input[name='ot_user_id']");
    var text = form.querySelector("textarea");

    var dannie = "send_sms=1" + 
                    "&komu_user_id=" + komu.value + 
                    "&ot_user_id=" + ot.value + 
                    "&text=" + text.value;

    var ajax = new XMLHttpRequest();
        ajax.open("POST", form.action, false);
        ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        ajax.send(dannie);
        text.value = "";
        
     var listMessages = document.querySelector("#list-messages");
        listMessages.innerHTML = ajax.response;

}
