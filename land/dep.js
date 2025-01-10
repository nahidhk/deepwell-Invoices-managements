const depoapi = '/api/depoapi.php';
function depo() {
    fetch(depoapi)
        .then(response => response.json())
        .then(data => {
            const dataList = document.getElementById('dep');
            data.forEach(item => {
                const option1 = document.createElement('option');
                const value1 = document.getElementById('unit');
                option1.innerHTML = `<option value="${item.depo}">${item.depo}</option>`;
                dataList.appendChild(option1);
            });
           
        })
        .catch(error => console.error('Error fetching data:', error));
}
depo();

