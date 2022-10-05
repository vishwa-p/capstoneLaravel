<?= view('layout.header') ?>

        <section class="w3-padding">

            <h2>Edit Shoe</h2>

            <form method="post" action="/shoes/edit/<?= $shoe->id ?>" novalidate>
            <?= csrf_field() ?>
  <label for="name">Name:</label>
  <input type="text" name="name" id="name" value="<?= old('name', $shoe->name) ?>">
  <span style="color:red;"><?= $errors->first('name'); ?></span>
  <br>
  
  <label for="description">Description:</label>
  <textarea type="text" name="description" id="description" rows="10"><?= old('description', $shoe->description) ?></textarea>
  <span style="color:red;"><?= $errors->first('description'); ?></span>
      
  <script>

  ClassicEditor
    .create( document.querySelector( '#description' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
    
  </script>
  
  <br>
  
  <label for="brand">Brand:</label>
  <input class="form-control" type="text" name="brand" id="brand" value="<?= old('brand', $shoe->brand) ?>">
  <span style="color:red;"><?= $errors->first('brand'); ?></span>

  <br>
  
  <label for="type">Type :</label>
  <input class="form-control" type="text" name="type" id="type" value="<?= old('type', $shoe->type) ?>">
  <span style="color:red;"><?= $errors->first('type'); ?></span>

  <br>
  
  <label for="price">Price:</label>
  <input class="form-control" type="number" name="price" id="price" value="<?= old('price', $shoe->price) ?>">
  <span style="color:red;"><?= $errors->first('price'); ?></span>

  <br>
  
  <input type="submit" value="Edit Shoe">
  
</form>

            <!-- <a href="/console/projects/list">Back to Project List</a> -->
            <p><a href="/shoes/list"><i class="fas fa-arrow-circle-left"></i> Return to Shoe List</a></p>

        </section>

    </body>
</html>