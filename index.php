<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ur Dream Garden's</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="header">
        <h1> <img class="logo" src="foto/logo.png" alt="Your Logo"> 
            <h1>Ur Dream Garden's</h1>
            <p class="by-text">By: <a
                href="https://www.instagram.com/rrateam.id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                target="_blank">RRA TEAM</a></p>
        </div>
        <div class="upload-btn">
            <a href="form_upload.php" class="btn btn-success mb-4">Home</a>
        </div>
        <div class="card-container">
            <?php 
                include "koneksi.php";
                $data = mysqli_query($koneksi, "SELECT * FROM fitur ORDER BY id_tanaman DESC");
                $counter = 1;
                while ($row = mysqli_fetch_array($data)) {
            ?>
            <div class="card">
                <div class="card-img">
                    <img src="file/<?php echo $row['foto']; ?>" alt="<?php echo $row['nama_tanaman']; ?>">
                </div>
                <div class="card-content">
                    <h2><?php echo $row['nama_tanaman']; ?></h2> <!-- Nama tanaman ditambahkan di sini -->
                    <div class="feature-btn-container">
                        <button class="feature-btn"
                            onclick="toggleFeatureText(this, 'jenis-<?php echo $counter; ?>')">Jenis Tanaman
                        </button>
                        <button class="feature-btn"
                            onclick="toggleFeatureText(this, 'perawatan-<?php echo $counter; ?>')">Perawatan
                            Tanaman</button>
                        <button class="feature-btn"
                            onclick="toggleFeatureText(this, 'bakteri-<?php echo $counter; ?>')">Bakteri dan Hama
                        </button>
                        <button class="feature-btn"
                            onclick="toggleFeatureText(this, 'fakta-<?php echo $counter; ?>')">Fakta Unik
                        </button>
                    </div>
                    <div class="feature-text" id="jenis-<?php echo $counter; ?>">
                        <p><strong>Jenis Tanaman:</strong> <br><br><?php echo $row['jenis_tanaman']; ?></p>
                    </div>
                    <div class="feature-text" id="perawatan-<?php echo $counter; ?>">
                        <p><strong>Perawatan Tanaman:</strong> <br><br><?php echo $row['perawatan_tanaman']; ?></p>
                    </div>
                    <div class="feature-text" id="bakteri-<?php echo $counter; ?>">
                        <p><strong>Bakteri dan Hama:</strong> <br><br><?php echo $row['bakteri_hama']; ?></p>
                    </div>
                    <div class="feature-text" id="fakta-<?php echo $counter; ?>">
                        <p><strong>Fakta Unik:</strong> <br><br><?php echo $row['fakta_unik']; ?></p>
                    </div>
                </div>
            </div>
            <?php 
                $counter++;
            } ?>
        </div>
    </div>
    <script>
    function toggleFeatureText(button, featureId) {
        var featureTexts = document.querySelectorAll('.feature-text');
        featureTexts.forEach(function(text) {
            text.style.display = 'none';
        });

        var targetFeatureText = document.getElementById(featureId);
        targetFeatureText.style.display = (targetFeatureText.style.display === 'none' || targetFeatureText.style
            .display === '') ? 'block' : 'none';
    }
</script>

</body>

</html>