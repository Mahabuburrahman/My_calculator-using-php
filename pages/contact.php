<?php include 'pages/includes/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">My Calculator</div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row mb-3">
                                <label class="col-md-3">First Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" required value="<?php echo isset($_POST['starting_number']) ? $_POST['starting_number'] : '' ?>" name="starting_number"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Second Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" required value="<?php echo isset($_POST['ending_number']) ? $_POST['ending_number'] : '' ?>" name="ending_number"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Your Choice</label>
                                <div class="col-md-9">
                                    <label class="me-3"><input type="radio" name="operator" value="odd" checked/>Odd</label>
                                    <label class="me-3"><input type="radio" name="operator" value="even"/>Even</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control"
                                           value="<?php echo isset($result) ? $result : ''; ?>"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" class="btn btn-success" value="Sure"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'pages/includes/footer.php'; ?>
