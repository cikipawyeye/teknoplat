<!DOCTYPE html>
<html>

<head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width,initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href=https://stackpath.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css rel=stylesheet
        integrity=sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1 crossorigin=anonymous>
    <title>Product app</title>
</head>



<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand">Navbar</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div id="app">
        <div class="container p-5">
            <div class="products">
                <h3>Products</h3>
                <div class="card">
                    <div class="card-header">
                        Update product
                    </div>
                    <div class="card-body">
                        <form class="form-inline" action="/product/{{$product->id}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group"><label>ID</label> <input
                                 type="text" required="required"
                                    class="form-control ml-sm-2 mr-sm-4 my-2" name="id" disabled
                                    value="{{ $product->id }}"></div>
                            <div class="form-group"><label>Name</label> <input
                                 type="text" required="required"
                                    class="form-control ml-sm-2 mr-sm-4 my-2" name="name"
                                    value="{{ $product->name }}"></div>
                            <div class="form-group"><label>Price</label> <input
                                 type="number" required="required"
                                    class="form-control ml-sm-2 mr-sm-4 my-2" name="price"
                                    value="{{ $product->price }}"></div>
                            <div class="ml-auto text-right"><button type="submit"
                                    class="btn btn-primary my-2">Update</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</body>

</html>
