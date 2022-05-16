<?php include 'db.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Customers</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg">
        <div class="container-fluid">
            <a class="" href=""><img src="images/logo3.png" class="img"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 right">
                    <li class="nav-item white">
                        <a class="nav-link active white" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active white" aria-current="page" href="customrs.php">Customers</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active white" aria-current="page" href="transactions.php">Transactions</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container p-5 mx-auto">
        <div class="row">
            <div class="col text-center mt-5 p-5 shadow border">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">current Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result_customers)) { ?>
                                <tr>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['current_balance']; ?></td>
                                    <td class="text-center">
                                        <a href="transactions.php"><button type="button" class="btn btn-primary m-1 ms-3 pe-3 me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Transfer</button></a>
                                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-success">edit</a>
                                    </td>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>