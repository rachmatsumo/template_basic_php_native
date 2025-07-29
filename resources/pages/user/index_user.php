<?php
    require_once 'app/Controllers/UsersController.php';
    $UsersController = new UsersController();
?>

<nav aria-label="breadcrumb" class="d-flex justify-content-between">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Users</li>
    </ol>
    <a href="?page=add_user">Add</a>
</nav>

<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
        <?php
            $all_users = $UsersController->index();
            $no = 1; 
            while ($d = mysqli_fetch_array($all_users)) {    
        ?> 
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $d['nama'];?></td>
                <td><?php echo $d['email'];?></td>
                <td></td>
            </tr>
        <?php
            }
        ?>
    </table>
</div>