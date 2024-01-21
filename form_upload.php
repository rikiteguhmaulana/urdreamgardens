<!DOCTYPE html>
<html>

<head>
    <title>Ur Dream Garden's</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style1.css">
</head>

<body>
    <div class="container">
        <div class="col-md-12 row justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="col-md-12 text-center">
                <h1> <img class="logo" src="foto/logo.png" alt="Your Logo"> 
                <h1>Welcome to Ur Dream Garden's</h1>
                    By: <a
                        href="https://www.instagram.com/rrateam.id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        target="_blank">RRA TEAM</a>
                </div>
                <main>
                    <?php include "layout/footer.html" ?>
            </div>
            <div class="col-md-12 mt-5">
                <form enctype="multipart/form-data" method="post" action="upload.php">
                    <div class="mb-3">
                        <label class="form-label">Upload</label>
                        <input type="file" name="foto" class="form-control" accept="image/*" required>
                    </div>

                    <div class="mb-3 text-end">
                        <button type="submit" class="btn btn-success">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>