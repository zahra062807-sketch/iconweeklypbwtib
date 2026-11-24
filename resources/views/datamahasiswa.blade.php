@extends('layouts.backend')


@dd($datas)

@section('content')
    <div class="container text-center mt-4">
        <h3>Data Mahasiswa</h3>
    </div>
<div class>
<table class="table table-striped mb-0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Email</th>
            <th>No.Hp</th>
            <th>Foto</th>
        </tr>
    </thead>

    <tbody>
        @forech($collection as $item)
        <tr>
            <th>1</th>
            <td>Andi</td>
            <td>230001</td>
            <td>Informatika</td>
            <td>andi@gmail.com</td>
            <td>08974238876</td>
            <td>Foto 1</td>
        </tr>

        <tr class="theme-primary">
            <th>2</th>
            <td>Budi</td>
            <td>230002</td>
            <td>Teknik Mesin</td>
            <td>budi@gmail.com</td>
            <td>08564436897</td>
            <td>Foto 2</td>
        </tr>

        <tr class="theme-accent">
            <th>3</th>
            <td>Citra</td>
            <td>230003</td>
            <td>Teknik Elektro</td>
            <td>citra@gmail.com</td>
             <td>08564436897</td>
            <td>Foto 3</td>
        </tr>

        <tr class="theme-success">
            <th>4</th>
            <td>Dina</td>
            <td>230004</td>
            <td>Teknik Mesin</td>
            <td>dina@gmail.com</td>
             <td>08564436897</td>
            <td>Foto 4</td>
        </tr>

        <tr class="theme-danger">
            <th>5</th>
            <td>Eko</td>
            <td>230005</td>
            <td>Teknologi Informasi</td>
            <td>eko@gmail.com</td>
             <td>08564436897</td>
            <td>Foto 5</td>
        </tr>

        <tr class="theme-warning">
            <th>6</th>
            <td>Fani</td>
            <td>230006</td>
            <td>Arsitektur</td>
            <td>fani@gmail.com</td>
             <td>08564436897</td>
            <td>Foto 6</td>
        </tr>

        <tr class="theme-info">
            <th>7</th>
            <td>Gina</td>
            <td>230007</td>
            <td>Teknik Elektro</td>
            <td>gina@gmail.com</td>
             <td>08564436897</td>
            <td>Foto 7</td>
        </tr>

        <tr class="theme-inverse">
            <th>8</th>
            <td>Rendy</td>
            <td>230008</td>
            <td>Teknik Mesin</td>
            <td>hana@gmail.com</td>
             <td>08564436897</td>
            <td>Foto 8</td>
        </tr>

        <tr class="theme-secondary">
            <th>9</th>
            <td>Indra</td>
            <td>230009</td>
            <td>Teknologi Informasi</td>
            <td>indra@gmail.com</td>
             <td>08564436897</td>
            <td>Foto 9</td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
@endsection