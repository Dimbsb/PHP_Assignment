<?php
session_start(); 

$language = isset($_COOKIE['preferred_language']) ? $_COOKIE['preferred_language'] : 'en';
$name = isset($_COOKIE['name']) ? $_COOKIE['name'] : '';

$country = isset($_SESSION['country']) ? $_SESSION['country'] : '';

if ($language == 'el') {
    $greeting = "Καλωσήρθες " . htmlspecialchars($name) . "!";
    $message = "Αυτή η σελίδα είναι στα Ελληνικά.";
    $countryMessage = !empty($country) ? "Η χώρα σας είναι: " . htmlspecialchars($country) . "." : "";
} else {
    $greeting = "Welcome " . htmlspecialchars($name) . "!";
    $message = "This page is in English.";
    $countryMessage = !empty($country) ? "Your country is: " . htmlspecialchars($country) . "." : "";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f0f8ff; display: flex; justify-content: center; align-items: center; height: 100vh; color: #333; }
        .container { text-align: center; background: #fff; padding: 20px 40px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); }
        h1 { font-size: 2em; margin-bottom: 10px; color: #007bff; }
        p { font-size: 1.2em; margin-bottom: 20px; }
        a { color: #007bff; text-decoration: none; font-weight: bold; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $greeting; ?></h1>
        <p><?= $message ?></p>
        <?php if (!empty($countryMessage)) : ?>
            <p><?= $countryMessage; ?></p>
        <?php endif; ?>
        <a href="register.php">Επιστροφή στην αρχική σελίδα</a>
    <div>
</body>
</html>
