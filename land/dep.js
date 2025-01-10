const depoapi = '/api/depoapi.php';
function depo() {
    fetch(depoapi)
        .then(response => response.json())
        .then(data => {
            const dataList = document.getElementById('dep');
            data.forEach(item => {
                const option1 = document.createElement('option');
                option1.value = item.id;
                option1.textContent = item.depo;
                dataList.appendChild(option1);
            });
           
        })
        .catch(error => console.error('Error fetching data:', error));
}

function myif(){
    const mydata = document.getElementById('dep'); 
    const unit =  document.getElementById('unit');
    fetch(depoapi)
        .then((response) => response.json())
        .then((data) => {
            let found = false;
            data.forEach((item) => {
                if (item.id === mydata.value) {                 
                    found = true;
                   unit.value = item.unit;
                }
            });
            if (!found) {
               unit.value='Error'
            }
        })
        .catch((error) => {
            console.log("Error:", error);
        });
}

function valuviwe() {
    const depElement = document.getElementById('dep');
    const selectedDep = depElement.options[depElement.selectedIndex].text;
    const tow = document.getElementById('qunt').value;
    const three = document.getElementById('unit').value;
    const showall = document.getElementById('showall');
    showall.value = `${selectedDep} - ${tow} - ${three}`;
    document.getElementById('depid').value = selectedDep;
}


async function displaymyData(filters = { search: "" }) {
    try {
        const response = await fetch('/api/landapi.php');
        const data = await response.json();
        const dataContainer = document.getElementById("showunit");
        if (!dataContainer) {
            throw new Error("Element with id 'showunit' not found.");
        }
        dataContainer.innerHTML = "";
        const filteredData = data.filter((item) => 
            item.account.toLowerCase().includes(filters.search.toLowerCase())
        );

        filteredData.forEach((item) => {
            const itemElement = document.createElement("tr");
            itemElement.innerHTML = `
                <td>${item.id}</td>
                <td>${item.account}</td>
                <td>${item.showunit}</td>
                <td>${item.created_at}</td>
                <td><a href="/land/drop.php?id=${item.id}"><i class="fa-regular fa-trash-can textred m"></i></a></td>
            `;
            dataContainer.appendChild(itemElement);
        });
    } catch (error) {
        console.error("data error", error);
    }
}

function filterData() {
    const myFilter = document.getElementById('accno').value;
    displaymyData({ search: myFilter });
}

document.getElementById('accno').addEventListener('input', filterData);

displaymyData();