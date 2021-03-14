const baseUrl = 'https://ajax-course.herokuapp.com';
// POST [USERS]
// - "username"
// - "password"
// - "image"
// on  submit
$('form').on('submit', submitHandler);

function submitHandler(e) {
  e.preventDefault();
  // retreive the data
  const usernameValue = $('#username').val();
  const passwordValue = $('#password').val();
  const imageValue = $('#image').val();
  // control/logic ... >6
  // feedback
  $.ajax({
    method: 'POST',
    url: baseUrl + '/users',
    data: {
      username: usernameValue,
      password: passwordValue,
      image: imageValue,
    },
  }).done(function (response) {
    console.log(response);
    alert(response.data);
    if (response.data && response.data.hash) {
      //https://developer.mozilla.org/fr/docs/Web/API/Window/localStorage
      console.log(response.data.hash);
      localStorage.setItem('hash', response.data.hash);
    }
  });
}
