<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Todo</title>
</head>

<body>
    <h1>Create todo</h1>
    <form method="POST" action="{{route('todoFolder.store')}}">
        @csrf
        @method('POST')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>

        <div>
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description"> </textarea>
        </div>
        <div>
            <button type="submit">Add todo</button>
        </div>
    </form>
</body>

</html>