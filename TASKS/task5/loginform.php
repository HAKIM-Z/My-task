<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white font-weight-bold">Login</div>
                <div class="card-body">
                    <?php if(isset($_SESSION['errors'])): ?>
                        <div class="alert alert-danger">
                            <?php 
                            foreach($_SESSION['errors'] as $error) {
                                echo "<p class='mb-0'>- $error</p>";
                                unset($_SESSION['errors']); 
                            }
                            ?>
                        </div>
                    <?php endif; ?>
                    <form method="POST" action="login.php">
                        <div class="form-group">
                            <label><i class="fas fa-envelope"></i> Email</label>
                            <input type="text" name="email" class="form-control" value="<?= $_SESSION['old_email'] ?? '' ?>"">
                        </div>
                        <div class="form-group">
                            <label><i class="fas fa-lock"></i> Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                    
                    <div class="mt-3 text-center">
                        <small>Don't have an account? <a href="registerform.php">Register here</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
unset($_SESSION['old_email']); 
?>
</body>
</html>