<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <!-- bootstrap5 cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/css/bootstrap-switch-button.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/dist/bootstrap-switch-button.min.js"></script>

    <!-- External style css -->
    <link rel="stylesheet" href="styles/stylesAdmin.css">

    <!-- bootstrap icons cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- font awesome icon links -->
    <script src="https://kit.fontawesome.com/ef25985911.js" crossorigin="anonymous"></script>

    <!-- google chart pie chart links -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Stage', 'Number of incubates'],
                ['Idea Phase', 110],
                ['Research and Development', 20],
                ['Prototype Phase', 20],
                ['Start-up', 20],
                ['Market Phase', 70],
                ['Scaling-up Phase', 40],
                ['Other', 10]

            ]);

            var options = {
                title: 'NUMBER OF IDEAS IN EACH STAGE',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>



    <script type="text/javascript">
        google.charts.load("current", {
            packages: ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Category", "Number of incubates"],
                ["Business and Professional Services", 80],
                ["Information and Communication Technology", 100],
                ["Marketing and Communication", 90],
                ["Manufacturing and Construction", 210],
                ["Transport and Logistics", 190],
                ["Bio and Nano-Technology", 180],
                ["Health and Nutrition", 190],
                ["Green and Ecological Business", 160],
                ["Tourism and Eco-Tourism", 170],
                ["Fine and Performing Arts", 70],
                ["Sports, Leisure and Entertainment", 30],
                ["Water and Sanitation", 50],
                ["Energy", 90],
                ["Media and Entertainment", 40],
            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                },
            ]);

            var options = {
                title: "NUMBER OF INCUBATES IN EACH CATEGORY",
                width: 600,
                height: 400,
                bar: {
                    groupWidth: "95%"
                },
                legend: {
                    position: "none"
                },
                hAxis: {
                    slantedText: true, // Rotate the x-axis labels diagonally
                    slantedTextAngle: 45, // Specify the angle of rotation
                },

                vAxis: {
                    viewWindow: {
                        min: 0, // Set the minimum value of the y-axis
                    },
                },
                chartArea: {
                    left: 90, // Adjust the left margin to provide space for labels
                    top: 40, // Adjust the top margin to provide space for the title
                    width: "80%", // Set the width of the chart area
                    height: "70%", // Set the height of the chart area
                },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
            chart.draw(view, options);
        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var registrationCount = 2;
            $("#registrationButton").click(function() {
                registrationCount = registrationCount + 2;
                $("#registrationContent").load("load_registration.php", {
                    registrationNewCount: registrationCount
                });
            });
        });
    </script>

</head>

