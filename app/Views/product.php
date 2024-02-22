<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container bg-dark">
        <div class="row p-5">
            <div class="modal-header">
                <h5 class="modal-title text-white ">Modal title</h5>

            </div>
            <div class="modal-body p-3 mt-5">
                <form method="post" action="<?= base_url('users/fileUpload') ?>" enctype="multipart/form-data">
                    <div class="mb-3 text-white">
                        <label for="formFile" class="form-label">Product Name</label>
                        <input class="form-control" type="text" id="name" name="name">
                    </div>

                    <div class="mb-3 text-white">
                        <label for="formFile" class="form-label">Product Price</label>
                        <input class="form-control" type="text" id="price" name="price">
                    </div>
                    <div class="mb-3 text-white">
                        <label for="formFile" class="form-label">Product Image</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>

                    <div class="mb-3">
                        <button type="submit" name="submit">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>