var login = document.querySelector("#login");
var signup = document.querySelector("#signup");
var divAll = document.querySelector("#div-all");
var loginPage = document.getElementsByClassName("login-page")[0];

loginPage.addEventListener("click", ()=> {
    loginPage.style.backgroundColor="midnightblue"
    signupPage.style.backgroundColor="transparent";
    login.style.display="block";
    signup.style.display="none";
    divAll.style.height="60%";  

})

var signupPage = document.getElementsByClassName("signup-page")[0];

signupPage.addEventListener("click", ()=> {
    signupPage.style.backgroundColor="midnightblue";
    loginPage.style.backgroundColor="transparent"
    login.style.display="none";
    signup.style.display="block";
    divAll.style.height="80%";
})
