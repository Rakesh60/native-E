// Password Hide Show JS
const password = document.getElementById('password');
const toggle = document.getElementById('toggle');
function showhide(){
    if(password.type === 'password'){
        password.setAttribute('type', 'text');
        toggle.classList.add('hide');
    }
    else{
        password.setAttribute('type', 'password');
        toggle.classList.remove('hide');

    }
}