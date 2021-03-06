<div class="card card-body bg-light mt-5">
    <h2>Edit Post</h2>
    <p class="lead">Edit the post with this form</p>
    <form action="/posts/edit/<?= $data['id'] ?>" method="post">

        <div class="form-group">
            <label for="title">Title: <sup>*</sup></label>
            <input type="text" name="title"
                   class="form-control
                           <?php echo (!empty($data['title_error'])) ? 'is-invalid' : ''; ?>"
                   value="<?= $data['title'] ?>">
            <span class="invalid-feedback"><?= $data['title_error'] ?></span>
        </div>

        <div class="form-group">
            <label for="body">Body: <sup>*</sup></label>
            <textarea name="body"
                      class="form-control<?php echo (!empty($data['body_error'])) ? ' is-invalid' : ''; ?>"><?= $data['body'] ?></textarea>
            <span class="invalid-feedback"><?= $data['body_error'] ?></span>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>


    </form>
</div>

