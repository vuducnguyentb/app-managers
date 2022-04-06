
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 4 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/products')}}">List Product</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container" style="margin-top:30px">
    <h2>Create New Product</h2>
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="row">
        <form action="{{route('products.store')}}" enctype='multipart/form-data' method="POST" >
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Giá sản phẩm</label>
                <input type="number" class="form-control" name="price" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nội dung</label>
                <input type="text" class="form-control" name="content" >
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ảnh</label>
                <input type="text" class="form-control" name="image" >
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" name="active">
                <label class="form-check-label" for="exampleCheck1">Active</label>
            </div>
            <button type="submit" class="btn btn-primary">Create new</button>
        </form>
    </div>
</div>



</body>
</html>
