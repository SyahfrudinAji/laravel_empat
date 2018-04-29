@extends('admin.layouts.app')
@section('content')

<ul>
	@foreach ($errors->all() as $row)
	<li> {{$row}} </li>
	@endforeach
</ul>
<form action=" {{route('admin/mahasiswa/create')}}" method="post">
	First Name : <input type="text" name="first_name"><br>
	<br>
	Last Name : <input type="text" name="last_name"><br>
	<br>
	Email : <input type="email" name="email"><br>
	<br>
	Password : <input type="password" name="password"><br>
	<br>
	Jenis Kelamin : <input type="radio" name="jenis_kelamin" value="L"> Laki-laki
	| <input type="radio" name="jenis_kelamin" value="P"> Perempuan <br>
	{{csrf_field()}}
	<br>
	Alamat : <input type="textarea" name="alamat"><br>
	<br>
	Tanggal Lahir : <input type="date" name="tanggal_lahir"><br>
	<br>
	Agama : <input type="text" name="agama_id"><br>
	<br>
	{{csrf_field()}}
	<button  type="submit">Submit</button>
</form>
@endsection
