function validate()
{
    var Email=document.getElementById("email-id").value;
    var password=document.getElementById("password").value;
    if(Email=="email-id" && password=="password")
    {
        alert("LOGIN OF WARDEN SUCCESSFULL");
    }
    else
    {
        alert("EMAIL-ID AND PASSWORD DOES NOT MATCH");
    }


}