$(window).load(function () {
    $("#preloader").hide();
});


const contactForm = $("#contact-form").eq(0);
contactForm.on("submit", function (event) {
    event.preventDefault();
    const email = $("#email").eq(0);
    const name = $("#name").eq(0);
    const message = $("#message").eq(0);
    const formService = $("#subject").eq(0);
    let emailCheck = false;
    let nameCheck = false;
    let messageCheck = false;
    let serviceCheck = false;
    if (email.val().includes('@') && email.val().includes(".")) {
        emailCheck = true;
        console.log("email check");
    }
    if (name.val().length > 0) {
        nameCheck = true;
        console.log("name check");
    }
    if (message.val().length > 39) {
        messageCheck = true;
        console.log("message check");
    } else {
        $("#helpForm").text("message is mising");
    }
    if (formService.val().length > 0) {
        serviceCheck = true;
        console.log("service check");
    }
    if (emailCheck && nameCheck && messageCheck && serviceCheck) {
        $(this).text
        contactForm.replaceWith(('<p >' + name.val() + ', your message ' + message.val() + ' has been sent. You will be contact soon on the mail address ' + email.val() + ' about' + formService.val() + ' </p>'));
    }
})
