<?php
include('database/db_connect.php');
$registrationNewCount = $_POST['registrationNewCount'];

$sql = "SELECT id, name, nationalid, email, phonenumber, kuStudent, registeredIP, incubationdate, partner, innovationCategory, innovationStage, description FROM incubate_registrations LIMIT $registrationNewCount";

// get the result from the query
$result = mysqli_query($conn, $sql);

// check if there are results

if (mysqli_num_rows($result) > 0) {
    // convert the result to an array
    $registrations = mysqli_fetch_all($result, MYSQLI_ASSOC); ?>
    <table class="table table-success table-hover table-striped-columns" id="registrationContent">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">National Id</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Date of Incubation</th>
                <th scope="col">Register</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registrations as $registration) { ?>
                <tr>
                    <td scope="row"><?php echo $registration['id']; ?></td>
                    <td><?php echo $registration['name']; ?></td>
                    <td><?php echo $registration['nationalid']; ?></td>
                    <td><?php echo $registration['email']; ?></td>
                    <td><?php echo $registration['phonenumber']; ?></td>
                    <td><?php echo $registration['incubationdate']; ?></td>
                    <td>
                        <input type="checkbox" data-toggle="switchbutton" checked data-width="100" checked data-size="sm" data-offlabel="Deregister" checked data-onlabel="Register" id="registerButton">
                        <?php if ($registration == 0) {
                        } ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } else {
    echo "There is no result";
}
// free the result for memory
mysqli_free_result($result);

// closing the connection
mysqli_close($conn);
?>