<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Disabled Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<div class="m-4">
    <form action="/examples/actions/confirmation.php" method="post">
        <fieldset disabled>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Invoice No</label>
                <div class="col-sm-10">
                    <input type="Text" class="form-control" id="inputEmail" placeholder="" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                    <input type="Text" class="form-control" id="inputPassword" required>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
</body>
</html>