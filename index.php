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
                <h3>Contact Form</h3>
                Please enter your name and a <u>domestic (US) phone number</u> where we can reach you.
            </div>
        </div>
        <div class="col-xs-12">
            <form action="form.php" id="phone-form" method="post">

                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="first-name" placeholder="First Name"/>
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last-name" placeholder="Last Name"/>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone"/><br>
                </div>

                <div id="form-error"></div>

                <button type="submit" id="submit-form" class="btn btn-default disabled">Submit</button>

            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/validation.js"></script>
</body>
</html>
