<?php
// BURAYI ARKADAŞININ GITHUB RAW LİNKİ İLE DEĞİŞTİR
$arkadas_github_raw_url = "https://raw.githubusercontent.com/nisanuripek/php_ak-ll-notpayla-m-/refs/heads/main/notlarim.txt";

$icerik = @file_get_contents($arkadas_github_raw_url);

if ($icerik === FALSE) {
    $icerik = "Arkadaşının notları çekilemedi. Reposu gizli (Private) olabilir.";
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>elif Notları</title>
    <style>
        body { font-family: sans-serif; padding: 20px; max-width: 800px; margin: auto; }
        .back-btn { text-decoration: none; color: red; }
        .note-box { background-color: #e9ecef; padding: 15px; border-radius: 8px; white-space: pre-wrap; }
    </style>
</head>
<body>
    <a href="index.php" class="back-btn">← Ana Sayfaya Dön</a>
    <h2>Arkadaşımın Notları</h2>
    <hr>
    <div class="note-box">
        <?php echo htmlspecialchars($icerik); ?>
    </div>
</body>
</html>