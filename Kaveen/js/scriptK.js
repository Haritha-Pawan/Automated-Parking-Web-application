function validation(){
    if(document.Formfill.Fullname.value==""){
        document.getElementById("result").innerHTML="Enter Full Name*";
        return false;
    }
    else if(document.Formfill.Fullname.value.length<6){
        document.getElementById("result").innerHTML="Atleast six letters*";
        return false;
    }
    else if(document.Formfill.Email.value==""){
        document.getElementById("result").innerHTML="Enter your email*";
        return false;
    }
    else if(document.Formfill.Address.value==""){
        document.getElementById("result").innerHTML="Enter your address*";
        return false;
    }
    else if(document.Formfill.Vehicletype.value==""){
        document.getElementById("result").innerHTML="Enter vehicle type*";
        return false;
    }
    else if(document.Formfill.VehicleNo.value==""){
        document.getElementById("result").innerHTML="Enter your vehicle no.*";
        return false;
    }
    else if(document.Formfill.Password.value==""){
        document.getElementById("result").innerHTML="Enter your password*";
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