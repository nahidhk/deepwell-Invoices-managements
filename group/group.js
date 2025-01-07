async function displayData(filters = { search: "" }) {
    try {
        const response = await fetch('/api/groupapi.php');
        const data = await response.json();
        const dataContainer = document.getElementById("showgroup");
        if (!dataContainer) {
            throw new Error("Element with id 'showgroup' not found.");
        }
        dataContainer.innerHTML = "";
        const filteredData = data.filter((item) => 
            item.name.toLowerCase().includes(filters.search.toLowerCase())
        );

        filteredData.forEach((item) => {
            const itemElement = document.createElement("tr");
            itemElement.innerHTML = `
                <td>${item.id}</td>
                <td>${item.name}</td>
                <td>${item.created_at}</td>
                <td><a href="/group/edit/?id=${item.id}&groupname=${item.name}"><i class="fa-regular fa-pen-to-square"></i></a></td>
            `;
            dataContainer.appendChild(itemElement);
        });
    } catch (error) {
        console.error("data error", error);
    }
}

function filterData() {
    const myFilter = document.getElementById('filter').value;
    displayData({ search: myFilter });
}

document.getElementById('filter').addEventListener('input', filterData);

displayData();