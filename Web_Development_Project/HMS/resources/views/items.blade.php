<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1>Register List</h1>
        <table class="table table-bordered" id="registerTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Day of Week</th>
                    <th>Course</th>
                    <th>Coach</th>
                    <th>Price (RM)</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <script>
        function fetchRegisters() {
            $.ajax({
                url: '/register/fetchItems',
                method: 'GET',
                success: function(data) {
                    let tableBody = $('#registerTable tbody');
                    tableBody.empty();
                    data.forEach(register => {
                        tableBody.append(`
                            <tr>
                                <td>${register.id}</td>
                                <td>${register.name}</td>
                                <td>${register.email}</td>
                                <td>${register.phone}</td>
                                <td>${register.day_of_week}</td>
                                <td>${register.course}</td>
                                <td>${register.coach}</td>
                                <td>${register.price}</td>
                                <td>${register.message}</td>
                            </tr>
                        `);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching registers:', error);
                }
            });
        }

        setInterval(fetchRegisters, 5000);
        fetchRegisters();
    </script>
</body>
</html>
