@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <!-- HTML5 Inputs -->
    <form action="{{ URL::to('/admin/gambar') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card mb-4">
            <h5 class="card-header">Tambah Gambar</h5>
            <div class="card-body">
              <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">Judul</label>
                <div class="col-md-10">
                  <input class="form-control" type="text" name="judul" id="judul" />
                </div>
              </div>
      
              <div class="mb-3 row">
                  <label for="image" class="col-md-2 col-form-label">Gambar</label>
                  <div class="col-md-10">
                    <input class="form-control" type="file" name="image" id="image" />
                  </div>
              </div>
      
              <div class="mb-3 row">
                  <label for="html5-text-input" class="col-md-2 col-form-label">Nama</label>
                  <div class="col-md-10">
                    <input class="form-control" type="text" name="nama" id="nama" />
                  </div>
              </div>
      
              <div class="mb-3 row">
                  <label for="html5-text-input" class="col-md-2 col-form-label">Deskripsi</label>
                  <div class="col-md-10">
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control"></textarea>
                  </div>
              </div>
      
              <div class="mb-3 row">
                <label for="html5-date-input" class="col-md-2 col-form-label">Date</label>
                <div class="col-md-10">
                  <input class="form-control" type="date" name="release_date" id="release_date" />
                </div>
              </div>

              <button type="submit" name="simpan" class="btn btn-primary">Send</button>
            </div>
          </div>

    </form>
    

  </div>
@endsection
