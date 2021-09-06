var Name = "ABC";
document.getElementById("Name").innerHTML = Name;
var status = "Employed";
document.getElementById("Status").innerHTML = status;

var FirstName;

var pid = "123";
var password = "dsffw";
var phno,age,gender,fno,street,city,state,pincode,dname1,dphno1,dname2,dphno2;
document.getElementById("FName").innerHTML = Name;

document.getElementById("Pid").innerHTML = pid;

function checkuserpatient(){
    if(document.getElementById("uname").value=="")
        alert("Enter username");
    else{
        document.getElementById("username").style.display = "none";
        document.getElementById("password").style.display = "block";
    }
}

function checkpasspatient(){
    if(document.getElementById("pass").value=="")
        alert("Enter Password");
    else
    location.replace("index.html")
}

function checkuseradmin(){
    if(document.getElementById("uname").value=="")
        alert("Enter username");
    else{
        document.getElementById("username").style.display = "none";
        document.getElementById("password").style.display = "block";
    }
}

function checkpassadmin(){
    if(document.getElementById("pass").value=="")
        alert("Enter Password");
    else
    location.replace("profile-admin.html")
}

function checkpatientcode() {
    if (document.getElementById("code").value == "")
        alert("Invalid Access Code");
    else {
        document.getElementById("Patient").style.display = "none";
        document.getElementById("record").style.display = "block";
    }
}

function checkFirstLetter(){
    return FirstName[0];
}