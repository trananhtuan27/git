<a href="?page=add"><input type="button" value="them"></a>

<div class="row"></div>
<table border="1">
    <tr>
        <td>STT</td>
        <td>Ten</td>
        <td>Type</td>
        <td>Price</td>
        <td>quantity</td>
        <td>createDate</td>
        <td>description</td>
    </tr>
    <?php foreach ($users as $key => $user): ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo $user->getName(); ?></td>
            <td><?php echo $user->getType(); ?></td>
            <td><?php echo $user->getPrice(); ?></td>
            <td><?php echo $user->getQuantity(); ?></td>
            <td><?php echo $user->getCreateDate(); ?></td>
            <td><?php echo $user->getDescription(); ?></td>
            <th><a href="index.php?page=delete&user_id=<?php echo $user->getUserId() ?>">
                    <input type="button" value="Delete" onclick="return confirm('ban co muon xoa khong')"></a></th>
            <th><a href="index.php?page=edit&user_id=<?php echo $user->getUserId() ?>">
                    <input type="button" value="Edit"></a></th>
        </tr>
    <?php endforeach; ?>
</table>