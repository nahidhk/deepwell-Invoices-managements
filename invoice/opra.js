
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