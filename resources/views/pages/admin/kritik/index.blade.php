@extends('layouts.admin')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Kritik & Saran</h2>
                <p class="dashboard-subtitle">
                    Daftar Kritik & Saran
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
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Nomor Telepon</th>
                                                <th>Kritik</th>
                                                <th>Saran</th>
                                                <th>Status</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($kritiks as $kritik)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $kritik->user->name }}</td>
                                                    <td>{{ $kritik->user->phone}}</td>
                                                    <td>{{ $kritik->kritik }}</td>
                                                    <td>{{ $kritik->saran }}</td>
                                                    <td>{{ $kritik->status}}</td>
                                                    <td>
                                                        @if ($kritik->status = 'Sudah ditanggapi')
                                                        <a href="{{ route('sms.create', $kritik->id) }}"
                                                            class="btn btn-danger btn-sm"><i class="fa fa-message"
                                                                style="margin-right: 5px"></i>Kirim Pesan</a>
                                                        @else
                                                        <a href="{{ route('tanggapan-kritik.show', $kritik->id) }}"
                                                            class="btn btn-danger btn-sm"><i class="fa fa-pencil"
                                                                style="margin-right: 5px"></i>Berikan Tanggapan</a>
                                                        @endif

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
