<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Laporan Pengaduan Masyarakat</title>

  <style>
    .thead{
    background-color: #3B82F6;
    color: #ffffff;

    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <div class="title text-center mb-5">
      <h2>Laporan Layanan Pengaduan Customer pada Telkom Pandeglang</h2>
    </div>
    <table class="table table-bordered">
      <thead class="thead">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nomor Pelanggan</th>
          <th scope="col">Nama</th>
          <th scope="col">Pengaduan</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($pengaduans as $pengaduan)
        <tr>
          <td>{{$loop->iteration}} </td>
          <td>{{ $pengaduan->user->nomor_pelanggan }}</td>
          <td>{{ $pengaduan->user->name }}</td>
          <td>{{ $pengaduan->keterangan }}</td>
          <td>{{ $pengaduan->created_at->format('l, d F Y') }}</td>
          @if ($pengaduan->status == null)
          <td>{{ $pengaduan->tanggapan->status_pengaduan }}</td>
          @else
          <td>{{ $pengaduan->status }}</td>
          @endif

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>
