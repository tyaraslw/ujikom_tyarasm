<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updateproduk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<style>
    body{
        background-color: #fff1ec; 
    };

</style>
<body>
@include('layouts.nav') 
    <br><br><br>
    <br>
    <center>
    <td><h2>Update Produk here!</h2></td>
    </center>

    <form action={{url("updateProduk/$produk->ProdukID")}} method="POST" enctype="multipart/form-data">
            <div class="container">
            @method("POST")
                    @csrf 
                    <div class="mb-3">
                         <label for="exampleFormControlText" class="form-label">Nama Produk</label>
                         <textarea class="form-control" id="exampleFormControlText" name="isinama" required>{{$produk->NamaProduk}}</textarea>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlText" class="form-label">Harga</label>
                         <textarea class="form-control" id="exampleFormControlText" name="isiharga" required>{{$produk->Harga}}</textarea>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlText" class="form-label">Stok</label>
                         <textarea class="form-control" id="exampleFormControlText" name="isistok" required>{{$produk->Stok}}</textarea>
                    </div>
                    <div>
                        <input class="btn btn-primary" type="submit" value="simpan"> 
                    </div>
                </div>
            </div>
        </form> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</body>
</html>