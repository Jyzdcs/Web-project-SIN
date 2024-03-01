<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaires - Jiu-Jitsu Brésilien</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #6a5acd;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background-color: #483d8b;
            border: 2px solid #6a5acd;
            border-radius: 10px;
            padding: 20px;
            max-width: 600px;
            text-align: center;
        }
        .card-title {
            color: #6a5acd;
        }
        .card-text {
            color: #fff;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Message bien reçu !</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Rappel de vos informations</h5>
            <p class="card-text"><b>Email</b> : <?php echo $_GET['email']; ?></p>
            <p class="card-text"><b>Message</b> : <?php echo $_GET['message']; ?></p>
        </div>
    </div>
</body>
</html>
