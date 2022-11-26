<?php require 'style.php'; ?>


<h1 style="color: white; font-size: 100px">Save view</h1>

<form action="save_name.php" method="POST">
        <input type="text" name="name" placeholder="Name" required> <br>
        <input type="text" name="sport" placeholder="Sport" required>
        <div class="btn-box">
        <button type="submit" class="glow-on-hover">SAVE</button>
        </div>
    </form>

    <?php foreach($result as $row): ?>
        <div class="results">
            <?php echo $row['name']." "; ?><a href="delete.php?id=<?php echo $row['id'] ?>" class="delete">DELETE</a>
            <a href="update.php?id=<?php echo $row['id'] ?>" class="edit">UPDATE</a>
        </div>

    <?php endforeach ?>
<?php 
    mysqli_close($db);
?>