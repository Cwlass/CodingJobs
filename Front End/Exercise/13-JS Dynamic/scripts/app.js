/*
News website
You are now in charge of the coding of a news related website.
The data are provided by google news service
and will be avaible in you code thanks to the file data.js

You are required today to add each article to a section
that will be filtered by category.
*/
console.log(articlesArray);
const articleMock = document.querySelector("#trending article");
/*
Hint :
1 - Use the cloning method to generate the cloned <article>s
*/
for (const articleData of articlesArray) {
    const articleHTMLClone = articleMock.cloneNode(true);

    document.querySelector('section  ').append(articleHTMLClone);
    articleHTMLClone.classList.add(articleData.category);
    articleHTMLClone.querySelector('h2').innerText = articleData.title;
    articleHTMLClone.querySelector('p').innerText = articleData.content;
    articleHTMLClone.querySelector('a').href = articleData.url;
}
articleMock.remove();
const filter = document.querySelector("form input[type=submit]");
filter.addEventListener('click', function (event) {
    event.preventDefault();
    hideAllArticles();
    let filterValue = document.querySelector("form select").value;
    switch (filterValue) {
        case "all":
            showFilteredArticle("science");
            showFilteredArticle("politics");
            break;
        case "science":
            showFilteredArticle("science");
            break;
        case "politics":
            showFilteredArticle("politics");
            break;
    }
})

function hideAllArticles() {
    const allHTMLArticles = document.querySelectorAll('article');
    for (const articleHTML of allHTMLArticles) {
        articleHTML.style.display = 'none';
    }
}
function showFilteredArticle(category) {
    const filteredHTMLArticles = document.querySelectorAll('article.' + category);
    for (const articleHTML of filteredHTMLArticles) {
        articleHTML.style.display = '';
    }
}
/*
BONUS : to make this even more interactive a list of category
 can replace the form submission
uncomment this part of the HTML code
*/
// Create an Event listener that will listen to "click" 
//FOR EACH of the links an launch an function called "filterArticles"

// The function "filterArticles" will:
// remove the CSS class "selected" FOR EACH of the links inside this list
// add the CSS class "selected" to the clicked link using this line
// filter the section articles using the algorythm from question 
//3(time for a function maybe ?)
