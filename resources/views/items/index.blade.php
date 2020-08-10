@extends('layouts.master')

@section('content')
	<div class="card">
    @method('delete')
      <div class="card-header">
        <h3 class="card-title">CRUD Laravel with Query Builder</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        @if (session('success'))
          <div class="alert alert-success">
           {{ session('success') }}
          </div>
        @endif
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No.</th>
            <th>Nama Proyek </th>
            <th>Deskripsi</th>
            <th>Tanggal Dimulai</th>
            <th>Tanggal Deadline</th>
            <th>Status</th>
            <th>Manager_id</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>

          <!-- {{$no = 1}} -->

          @forelse($proyek as $key => $item)
          <tr>
            <td>{{ $key++ }}</td>
            <td>{{ $item->nama_proyek }}</td>
            <td>{{ $item->deskripsi_proyek }}</td>
            <td>{{ $item->tanggal_mulai }}</td>
            <td>{{ $item->tanggal_deadline }}</td>
            <td>{{ $item->status }} </td>
            <td>{{ $item->manager_id }}</td>
            <td align="center" style="display: flex; ">
              <a href="/proyek/{{ $item->id}}" class="btn btn-primary btn-sm">Show</a>
              <a href="/proyek/{{ $item->id}}/edit" class="btn btn-info btn-sm">Edit</a>
              <form action="/proyek/{{ $item->id}}" method="post" accept-charset="utf-8">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
              </form>
            </td>
          </tr>
          <tr>
            @empty
            <td colspan="4" align="center">No Data Pertanyaan</td>
          </tr>

          @endforelse
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
@endsection

@push('scripts')

	<script>
	  $(function () {
	    $("#example1").DataTable();
	  });
	</script>

@endpush