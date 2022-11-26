<?php 
    require 'style.php';
?>
<h1 style="color: white; font-size: 100px">Edit view</h1>
<form action="update_record.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $result['id']; ?>" class="view-control">
    <input type="text" name="name" value="<?php echo $result['name']; ?>" class="view-control">
    <input type="text" name="sport" value="<?php echo $result['sport']; ?>" class="view-control">
    <button type="submit" class="glow-on-hover">UPDATE</button>
</form>