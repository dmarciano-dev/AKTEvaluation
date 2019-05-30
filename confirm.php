<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Validate Phone</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <style>
        body {
            padding: 50px 0 0 0;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="well">
                <?php
                    if (isset($_GET['success']) && $_GET['success'] === '1') {
                        echo "Thank you for submitting your contact information.  Have a nice day!";
                    } else {
                        echo "Your request could not be processed.  Please try again later.";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
