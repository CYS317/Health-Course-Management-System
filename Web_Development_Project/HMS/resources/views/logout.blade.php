<!-- resources/views/logout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>

    <!-- Logout Form (This form sends POST request to logout route) -->
    <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
        @csrf
    </form>

    <!-- Logout Button -->
    <button onclick="logout()">Click here to logout</button>

    <!-- JavaScript to automatically or manually logout -->
    <script>
        // Automatically log out when the page loads
        window.onload = function() {
            document.getElementById('logout-form').submit();
        };

        // Manual logout function
        function logout() {
            if (confirm("Are you sure you want to log out?")) {
                document.getElementById('logout-form').submit();
            }
        }
    </script>

</body>
</html>
