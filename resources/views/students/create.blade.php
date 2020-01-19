@extends('layout.main')


@section('title', 'Form Tambah Data')

@section('container')

	<div class="container">
		<div class="row">
			<div class="col-8">
				 <h1 class="mt-2 center">Form Tambah Data</h1>



<form method="post" action="/students">
	@csrf
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">


    @error('nama')
    <div class="invalid-feedback">
      {{ $message }} 
    </div>
    @enderror


  </div>

  <div class="form-group">
    <label for="nrp">Nrp</label>
    <input type="text" class="form-control  @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan NRP" name="nrp" value="{{ old('nrp') }}">
  
      @error('nrp')
      <div class="invalid-feedback">
        {{ $message }} 
      </div>
      @enderror


  </div>

  <div class="form-group">
    <label for="email">email</label>
    <input type="text" class="form-control" id="email" placeholder="Masukkan email" name="email" value="{{ old('email') }}">
  </div>

  <div class="form-group">
    <label for="jurusan">jurusan</label>
    <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan" name="jurusan" value="{{ old('jurusan') }}">
  </div>

  <button type="subimt" class="btn btn-primary">Tambah Data</button>
 
</form>




			</div>
		</div>
	</div>
	
@endsection
