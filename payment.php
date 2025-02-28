<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.html');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $paymentMethod = htmlspecialchars($_POST['paymentMethod']);
    $amount = htmlspecialchars($_POST['amount']);

    // Placeholder for actual payment integration code
    // In real-world applications, integrate with MPesa or bank API here
    // For example:
    // if ($paymentMethod == 'mpesa') {
    //     // Call MPesa API
    // } else if ($paymentMethod == 'bank') {
    //     // Call bank API
    // }

    echo 'Payment of ' . $amount . ' via ' . $paymentMethod . ' successful.';
}
?>
