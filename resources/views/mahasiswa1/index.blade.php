
	<br>
	<a href="{{route('mahasiswa.create')}}">Create Mahasiswa</a>
	<br><br>

	<?php $no=1; ?>
	@foreach($mahasiswa as $row)

	</b>Mahasiswa No {{$no++}}</b>
<br>
	- First Name = {{$row->first_name}}
<br>
	- Last Name = {{$row->last_name}}
<br>
	- Jenis Kelamin = {{$row->jenis_kelamin}}
<br>
	- Alamat = {{$row->alamat}}
<br>
	-Tanggal Lahir = {{$row->tanggal_lahir}}
<br>
	- Agama = {{$row->agama_id}}
<br>
	-Action = 
		<a href=" {{url('mahasiswa/show',$row->id)}}">Show</a>
		<a href=" {{url('mahasiswa/edit',$row->id)}}">Edit</a>
		<a href=" {{url('mahasiswa/hapus',$row->id)}}">Delete</a><br>
<br>

	@endforeach