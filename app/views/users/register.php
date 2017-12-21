<div class="row">
    <div class="col-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2>Create An Account</h2>
            <p class="lead">Please fill out this form to register with us</p>
            <form action="/users/register" method="post">
                <div class="form-group">
                    <label for="name">Name: <sup>*</sup></label>
                    <input type="text" name="name"
                           class="form-control
                           <?php echo (!empty($data['name_error'])) ? 'is-invalid' : ''; ?>"
                           value="<?= $data['name'] ?>">
                    <span class="invalid-feedback"><?= $data['name_error'] ?></span>
                </div>

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

                <div class="form-group">
                    <label for="confirm_password">Confirm password: <sup>*</sup></label>
                    <input type="password" name="confirm_password"
                           class="form-control
                           <?php echo (!empty($data['confirm_password_error'])) ? 'is-invalid' : ''; ?>"
                           value="<?= $data['confirm_password'] ?>">
                    <span class="invalid-feedback"><?= $data['confirm_password_error'] ?></span>
                </div>

                <div class="row">
                    <div class="col">
                        <button type="submit"  class="btn btn-success btn-block"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</button>
                    </div>
                    <div class="col">
                        <a href="/users/login" class="btn btn-white btn-block">Have an account? Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>