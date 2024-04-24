<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SDS Tarutung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-2">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>SDS Tarutung - Index Berita</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ url('add-berita') }}"> Create Vacancy</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>S.No</th>
            <th>Informasi Berita</th>
            <th>Informasi Alumni</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($berita as $namasa)
        <tr>
            <td>{{ $namasa->berita_id }}</td>
            <td>{{ $namasa->informasi_berita }}</td>
            <td>{{ $namasa->informasi_alumni }}</td>
            <td><img src="{{ asset('storage/images/'.$namasa->image) }}" alt="Your Image" width="100px" height="100px"></td>
            <td>{{ $namasa->description }}</td>
            <td>
                <form action="{{ url('delete/'.$namasa->id) }}" method="get">

                    <a class="btn btn-primary" href="{{ url('edit/'.$namasa->berita_id) }}">Edit</a>

                    @csrf
                    @method('get')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

    {!! $berita->links() !!}
</body>
</html>
