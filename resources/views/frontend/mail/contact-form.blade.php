<!DOCTYPE html>
<html>

<head>
    <title>Nový Kontaktní Formulář</title>
</head>

<body>
    <h1>Email z kontaktního formuláře ARStore</h1>
    <p><strong>Jméno:</strong> {{ $details['name'] }}</p>
    <p><strong>Příjmení:</strong> {{ $details['surname'] }}</p>
    <p><strong>Cena:</strong> {{ $details['price'] }}</p>
    <p><strong>Telefon:</strong> {{ $details['phone'] }}</p>
    <p><strong>E-mail:</strong> {{ $details['mail'] }}</p>
    <p><strong>Zpráva:</strong> {{ $details['message'] }}</p>
</body>

</html>
