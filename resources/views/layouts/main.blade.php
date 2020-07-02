<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NggaweSI - Make a Simple SI</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body class="bg-light">
    <nav class="text-white bg-primary border-bottom">
        <div class="container mx-auto d-flex align-items-center justify-content-between px-4 py-4">
            <h2>Logo</h2>
            <ul class="d-flex align-items-center justify-content-end list-unstyled">
                <li class="ml-5">item</li>
                <li class="ml-5">item</li>
                <li class="ml-5">item</li>
            </ul>
        </div>
    </nav>
    @yield('content')

    <footer class="page-footer font-small bg-white">
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#">NggaweSI</a>
        </div>
    </footer>
</body>

</html>