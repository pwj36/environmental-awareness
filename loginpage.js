

function validateForm(){
    var email = document.forms["loginForm"]["email"].value;
    var password = document.forms["loginForm"]["password"].value;

    if(email==""||email==null||password==""||password==null){
        alert("Please fill out this field.");
        return false;
    }

    else if(password.length<8){
        alert("Password entered must be at least 8 characters!")
        return false;
    }

}

