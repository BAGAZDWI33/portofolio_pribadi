<?php
// Get the 'cert' parameter from the URL
$certificate = isset($_GET['cert']) ? $_GET['cert'] : '';

// List of available certificates with their file paths and descriptions
$certificates = [
    'aots' => [
        'file' => 'assets/imgs/sertifikat AOTF NOK jepang.jpg',
        'pdf' => 'assets/pdf/sertifikat_AOTS.pdf',
        'description' => 'Sertifikat AOTS dari NOK Indonesia'
    ],
    'juara3' => [
        'file' => 'assets/imgs/JUARA 3.jpg',
        'pdf' => 'assets/imgs/JUARA 3.jpg',
        'description' => 'Sertifikat Juara 3 Lomba UI/UX Competition'
    ],
    'seminar' => [
        'file' => [
            'assets/imgs/kegiatan1.jpg',
            'assets/imgs/kegiatan2.jpg',
            'assets/imgs/kegiatan3.jpg'
        ],
        'pdf' => 'assets/pdf/sertifikat_DEF.pdf',
        'description' => 'Sertifikat Workshop DEF'
    ],
];

// Check if the specified certificate exists
if (!array_key_exists($certificate, $certificates)) {
    die('Certificate not found.');
}

// Get certificate details
$cert = $certificates[$certificate];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($cert['description']); ?></title>
    <style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        /* Header styling */
        h1 {
            background-color: #007bff;
            color: white;
            padding: 20px;
            margin: 0;
            font-size: 28px;
            text-transform: uppercase;
            letter-spacing: 2px;
            width: 100%;
            text-align: center;
        }

        /* Container to center the iframe */
        .iframe-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 80%;
            width: 100%;
        }

        /* Styling for the iframe */
        iframe {
            border: none;
            border-radius: 10px;
            width: 100%;
            max-width: 800px;
            /* Set a max-width for better display */
            height: 600px;
        }

        /* Caption for each certificate */
        .caption {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        /* Download link styling */
        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1><?php echo htmlspecialchars($cert['description']); ?></h1>
    <div class="iframe-container">
        <p class="caption"><?php echo htmlspecialchars($cert['description']); ?></p>
        <iframe src="<?php echo htmlspecialchars($cert['file']); ?>">
            This browser does not support displaying images. Please download the PDF to view it:
            <a href="<?php echo htmlspecialchars($cert['pdf']); ?>">Download PDF</a>.
        </iframe>
    </div>
</body>

</html>