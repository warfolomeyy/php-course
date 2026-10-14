<?php
if (!empty($_FILES['attachment'])) {
    $file = $_FILES['attachment'];

    $srcFileName = $file['name'];
    $newFilePath = __DIR__ . '/uploads/' . $srcFileName;

    $allowedExtensions = ['jpg', 'png', 'gif'];
    $extension = pathinfo($srcFileName, PATHINFO_EXTENSION);

    $imageInfo = getimagesize($file['tmp_name']);
    $imageWidth = $imageInfo[0] ?? 0;
    $imageHeight = $imageInfo[1] ?? 0;

    $maxFileSize = 8 * 1024 * 1024;

    if (!in_array($extension, $allowedExtensions)) {
        $error = 'Загрузка файлов с таким расширением запрещена!';
    } elseif ($file['error'] === UPLOAD_ERR_INI_SIZE) {
        $error = 'Файл превышает размер, допустимый настройками сервера (upload_max_filesize)!';
    } elseif ($file['error'] !== UPLOAD_ERR_OK) {
        $error = 'Ошибка при загрузке файла.';
    } elseif ($file['size'] > $maxFileSize) {
        $error = 'Размер файла превышает 8 Мб!';
    } elseif ($imageWidth > 1280 || $imageHeight > 720) {
        $error = 'Размеры изображения не должны превышать 1280x720 пикселей!';
    } elseif (file_exists($newFilePath)) {
        $error = 'Файл с таким именем уже существует';
    } elseif (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
        $error = 'Ошибка при загрузке файла';
    } else {
        $result = 'http://localhost:8000/uploads/' . $srcFileName;
    }
}
?>
<html>
<head>
    <title>Загрузка файла</title>
</head>
<body>
<?php if (!empty($error)): ?>
    <span style="color: red;"><?= $error ?></span>
<?php elseif (!empty($result)): ?>
    Ссылка на файл: <a href="<?= $result ?>" target="_blank"><?= $result ?></a>
<?php endif; ?>
<br><br>
<form action="/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="attachment">
    <input type="submit" value="Загрузить">
</form>
</body>
</html>