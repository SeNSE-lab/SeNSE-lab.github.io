/* let isreversed = false;
let iscategorized = false; */

document.querySelector('#sort-reverse').addEventListener('click', () => {
    //isreversed = !isreversed;
    const container = document.querySelector('#list-of-publications');
    const lists = Array.from(container.querySelectorAll('.sortable'));
    
    //if (isreversed) {
        lists.reverse();
    //}

    container.innerHTML = '';

    for (const list of lists) {
        container.appendChild(list);
    }
});

//sort by category
/* document.querySelector('#sort-category').addEventListener('click', () => {
    iscategorized = !iscategorized;
    const container = document.querySelector('#list-of-publications');
    const lists = Array.from(container.querySelectorAll('.sortable'));

    if (iscategorized) {
        lists.sort
    }
}); */