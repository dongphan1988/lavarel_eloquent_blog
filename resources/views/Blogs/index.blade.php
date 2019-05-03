<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h1 style="text-align: center;color: #761b18">LIST BLOGS</h1>
<a href="{{route('blogs.create')}}">
    <button type="button" class="btn btn-primary">CREATE BLOG</button>
</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Content</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Category_id</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($blogs as $blog)
        <tr>
            <th scope="row">{{$blog['id']}}</th>
            <td>{{$blog['name']}}</td>
            <td>{{$blog['contents']}}</td>
            <td>{{$blog['title']}}</td>
            <td>{{$blog['description']}}</td>
            <td>{{$blog['category_id']}}</td>
            <td>
                <a href="{{route('blogs.show',['id'=>$blog['id']])}}">
                    <button type="button" class="btn btn-primary">VIEW</button>
                </a>
                <a href="{{route('blogs.delete',['id'=>$blog['id']])}}">
                    <button type="button" class="btn btn-danger">DELETE</button>
                </a>
                <a href="{{route('blogs.edit',['id'=>$blog['id']])}}">
                    <button type="button" class="btn btn-primary">UPDATE</button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<body>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</html>