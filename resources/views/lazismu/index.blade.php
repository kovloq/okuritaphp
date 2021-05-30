<!doctype html>
<html lang="en" class="h-100">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Perdana Adhitama">
<title>Lazismu Generate PDF</title>
<link rel="canonical" href="https://okurita.com/lazismu">
<link  rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}"/>
</head>
<body>
<header>
  
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="{{ url("lazismu") }}" class="navbar-brand d-flex align-items-center">
        <strong>Kuitansi Lazismu</strong>
      </a>
      
    </div>
  </div>
</header>

<main>
<div class="container py-5">
	<form method="POST" action="{{ url("pdf") }}">
		@csrf {{ method_field("POST") }}
		<div class="row">
			<div class="col-md-6">
				<div class="mb-3 row">
				    <label for="nomor" class="col-sm-3 col-form-label">Nomor</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" name="nomor" id="nomor" placeholder="00001">
				    </div>
				</div>
				<div class="mb-3 row">
				    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" name="nama" id="nama" placeholder="Fulan">
				    </div>
				</div>
				<div class="mb-3 row">
				    <label for="nama" class="col-sm-3 col-form-label">Alamat</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Fukuoka">
				    </div>
				</div>
				<div class="mb-3 row">
				    <label for="hp" class="col-sm-3 col-form-label">HP</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" name="hp" id="hp" placeholder="0811925864">
				    </div>
				</div>
				<div class="mb-3 row">
				    <label for="jenis_zakat" class="col-sm-3 col-form-label">Jenis Zakat</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" name="jenis_zakat" id="jenis_zakat" placeholder="Maal">
				    </div>
				</div>
				<div class="mb-3 row">
				    <label for="jenis_lainnya" class="col-sm-3 col-form-label">Jenis Lainnya</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" name="jenis_lainnya" id="jenis_lainnya" placeholder="Dana kemanusiaan Palestina">
				    </div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="mb-3 row">
				    <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="28-05-01">
				    </div>
				</div>
				<div class="mb-3 row">
				    <label for="jumlah_zakat" class="col-sm-3 col-form-label">Jumlah Zakat</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" name="jumlah_zakat" id="jumlah_zakat" placeholder="1000">
				    </div>
				</div>
				<div class="mb-3 row">
				    <label for="jumlah_infaq" class="col-sm-3 col-form-label">Jumlah Infaq</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" name="jumlah_infaq" id="jumlah_infaq" placeholder="1000">
				    </div>
				</div>
				<div class="mb-3 row">
				    <label for="jumlah_lainnya" class="col-sm-3 col-form-label">Jumlah Lainnya</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" name="jumlah_lainnya" id="jumlah_lainnya" placeholder="1000">
				    </div>
				</div>
				<div class="mb-3 row">
				    <label class="col-sm-3 col-form-label">Melalui</label>
				    <div class="col-sm-9 form-check">
				    	<div class="form-check">
						  
						  <label class="form-check-label" for="Kas">Kas
						  	<input class="form-check-input" name="melalui[]" type="checkbox" value="Kas" id="Kas">
						  </label>
						 </div>
						 <div class="form-check">
						  <label class="form-check-label" for="Bank">Bank
						  	<input class="form-check-input" name="melalui[]" type="checkbox" value="Bank" id="Bank">
						  </label>
						  </div>
						  <div class="form-check">
						  <label class="form-check-label" for="Wesel">Wesel
						  	<input class="form-check-input" name="melalui[]" type="checkbox" value="Wesel" id="Wesel">
						  </label>
					  	</div>
				    </div>
				</div>
			</div>
		</div>
		<div align="center">
			<input type="submit" value="Generate" class="btn btn-success"/>
		</div>
	</form>
</div>
</main>
<footer class="text-muted py-5">
</footer>
</body>
</html>