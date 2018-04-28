@extends('admin.layouts.app') 
          
           
@section('content')
       <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
               <h4><a href="{{route('mahasiswa.create')}}"> Create Mahasiswa </a></h4>
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Jenis Kelamin</th>
                  <th>Tanggal Lahir</th>
                  <th>Agama</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach($mahasiswa as $row)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$row->nama}}</td>
                  <td>{{$row->email}}</td>
                  <td>{{$row->jenis}}</td>
                  <td>{{$row->tanggal_lahir}}</td>
                  <td>{{$row->agama_id}}</td>
                  <td>
                      <a href="{{route('mahasiswa.edit', $row->id)}}"> Edit </a>
                      <a href="{{route('mahasiswa.show', $row->id)}}"> Detail </a>
                      <form action="{{route('mahasiswa.destroy', $row->id)}}" method="post">
                          @method('delete')
                          @csrf
                         <button type="submit">Delete</button>
                      </form>
                </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
@endsection