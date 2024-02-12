@extends('layouts.app')

@section('content')
<div class="card">
  
    <h5 class="card-header">Halaman Gambar</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Judul</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tanggal</th>
            <th>Aksi</th>

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
                  <p>{{ $gmr->deskripsi }}</p>
                </td>
                <td>
                    <p>{{ $gmr->release_date }}</p>
                  </td>
                <td>
                    <a class="dropdown-item" href="{{ URL::to ('admin/gambar/' . $gmr->id . '/edit') }}"><i class="bx bx-edit-alt me-1"></i> </a>
                    
                    <form id="deleteForm{{ $gmr->id }}" 
                        action="{{ route('gambar.destroy', ['gambar' => $gmr->id]) }}" 
                        method="POST" style="display: none;">
                      @csrf
                      @method('DELETE')
                    </form>

                    <a class="dropdown-item" href="#" data-toggle="tooltip" data-placement="top" title="Delete"
                    onclick="event.preventDefault(); 
                            document.getElementById('deleteForm{{ $gmr->id }}').submit();"><i class="bx bx-trash me-1"></i> </a>
                    
                </td>
              </tr>
            @endforeach
          
        </tbody>
      </table>
    </div>
</div>
@endsection
