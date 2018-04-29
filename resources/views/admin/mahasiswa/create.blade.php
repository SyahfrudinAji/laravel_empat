@extends('admin.layouts.app')

@section('content')

<ul>
	@foreach ($errors->all() as $row)
	<li> {{$row}} </li>
	@endforeach
</ul>

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Create Mahasiswa</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

        <a href="{{route('mahasiswa.store')}}"><button type="submit" class="btn btn-info btn-ms">Back Index</button></a>
         <table id="example2" class="table table-bordered table-hover">
            <form action="{{route('mahasiswa.store')}}" method="post">
              <fieldset>
                <div class="form-group">
                  <label for="first_name">First Name:</label>
                  <input type="text" class="form-control" placeholder="First Name" name="first_name">
                </div>

                <div class="form-group">
                  <label for="last_name">Last Name:</label>
                  <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                </div>

                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" placeholder="Email" name="email">
                </div>

                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" placeholder="Password" name="password">
                </div>

                <div class="form-group">
                  <label for="tanggal_lahir">Tanggal:</label>
                  <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tanggal_lahir">
                </div>

                <div class="form-group">
                  <label for="alamat">Alamat:</label>
                  <input type="textarea" class="form-control" placeholder="Alamat" name="alamat">
                </div>

                <div class="form-group">
                  <label for="agama_id">Agama:</label>
                  <input type="text" class="form-control" placeholder="Agama" name="agama_id">
                </div>

                <div class="form-group">
                  <label for="jenis_kelamin">Jenis Kelamin:</label>
                  <input type="radio" name="jenis_kelamin" value="L"> Laki-laki
                  <input type="radio" name="jenis_kelamin" value="P"> Perempuan <br>
                </div>
                
                {{csrf_field()}}
                <input type="submit" value="Submit">
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