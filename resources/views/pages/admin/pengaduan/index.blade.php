@extends('layouts.admin')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Pengaduan</h2>
                <p class="dashboard-subtitle">
                    Daftar Pengaduan
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div>

                                    <table
                                        class="table table-hover scroll-horizontal-vertical w-100 table-bordered table-striped"
                                        id="table1">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Nomor Pelanggan</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                                <th>Nama Teknisi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($pengaduans as $pengaduan)
                                                <tr>
                                                    <td>{{ $pengaduan->nama }}</td>
                                                    <td>{{ $pengaduan->user->nomor_pelanggan }}</td>
                                                    <td>{{ $pengaduan->created_at->format(' d-m-Y - H:i:s') }}</td>
                                                    @if (empty($pengaduan->tanggapan->status_pengaduan))
                                                        <td>Belum di Proses</td>
                                                    @else
                                                        <td>{{ $pengaduan->tanggapan->status_pengaduan }}</td>
                                                    @endif
                                                    @if (empty($pengaduan->tanggapan->user->name))
                                                        <td>Belum di tanggapi</td>
                                                    @else
                                                    <td>{{$pengaduan->tanggapan->user->name}}</td>
                                                    @endif
                                                    <td>
                                                        <a href="{{ route('pengaduan.show', $pengaduan->id) }}"
                                                            class="btn btn-danger btn-sm"><i class="fa fa-eye"
                                                            style="margin-right: 5px"></i>Lihat Pengaduan</a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="7" class="text-center">Tidak Ada Pengaduan</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-scripts')
    <script>
        $(document).ready(function() {
            $('#table1').DataTable({
                "order": [
                    [3, "desc"]
                ]
            });
        });
    </script>
@endpush
