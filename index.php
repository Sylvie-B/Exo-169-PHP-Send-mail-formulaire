<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form>
        <div class="d-flex flex-column align-items-center">
            <div class="form-group col-md-8 row">
                <label for="mail" class="col-md-2 col-form-label">Email</label>
                <div class="col-md-8">
                    <input multiple type="email" class="form-control" id="mail" placeholder="Email">
                </div>
            </div>
            <div class="form-group col-md-8 row">
                <label for="message" class="col-md-2 col-form-label">votre message</label>
                <div class="col-md-8">
                    <textarea class="form-control" id="message" rows="4" maxlength="500"></textarea>
                </div>

            </div>
            <div class="form-group col-md-8 row">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </div>

    </form>
</body>
</html>

<?php

$to = [];

$html = '
    <html lang="fr">
        <head>
            
        </head>
        <body>
            
        </body>
    </html>
';

$subject = '';

$headers = [
    'Reply-To' => 'jojo@outlook.fr',
    'X-Mailer' => 'PHP/'.phpversion(),
    'Mime-Version' => '1.0',
    'Content-type' => 'text/html; charset=utf-8'
];
