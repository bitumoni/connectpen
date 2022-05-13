<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER</title>
</head>
<body>
    <h1>EXAMPLE USER</h1>

    <section>
        <form action="" method="POST">
            @csrf
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <input type="submit" name="submit" value="Submit">
        </form>
    </section>

</body>
</html>