<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Edit</title>
</head>
<body>
<div class="card">
    <div class="card-body">
        <h1 class="card-title">Edit Category</h1>
        <form action="/food/{{$category->id}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group w-50">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{$category->name}}">
            </div>
            <div class="form-group w-50">
                <label for="">Avartar</label>
                <input type="text" name="avatar" class="form-control" value="{{$category->avatar}}">
                <img src="{{$category->avatar}}" alt="" style="width: 200px">
            </div>

            <div>
                <input type="submit" value="Submit" class="btn btn-primary" >
                <input type="reset" value="Reset" class="btn btn-dark">
            </div>
        </form>
    </div>
</div>

</body>
</html>