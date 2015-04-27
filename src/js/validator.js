function validate(){
    var login = document.forms["form"]["login"].value;
    var password = document.forms["form"]["password"].value;
    var name = document.forms["form"]["name"].value;
    var second_name = document.forms["form"]["second_name"].value;
    var email = document.forms["form"]["email"].value;
    var about = document.forms["form"]["about"].value;
    var isGood = true;

    document.getElementById("loginf").style.display = "none";
    document.getElementById("passwordf").style.display = "none";
    document.getElementById("namef").style.display = "none";
    document.getElementById("second_namef").style.display = "none";
    document.getElementById("emailf").style.display = "none";
    document.getElementById("aboutf").style.display = "none";

    if (!/^.{3,20}$/.test(login)){
        document.getElementById("loginf").style.display = "";
        isGood = false;
    }

    if (!/^[a-zA-Z0-9_$#]{3,20}$/.test(password)){
        document.getElementById("passwordf").style.display = "";
        isGood = false;
    }

    if (!/^[a-zA-Zа-яА-ЯёЁіІїЇ]{3,50}$/.test(name)){
        document.getElementById("namef").style.display = "";
        isGood = false;
    }

    if (!/^[a-zA-Zа-яА-ЯёЁіІїЇ]{3,50}$/.test(second_name)){
        document.getElementById("second_namef").style.display = "";
        isGood = false;
    }

    if (email.length > 0) {
        if (!/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/.test(email)) {
            document.getElementById("emailf").style.display = "";
            isGood = false;
        }
    }

    if (!/^.{0,255}$/.test(about)) {
        document.getElementById("aboutf").style.display = "";
        isGood = false;
    }

    return isGood;
}