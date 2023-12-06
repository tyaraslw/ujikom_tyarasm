<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>updatepelanggan</title>
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
    <td><h2>Update Pelanggan here!</h2></td>
    </center>
    <form action={{url("updatePelanggan/$pelanggan->PelangganID")}} method="POST" enctype="multipart/form-data">
            <div class="container">
                @method("POST")
                @csrf 
                <div class="mb-3">
                         <label for="exampleFormControlText" class="form-label">Nama Pelanggan</label>
                         <textarea type="text" class="form-control" id="exampleFormControlText" name="nama" required>{{$pelanggan->NamaPelanggan}}</textarea>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlText" class="form-label">Alamat</label>
                         <textarea type="text" class="form-control" id="exampleFormControlText" name="alamat" required>{{$pelanggan->Alamat}}</textarea>
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlText" class="form-label">No telp</label>
                         <textarea type="text" class="form-control" id="exampleFormControlText" name="telp" required>{{$pelanggan->NomorTelepon}}</textarea>
                    </div>
                <input class="btn btn-outline-primary" type="submit"  value="update"> 
        </form> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</body>
</html>