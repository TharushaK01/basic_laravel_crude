<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit post</h1>
    <form method="POST" action="{{route('posts.update', $posts->id)}}">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{old('title', $posts->title)}}" required>
        <br>
        <label for="body">Body:</label>
        <textarea id="body" name="body" required>{{old('body', $posts->body)}}</textarea>
        <br>
        <button type="submit">Update</button>
        </form>
            @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color:red;">{{ $error }}</li>
        @endforeach
    </ul>
    @endif
</body>
</html>