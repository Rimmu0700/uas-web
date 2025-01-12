document.getElementById('search-button').addEventListener('click', function() {
    const query = document.getElementById('search-input').value;
    const resultsContainer = document.getElementById('search-results');

    resultsContainer.innerHTML = '';

   
    if (query) {
        const items = document.querySelectorAll('.laptop-item');
        let found = false;

        items.forEach(item => {
            const title = item.querySelector('h3').textContent.toLowerCase();
            if (title.includes(query.toLowerCase())) {
                const clonedItem = item.cloneNode(true);
                resultsContainer.appendChild(clonedItem);
                found = true;
            }
        });

        if (!found) {
            resultsContainer.textContent = 'No results found.';
        }
    } else {
        resultsContainer.textContent = 'Please enter a search term.';
    }
});