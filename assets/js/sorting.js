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




//for new publications page:
/* document.querySelector('#sort-reverse-table').addEventListener('click', () => {
    //isreversed = !isreversed;
    const container = document.querySelector('#table-of-publications');
    const lists = Array.from(container.querySelectorAll('.sortable-rows'));
 
    lists.reverse();


    container.innerHTML = '';

    for (const list of lists) {
        container.appendChild(list);
    }
});  */




