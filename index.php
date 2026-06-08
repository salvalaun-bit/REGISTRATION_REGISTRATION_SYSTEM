<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Registration</title>
    <link rel="stylesheet" href="assets/css/styles.css">
  </head>
  <body>
    <main class="container">
      <h1>Student Registration</h1>
      <form id="regForm" method="post" action="register.php">
        <label>Name</label>
        <input type="text" name="name" id="name" required>

        <label>Email</label>
        <input type="email" name="email" id="email" required>

        <label>Phone</label>
        <input type="text" name="phone" id="phone">

        <label>Course</label>
        <input type="text" name="course" id="course" required>

        <button type="submit">Register</button>
      </form>

      <p><a href="students.php">View registered students</a></p>
    </main>

    <script src="assets/js/script.js"></script>
  </body>
</html>
