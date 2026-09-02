<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>
        body {
            background-color: #0f0f0f;
            color: white;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #b20710 !important;
            padding: 15px 0;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: white !important;
        }

        .nav-link {
            color: white !important;
            margin-left: 15px;
        }

        .nav-link:hover {
            color: #ffcccc !important;
        }

        .welcome-section {
            min-height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .welcome-section h1 {
            font-size: 55px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .welcome-section p {
            font-size: 20px;
            color: #cccccc;
        }

        .red-line {
            width: 80px;
            height: 4px;
            background-color: #e50914;
            margin: 25px auto;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <div>
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            About
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Contact
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

    <section class="welcome-section">

        <div class="container">

            <h1>Welcome to My Web System</h1>

            <div class="red-line"></div>

            <p>
                This website is built using CodeIgniter and Bootstrap.
            </p>

        </div>

    </section>

</body>
</html>