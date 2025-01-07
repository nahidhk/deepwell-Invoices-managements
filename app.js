function showLiveDateTime() {
    const now = new Date();
    const date = now.toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric',
    });
    const time = now.toLocaleTimeString('en-US', {
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
    });

    const dateTime = `${date}, ${time}`;
    document.getElementById("liveDateTime").textContent = dateTime;
}
setInterval(showLiveDateTime, 1000);
showLiveDateTime();

function loginload(){
document.getElementById("username").value = localStorage.getItem("username");
}
function logfunction() {
    let user = {
        usernamejson: "root",
        passwordjson: "12345678"
    }
    const err = document.getElementById("error");
    const username = document.getElementById("username");
    const password = document.getElementById("password");

    if (username.value === user.usernamejson && password.value === user.passwordjson) {
        localStorage.setItem("username", username.value);
        err.innerHTML = ""
        sessionStorage.setItem("login", true);
        window.location.href='/'
    } else {
        err.innerHTML = "error login"
    }
}

function clickcard(hrefdata){
window.location.href="/"+hrefdata
}


