<table class="table" style="width: 500px">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php  foreach ($categories as $index => $category) :?>
    <tr>
        <td scope="row"><?php echo $index + 1 ?></td>
        <td><?php echo $category['name'] ?></td>
        <td><a onclick="return confirm('Are you sure?')" href="index.php?page=categories&action=delete&id=<?php echo $category['id'] ?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php endforeach; ?>

    </tbody>
</table>


