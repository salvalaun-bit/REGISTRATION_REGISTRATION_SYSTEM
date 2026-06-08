-- Create database and students table for Student Registration System
CREATE DATABASE IF NOT EXISTS student_registration CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE student_registration;

CREATE TABLE IF NOT EXISTS students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(150) NOT NULL,
  email VARCHAR(150) NOT NULL UNIQUE,
  phone VARCHAR(50) DEFAULT NULL,
  course VARCHAR(150) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
