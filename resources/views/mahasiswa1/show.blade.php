<form action=" {{url('mahasiswa/show')}}" method="post">
<input type="hidden" name="id" value="{{$mahasiswa->id}}">
	First Name : <input type="text" name="first_name" value="{{$mahasiswa->first_name}}" disabled><br>
	<br>
	Last Name : <input type="text" name="last_name" value="{{$mahasiswa->last_name}}" disabled><br>
	<br>
	Email : <input type="email" name="email" value="{{$mahasiswa->email}}" disabled><br>
	<br>
	Password : <input type="password" name="password" value="{{$mahasiswa->password}}" disabled><br>
	<br>
	Jenis kelamin : <input type="radio" name="jenis_kelamin" value="L" {{($mahasiswa->jenis_kelamin == 'L') ? 'checked':''}}>Laki Laki |
	Jenis kelamin : <input type="radio" name="jenis_kelamin" value="P" {{($mahasiswa->jenis_kelamin == 'P') ? 'checked':''}}>Perempuan <br>
	<br>
	Alamat : <input type="text" name="alamat" value="{{$mahasiswa->alamat}}" disabled></input><br>
	<br>
	Tanggal Lahir : <input type="date" name="tanggal_lahir" value="{{$mahasiswa->tanggal_lahir}}" disabled><br>
	<br>
	Agama : <input type="text" name="agama_id" value="{{$mahasiswa->agama_id}}" disabled><br>
	<br>
	 {{csrf_field()}}
</form>