<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Message</title>
</head>
<body>
    <h2>New Contact Message</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Message:</strong><br>{{ $data['message'] }}</p>
</body>
</html>
