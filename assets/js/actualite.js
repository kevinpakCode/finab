import news from "./data/news.js";

const articlesPerPage = 12;
const totalPages = Math.ceil(news.length / articlesPerPage);

function displayArticles(pageNumber, articlesToDisplay = news) {
    const start = (pageNumber - 1) * articlesPerPage;
    const end = start + articlesPerPage;
    const articles = articlesToDisplay.slice(start, end);

    const newsContainer = document.querySelector('#news-container');
    newsContainer.innerHTML = '';

    articles.forEach(article => {
        const articleElement = document.createElement('div');
        articleElement.className = 'single_new';

        const imgContainer = document.createElement('div');
        imgContainer.className = 'single_new_img';
        const img = document.createElement('img');
        img.src = './assets/images/actualite/new.png';
        imgContainer.appendChild(img);
        articleElement.appendChild(imgContainer);

        const textContainer = document.createElement('p');
        textContainer.className = 'single_new_text';
        textContainer.textContent = article.contenu;
        articleElement.appendChild(textContainer);

        const dateContainer = document.createElement('div');
        dateContainer.className = 'single_new_date';
        const icon = document.createElement('i');
        icon.className = 'icon icon-calendar';
        dateContainer.appendChild(icon);
        const dateText = document.createElement('p');
        dateText.className = 'single_new_date_p';
        dateText.textContent = article.date_publication;
        dateContainer.appendChild(dateText);
        articleElement.appendChild(dateContainer);

        newsContainer.appendChild(articleElement);
    });
}

function handlePagination(pageNumber, articlesToDisplay = news) {
    displayArticles(pageNumber, articlesToDisplay);
    updatePaginationButtons(pageNumber, articlesToDisplay);
}

function updatePaginationButtons(currentPage, articlesToDisplay = news) {
    const totalFilteredPages = Math.ceil(articlesToDisplay.length / articlesPerPage);

    const paginationContainer = document.querySelector('#pagination-container');
    paginationContainer.innerHTML = '';

    const prevButton = document.createElement('button');
    prevButton.className = 'arrow-btn';
    prevButton.disabled = currentPage === 1;
    prevButton.innerHTML = '<i class="icon icon-left arrow-btn"></i>';
    prevButton.onclick = () => handlePagination(currentPage - 1, articlesToDisplay);
    paginationContainer.appendChild(prevButton);

    for (let i = 1; i <= totalFilteredPages; i++) {
        const pageButton = document.createElement('span');
        pageButton.textContent = i;
        pageButton.className = i === currentPage ? 'active' : 'paginate-select';
        pageButton.onclick = () => handlePagination(i, articlesToDisplay);
        paginationContainer.appendChild(pageButton);
    }

    const nextButton = document.createElement('button');
    nextButton.className = 'arrow-btn';
    nextButton.disabled = currentPage === totalFilteredPages;
    nextButton.innerHTML = '<i class="icon icon-right arrow-btn"></i>';
    nextButton.onclick = () => handlePagination(currentPage + 1, articlesToDisplay);
    paginationContainer.appendChild(nextButton);
}

document.getElementById('search-input').addEventListener('input', (event) => {
    const searchQuery = event.target.value.toLowerCase();
    const filteredNews = news.filter(article => article.contenu.toLowerCase().includes(searchQuery));
    handlePagination(1, filteredNews); 
});

document.addEventListener('DOMContentLoaded', (event) => {
    handlePagination(1); 
});

document.querySelector('#end').addEventListener('change', function() {
    const inputDate = this.value;
    const dateRegex = /^\d{4}-\d{2}-\d{2}$/; 
    if (dateRegex.test(inputDate)) {
    } else {
        this.value = '';
        alert('Veuillez entrer une date au format JJ/MM/AAAA');
    }
});