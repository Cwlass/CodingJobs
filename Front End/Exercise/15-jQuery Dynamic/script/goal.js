const myElement = $("article").eq(0);
const myTarget = $("main").eq(0);
for (const articleData of goalsArray) {
    const cloneElement = myElement.clone();
    cloneElement.appendTo(myTarget);
    cloneElement.find('h2').text(articleData.name);
    cloneElement.find('.current').text("£ " + articleData.current);
    cloneElement.find('.goal').text("£" + articleData.goal);

    if (articleData.riched) {
        cloneElement.addClass("reached");
    } else {
        cloneElement.addClass("new");
    }

    const percentage = (articleData.current / articleData.goal) * 100;

    setTimeout(() => {
        cloneElement.find('.progressLine').css('width', percentage + '%')
    }
        , 100);
    cloneElement.css('background-image', 'url(' + articleData.picture + ')');
}
myElement.remove();

const Filter = $("a");
Filter.on('click', function (event) {
    event.preventDefault();
    if ($(this).attr("href") == "#all") {
        hideAll();
    }
    if ($(this).attr("href") == "#new") {
        hideNew();
    }
    if ($(this).attr("href") == "#reached") {
        hideReached();
    }
})

function hideAll() {
    $('article').fadeToggle(500);
}
function hideNew() {
    $('article.new').fadeToggle(500);
    console.log("hiding New");
}
function hideReached() {
    $('article.reached').fadeToggle(500);
}