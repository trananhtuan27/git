<div class="row">
    <form method="post">
        <label>Them moi</label>
        <input type="text" name="name" value="<?php echo $user['name'] ?>>
        <input type="text" name="type" value="<?php echo $user['type'] ?>>
        <input type="text" name="price" value="<?php echo $user['price'] ?>>
        <input type="text" name="quantity" value="<?php echo $user['quanlity'] ?>>
        <input type="text" name="createDate" value="<?php echo $user['createDate'] ?>>
        <input type="text" name="description" value="<?php echo $user['description'] ?>>
        <input type="submit" value="add">
    </form>
</div>