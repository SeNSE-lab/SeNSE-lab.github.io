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
        lists.sort((a, b, c, d, e) => {
            const biomech = a.classList.contains('biomech') ? 'biomech' : '';
            const neurosci = b.classList.contains('neurosci') ? 'neurosci' : '';
            const robot = c.classList.contains('robot') ? 'robot' : '';
            const fluid = d.classList.contains('fluid') ? 'fluid' : '';
            const morph = e.classList.contains('morph') ? 'morph' : '';
                  
        });
    }

    container.innerHTML = '';
    for (const list of lists) {
      container.appendChild(list);
    }
  
    updateHeading();
}); 

function updateHeading() {
    const heading = document.querySelector('#category-heading');
    heading.textContent = isSortedByCategory ? 'Sorted by Category' : 'Original Category';
} */

