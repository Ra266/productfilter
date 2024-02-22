<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>

  <div class="container my-4 mt-5 ">
    <div class="row mx-3 ">

      <?php if ($user) : ?>
        <?php foreach ($user as $row) : ?>

          <div class="card mx-3 my-3" style="width: 18rem;">
            <img src="<?= base_url() . "public/uploads/" . $row['product_image'] ?>" class="card-img-top rounded" alt="image path not found">
            <div class="card-body">
              <h5 class="card-title"><?= $row['product_name'] ?></h5>
              <p class="card-text"><?= $row['product_price'] ?></p>
              <a href="#" class="btn btn-primary">Buy</a>
            </div>
          </div>
        <?php endforeach ?>
      <?php endif ?>
    </div>
  </div>
</body>

</html>