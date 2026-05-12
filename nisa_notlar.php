<?php
// BURAYI KENDİ GITHUB RAW LİNKİN İLE DEĞİŞTİR
// Örnek: GitHub'da dosyayı açıp "Raw" butonuna tıkladığında çıkan URL
$github_raw_url = "https://raw.githubusercontent.com/nisanuripek/php_ak-ll-notpayla-m-/refs/heads/main/notlarim.txt";
// İçeriği GitHub'dan çek
$icerik = @file_get_contents($github_raw_url);

if ($icerik === FALSE) {
    $icerik = "GitHub'dan notlar çekilirken bir hata oluştu. Linkin doğru ve reponun 'Public' (Herkese Açık) olduğundan emin ol.";
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>nisa'ın Notları</title>
    <style>
        body { font-family: sans-serif; padding: 20px; max-width: 800px; margin: auto; }
        .back-btn { text-decoration: none; color: red; }
        .note-box { background-color: #f4f4f4; padding: 15px; border-radius: 8px; white-space: pre-wrap; }
    </style>
</head>
<body>
    <a href="index.php" class="back-btn">← Ana Sayfaya Dön</a>
    <h2>Benim Notlarım</h2>
    <hr>
    <div class="note-box">
        <?php echo htmlspecialchars($icerik); ?>
    </div>
</body>
</html>