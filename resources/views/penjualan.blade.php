<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/home.css">
  <title>penjualan</title>
</head>
<body>
<div class="d-grid gap-2 col-6 mx-auto">
</div>
  @include('layouts.nav') 
    <br><br><br><br>
      <h3 style="text-align:center;">{{$TextIsi}}</h3>
      <br><br>
        <div class="container">
          <table class="table"> 
            <tr>
              <th scope="col" class="table-danger">Tanggal</th>
              <th scope="col" class="table-danger">Nama Pelanggan</th>
              <th scope="col" class="table-danger">Total</th>
              <th scope="col" class="table-danger">opsi</th>
            </tr>

              @foreach ($penjualan as $penjualan)
            <tr>
              <td>{{$penjualan->TanggalPenjualan}} </td>
              <td>{{$penjualan->NamaPelanggan}} </td>
              <td>{{$penjualan->TotalHarga}} </td>
            <td>
            <!-- <a type="button" class="btn btn-outline-danger" href="hapusPenjualan/{{$penjualan->PenjualanID}}">Delete</a> -->
            <a type="button" class="btn btn-outline-primary" href="detailPenjualan/{{$penjualan->PenjualanID}}">Detail</a>     
            </form>
          </td>
      </tbody>
          </tr>
         @endforeach
          </table>
       </div> 
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>