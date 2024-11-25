<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a product </h1>
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="">Title</label>
            <input type="text" name="Title" placeholder="Title">
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="Description" placeholder="Description">
        </div>
        <div>
            <label for="">Location</label>
            <input type="name" name="Location" placeholder="Location">
        </div>
        <div>
            <label for="">Tingkat Kesulitan</label>
            <select name="Tingkat-Kesulitan" id="difficulty">
                <option value="Gampang">Gampang</option>
                <option value="Standar">Standar</option>
                <option value="Susah Sekali">Susah Sekali</option>
            </select>
        </div>
        {{-- <div>
            <label for="">Bukti</label>
            <input type="file" name="photo_url">
        </div> --}}
        <div>
            <Input type="submit"></Input>
        </div>
    </form>
</body>
</html>
