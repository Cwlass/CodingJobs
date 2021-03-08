const baseUrl = 'https://ajax-course.herokuapp.com';
let userArray;
// GET [USERS]
$.ajax({
  method: 'GET',
  url: baseUrl + '/users',
}).done(getUsers);
function getUsers(response) {
  console.log(response);
  userArray = response.data;
  // show this list to the user
  // (clone)
  const model = $('#userList li');
  for (const userData of userArray) {
    const clone = model.clone();
    $('#userList').append(clone);
    clone.text(userData.username);
  }
  model.remove();
}

// LOCAL STORAGE USE to trasmit data from the signup/login page to index.html
if (localStorage.getItem('hash')) {
  //I am connected
  alert('I am connected');
  // hide the login/signup
  // show the disconnect ?
}
$('#disconnect').on('click', function () {
  localStorage.removeItem('hash');
});

// MESSAGE [POST]
$('#message-form').on('submit', function (e) {
  e.preventDefault();
  const messageValue = $('#messageInput').val();
  $.ajax({
    method: 'POST',
    url: baseUrl + '/messages/1', // room nb 1(general)
    data: {
      hash: localStorage.getItem('hash'),
      message: messageValue,
    },
  });
});

// GET MESSAGE /1
