<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Before Order</title>
    <!-- Bootstrap 4 CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Bootstrap 4 JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container text-center mt-5">
        <h2 class="mb-4">Silahkan pilih makan dimana</h2>
        <div class="row justify-content-center">
            <div class="col-md-2">
                <a href="{{ route('menu', ['method' => 'dinein']) }}" class="btn btn-success btn-lg btn-block">
                    DINE-IN
                </a>
            </div>
            <div class="col-md-2">
                <a href="{{ route('menu', ['method' => 'takeaway']) }}" class="btn btn-primary btn-lg btn-block">
                    Take Away
                </a>
            </div>
        </div>
    </div>
</body>
</html>
