<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Table Styles */
        .crud-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .crud-table th,
        .crud-table td {
            border: 1px solid  #000080;
            padding: 8px;
            text-align: left;
        }

        .crud-table th {
            background-color: #f2f2f2;
        }

        .crud-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Buttons */
        .crud-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
            border-radius: 4px;
        }

        .crud-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div>
    <?php
        include "connect.php";

        $sql = "SELECT * FROM appointment";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo '<table class="crud-table">
                    <tr>
                        <th>Appointment ID</th>
                        <th>First Name</th>
                        <th>User Name</th>
                        <th>Date</th>
                        <th>User Phone Number</th>
                        <th>Blood Type</th>
                        <th>Age</th>
                    </tr>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>' .
                        '<td>' . $row['userId'] . '</td>' .
                        '<td>' . $row['Name'] . '</td>' .
                        '<td>' . $row['Username'] . '</td>' .
                        '<td>' . $row['Date'] . '</td>' .
                        '<td>' . $row['userPhonenumber'] . '</td>' .
                        '<td>' . $row['Bloodtype'] . '</td>' .
                        '<td>' . $row['Age'] . '</td>' .
                        '<td>' .
                        '<button class="crud-btn" onclick="location.href=\'updateAppointment.php?Id=' . $row['userId'] . '\'">Edit</button>' .
                        '</td>' .
                        '<td>' .
                            '<form action="deleteAppointment.php" method="post">' .
                                '<input type="hidden" name="delete_id" value="' . $row['userId'] . '">' .
                                '<button type="submit" name="delete_btn" formaction="deleteAppointment.php" class="crud-btn">Delete</button>' . 
                            '</form>' .
                        '</td>' .
                    '</tr>';
            }

            echo '</table>';
        }
    ?>
</div>
</body>
</html>
