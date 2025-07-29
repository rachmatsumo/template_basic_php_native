<nav aria-label="breadcrumb" class="d-flex justify-content-between">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
        <li class="breadcrumb-item"><a href="?page=books">Books</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Data</li>
    </ol>
    <a href="?page=books">Back</a>
</nav>

<form action="action.php?action=books/store" method="post">
    <label>Title:</label><br>
    <input type="text" name="title" required><br>
    <label>Publisher:</label><br>
    <input type="text" name="publisher" required><br>
    <label>Year:</label><br>
    <input type="year" name="year" required><br><br>
    <input type="submit" value="Simpan">
</form>
