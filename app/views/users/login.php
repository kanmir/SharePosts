<div class="row">
    <div class="col-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2>Login</h2>
            <p class="lead">Please fill out this form to login</p>
            <form action="/users/login" method="post">

                <div class="form-group">
                    <label for="email">Email: <sup>*</sup></label>
                    <input type="email" name="email"
                           class="form-control
                           <?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>"
                           value="<?= $data['email'] ?>">
                    <span class="invalid-feedback"><?= $data['email_error'] ?></span>
                </div>

                <div class="form-group">
                    <label for="password">Password: <sup>*</sup></label>
                    <input type="password" name="password"
                           class="form-control
                           <?php echo (!empty($data['password_error'])) ? 'is-invalid' : ''; ?>"
                           value="<?= $data['password'] ?>">
                    <span class="invalid-feedback"><?= $data['password_error'] ?></span>
                </div>

                <div class="row">
                    <div class="col">
                        <button type="submit"  class="btn btn-success btn-block"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
                    </div>
                    <div class="col">
                        <a href="/users/register" class="btn btn-white btn-block">No account? Register</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>