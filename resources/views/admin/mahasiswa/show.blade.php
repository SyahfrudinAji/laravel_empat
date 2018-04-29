@extends('admin.layouts.app')

@section('content')

<ul>
  @foreach ($errors->all() as $row)
  <li> {{$row}} </li>
  @endforeach
</ul>

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Show Mahasiswa</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>

      <div class="box-body">
        <a href="{{route('mahasiswa.index')}}"><button type="submit" class="btn btn-info btn-ms">Back Index</button></a>
         <table id="example2" class="table table-bordered table-hover">

            <form action="{{route('mahasiswa.show',$mahasiswa->id)}}" method="post">
              {{ method_field('PATCH') }}
              <fieldset>
                <div class="form-group">
                  <label for="first_name">First Name:</label>
                  <input type="text" class="form-control" value="{{$mahasiswa->first_name}}" name="first_name" disabled>
                </div>
                <div class="form-group">
                  <label for="last_name">Last Name:</label>
                  <input type="text" class="form-control" value="{{$mahasiswa->last_name}}" name="last_name" disabled>
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" value="{{$mahasiswa->email}}" name="email" disabled>
                </div>
                <div class="form-group">
                  <label for="tanggal_lahir">Tanggal:</label>
                  <input type="date" class="form-control" value="{{$mahasiswa->tanggal_lahir}}" name="tanggal_lahir" disabled>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat:</label>
                  <input type="text" class="form-control" value="{{$mahasiswa->alamat}}" name="alamat" disabled>
                </div>
                <div class="form-group">
                  <label for="agama">Agama:</label>
                  <input type="text" class="form-control" value="{{$mahasiswa->agama_id}}" name="agama_id" disabled>
                </div>

                <div class="form-group">
                  <label for="jenis_kelamin">Jenis Kelamin:</label>
                  <input type="radio" name="jenis_kelamin" value="L"{{$mahasiswa->jenis_kelamin == 'L' ? 'checked' : ''}}> Laki-laki ||
                  <input type="radio" name="jenis_kelamin" value="P"{{$mahasiswa->jenis_kelamin == 'P' ? 'checked' : ''}}> Perempuan <br>
                </div>

                {{csrf_field()}}
              </fieldset>
            </form>
          </table>
      </div>
        
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>

@endsection