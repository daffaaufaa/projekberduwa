<?php
include "koneksi.php";

$id_movies = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM movies WHERE id_movies = $id_movies");
$data = mysqli_fetch_assoc($query);
?>

<form action="prs_edit_movies.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $id_movies ?>">

    <label for="title">Judul :</label><br>
    <input type="text" name="title" id="title" value="<?= $data['title'] ?>"><br><br>

    <label>Genre :</label><br>
    <input type="radio" name="genre" id="horor" value="horor" <?= ($data['genre'] == 'horor') ? 'checked' : '' ?>>
    <label for="horor">Horor</label><br>
    <input type="radio" name="genre" id="komedi" value="komedi" <?= ($data['genre'] == 'komedi') ? 'checked' : '' ?>>
    <label for="komedi">Komedi</label><br>
    <input type="radio" name="genre" id="romance" value="romance" <?= ($data['genre'] == 'romance') ? 'checked' : '' ?>>
    <label for="romance">Romance</label><br><br>

    <label for="description">Deskripsi :</label><br>
    <textarea name="description" id="description" cols="30" rows="10"><?= $data['description'] ?></textarea><br><br>

    <label for="release_date">Tanggal Rilis :</label><br>
    <input type="date" name="release_date" id="release_date" value="<?= $data['release_date'] ?>"><br><br>

    <label for="duration">Durasi :</label><br>
    <input type="time" name="duration" id="duration" value="<?= $data['duration'] ?>"><br><br>

    <label for="poster_image">Ganti Gambar Film (optional):</label><br>
    <input type="file" name="poster_image" id="poster_image" accept=".jpg"><br>
    <small>Gambar sekarang: <?= $data['poster_image'] ?></small><br><br>

    <label for="max_tayang">Tanggal Terakhir Tayang :</label><br>
    <input type="date" name="max_tayang" id="max_tayang" value="<?= $data['max_tayang'] ?>"><br><br>

    <input type="submit" name="submit" value="Update">
</form>
