@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Tambah Data</div>

                <div class="card-body">
                    <form method="post" action="/buku/{{$buku->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Judul</label>
                            <input value="{{$buku->judul}}" type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Penulis</label>
                            <input value="{{$buku->penulis}}" type="text" name="penulis" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tahun Terbit</label>
                            <input value="{{$buku->tahunTerbit}}" type="text" name="tahunTerbit" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Penerbit</label>
                            <input value="{{$buku->penerbit}}" type="text" name="penerbit" class="form-control" id="exampleInputPassword1">
                        </div>


                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
