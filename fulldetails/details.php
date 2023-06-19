<?php
require_once('config/db.php');

$query = "SELECT * FROM crcs_portal.total_enteries";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>

<body class="bg-dark">
    <div class=" container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Total Enteries</h2>
                    </div>
                    <button style="align-items: center; padding: 0.3rem; margin: 2px;cursor: pointer;"
                        onclick="window.location.href='http://localhost/portal/index.php';">Back TO the Page</button>
                    <div class="card-body">
                        <table class="table table-bordered text-center ">
                            <tr class="bg-dark text-white">
                                <td> Sr. No. </td>
                                <td> Name of Society </td>
                                <td> Address </td>
                                <td> State </td>
                                <td> Date of Registration </td>
                                <td> Area of Operation </td>
                                <td> Sector Type</td>
                            </tr>
                            <tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <td>
                                        <?php echo $row['Sr. No.']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Name of Society']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Address']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['State']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Date of Registration']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Area of Operation']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['Sector Type']; ?>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>