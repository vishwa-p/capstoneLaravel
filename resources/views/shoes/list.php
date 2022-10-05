<?= view('layout.header') ?>

        <?php if(session()->has('message')): ?>
            <div class="alert-strip">
                <div class="alert-msg"><?= session()->get('message') ?></div>
            </div>
        <?php endif; ?>

        <section class="w3-padding">

            <h2>Manage Shoes</h2>

            <table>
  <tr>
    <th>Photo</th>
    <th align="center">ID</th>
    <th align="left">Product</th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
  <?php foreach($shoesList as $record): ?>
    <tr>
      <td align="center">
        <img width="200px" src="<?php echo $record['photo']; ?>">
      </td>
      <td align="center"><?php echo $record['id']; ?></td>
      <td align="left">
        <?php echo htmlentities( $record['name'] ); ?>
        <small style="display:block ;"><?php echo "<b>Brand:</b>".$record['brand']; ?></small>
        <small style="display:block ;"><?php echo "<b>Type:</b>".$record['type']; ?></small>
        <small style="display:block ;"><?php echo "<b>Price:</b>".$record['price']; ?></small>
        <small style="display:block ;"><?php echo "<b>Description:</b>".$record['description']; ?></small>
      </td>
      
      <td align="center"><a href="/shoes/image/<?php echo $record['id']; ?>">Photo</i></a></td>
      <td align="center"><a href="/shoes/editform/<?php echo $record['id']; ?>">Edit</i></a></td>
      <td align="center">
        <a href="/shoes/delete/<?php echo $record['id']; ?>" onclick="javascript:confirm('Are you sure you want to delete this Shoes?');">Delete</i></a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

            <!-- <a href="/console/projects/add" class="w3-button w3-green">New Project</a> -->
            <p><a href="/shoes/addform"><i class="fas fa-plus-square"></i> Add Shoes</a></p>

        </section>

    </body>
</html>