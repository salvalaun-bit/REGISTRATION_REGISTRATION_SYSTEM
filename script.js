document.addEventListener('DOMContentLoaded', function () {
  var form = document.getElementById('regForm');
  if (!form) return;

  form.addEventListener('submit', function (e) {
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var course = document.getElementById('course').value.trim();

    if (!name || !email || !course) {
      e.preventDefault();
      alert('Please fill required fields.');
      return false;
    }

    // basic email check
    if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email)) {
      e.preventDefault();
      alert('Please enter a valid email.');
      return false;
    }

    return true;
  });
});
