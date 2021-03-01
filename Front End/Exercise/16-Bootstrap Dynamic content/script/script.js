const actorsArray = [
    {
        category: 'male',
        name: 'magnus jensen',
        picture: 'https://randomuser.me/api/portraits/men/29.jpg'
    },
    {
        category: 'male',
        name: 'richard bradley',
        picture: 'https://randomuser.me/api/portraits/men/95.jpg'
    },
    {
        category: 'male',
        name: 'eduardo martin',
        picture: 'https://randomuser.me/api/portraits/men/7.jpg'
    },
    {
        category: 'female',
        name: 'norah faure',
        picture: 'https://randomuser.me/api/portraits/women/11.jpg'
    },
    {
        category: 'female',
        name: 'rose clarke',
        picture: 'https://randomuser.me/api/portraits/women/28.jpg'
    },
    {
        category: 'female',
        name: 'adeline mathieu',
        picture: 'https://randomuser.me/api/portraits/women/6.jpg'
    },
    {
        category: 'baby',
        name: 'joe edwards',
        picture: 'https://randomuser.me/api/portraits/lego/5.jpg'
    },
    {
        category: 'baby',
        name: 'bob kelley',
        picture: 'https://randomuser.me/api/portraits/lego/2.jpg'
    },
    {
        category: 'baby',
        name: 'john doe',
        picture: 'https://randomuser.me/api/portraits/lego/1.jpg'
    }
];
const myCard = $(".d-none").eq(0);
const myListElem = $(".actorSelect");
const myTarget = $(".card-columns").eq(0);
for (const actorData of actorsArray) {
    const cloneCard = myCard.clone();
    const cloneList = myListElem.clone();
    cloneList.appendTo($("#Select2"));
    cloneCard.appendTo(myTarget);
    cloneList.text(actorData.name);
    cloneCard.find('h5').text(actorData.name);
    cloneCard.find('img').attr('src', actorData.picture);
    switch (actorData.category) {
        case "male":
            cloneCard.addClass("Male");
            cloneList.addClass("maleList")
            break;
        case "female":
            cloneCard.addClass("Female");
            cloneList.addClass("femaleList")
            break;
        case "baby":
            cloneCard.addClass("Baby");
            cloneList.addClass("babyList")
            break;
    }
    cloneCard.on("click", formSelect);
    cloneCard.removeClass("d-none");
}

const maleBtn = $('#option1');
const femaleBtn = $('#option2');
const babyBtn = $('#option3');
const showAll = $('#option4');

showMale();
hideFemale();
hideBaby();


maleBtn.on("click", function () {
    showMale();
    hideFemale();
    hideBaby();
})

femaleBtn.on("click", function () {
    showFemale();
    hideMale();
    hideBaby();

})

babyBtn.on("click", function () {
    showBaby();
    hideMale();
    hideFemale();

})
showAll.on("click", function () {
    showBaby();
    showFemale();
    showMale();

})


function hideMale() {
    $('.Male').fadeOut(5);
}
function hideFemale() {
    $('.Female').fadeOut(5);
}
function hideBaby() {
    $('.Baby').fadeOut(5);
}

function showMale() {
    $('.Male').fadeIn(500);
}
function showFemale() {
    $('.Female').fadeIn(500);
}
function showBaby() {
    $('.Baby').fadeIn(500);
}

const contactForm = $("form").eq(0);
contactForm.on("submit", function (event) {
    event.preventDefault()
    console.log("submited")
    const email = $("#email").eq(0);
    const CompanyName = $("#CompanyName").eq(0);
    const category = $("#Select").eq(0);
    const actor = $("#Select2").eq(0);
    let emailCheck = false;
    let companyCheck = false;
    let actorCheck = false;
    let serviceCheck = false;
    if (email.val().includes('@') && email.val().includes(".")) {
        emailCheck = true;
        console.log("email check");
    }
    if (CompanyName.val().length > 0) {
        companyCheck = true;
        console.log("name check");
    }

    if (category.val().length > 0) {
        serviceCheck = true;
        console.log("service check");
    }
    if (actor.val().length > 0) {
        actorCheck = true;
    }
    if (emailCheck && actorCheck && companyCheck && serviceCheck) {
        $(this).text
        contactForm.replaceWith(('<p class="text-center spacingClass" >' + actor.val() + ' is not currently available. You will be contacted as soon as possible </p>'));
    }
})


function formSelect() {
    $(".card").removeClass('bg-primary text white');
    $(this).addClass('bg-primary text white');
    console.log($(this).find('h5').text());
    $('#Select2').val($(this).find('h5').text());
    console.log($(this).attr("class")[2]);
    $('#Select').val($(this).attr("class")[2]);

}
