<?php
    require_once 'app/Controllers/BooksController.php';
    $BooksController = new BooksController();
?>

<nav aria-label="breadcrumb" class="d-flex justify-content-between">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Books</li>
    </ol>
    <a href="?page=add_book">Add</a>
</nav>

<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <td>No</td>
            <td>Title</td>
            <td>Publisher</td>
            <td>Year</td>
            <td>Action</td>
        </tr>
        <?php
            $all_books = $BooksController->index();
            $no = 1; 
            while ($d = mysqli_fetch_array($all_books)) {    
        ?> 
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $d['title'];?></td>
                <td><?php echo $d['publisher'];?></td>
                <td><?php echo $d['year'];?></td>
                <td></td>
            </tr>
        <?php
            }
        ?>
    </table>
</div>