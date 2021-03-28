<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <style>
        #emp{
            border-collapse: collapse;
            width: 100%
        }
        #emp td, #emp th{
            border: 1px solid #ddd;
            padding: 8px;
        }
        #emp tr:nth-child(even){
            background-color: aliceblue;
        }
        #emp th{
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: #fff;
        }
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <table id="emp">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Agama</th>
            <th scope="col">Status</th>
            <th scope="col">Pekerjaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->nama}}</td>
            <td>{{$employee->tempat_lahir}}</td>
            <td>{{$employee->tgl_lahir}}</td>
            <td>{{$employee->kelamin}}</td>
            <td>{{$employee->alamat}}</td>
            <td>{{$employee->agama}}</td>
            <td>{{$employee->status}}</td>
            <td>{{$employee->pekerjaan}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
  </body>
</html>