let submitbtn = document.querySelector('#submitnn');
let input = document.querySelector('#username');

function getname() {
  let user = input.value;

  if (user.length === 0) {
    document.querySelector('#emptyname').innerHTML =
      '""Error name cannot be empty""';
  } else {
    document.getElementById('hidepanel1').style.display = 'none';
    document.getElementById('hidepanel2').style.display = 'block';
    document.getElementById('namepage2').innerHTML = user;
  }
}

submitbtn.addEventListener('click', getname);
