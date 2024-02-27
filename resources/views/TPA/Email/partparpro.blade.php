<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de retour</title>
    <style>
        /* Styles CSS pour la mise en page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 20px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<div class="container">
    <svg xmlns="http://www.w3.org/2000/svg" width="400" height="200">
        <text x="20" y="140" font-family="Arial, sans-serif" font-size="120" font-weight="bold" fill="black">
            T
        </text>
        <text x="140" y="140" font-family="Arial, sans-serif" font-size="120" font-weight="bold" fill="black">
            P
        </text>
        <text x="260" y="140" font-family="Arial, sans-serif" font-size="120" font-weight="bold" fill="black">
            A
        </text>
    </svg>
    <h1>Mission terminée</h1>
    <p>Merci d'avoir utilisé notre service ! Nous aimerions avoir votre avis sur votre expérience.</p>
    <p>Veuillez cliquer sur le bouton ci-dessous pour accéder au formulaire de retour :</p>
    <a class="button" href="{{route('TPA.part_par_pro',[ 'part'=> $part ,'pro'=> $pro ,'mission'=> $mission])}}">Formulaire de retour</a>
</div>
</body>
</html>
