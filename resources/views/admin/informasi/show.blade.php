@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data informasi
                    </div>
                    <div class="mb-3">
                            <label class="form-label">Nama Tanaman</label>
                            <input type="text" class="form-control" name="nama_tanaman" value="{{ $informasi->nama_tanaman }}" readonly>
                        </div>
                         <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <input type="text" class="form-control" name="lowongan" value="{{ $informasi->keterangan }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            @if (isset($informasi) && $informasi->gambar)
                                <p>
                                    <img src="{{ asset('images/informasi/' . $informasi->gambar) }}" class="img-rounded img-responsive"
                                        style="width: 75px; height:75px;" alt="">
                                </p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('informasi.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection