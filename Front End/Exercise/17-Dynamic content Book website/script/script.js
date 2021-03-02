const bookMock = $(".book").eq(0);
const myTarget = $("article").eq(0);
const commentMock = $(".comment").eq(0);
const commentTarget = $('.commentContainer').eq(0);
let isSortedPrice = false;
let isSortedName = false;

function createContentDisplay() {
    for (const bookData of photosArray) {
        const cloneBook = bookMock.clone();
        cloneBook.appendTo(myTarget);
        cloneBook.find("img").attr('src', bookData.imgUrl);
        cloneBook.find("h2").text(bookData.name);
        if (bookData.price.includes("$")) {
            cloneBook.find("p").text(bookData.price);
        } else {
            cloneBook.find("p").text("$" + bookData.price);
        }

        if (bookData.bestSeller) {
            cloneBook.find("h3").removeClass("bestSeller");

        } else {
            cloneBook.addClass("normalSell")
        }
    }
}

function showAll() {
    $('.book').fadeIn(500);
}

function hideNormal() {
    $('.normalSell').fadeOut(5);
}

function hideAll() {
    $('.book').hide();
}

function sortArrayPrice(e) {
    e.preventDefault
    for (let i = 0; i < photosArray.length; i++) {
        photosArray[i].price = photosArray[i].price.substring(1);
    }
    for (let i = 0; i < photosArray.length; i++) {

        for (let j = i + 1; j < photosArray.length; j++) {

            if (Number(photosArray[i].price) > Number(photosArray[j].price)) {
                console.log("did a sort");
                let temp = photosArray[i];
                photosArray[i] = photosArray[j];
                photosArray[j] = temp;
            }
        }
    }
    hideAll();
    createContentDisplay();
}

function createCommentDisplay() {
    for (const userData of comments) {
        const cloneComment = commentMock.clone();
        cloneComment.appendTo(commentTarget);
        cloneComment.find("p").text(userData.message);
        cloneComment.find("img").attr('src', "images/" + userData.user + ".png");
    }
}


$("#price").on("click", function (e) {
    e.preventDefault();
    if (!isSortedPrice) {
        isSortedPrice = true;
        isSortedName = false;
        isSortedPrice = true;
        for (let i = 0; i < photosArray.length; i++) {
            photosArray[i].price = photosArray[i].price.substring(1);
        }
        for (let i = 0; i < photosArray.length; i++) {

            for (let j = i + 1; j < photosArray.length; j++) {

                if (Number(photosArray[i].price) > Number(photosArray[j].price)) {
                    console.log("did a sort");
                    let temp = photosArray[i];
                    photosArray[i] = photosArray[j];
                    photosArray[j] = temp;
                }
            }
        }
    } else {
        photosArray.reverse();
        $('.book').remove();
        createContentDisplay();
    }
});

$("#name").on("click", function (e) {
    e.preventDefault();
    if (!isSortedName) {
        isSortedPrice = false;
        isSortedName = true;

        for (let i = 0; i < photosArray.length; i++) {

            for (let j = i + 1; j < photosArray.length; j++) {

                if (photosArray[i].name[0] < photosArray[j].name[0]) {
                    console.log("did a sort");
                    let temp = photosArray[i];
                    photosArray[i] = photosArray[j];
                    photosArray[j] = temp;
                }
            }
        }
        photosArray.reverse();
        $('.book').remove();
        createContentDisplay();
    } else {
        photosArray.reverse();
        $('.book').remove();
        createContentDisplay();

    }
})

$('#All').on('click', function (e) {
    e.preventDefault();
    showAll();
})

$('#BestSeller').on('click', function (e) {
    e.preventDefault();
    hideNormal();
})

$('form').submit(function (e) {
    e.preventDefault();
    const newComment = commentMock.clone();
    newComment.appendTo(commentTarget);
    newComment.find("p").text($('textarea').val())
    newComment.find("img").attr('src', "images/User.png");
})



createContentDisplay();
bookMock.remove();
createCommentDisplay();
commentMock.remove();