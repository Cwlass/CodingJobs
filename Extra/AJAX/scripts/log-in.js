const baseUrl = 'https://ajax-course.herokuapp.com';
$.ajax({
    method: 'GET',
    url: baseUrl + '/users',
}).done(getUsers);

let userArray;
function getUsers(response) {
    userArray = response.data;
}
$('form').on("submit", function (e) {
    e.preventDefault();
    console.log("submited");
    const userName = $(this).find('#username').text();
    const passWord = $(this).find('#password').text();
    for (const userData of userArray) {
        if (userName == userData.username) {
            alert('logged in');
        }
    }
})