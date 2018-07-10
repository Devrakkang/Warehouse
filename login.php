<div>
    <form action="controllers/auth.php" method="post">
        <h4>Form Login</h4>
        <div class="form-group">
            <label for="username" class="col-md-3">Username</label>
            <div class="col-md-9">
                <input type="text" name="username" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-md-3">Password</label>
            <div class="col-md-9">
                <input type="password" name="password" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3"></label>
            <div class="col-md-9">
                <input type="submit" name="login" value="Login" class="btn btn-info btn-sm">
            </div>
        </div>
    </form>
</div>