<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/home.css">
  <title>produk</title>
</head>
<body>
  @include('layouts.nav') 
    <br>
    <br>
    <br>
      <h3 style="text-align:center;">{{$TextIsi}}</h3>
      <br>
        <div class="container">
          <table class="table"> 
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">No telp</th>
              <th scope="col">opsi</th>
            </tr>

              @foreach ($pelanggan as $pelanggan)
            <tr>
              <td>{{$pelanggan->NamaPelanggan}}</td>  
              <td>{{$pelanggan->Alamat}} </td>
              <td>{{$pelanggan->NomorTelepon}} </td>
            <td>
            <a href="hapus-pelanggan/{{$pelanggan->PelangganID}}">Delete</a>|
            <a href="detail-pelanggan/{{$pelanggan->PelangganID}}">Detail</a>|
            <a href="update/{{$pelanggan->PelangganID}}">Update</a>        
            </form>
          </td>
      </tbody>
          </tr>
         @endforeach
          </table>
       </div> 
</body>
</html>