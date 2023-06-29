<html lang="ua">
<head>
    <title>Курс валют USD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <h2 class="text-center">Курс валют USD</h2>
            <div class="card">
                <div class="card-body text-center">
                    <h3><?php echo file_get_contents('src/assets/rate.txt') ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
