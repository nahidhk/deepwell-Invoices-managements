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

function blockset(calldata){
    document.getElementById(calldata).style.display='block';
}
function closeset(calldata){
    document.getElementById(calldata).style.display='block';
   
}

function apicall(apilink){
    const apivalue = prompt('Enter The Api Value.');
    if (apivalue) {
        const myapilink = `${apilink}?apidata=${apivalue}`; 
        window.location.href=myapilink;
    } else {
        alert('Not Api Value');
    }
}






async function myDismy() {
    try {
        const response = await fetch('/api/units.api.php');
        const data = await response.json();
        const dataContainer = document.getElementById("units");
        if (!dataContainer) {
            throw new Error("Element with id 'showgroup' not found.");
        }
       data.forEach((item) => {
            const itemElement = document.createElement("tr");
            itemElement.innerHTML = `
                <td>${item.id}</td>
                <td>${item.name}</td>
                <td>${item.created_at}</td>
                <td><a href="/setting/unit.drop.php?id=${item.id}"><i class="fa-solid fa-trash-can m textred"></i></a></td>
            `;
            dataContainer.appendChild(itemElement);
        });
    } catch (error) {
        console.error("data error", error);
    }
}



async function myCrops() {
    try {
        const response = await fetch('/api/crops.api.php');
        const data = await response.json();
        const dataContainer = document.getElementById("crops");
        if (!dataContainer) {
            throw new Error("Element with id 'showgroup' not found.");
        }
       data.forEach((item) => {
            const itemElement = document.createElement("tr");
            itemElement.innerHTML = `
                <td>${item.id}</td>
                <td>${item.name}</td>
                <td>${item.created_at}</td>
                <td><a href="/setting/crop.drop.php?id=${item.id}"><i class="fa-solid fa-trash-can m textred"></i></a></td>
            `;
            dataContainer.appendChild(itemElement);
        });
    } catch (error) {
        console.error("data error", error);
    }
}

function datex(){
    const datex = document.getElementById('datex');
    const today = new Date();
    const month = today.getMonth() + 1;
    const year = today.getFullYear();
    const day = today.getDate();
    const myday =  day < 10 ? `0${day}` : `${day}`;
    const myonth =  month < 10 ? `0${month}` : `${month}`;
    const todaydate = `${year}-${myonth}-${myday}`;
    console.log(todaydate)
    datex.value = todaydate;
}

function allamaount(){
    const x = document.getElementById('price').value;
    const y = document.getElementById('qut').value;
    const z = document.getElementById('allamamount');
    z.value = x*y;

}



function setting(filedata) {
    const filePath = `setting/components/${filedata}.html`;
    setTimeout(() => {
        myDismy();
        myCrops();
    }, 1000);
    // Fetch the file dynamically
    fetch(filePath)
        .then((response) => {
            if (!response.ok) {
                throw new Error(`File not found: ${filePath}`);
            }
            return response.text();
        })
        .then((html) => {
            document.getElementById('hit').innerHTML = html;
        })
        .catch((error) => {
            document.getElementById('hit').innerHTML = `<p>Error: ${error.message}</p>`;
        });
}
