<div class="col-lg-4">
    <div class="collapse" id="librecs" style>
        <div class="card border-0">
            <div class="card-header border-success border-3">
                <h5 class="card-title mt-2 text-center">
                    Student / Personnel
                </h5>

            </div>
            <div class="card-body">
                <form method="POST" action="cr_add.php">

                    <div class="row">
                        <div class="col-12 p-3">

                            <input class="form-control" type="text" placeholder="Identification No." id="idnum"
                                name="idnum" required>

                        </div>
                        <div class="col-12 p-3">

                            <input class="form-control" type="text" placeholder="Accession No." id="idmat"
                                name="idmat[]" required>

                        </div>
                        <div class="col-12 text-end">
                            <button class="btn btn-success w-50 " type="submit" name="borrow-add">
                                <i class="fas fa-check fa-lg"></i>
                            </button>

                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
    <div class="collapse show" id="librecs" style>
        <div class="card border-1 border-success">
            <div class="card-header">
                <h5 class="card-title mt-2 text-center">
                    Recently Borrowed Books
                </h5>
                <h6 class="card-subtitle text-muted text-center">
                    <div class="date fs-6 text-muted">
                        <span id="today">Today</span>,
                        <span id="month">Month</span>
                        <span id="day">00</span>,
                        <span id="year">Year</span>
                    </div>
                </h6>
            </div>
            <div class="card-body">
                <h1 class="mt-5 mb-5 text-center">
                    <?php

                    $sql = "SELECT COUNT(*) AS count FROM borrow WHERE DATE(date_borrow) = CURDATE()";

                    $result = mysqli_query($con, $sql);

                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        $count = $row['count'];

                        echo $count;
                    } else {
                        echo "Error: " . mysqli_error($con);
                    } ?>

                </h1>
            </div>
        </div>
    </div>
    <div class="collapse show" id="librecs" style>
        <div class="card h-100 border-1 border-success">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-10">
                        <h5 class="card-title mt-2">
                            Monthly Summary
                        </h5>
                    </div>
                    <div class="col-2 align-self-center">
                        <i class="fas fa-chart-pie fa-md"></i>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?php include 'circ-summary.php'; ?>

                <canvas id="CircPie"></canvas>

            </div>
        </div>
    </div>
    <div class="collapse show" id="librecs" style>
        <div class="card h-100 border-1 border-success">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-10">
                        <h5 class="card-title mt-2">
                            All-time Favorites
                        </h5>
                    </div>
                    <div class="col-2 align-self-center">
                        <i class="fas fa-star fa-md"></i>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive-xl">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">AN</th>
                                <th scope="col">Title</th>
                                <th scope="col">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include 'circ-mbb.php'; ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <div class="collapse" id="librecs" style>
        <div class="card border-1 border-success">
            <div class="card-header">
                <h5 class="card-title mt-2 text-center">
                    Recently Returned Books
                </h5>
                <h6 class="card-subtitle text-muted text-center">

                </h6>
            </div>
            <div class="card-body">
                <h1 class="mt-5 mb-5 text-center">
                    <?php

                    $sql = "SELECT COUNT(*) AS count FROM borrow WHERE status = 1 AND DATE(date_return) = CURDATE()";

                    $result = mysqli_query($con, $sql);

                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        $count = $row['count'];

                        echo $count;
                    } else {
                        echo "Error: " . mysqli_error($con);
                    } ?>
                </h1>
            </div>
        </div>
    </div>
</div>