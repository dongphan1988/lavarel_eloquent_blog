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
<h1 style="text-align: center;color: #1b4b72">UPDATE BLOG</h1>

<form method="post" action="{{route('blogs.update',['id'=>$blog->id])}}">
    @csrf
    <div class="form-group">
        <label style="color: #227dc7;font-size: large" for="formGroupExampleInput"> Name</label>
        <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="{{$blog->name}}">
    </div>
    <div class="form-group">
        <label style="color: #227dc7;font-size: large" for="formGroupExampleInput2">Title</label>
        <input type="text" class="form-control" name="title" id="formGroupExampleInput2" placeholder="{{$blog->title}}">
    </div>
    <div class="form-group">
        <label style="color: #227dc7;font-size: large" for="formGroupExampleInput2">Contents</label>
        <textarea type="text" class="form-control" name="contents" rows="3" placeholder="{{$blog->contents}}"></textarea>
    </div>
    <div class="form-group">
        <label style="color: #227dc7;font-size: large" for="formGroupExampleInput2">Description</label>
        <textarea type="text" class="form-control" name="description" id="formGroupExampleInput2" rows="3" placeholder="{{$blog->description}}"></textarea>
    </div>
    <div class="form-group">
        <label style="color: #227dc7;font-size: large" for="formGroupExampleInput2">CategoryId</label>
        <select class="form-group" name="category_id">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">UPDATE</button>
        <a href="{{route('blogs.index')}}">
            <button type="button" class="btn btn-primary">BACK</button>

        </a>
    </div>

</form>

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