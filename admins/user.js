async function displayData(filters = { search: "" }) {
    try {
        const response = await fetch('/api/userapi.php');
        const data = await response.json();
        const dataContainer = document.getElementById("showuser");
        if (!dataContainer) {
            throw new Error("Element with id 'showgroup' not found.");
        }
        dataContainer.innerHTML = "";
        const filteredData = data.filter((item) =>
            item.username.toLowerCase().includes(filters.search.toLowerCase())
        );

        filteredData.forEach((item) => {
            const itemElement = document.createElement("tr");
            itemElement.innerHTML = `
                <td>${item.id}</td>
                <td>${item.username}</td>
                                <td>${item.name}</td>

                                <th>${item.pin}</th>

                <td>${item.created_at}</td>
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