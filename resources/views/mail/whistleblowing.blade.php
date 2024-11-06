<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whistleblowing System BPRPKM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f4f9;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #2c3e50;
        }

        p {
            line-height: 1.6;
        }

        .footer {
            margin-top: 20px;
            font-size: 0.85em;
            color: #888;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Whistleblowing System BPRPKM</h2>

        <p><strong>Nama Pihak yang Dilaporkan:</strong> {{ $details['pic'] }}</p>
        <p><strong>Cabang:</strong> {{ $details['cabang'] }}</p>
        <p><strong>Perihal:</strong></p>
        <p>{{ $details['perihal'] }}</p>

        <div class="footer">
            <p>This report was submitted through the Whistleblowing System. Please handle it with care and
                confidentiality.</p>
        </div>
    </div>
</body>

</html>
