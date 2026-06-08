LABAN LAURENT SALVATORY 
14325083/T.24
# Student Registration System

Simple PHP + MySQL student registration demo intended for XAMPP.

Setup

1. Start Apache and MySQL in XAMPP.
2. Import the database schema using phpMyAdmin or CLI:

```
mysql -u root < database.sql
```

Or via phpMyAdmin: import `database.sql` and run it.

3. Put the project in your web root (already at `STUDENT_REGISTRATION_SYSTEM`).
4. Visit `http://localhost/STUDENT_REGISTRATION_SYSTEM/index.php`.
5. If your MySQL `root` user has a password, update `db.php` accordingly.

Files
- `db.php`: PDO connection (edit credentials if needed)
- `index.php`: Registration form
- `register.php`: Server-side handler (uses prepared statements)
- `students.php`: List of registered students
- `database.sql`: SQL to create DB + table
