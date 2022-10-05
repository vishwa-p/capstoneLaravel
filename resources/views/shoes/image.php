<?= view('layout.header') ?>

<section class="w3-padding">

    <h2>Shoes Image</h2>

    <div class="w3-margin-bottom">
        <?php if ($shoes->photo) : ?>
            <img src="<?= $shoes->photo ?>" width="200">
        <?php endif; ?>
    </div>

    <form method="post" enctype="multipart/form-data" action="/shoes/image/<?= $shoes->id ?>" novalidate>
        <?= csrf_field() ?>

        <label for="photo">Photo:</label>
        <input class="form-control" type="text" name="photo" id="photo">
        <span style="color:red;"><?= $errors->first('photo'); ?></span>

        <br>

        <input type="submit" value="Save Photo">

    </form>

    <a href="/console/projects/list">Back to Project List</a>

</section>

</body>

</html>