async function displayData(filters = { search: "" }) {
    try {
        const response = await fetch('/api/fr.php');
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
                <td>${item.fathername}</td>
                <td>${item.mathername}</td>
                <td>${item.phone}</td>
                <td>${item.groupx}</td>
                <td>${item.address}</td>
                <td>${item.email}</td>
                <td>${item.created_at}</td>
                <td><a href="/info/edit/?i=${item.id}&n=${item.name}&f=${item.fathername}&m=${item.mathername}&p=${item.phone}&gx=${item.groupx}&e=${item.email}&a=${item.address}"><i class="fa-regular fa-pen-to-square"></i></a></td>
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