<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect data from the form
    $donor_name = htmlspecialchars($_POST['donor_name']);
    $blood_group = htmlspecialchars($_POST['blood_group']);
    $donation_date = htmlspecialchars($_POST['donation_date']);

    // HTML template for the certificate
    ob_start();
    include 'certificate_template.php';
    $html = ob_get_clean();

    // Initialize Dompdf
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $dompdf = new Dompdf($options);

    // Load HTML content
    $dompdf->loadHtml($html);

    
    // Set paper size and orientation
    $dompdf->setPaper('A4', 'portrait');

    // Render PDF
    $dompdf->render();

    // Output the generated PDF (force download)
    $dompdf->stream("donor_certificate.pdf", ["Attachment" => 1]);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Certificate</title>
</head>
<body>
    <form method="POST" action="generate_certificate.php">
        <label for="donor_name">Donor Name:</label>
        <input type="text" id="donor_name" name="donor_name" required><br><br>

        <label for="blood_group">Blood Group:</label>
        <input type="text" id="blood_group" name="blood_group" required><br><br>

        <label for="donation_date">Donation Date:</label>
        <input type="date" id="donation_date" name="donation_date" required><br><br>

        <button type="submit">Generate Certificate</button>
    </form>
</body>
</html>
