<div style="padding-left: 240px;">
    <form action="index.php?controller=<?php echo $_REQUEST['controller']; ?>&action=store" method="POST">
        <?php foreach ($columns as $key => $value) : ?>
            <label for="<?php echo $key; ?>" style="width: <?php echo $value['width']; ?>;"><?php echo $value['label']; ?>:</label>
            <input type="text" name="<?php echo $key; ?>" style="width: <?php echo $value['width']; ?>;"><br>
        <?php endforeach; ?>
        <input type="submit">
    </form>
</div>
