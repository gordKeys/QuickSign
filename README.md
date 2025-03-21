# QuickSign: Event Management System

## Overview
QuickSign is a web-based event management system designed to facilitate event registrations, attendance tracking, and user feedback collection. This document provides details on database structure, functionality, and usage.

## Features
- User registration and authentication
- Event creation and management
- Event registration by users
- Attendance tracking
- Event feedback system

## Database Schema

### 1. `users`
Stores user information.
```sql
CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fname` VARCHAR(20) NOT NULL,
  `lname` VARCHAR(20) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `program` VARCHAR(20) NOT NULL,
  `year` VARCHAR(20),
  `pwd` VARCHAR(500),
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
);
```

### 2. `events`
Stores event details.
```sql
CREATE TABLE `events` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `event_name` VARCHAR(20) NOT NULL,
  `organizer` VARCHAR(20),
  `start_date` DATE,
  `end_date` DATE,
  `guests` VARCHAR(200),
  `location` VARCHAR(20),
  `attendees` INT,
  `image` VARCHAR(250),
  `created` TIMESTAMP NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
);
```

### 3. `registrations`
Stores event registrations.
```sql
CREATE TABLE `registrations` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `event_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `registration_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE,
  FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
);
```

### 4. `attendance`
Tracks attendance for events.
```sql
CREATE TABLE `attendance` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `event_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `check_in_time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE,
  FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
);
```

### 5. `feedback`
Stores feedback on events.
```sql
CREATE TABLE `feedback` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `event_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `rating` INT CHECK (`rating` BETWEEN 1 AND 5),
  `comment` TEXT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE,
  FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
);
```

## Registration Script
This PHP script allows users to register for an event using `$_GET['event']` to pass the event ID.
```php
<?php
session_start();
include 'db.php'; // Include database connection

if (!isset($_SESSION['id'])) {
    die("User not logged in");
}

$user_id = $_SESSION['id'];
$event_id = $_GET['event'] ?? null;

if (!$event_id) {
    die("Invalid event ID");
}

$stmt = $conn->prepare("INSERT INTO registrations (event_id, user_id) VALUES (?, ?)");
$stmt->bind_param("ii", $event_id, $user_id);
if ($stmt->execute()) {
    echo "Successfully registered for the event.";
} else {
    echo "Error: " . $stmt->error;
}
?>
```

## Display Registered Events
This script displays the events a user has registered for.
```php
<?php
session_start();
include 'db.php';

$user_id = $_SESSION['id'];
$sql = "SELECT e.id, e.event_name, e.start_date, e.location FROM events e
        JOIN registrations r ON e.id = r.event_id WHERE r.user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<h3>Registered Events</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Event Name</th>
        <th>Date</th>
        <th>Location</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['event_name'] ?></td>
            <td><?= $row['start_date'] ?></td>
            <td><?= $row['location'] ?></td>
        </tr>
    <?php endwhile; ?>
</table>
```

## Conclusion
QuickSign provides an efficient way to manage event registrations, track attendance, and collect feedback. This documentation outlines its database schema and core functionalities. For further improvements, consider adding an admin panel for event management and user analytics.

---
**Author:** Gordon Yennutrin Laar  
**Project:** QuickSign - Event Management System

