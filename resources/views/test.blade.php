<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega Menu with Hover on Header</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
            position: relative;
        }

        .mega-menu {
            width: 50%;
            display: flex;
            justify-content: space-between;
            padding: 20px;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s, opacity 0.5s;
        }

        header:hover .mega-menu {
            visibility: visible;
            opacity: 1;
        }

        .mega-menu a {
            text-decoration: none;
            color: #333;
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<header>
    <h1>Your Website</h1>
    <div class="mega-menu">
        <a href="#">Menu Item 1</a>
        <a href="#">Menu Item 2</a>
        <a href="#">Menu Item 3</a>
        <!-- Add more menu items as needed -->
    </div>
</header>

<!-- Your content goes here -->

</body>
</html>
