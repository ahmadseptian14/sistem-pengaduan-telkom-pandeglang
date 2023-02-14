@extends('layouts.admin')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Pengaduan</h2>
                <p class="dashboard-subtitle">
                    Daftar Pengaduan Sedang di Proses
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
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($tanggapans as $tanggapan)
                                                @if ($tanggapan->tahap == 1)
                                                    <tr>
                                                        <td>{{ $tanggapan->pengaduan->nama }}</td>
                                                        <td>{{ $tanggapan->pengaduan->nomor_pelanggan }}</td>
                                                        <td>{{ $tanggapan->created_at->format(' d-m-Y - H:i:s') }}</td>
                                                        <td>{{ $tanggapan->status_pengaduan }}</td>
                                                        <td>
                                                            <a href="{{ route('pengaduan.show', $tanggapan->pengaduan->id) }}"
                                                                class="btn btn-danger btn-sm"><i class="fa fa-eye"
                                                                    style="margin-right: 5px"></i>Lihat Pengaduan</a>
                                                        </td>
                                                    </tr>
                                                @endif
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
