//for old publications page:
 document.querySelector('#sort-reverse').addEventListener('click', () => {
    const container = document.querySelector('#list-of-publications');
    const lists = Array.from(container.querySelectorAll('.sortable'));
 
    lists.reverse();


    container.innerHTML = '';

    for (const list of lists) {
        container.appendChild(list);
    }
}); 




