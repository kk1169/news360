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
                <li class="breadcrumb-item active" aria-current="page">Category</li>
            </ol>
        </nav>
        <div>
            <a href="<?= $admin_base_url ?>category/create-category.php" class="btn btn-primary">Add Category</a>
        </div>
    </div>



    <!-- table -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Manage Category</h5>

            <table class="table table-bordered mt-4 mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>
                            <a href="<?= $admin_base_url ?>category/edit-category.php" class="btn btn-sm btn-success">Edit</a>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- table -->
</main>


<?php include $_SERVER['DOCUMENT_ROOT'] . "/news360/admin/layouts/foot.php"; ?>