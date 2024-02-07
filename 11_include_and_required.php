<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        main {
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php include '11_Include and Require/header.php'?>                         
    <main>
        <h2>Main Content Area</h2>
        <p>This is the main content area of the website.</p>
    </main>

    <?php include '11_Include and Require/footer.php'?>
</body>
</html>



#we can use require also and for situtation like multiple copies we can use include_once