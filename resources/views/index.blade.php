<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les messages</title>
</head>
<body>

    <h2 style="text-align:center ; color:green ; font-family:'Century Gothic">Les messages des utilisateurs</h2>
    @foreach ($contacts as $contact)
    <br>
    <li style="padding-left: 4%; color:#444 ; font-weight:bold">{{($contact->id) }} -{{ ($contact->nom) }} - {{($contact->mail)}} - {{($contact->sujet) }}- {{($contact->message)}}</li>
    @endforeach


    
</body>
</html>
