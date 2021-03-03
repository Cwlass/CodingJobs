//Contains the selected pets name. 
//This could be redundant if website is never expanded. But having selected pet on hand is usefull
let selectedPet;

//Definition of the function that creates the list of animals
function createCardDisplay() {
    //create 2 constants that contain the area when I will add the animal Cards
    //and the mock card I use to as clone base
    const myTarget = $('.animalList').eq(0);
    const cardMock = $('.card').eq(0);
    //Loop through the animalsArray reading each element as aniamalData
    for (const animalData of animalsArray) {
        //Clone the mock
        const cloneCard = cardMock.clone();
        //attach the mock to new parent
        cloneCard.appendTo(myTarget);
        //Modify content clone
        cloneCard.find('img').attr('src', animalData.pic);
        cloneCard.find('p').text(animalData.tag);
        //add the event listener so i can retrieve the data of the selected card when clicked
        cloneCard.on('click', clickCard);
    }
    //Remove the card used as mock from HTMl
    cardMock.remove();
}
//Definition of the function that is called when card is clicked on
function clickCard() {
    //set all cards background back to white and text to back;
    $(".card").css('background-color', 'white');
    $(".card").css('color', 'black');
    //Set the selected cards backgroud to blue(#1e3799) and the text to white for readability
    $(this).css('background-color', '#1e3799');
    $(this).css('color', 'white');

    //Get the selected pets name
    selectedPet = $(this).find('p').text();
    //add the selected pets name to Modal HTML in bold with the Strong tag. .html function is necesary so i can use the strong html tag.
    $(".modal-body").html("Wow ! You want to adopt <strong>" + selectedPet + "</strong>? Can you tell us more about yourself ?");
}

//Definition of the function that checks the form completion
function checkForm() {
    //2 Boolian variables for readability
    let textareaCheck = false;
    let checkboxCheck = false;
    //Check textarea length using and change boolean based on result
    if ($('textarea').val().length > 10) {

        textareaCheck = true;
    } else {
        textareaCheck = false;
    }
    //check checkbox state using jQuery .is() method.
    if ($('#checkBox').is(":checked")) {
        checkboxCheck = true;
    } else {
        checkboxCheck = false;
    }
    //Check if all conditions are filled using the ealier created booleans.
    //Enable or disable the button based on said booleans using the .prop() method
    if (textareaCheck && checkboxCheck) {
        $('#adoptBtn').prop('disabled', false);
    } else {
        $('#adoptBtn').prop('disabled', true);
    }
}
//add event listeners for the form check
$('body').on('keyup', checkForm);
$('#checkBox').on('click', checkForm);
//Create card display when the page is loaded
createCardDisplay();
//Initial form check in case some info has been left in the form on refresh
checkForm();

