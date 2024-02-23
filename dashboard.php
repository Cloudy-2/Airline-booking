<?php
session_start();
?>

<?php
    // PHP code goes here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Dashboard</title>
    <link rel="stylesheet" href="Dashboard.css">
    <link rel="icon" href="image/PAGEICON.jpg">
</head>
<body>
<header>
    <h1>Skyline Dashboard</h1>
</header>



<main>
    <section id="flights" class="dashboard-section active">
        <h2>Flights</h2>
        <!-- Display flight information here -->
    </section>

    <section id="bookings" class="dashboard-section">
        <h2>Bookings</h2>
        <!-- Display booking information here -->
    </section>

    <section id="analytics" class="dashboard-section">
        <h2>Analytics</h2>
        <!-- Display analytics information here -->
    </section>

    <section id="settings" class="dashboard-section">
        <h2>Settings</h2>
        <!-- Display settings options here -->
    </section>
</main>

<footer>
    <p>&copy; 2024 Airline. All rights reserved.</p>
</footer>

<script>
    function showSection(sectionId) {
        var sections = document.querySelectorAll('.dashboard-section');
        sections.forEach(function(section) {
            if (section.id === sectionId) {
                section.classList.add('active');
            } else {
                section.classList.remove('active');
            }
        });
    }
</script>

</body>
</html>
