<!DOCTYPE html>
<html>
<head>
<title>Kegiatan 2</title>
</head>
<body>
<h2>M Rizky Sulistyawan</h2>
<h3>Petugas</h3>
<p><Cari Anggota :></p>
<form action="/petugas/cari" method="GET">
<input type="text" name="lihat" placeholder="Cari Anggota .." value="{{ old('cari') }}">
<input type="submit" value="CARI">
</form>
<table border="1">
<tr>
<th>Nomor</th>
<th>Nama Petugas</th>
<th>Email</th>
<th>Password</th>
</tr>
@foreach($petugas as $p)
<tr>
<td>{{ $p->petugas_id}}</td>
<td>{{ $p->petugas_nama}}</td>
<td>{{ $p->username}}</td>
<td>{{ $p->password}}</td>
</tr>
@endforeach
</table>
</body>
</html>