function checkAllInputs(event) {
  event.preventDefault();
  const messageValue = $('#message').val();
  const messageValid = messageValue.length > 40;
  if (!messageValid) {
    $('#helpForm').text('Please enter more than 40 caracters for your message');
  }
}
$('form').on('submit', checkAllInputs);
