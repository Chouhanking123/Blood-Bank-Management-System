<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        .certificate {
            border: 10px solid #f2f2f2;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
            font-size: 2.5em;
        }
        h2 {
            font-size: 1.8em;
            color: #333;
        }
        p {
            font-size: 1.2em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="certificate">
        <h1>Certificate of Appreciation</h1>
        <h2><?php echo $donor_name; ?></h2>
        <p>This certificate is awarded for donating blood on</p>
        <p><strong><?php echo $donation_date; ?></strong></p>
        <p>Blood Group: <strong><?php echo $blood_group; ?></strong></p>
        <p>Your act of kindness saves lives and inspires others!</p>
        <br>
        <p>Issued by <strong>Blood Bank Management System</strong></p>
    </div>
</body>
</html>
