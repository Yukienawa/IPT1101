<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Link to Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Common sans-serif font */
        }
        .container {
            margin-top: 50px;
        }
        h1 {
            font-family: 'Arial', sans-serif; /* Use a common sans-serif font for headings */
            color: #333; /* Dark gray */
            text-align: center;
            margin-bottom: 50px; /* Increased margin bottom for better spacing */
        }
        .btn-primary {
            background-color: #007bff; /* Bootstrap blue */
            border-color: #007bff;
            border-radius: 5px; /* Slight border radius */
            padding: 10px 20px; /* Reduced padding */
            font-size: 18px; /* Reduced font size */
            font-weight: bold; /* Bold font weight */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker blue on hover */
            border-color: #0056b3;
        }
    </style>
    <title>Welcome</title>
</head>
<body>
    <div class="container">
        <h1>Welcome</h1>
        <div class="row justify-content-center"> <!-- Centered the button -->
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="text-center">
                    <a href="logout.php" class="btn btn-primary btn-lg">Logout</a> <!-- Centered the button -->
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
