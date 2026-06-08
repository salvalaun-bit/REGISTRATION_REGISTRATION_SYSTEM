<?php
require_once __DIR__ . '/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$course = trim($_POST['course'] ?? '');

if ($name === '' || $email === '' || $course === '') {
    echo 'Please fill required fields.';
    exit;
}

try {
    $stmt = $pdo->prepare('INSERT INTO students (name, email, phone, course) VALUES (?, ?, ?, ?)');
    $stmt->execute([$name, $email, $phone, $course]);
    header('Location: index.php?success=1');
    exit;
} catch (PDOException $e) {
    if ($e->getCode() == 23000) {
        echo 'A student with that email already exists.';
    } else {
        echo 'Registration failed: ' . $e->getMessage();
    }
    exit;
}
