async function displayData(filters = { search: "" }) {
    try {
        const response = await fetch('/api/invoiceapi.php');
        const data = await response.json();
        const dataContainer = document.getElementById("invoices");
        if (!dataContainer) {
            throw new Error("Element with id  not found.");
        }
        dataContainer.innerHTML = "";
        const filteredData = data.filter((item) => 
            item.invoiceid.toLowerCase().includes(filters.search.toLowerCase()) ||
        item.accountno.toLowerCase().includes(filters.search.toLowerCase()) ||
        item.id.toLowerCase().includes(filters.search.toLowerCase()) ||
        item.groupx.toLowerCase().includes(filters.search.toLowerCase())
        );

        filteredData.forEach((item) => {
            const itemElement = document.createElement("tr");
            itemElement.innerHTML = `
                                                  
                                        <td>${item.id}</td>
                                        <td>${item.submitdate}</td>
                                        <td>${item.invoiceid}</td>
                                        <td>${item.accountno}</td>
                                        <td>${item.name}</td>
                                        <td>${item.fname}</td>
                                        <td>${item.groupx}</td>
                                        <td>(${item.description}) ${item.dpct} ${item.quantity} ${item.unit} ${item.crop}</td>
                                        <td>${item.price}/-</td>
                                        <td>${item.amaount}/-</td>
                                        <td>${item.notes}</td>
                                        <th>${item.users}</th>
                                    
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

