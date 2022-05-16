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
    <title>Transactions</title>
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
    <div class="container p-5">
        <div class="row">
            <div class="col text-center mt-5 p-5 shadow border ">
                <button type="button" class="btn btn-outline-dark p-2 m-3 w-50" data-bs-toggle="modal" data-bs-target="#exampleModal">Transfer</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="transdetails.php" method="POST">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Customer Name</label>
                                        <select class="form-select" name="cname" aria-label="Default select example">
                                            <?php while ($row = mysqli_fetch_assoc($result_customers)) { ?>
                                                <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                                            <?php }; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Amount</label>
                                        <input type="number" name="amount" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Transfer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container p-5 mx-auto">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Transaction Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Remit Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result_transactions)) { ?>
                                    <tr>
                                        <td><?php echo $row['transfer_id'] ?></td>
                                        <td><?php echo $row['NAME'] ?></td>
                                        <td><?php echo $row['CUSTOMER_NAME'] ?></td>
                                        <td><?php echo $row['BALANCE'] ?>$</td>
                                    </tr>
                                <?php }; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>