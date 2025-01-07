<!-- resources/views/profile.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>
    <p>Name: {{ $user['Firstname'] }}</p>
    <p>Email: {{ $user['Lastname'] }}</p>
</body>
</html>
