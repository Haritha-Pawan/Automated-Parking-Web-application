function validation(){
    if(document.Formfill.UserName.value==""){
        document.getElementById("result").innerHTML="Enter UserName*";
        return false;
    }
    else if(document.Formfill.UserName.value.length<6){
        document.getElementById("result").innerHTML="Atleast six letter*";
        return false;
    }
    else if(document.Formfill.Email.value==""){
        document.getElementById("result").innerHTML="Enter your email*";
        return false;
    }
    else if(document.Formfill.Password.value.length<6){
        document.getElementById("result").innerHTML="Password must be 6-digits*";
        return false;
    }
    else if(document.Formfill.cPassword.value==""){
        document.getElementById("result").innerHTML="Enter confirm password*";
        return false;
    }
    else if(document.Formfill.cPassword.value!==document.Formfill.Password.value){
        document.getElementById("result").innerHTML="Password doesn't matched*";
        return false;
    }
    
}