@extends('admin.layouts.app')

@section('content')
<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">MAHASISWA</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <a class='btn btn-info' href="{{route('mahasiswa.create')}}"><i class='fa fa-pencil'></i>Create</a>  
          <table id="example2" class="table table-bordered table-hover">
                <thead>
                   <tr>
                     <td class="info"><b>No</b></td>
                     <td class="info"><b>First Name</b></td>
                     <td class="info"><b>Last Name</b></td>
                     <td class="info"><b>Email</b></td>
                     <td class="info"><b>Tanggal Lahir</b></td>
                     <td class="info"><b>Alamat</b></td>
                     <td class="info"><b>Agama</b></td>
                     <td class="info"><b>Jenis Kelamin</b></td>
                     <td class="info"><b>Aksi</b></td>  
                   </tr>
                </thead>
              <?php
                $no = 1;
              ?>
            @foreach($mahasiswa as $row)
                <tbody>
                  <tr>
                      <td>{{$no++}}</td>
                      <td>{{$row->first_name}}</td>
                      <td>{{$row->last_name}}</td>
                      <td>{{$row->email}}</td>
                      <td>{{$row->tanggal_lahir}}</td>
                      <td>{{$row->alamat}}</td>
                      <td>{{$row->agama_id}}</td>
                      <td>{{$row->jenis_kelamin}}</td>
                      <td>
                      <a class='btn btn btn-success btn-xs' href="{{route('mahasiswa.edit',$row->id)}}"><i class='fa fa-pencil'></i> Edit</a>
                      <a class='btn btn-warning btn-xs' href="{{route('mahasiswa.show',$row->id)}}"><i class='fa fa-pencil'></i> Show</a>
                <form action= "{{route('mahasiswa.destroy',$row->id)}}" method="POST">{{method_field('DELETE')}}
                  {{csrf_field()}}
                  <button type="submit" class="btn btn-danger btn-xs"><i class='fa fa-pencil'></i>Delete</button>
                </form>

                      </td>
                  </tr>  
                </tbody>
            @endforeach
          </table>
        </div >
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>

@endsection