<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encyclopedia</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #98FB98;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #228B22;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar .title {
            font-size: 24px;
            font-weight: bold;
            color: #ffffff;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .navbar .back-button {
            background-color: #33B864;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .navbar .back-button:hover {
            background-color: #d5d5d5;
        }

        .container {
            margin-top: 50px;
        }

        .input-group {
            width: 100%;
        }
        .card-header {
            background: #088F8F;
            color: white;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="title">Welcome to Wild-Life Encyclopedia</div>
        <a href="javascript:history.back()" class="back-button">Back</a>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control"
                            value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" name="search"
                            placeholder="Search here...">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-12">
                 <div class="card">
                    <div class="card-header">
                       <h4 class="text-center"> Here we can search for any disease of pets or Wild animal and treatments.</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Disease</th>
                                    <th>Detail</th>
                                    <th>Info</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php

                               if(isset($_GET['search']))
                               {
                                $connection = mysqli_connect("localhost", "root", "", "planetPaw");
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }
                                $filtervalue= $_GET['search'];
                                $filterdata = "SELECT * FROM encyclopedia WHERE CONCAT(Disease,Detail,Info) LIKE '%$filtervalue%' ";
                                $filterdata_run = mysqli_query($connection, $filterdata );

                                if(mysqli_num_rows($filterdata_run) > 0)
                                {
                                   foreach($filterdata_run as $row)
                                   {
                                      ?>
                                         <tr>
                                             <td><?php echo $row['Disease']; ?> </td>
                                             <td><?php echo $row['Detail']; ?> </td>
                                             <td><?php echo $row['Info']; ?> </td>
                                         </tr>
                                      <?php
                                   }
                                }
                                else
                                {
                                    ?>
                                        <tr>
                                            <td colspan="3"> No record found</td>
                                        </tr>
                                    <?php
                                    
                                }

                               }
                            
                            ?>
                               
                            </tbody>
                        </table>


                    </div>
                 </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>