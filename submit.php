<?php
header('Content-Type: application/json'); // Set content type to JSON

include 'config.php';

// Ambil dan sanitasi data dari form
$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$phone = htmlspecialchars(trim($_POST['phone']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));

// Validasi data
if (empty($name) || empty($email) || empty($message)) {
    echo json_encode(["status" => "error", "message" => "Please fill in all required fields."]);
    exit();
}

// Persiapkan statement SQL
$stmt = $mysqli->prepare("INSERT INTO contact_data (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");

// Cek apakah prepare() berhasil
if ($stmt === false) {
    echo json_encode(["status" => "error", "message" => "Error preparing statement: " . $mysqli->error]);
    exit();
}

// Ikat parameter
if (!$stmt->bind_param("sssss", $name, $email, $phone, $subject, $message)) {
    echo json_encode(["status" => "error", "message" => "Error binding parameters: " . $stmt->error]);
    exit();
}

// Eksekusi statement
if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "Thank you for your message."]);
} else {
    echo json_encode(["status" => "error", "message" => "Something went wrong: " . $stmt->error]);
}

// Tutup statement dan koneksi
$stmt->close();
$mysqli->close();
