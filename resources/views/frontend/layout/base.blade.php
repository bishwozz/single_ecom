<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Nike Store</title>
</head>

<body>
    @include('frontend.layout.nav')
    @yield('content')
    @include('frontend.layout.footer')
    <script src="./app.js"></script>
</body>

</html>