<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <form class="row g-4" action="insert3.php" method="post">
        <div class="col-md-4">
            <div class="form-outline">
                <label for="validationServer01" class="form-label">id_product</label>
                <input type="text" class="form-control is-valid" name="id" value="" required />
                <div class="valid-feedback">Looks good!</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-outline">
                <label for="validationServer02" class="form-label">name_product</label>
                <input type="text" class="form-control is-valid" name="name" value="" required />
                <div class="valid-feedback">Looks good!</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-outline">
                <label for="validationServer01" class="form-label">type_product</label>
                <input type="text" class="form-control is-valid" value="" name="type" required />
                <div class="valid-feedback">Looks good!</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class=" input-gr ">
                <label for="validationServer01" class="form-label">price_product</label>
                <input type="text " class="form-control is-valid" value="" name="price" />
                <div class="valid-feedback">Looks good!</div>
            </div>
        </div>

        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required />
                <label class="form-check-label" for="invalidCheck3">Agree to terms and conditions</label>
                <div class="invalid-feedback">You must agree before submitting.</div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">اضافه منتج</button>
        </div>
    </form>
</body>