<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Rumah Sakit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Data Rumah Sakit</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('/tambah')}}">Tambah Data</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari Data" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
</body>
</html>


<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Rumah Sakit</title>
<style>
table {
border-collapse: collapse;
border-spacing: 0;
width: 100%;
border: 1px solid #ddd;
}
thead {
background-color: #f2f2f2;
}
th, td {
text-align: left;
padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
.tambah{
padding: 8px 16px ;
text-decoration: none;
}
</style>
</head>
<body>
<div style="overflow-x:auto;">
<table>
<thead>
    <tr> 
    <th>Nama Pasien</th>
    <th>Alamat</th>
    <th>Nama Dokter</th>
    <th>Jabatan Dokter</th>
    <th>Nomor Kamar</th>
    <th>Aksi</th>
    </tr>
</thead>
<tbody>
    @foreach ($data as $p3_genap)
    <tr>    
    <td>{{$p3_genap -> nama}}</td>
    <td>{{$p3_genap -> alamat}}</td>
    <td>{{$p3_genap -> dokter}}</td>
    <td>{{$p3_genap -> jabatan}}</td>
    <td>{{$p3_genap -> no}}</td>
    
    <td> <a href="">Edit </a>
    	|
         <a href=""> Hapus</a></td>

</tr>
@endforeach
</tbody>
</table>
</div>
</body>