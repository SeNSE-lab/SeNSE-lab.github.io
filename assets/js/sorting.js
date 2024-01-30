//for old publications page:
 document.querySelector('#sort-reverse').addEventListener('click', () => {
    //isreversed = !isreversed;
    const container = document.querySelector('#list-of-publications');
    const lists = Array.from(container.querySelectorAll('.sortable'));
 
    lists.reverse();


    container.innerHTML = '';

    for (const list of lists) {
        container.appendChild(list);
    }
}); 

document.querySelector('#sort-reverse-table').addEventListener('click', () => {
    const tablecontainer = document.querySelector('#table-of-publications');
    const tablelists = Array.from(tablecontainer.querySelectorAll('.sortable-rows'));
    
    tablelists.reverse();
    
    tablecontainer.innerHTML = '';

    for (const div of tablelists) {
        tablecontainer.appendChild(div);
    }
});

//for new publications page:
/* document.querySelector('#sort-reverse-table').addEventListener('click', () => {
    
    const table = document.querySelector('#table-of-publications');
    const rows = Array.from(table.querySelectorAll('.sortable-rows'));
    
    rows.reverse(); // Reversing the array of rows

    const tbody = table.querySelector('tbody');
    tbody.innerHTML = ''; // Clearing the content of the table body

    for (const row of rows) {
        tbody.appendChild(row); // Appending the sorted (or reversed) rows back to the table body
    }
}); */



