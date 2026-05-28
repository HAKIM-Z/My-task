<?php include 'navbar.php'; ?>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white font-weight-bold">Register New Account</div>
                <div class="card-body">
                    <?php if(isset($_SESSION['errors'])): ?>
                        <div class="alert alert-danger">
                            <?php 
                            foreach($_SESSION['errors'] as $error) {
                                echo "<p class='mb-0'>- $error</p>";
                            }
                            unset($_SESSION['errors']); 
                            ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="register.php">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Username <span class="text-danger">*</span></label>
                                <input type="text" name="username" class="form-control" value="<?= $_SESSION['old_register']['username'] ?? '' ?>">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input type="text" name="email" class="form-control" value="<?= $_SESSION['old_register']['email'] ?? '' ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Password <span class="text-danger">*</span></label>
                                <!-- الباسورد بيفضل فاضي دايماً -->
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Phone Number <span class="text-danger">*</span></label>
                                <input type="text" name="phone" class="form-control" value="<?= $_SESSION['old_register']['phone'] ?? '' ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Facebook URL <small class="text-muted">(Optional)</small></label>
                            <input type="text" name="fb_url" class="form-control" value="<?= $_SESSION['old_register']['fb_url'] ?? '' ?>">
                        </div>
                        <div class="form-group">
                            <label>Twitter URL <small class="text-muted">(Optional)</small></label>
                            <input type="text" name="tw_url" class="form-control" value="<?= $_SESSION['old_register']['tw_url'] ?? '' ?>">
                        </div>
                        <div class="form-group">
                            <label>Instagram URL <small class="text-muted">(Optional)</small></label>
                            <input type="text" name="ig_url" class="form-control" value="<?= $_SESSION['old_register']['ig_url'] ?? '' ?>">
                        </div>
                        <button type="submit" class="btn btn-success w-100 mt-3">Register</button>
                    </form>
                    
                    <div class="mt-3 text-center">
                        <small>Already have an account? <a href="loginform.php">Login here</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
unset($_SESSION['old_register']); 
?>
</body>
</html>