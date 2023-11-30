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
    <br>
      <h3 style="text-align:center;">{{$TextIsi}}</h3>
      <br>
        <div class="container">
          <table class="table"> 
            <tr>
              <th scope="col">ProdukID</th>
              <th scope="col">NamaProduk</th>
              <th scope="col">Harga</th>
              <th scope="col">Stok</th>
              <th scope="col">opsi</th>
            </tr>

              @foreach ($produk as $produk)
            <tr>
              <td>{{$produk->ProdukID}}</td>  
              <td>{{$produk->NamaProduk}}</td>  
              <td>{{$produk->Harga}} </td>
              <td>{{$produk->Stok}} </td>
            <td>
            <a href="hapusProduk/{{$produk->ProdukID}}">Delete</a>|
            <a href="detailProduk/{{$produk->ProdukID}}">Detail</a>|
            <a href="update/{{$produk->ProdukID}}">Update</a>        
            </form>
          </td>
      </tbody>
          </tr>
         @endforeach
          </table>
       </div> 
</body>
</html>