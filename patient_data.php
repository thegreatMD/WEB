<div class="container">
    <h1>Appointments History</h1>

    <?php
    // Assuming you have a database connection established already
    // Perform a query to fetch appointment data
    $query = "SELECT * FROM appointments ORDER BY appointment_date DESC";
    $result = mysqli_query($connection, $query);

    // Check if there are any appointments
    if (mysqli_num_rows($result) > 0) {
        // Loop through each appointment and display it
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="appointment history">';
            echo '<h2>Appointment History</h2>';
            echo '<p><strong>Date:</strong> ' . $row['appointment_date'] . '</p>';
            echo '<p><strong>Doctor:</strong> ' . $row['doctor'] . '</p>';
            echo '<p><strong>Location:</strong> ' . $row['location'] . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>No appointments found.</p>';
    }
    ?>

</div>
