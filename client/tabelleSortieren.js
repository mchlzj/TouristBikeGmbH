function sortTable(table, column, asc = true) {
    //Konstanten für Sortierung, Tabelle und Tabellenzeilen
    const dirModifier = asc ? 1: -1;
    const tBody = table.tBodies[0];
    const rows = Array.from(tBody.querySelectorAll('tr'));

    //Sortierung für Zeilen 
    const sortedRows = rows.sort((a,b) => {
        const aColText = a.querySelector(`td:nth-child(${column + 1})`).textContent.trim();
        const bColText = b.querySelector(`td:nth-child(${column + 1})`).textContent.trim();
        
        return aColText > bColText ? (1 * dirModifier) : (-1 * dirModifier);
    });

    //Entfernen der aktuellen Zeilen
    while(tBody.firstChild) {
        tBody.removeChild(tBody.firstChild);
    }

    //Hinzufügen der sortierten Zeilen
    tBody.append(...sortedRows);

    //CSS für Sortierungspfeil ändern
    table.querySelectorAll('th').forEach(th => th.classList.remove('th-sort-asc', 'th-sort-desc'));
    table.querySelector(`th:nth-child(${column + 1})`).classList.toggle('th-sort-asc', asc);
    table.querySelector(`th:nth-child(${column + 1})`).classList.toggle('th-sort-desc', !asc);
}

//Eventlistener für jeden Tabellenkopf hinzufügen
document.querySelectorAll('th').forEach(headerCell => {
    headerCell.addEventListener('click', () => {
        //Konstanten für entsprechende Argumente erstellen
        const tableElement = headerCell.parentElement.parentElement.parentElement;
        const headerIndex = Array.prototype.indexOf.call(headerCell.parentElement.children, headerCell);
        const currentIsAscending = headerCell.classList.contains('th-sort-asc');

        sortTable(tableElement, headerIndex, !currentIsAscending);
    });
});