<nav aria-label="breadcrumb" class="d-flex justify-content-between">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
        <li class="breadcrumb-item"><a href="?page=users">Users</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Data</li>
    </ol>
    <a href="?page=users">Back</a>
</nav>

<form action="action.php?action=users/store" method="post">
    <label>Nama:</label><br>
    <input type="text" name="name" required><br>
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>
    <input type="submit" value="Simpan">
</form>
