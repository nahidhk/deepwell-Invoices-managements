async function displayData(filters = {}) {
    try {
        const response = await fetch(apilink);
        const data = await response.json();
        const dataContainer = document.getElementById("app");
        if (!dataContainer) {
            throw new Error("Element with id 'app' not found.");
        }
        dataContainer.innerHTML = "";
        const filteredData = data.filter((item) => {
            const matchesName = item.name.toLowerCase().includes(filters.name || "");
            const matchesFname = item.fname.toLowerCase().includes(filters.fname || "");
            const matchesGram = item.vlg.toLowerCase().includes(filters.gram || "");
            const matchesPara = item.para.toLowerCase().includes(filters.para || "");
            const matchesSearch = (
                item.name.toLowerCase().includes(filters.search || "") ||
                item.fname.toLowerCase().includes(filters.search || "") ||
                item.vlg.toLowerCase().includes(filters.search || "") ||
                item.para.toLowerCase().includes(filters.search || "") ||
                (typeof item.mobile === "string" && item.mobile.toLowerCase().includes(filters.search || "")) ||
                item.work.toLowerCase().includes(filters.search || "")
            );

            return matchesName && matchesFname && matchesGram && matchesPara && matchesSearch;
        });

        filteredData.forEach((item) => {
            const itemElement = document.createElement("tr");
            itemElement.innerHTML = `
              input element
            `;
            dataContainer.appendChild(itemElement);
        });
    } catch (error) {
        console.error("data error", error);
    }
}
