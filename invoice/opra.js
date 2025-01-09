
const groupapi = '/api/userapi.php';
function yuoip() {
    fetch(groupapi)
        .then(response => response.json())
        .then(data => {
            const dataList = document.getElementById('opra');
            data.forEach(item => {
                const option1 = document.createElement('option');
                option1.innerHTML = `<option value="${item.name}">${item.name}</option>`;
                dataList.appendChild(option1);
            });

        })
        .catch(error => console.error('Error fetching data:', error));
}
yuoip();

function invoiceid(id) {
    const today = new Date();
    const month = today.getMonth() + 1;
    const day = today.getDate();
    const formattedMonth = month < 10 ? `0${month}` : `${month}`;
    const formattedDay = day < 10 ? `0${day}` : `${day}`;
    const accno = id;
    const years = today.getFullYear().toString().slice(-2)
    const invoicemyid = `${formattedDay}${formattedMonth}${accno}${years}`;
    const accountid = invoicemyid.padStart(10, '0');
    const inidElement = document.getElementById('inid');
    if (accountid.length === 10) {
        inidElement.value = accountid;
        inidElement.style.border = '1px solid #4680ff';
        document.getElementById('thebtn').style.opacity = '1';
    } else {
        inidElement.value = 'Error Invoice ID'
        inidElement.style.border = '1px solid red';
        document.getElementById('thebtn').style.opacity = '0';
    }

}


function loadbackendformdata() {
    const mydata = document.getElementById('accno');
    const n = document.getElementById('n');
    const fn = document.getElementById('fn');
    const gx = document.getElementById('gx');
    fetch("/api/fr.php")
        .then((response) => response.json())
        .then((data) => {
            let found = false;
            data.forEach((item) => {
                if (item.id === mydata.value) {
                    n.value = item.name;
                    fn.value = item.fathername;
                    gx.value = item.groupx;
                    invoiceid(item.id);
                    found = true;
                    mydata.style.border = '1px solid #4680ff'; 
                    n.style.border = '1px solid #4680ff';
                    fn.style.border = '1px solid #4680ff';
                }
            });
            if (!found) {
                n.value = '';
                fn.value = '';
                gx.value = '';
                mydata.style.border = '1px solid red';
                n.style.border = '1px solid red';
                fn.style.border = '1px solid red';
                document.getElementById('inid').value='';
            }
        })
        .catch((error) => {
            console.log("Error:", error);
        });
}
document.getElementById('accno').addEventListener('input', loadbackendformdata);