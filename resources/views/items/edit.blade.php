@extends('layouts.master')

@section('content')
  <div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Show Data</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div>
      @endif

      <form role="form" action="/proyek/store" method="post">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Proyek</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_proyek" placeholder="Nama Proyek" value="{{ $items->nama_proyek }}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Deskripsi Proyek</label>
            <input type="textarea" class="form-control" id="exampleInputPassword1" name="deskripsi_proyek" placeholder="Deskripsi Proyek" value="{{ $items->deskripsi_proyek }}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tanggal Mulai</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal_mulai" placeholder="Tanggal Dibuat" value="{{ $items->tanggal_mulai }}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tanggal Deadline</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="tanggal_deadline" placeholder="Tanggal Diperbarui" value="{{ $items->tanggal_selesai }}">
          </div>
          <div class="form-group">
          <label>Status Proyek</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="manager_id" placeholder="Manager ID" value="{{ $items->status }}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Manager ID</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="manager_id" placeholder="Manager ID" value="{{ $items->manager_id }}">
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary" value="save" name="submit" onclick="return confirm('Apakah data sudah valid?')">Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection

@push('scripts')

  <script>
    $(function () {
      $("#example1").DataTable();
    });
  </script>

@endpush