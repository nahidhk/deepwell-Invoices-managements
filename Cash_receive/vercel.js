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
                    dropdown({ search: item.id});
                }
            });
            if (!found) {
                n.value = '';
                fn.value = '';
                gx.value = '';
               
                dropdown({ search: 0 });

            }
        })
        .catch((error) => {
            console.log("Error:", error);
        });
}
document.getElementById('accno').addEventListener('input', loadbackendformdata);
