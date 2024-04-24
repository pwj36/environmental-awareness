function validateForm(){
    var name = document.forms["signupForm"]["name"].value;
    var email = document.forms["signupForm"]["email"].value;
    var password = document.forms["signupForm"]["password"].value;
    var phoneNum = document.forms["signupForm"]["phoneNum"].value;

    if(
        name==""||name==null||
        email==""||email==null||
        password==""||password==null||
        phoneNum==""||phoneNum==null){
        alert("Please fill out this field.");
        return false;
    }

    else if(password.length<8){
        alert("Password entered must be at least 8 characters!")
        return false;
    }

}