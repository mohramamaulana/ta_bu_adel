@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
              <h5 class="card-title text-primary">Selamat Datang di Galery Telkom! 🎉</h5>
              <p class="mb-4">
                You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                your profile.
              </p>

              <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
            </div>
          </div>
          <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img
                src="../assets/img/illustrations/man-with-laptop-light.png"
                height="140"
                alt="View Badge User"
                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                data-app-light-img="illustrations/man-with-laptop-light.png"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="card">
  
  <h5 class="card-header">Halaman Gambar</h5>
  <div class="table-responsive text-nowrap">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Judul</th>
          <th>Gambar</th>
          <th>Nama</th>
          <th>Tanggal</th>

        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
          @foreach ($gambar as $gmr)
          <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $gmr->judul }}</strong></td>
              <td>
                  <div>
                      <img class="d-block rounded" height="100" alt="mobil" src="{{ asset('/images/' . $gmr->image ) }}"/></td>
                  </div>
              <td>
                <p>{{ $gmr->nama }}</p>
              </td>
      
              <td>
                  <p>{{ $gmr->release_date }}</p>
                </td>
             
            </tr>
          @endforeach
        
      </tbody>
    </table>
  </div>
</div>
@endsection