<body class="bg-body-secondary">
    <div class="sticky-top">
        <!-- main navbar -->
        <nav class="navbar bg-light main-navbar border-bottom sticky-top">
            <div class="container-fluid">
                <button class="button-toggler border-0">
                    <i class="bi bi-list"></i>
                </button>
                <a href="" class="navbar-brand me-auto ms-3">
                    <img src="images/background01.png" alt="ku_logo" width="50" height="44" class="d-inline-block align-text-top mr-2">

                    <div class="d-inline-block align-middle ms-2">
                        <span class="d-block fw-bold main-header">Chandaria Incubate</span>
                        <span class="d-block fw-bold main-header">Management System</span>
                    </div>
                </a>
                <!-- notification icon on navbar -->
                <a href="" class="notification-custom me-4 d-none d-md-block">
                    <i class="bi bi-bell position-relative">
                        <span class=" translate-middle badge bg-danger">
                            30
                        </span>
                    </i>
                </a>

                <!-- profile icon on navbar -->
                <a href="" class=" me-4 admin-custom d-none d-md-block">
                    <i class="bi bi-person-circle"></i>
                </a>
            </div>
        </nav>

        <!-- sidebar -->
        <div class="sidebar">
            <ul>
                <li><a href="" id="" class="dashboardButton">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li><a href="" class="innovatorButton">
                        <i class="fa-solid fa-users"></i>
                        <span>Innovators</span>
                    </a>
                </li>
                <li><a href="" class="mentorsButton">
                        <i class="bi bi-person-fill-gear"></i>
                        <span>Mentors</span>
                    </a>
                </li>
                <li><a href="" id="" class="adminsButton">
                        <i class="fa-solid fa-user-secret"></i>
                        <span>Admins</span>
                    </a>
                </li>
                <li><a href="" class="registrationsButton">
                        <i class="bi bi-envelope"></i>
                        <span>Registrations</span>
                    </a>
                </li>
                <li><a href="" class="settingsButton">
                        <i class="bi bi-gear-fill"></i>
                        <span>Settings</span>
                    </a>
                </li>

                <li><a href="" class="profileButton">
                        <i class="bi bi-person-circle"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li><a href="index.php" class="logoutButton">
                        <i class="bi bi-box-arrow-left"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- second navbar -->
        <nav class="navbar bg-light second-navbar border-bottom">
            <div class="container-fluid">
                <a href="" class="btn btn-sm ms-auto addPatentButton">
                    <i class="bi bi-plus"></i>add Patent
                </a>
            </div>
        </nav>
    </div>

    <!-- main content -->
    <div class="container-fluid main-content">
        <!-- dashboard content -->
        <div class="row mt-3 mb-5 dashboard-content mx-4">
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-3 ">
                <div class="card shadow" style="height: 210px">
                    <div class="card-header d-flex justify-content-center">
                        Registered Incubate
                    </div>
                    <div class="card-body">
                        <p class="card-text">Current Number Of Incubates Registered</p>
                        <p class="card-text custom-text">600</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-3">
                <div class="card shadow" style="height: 210px">
                    <div class="card-header d-flex justify-content-center">
                        Ku/Non Ku students
                    </div>
                    <div class="card-body">
                        <p class="card-text">Current number of ku and non ku students</p>
                        <p class="card-text custom-text">140</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-3">
                <div class="card shadow" style="height: 210px">
                    <div class="card-header d-flex justify-content-center">
                        Number of Mentors
                    </div>
                    <div class="card-body">
                        <p class="card-text">Current Number of mentors</p>
                        <p class="card-text custom-text">78</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-3">
                <div class="card shadow" style="height: 210px">
                    <div class="card-header d-flex justify-content-center">
                        Registered Companies
                    </div>
                    <div class="card-body">
                        <p class="card-text">Current Number of Registered Companies</p>
                        <p class="card-text custom-text">56</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-3">
                <div class="card shadow" style="height: 210px">
                    <div class="card-header d-flex justify-content-center">
                        Total patents filed
                    </div>
                    <div class="card-body">
                        <p class="card-text">Current Number of filled patents</p>
                        <p class="card-text custom-text">20</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-3">
                <div class="card shadow" style="height: 210px">
                    <div class="card-header d-flex justify-content-center">
                        Commercialized companies
                    </div>
                    <div class="card-body">
                        <p class="card-text">Current Number of Commercialized companies</p>
                        <p class="card-text custom-text">300</p>
                    </div>
                </div>
            </div>

            <div class="w-100 d-none d-md-block mb-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        Stage of Innovation
                    </div>
                    <div class="card-body">
                        <div id="piechart"></div>
                    </div>
                </div>
            </div>
            <div class="col-8 mb-2 mt-3">
                <div class="card">
                    <div class="card-header d-flex justify-content-center">
                        Category of Innovation
                    </div>
                    <div class="card-body">
                        <div id="columnchart_values"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end of dashboard content -->

        <!-- Innovator's Page -->
        <div class="row mt-3 d-none innovatorsPage">
            <div class="col">
                <h2>Messages Content</h2>
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-4">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="w-100 d-none d-md-block mb-3"></div>
            <div class="col-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of the innovator's content -->

        <!-- mentors Page -->
        <div class="row mt-3 d-none mentorsPage">
            <div class="col">
                <h2>Mentor's Content</h2>
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-4">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="w-100 d-none d-md-block mb-3"></div>
            <div class="col-8">
                <div class="card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of the mentors's content -->

        <!-- Admins Page -->
        <div class="row mt-3 d-none adminsPage">
            <div class="col">
                <h2>Admins Content</h2>
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-4">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="w-100 d-none d-md-block mb-3"></div>
            <div class="col-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of the Admin's content -->

        <!-- Registrations Page -->
        <div class="row mt-3 d-none registrationsPage">
            <?php include('database/db_connect.php'); ?>
            <div class="col">
                <h2>Innovator's Content</h2>
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-4">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="w-100 d-none d-md-block mb-3"></div>
            <div class="col align-self-center">
                <?php
                    $sql = "SELECT id, name, nationalid, email, phonenumber, kuStudent, registeredIP, incubationdate, partner, innovationCategory, innovationStage, description FROM incubate_registrations";
        
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
                <button class="btn bg-success text-light" id="registrationButton">Show more registration</button>

            </div>
        </div>

        <!-- end of the messages content -->

        <!-- Settings Page -->
        <div class="row mt-3 d-none settingsPage">
            <div class="col">
                <h2>Settings Content</h2>
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-4">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="w-100 d-none d-md-block mb-3"></div>
            <div class="col-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of the settings content -->

        <!-- Profile Page -->
        <div class="row mt-3 d-none profilePage">
            <div class="col">
                <h2>Profile Content</h2>
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-4">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="w-100 d-none d-md-block mb-3"></div>
            <div class="col-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of the profiles content -->

        <!-- patent form  -->
        <div class="row d-none patentContent">
            <div class="col">
                <h2>Patent Filling Form</h2>
            </div>
            <div class="w-100 d-none d-md-block"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <form class="">
                            <div class="mb-3">
                                <label for="patentName" class="form-label">Name of the Patent</label>
                                <input type="text" class="form-control" id="patentName" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="patentOwner" class="form-label">Patent owner</label>
                                <input type="text" class="form-control" id="patentOwner">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="patentNumber">Patent Number</label>
                                <input type="text" class="form-control" id="patentNumber">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="javascript/admin.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>