<?= view('layout.header') ?>

        <section class="w3-padding">

            <h2>Add User</h2>

            <form method="post" action="/console/users/add" novalidate class="w3-margin-bottom">

                <?= csrf_field() ?>

                

                <div class="w3-margin-bottom">
                    <label for="last">Name:</label>
                    <input type="text" name="name" id="name" value="<?= old('name') ?>" required>

                    <?php if($errors->first('name')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('name'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?= old('email') ?>" required>

                    <?php if($errors->first('email')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('email'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">

                    <?php if($errors->first('password')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('password'); ?></span>
                    <?php endif; ?>
                </div>
                <div class="w3-margin-bottom">
                    <label for="password">Re-enter Password:</label>
                    <input type="password" name="password" id="password">

                    <?php if($errors->first('password')): ?>
                        <br>
                        <span class="w3-text-red"><?= $errors->first('password'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="w3-margin-bottom">
                <label for="cars">User Role:</label>
                    <select name="roles" id="roles">
                        <option value="seller">Seller</option>
                        <option value="visitor">Visitor</option>                        
                    </select>
                </div>

                <button type="submit" class="w3-button w3-green">Add User</button>

            </form>

            <a href="/console/users/list">Back to User List</a>

        </section>

    </body>
</html>