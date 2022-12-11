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
                                                <th>Kritik</th>
                                                <th>Saran</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($kritiks as $kritik)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $kritik->user->name }}</td>
                                                    <td>{{ $kritik->kritik }}</td>
                                                    <td>{{ $kritik->saran }}</td>
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
