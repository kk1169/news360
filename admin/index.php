<?php
include "./layouts/head.php";
?>

<div class="container mt-5 d-flex justify-content-center">

    <div class="card" style="width: 26rem;">
        <div class="card-body">
            <h5 class="card-title">Welcome! Administrator</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Login here with your credentials</h6>

            <!-- login form -->
            <div class="mt-4">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
            <!-- login form -->

        </div>
    </div>

</div>


<?php include "./layouts/foot.php"; ?>