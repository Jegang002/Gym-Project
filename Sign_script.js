const form = document.getElementById("form");
const username = document.getElementById("username");
const password = document.getElementById("password");
const email = document.getElementById("email");

form.addEventListener('submit', (e) =>{
    e.preventDefault();
    validateInputs();
});

function validateInputs() {
    const usernameval = username.value.trim();
    const passwordval  = password.value.trim();
    const emailval = email.value.trim();
    
    if(usernameval === ""){
        setError(username, 'Required')
    } else{
        clearError(username);
    }

    if(passwordval === ""){
        setError(password, 'Required')
    } else{
        clearError(password);
    }

    if(emailval === ""){
        setError(email, 'Required')
    } else{
        clearError(email);
    }
}

function setError(element, message){
    const inputGroup = element.parentElement;
    const errorElement = inputGroup.querySelector('.error');
    errorElement.innerText = message;
}

function clearError(element) {
    const inputGroup = element.parentElement;
    const errorElement = inputGroup.querySelector('.error');
    errorElement.innerText = '';
}
