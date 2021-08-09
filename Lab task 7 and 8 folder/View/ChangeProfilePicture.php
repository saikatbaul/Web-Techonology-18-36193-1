<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/storeOfficerRegistration.css">
    <link rel="stylesheet" href="../CSS/storeOfficer.css">
</head>
<body>
    <div class="header">
        <?php include 'Head.php';?>
    </div>

    <div class="row">
        <div class="col-3 menu">
            <?php include 'Account.php';?>
        </div>

        <div class="col-6">
            <form action="CPP.php" method="post" enctype="multipart/form-data">
                <h1>Change Profile Picture</h1>
                <div class="inset">
                    <p>
                        <img src="../Picture/pp.jpg" alt="PP" style="width:130px;height:130px;">
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </p>
                </div>

                <p class="p-container">
                    <input type="submit" name="submit" value="Submit">
                </p>
            </form>
        </div>
    </div>

    <div class="footer">
        <?php include 'Foot.php';?>
    </div>
</body>
</html>