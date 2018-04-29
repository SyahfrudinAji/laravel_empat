<ul>
	@foreach ($errors->all() as $row)
	<li> {{$row}} </li>
	@endforeach
</ul>
<form action=" {{url('mahasiswa/update')}}" method="post">
<input type="hidden" name="id" value="{{$mahasiswa->id}}">
	First Name : <input type="text" name="first_name" value="{{$mahasiswa->first_name}}"><br>
	<br>
	Last Name : <input type="text" name="last_name" value="{{$mahasiswa->last_name}}"><br>
	<br>
	Email : <input type="email" name="email" value="{{$mahasiswa->email}}"><br>
	<br>
	Password : <input type="password" name="password" value="{{$mahasiswa->password}}"><br>
	<br>
	Jenis kelamin : <input type="radio" name="jenis_kelamin" value="L" {{($mahasiswa->jenis_kelamin == 'L') ? 'checked':''}}>Laki Laki |
	Jenis kelamin : <input type="radio" name="jenis_kelamin" value="P" {{($mahasiswa->jenis_kelamin == 'P') ? 'checked':''}}>Perempuan <br>
	<br>
	Alamat : <input type="textarea" name="alamat" value="{{$mahasiswa->alamat}}"><br>
	<br>
	Tanggal Lahir : <input type="date" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}"><br>
	<br>
	Agama : <input type="text" name="agama_id" value="{{$mahasiswa->agama_id}}"><br>
	<br>
	 {{csrf_field()}}
	 <button type="submit">Update</button>

</form>