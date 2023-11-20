<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
</head>
<body>
    <h2>Edit Item</h2>
    <?php if($item): ?>
    <form method="post" action="<?= base_url('addItem/update/'.$item->item_id) ?>" enctype="multipart/form-data">
        <input type="text" name="item_name" value="<?= $item->item_name ?>" required><br>
        <input type="number" name="price" value="<?= $item->price ?>" required><br>
        <textarea name="description"><?= $item->description ?></textarea><br>
        <input type="number" name="offer" value="<?= $item->offer ?>"><br>
        <input type="file" name="userfile" accept="image/*">
        <br>
        <input type="submit" value="Update Item">
    </form>
    <?php else: ?>
        <p>Item not found.</p>
    <?php endif; ?>
</body>
</html>
