@extends('layouts.admin')

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Detail Pengaduan</h2>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        @forelse ($pengaduans->details as $pengaduan)
                            <div class="card mb-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4>Nama : {{ $pengaduan->nama }}</h4>
                                            <h4>Lokasi : {{ $pengaduan->lokasi }}</h4>
                                            <h4>No.Telepon : {{ $pengaduan->user->phone }}</h4>
                                            <h4>Tanggal : {{ $pengaduan->created_at->format('d-m-Y - H:i:s') }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div>
                                    <h3 class="text-center">Keterangan</h3>
                                    <p>{{ $pengaduan->keterangan }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div>
                                    <h3 class="text-center">Status Pengaduan</h3>
                                    <div class="list-group">
                                        @forelse ($tanggapans as $tanggapan)
                                            <div class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">{{ $tanggapan->status_pengaduan }}</h5>
                                                    <small>{{ $tanggapan->created_at }}</small>
                                                </div>
                                                <p class="mb-1">{{ $tanggapan->tanggapan }}</p>
                                            </div>
                                        @empty
                                            <p>Belum di proses dan belum ada tanggapan</p>
                                        @endforelse
                                    </div>
                                </div>
                            @empty
                                <h2>Tidak Ada Pengaduan</h2>
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>


        </div>
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="text-center">Penilaian</h3>
                    @forelse ($penilaians as $penilaian)
                        <div>
                            <p>Komentar : {{ $penilaian->keterangan }}</p>
                            <p>Rating : {{ $penilaian->rating }}</p>
                        </div>
                    @empty
                    @endforelse

                </div>
            </div>
        </div>
        @if (Auth::user()->roles == 'TEKNISI')
            <a href="" data-toggle="modal" data-target="#tanggapan-{{ $pengaduan->id }}"
                class="btn btn-primary btn-lg active mb-5">Berikan Tanggapan</a>
        @endif
    </div>

    {{-- @foreach ($pengaduans as $pengaduan) --}}
        <div class="modal fade" id="tanggapan-{{ $pengaduan->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Berikan Tanggapan kepada {{ $pengaduan->nama }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('tanggapan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->id }} ">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tanggapan</label>
                                        <input type="text" name="tanggapan" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status_pengaduan" id="status_pengaduan"
                                            class="form-control select2" multiple="multiple">
                                            {{-- <option value="Belum di Proses">Belum di Proses</option> --}}
                                            <option value="Sedang di Proses">Sedang di Proses</option>
                                            <option value="Selesai">Selesai</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                          
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Tanggapi</button>
                    </div>
                </form>

                </div>
            </div>
        </div>
    {{-- @endforeach --}}


@endsection
