<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PPW Email</title>
</head>
<body>
    <h1>Hi There, {{ $data['name'] }}! </h1>

    <p><strong>Name: </strong> {{ $data['name'] }} </p>
    <p><strong>NIM: </strong> {{ $data['nim'] }} </p>

    <p>Thank you for registering. We are glad to have you here.
        Please make sure to check your email for further information.
    </p>
</body>
</html>
