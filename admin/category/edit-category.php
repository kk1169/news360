<?php
include $_SERVER['DOCUMENT_ROOT'] . "/news360/admin/layouts/head.php"; ?>

<!-- navbar -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/news360/admin/layouts/navbar.php"; ?>
<!-- navbar -->


<main class="container my-3">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?= $admin_base_url ?>dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= $admin_base_url ?>category">Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
        <div>
            <a href="<?= $admin_base_url ?>category" class="btn btn-secondary">Back</a>
        </div>
    </div>

    <!-- table -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Category</h5>

            <div class="mt-3">

                <div class="row">
                    <div class="col-lg-4">

                        <form action="">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Category Name">
                            </div>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" name="status" role="switch" id="status">
                                <label class="form-check-label" for="status">Status</label>
                            </div>
                            <button class="btn btn-success">Save Changes</button>
                        </form>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- table -->
</main>


<?php include $_SERVER['DOCUMENT_ROOT'] . "/news360/admin/layouts/foot.php"; ?>