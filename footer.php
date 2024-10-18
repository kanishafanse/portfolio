<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        /* Ensure the body and html take up full height */
        html, body {
            height: 100%;
            margin: 0;
            overflow: hidden; /* Prevent scrolling */
        }
        /* Flex container for the main layout */
        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Make sure the wrapper takes at least full viewport height */
        }
        .content {
            flex: 1; /* This allows the content area to expand and push the footer down */
        }
        footer {
            background-color: #343a40; /* Match the footer color */
        }
    </style>
</head>
<body>

<div class="wrapper">
    <div class="content">
        <!-- Your main content goes here -->
        <div id="particles-js" style="position: relative; width: 100%; height: 100%;"></div>
    </div> <!-- Closing content div -->

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Kanisha Fanse. All Rights Reserved.</p>
            <div class="social-icons mb-2">
                <a href="https://github.com/yourusername" target="_blank" class="text-white mx-2">
                    <i class="fab fa-github fa-lg"></i>
                </a>
                <a href="https://twitter.com/yourusername" target="_blank" class="text-white mx-2">
                    <i class="fab fa-twitter fa-lg"></i>
                </a>
                <a href="https://www.linkedin.com/in/fanse" target="_blank" class="text-white mx-2">
                    <i class="fab fa-linkedin fa-lg">Linkedin</i>
                </a>
            </div>
            <a href="#" class="btn btn-primary btn-sm" onclick="window.scrollTo(0, 0)">Back to Top</a>
        </div>
    </footer>
</div> <!-- Closing wrapper div -->

</body>
</html>
