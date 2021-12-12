@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Kategori Barang') }}</div>

                <div class="card-body">
                    <form class="form-item" method="post" action="{{route('updatekategori.page')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$kategori->id}}">
                    <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Kategori') }}</label>
                            <div class="col-md-6">
                                <input id="namabarang" type="text" class="form-control @error('name') is-invalid @enderror" name="namakategori" value="{{ $kategori->namakategori }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sku" class="col-md-4 col-form-label text-md-right">{{ __('Keterangan') }}</label>
                            <div class="col-md-6">
                                <input id="sku" type="text" class="form-control @error('name') is-invalid @enderror" name="keterangan" value="{{ $kategori->keterangan }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <input type="submit" name="tambah" value="Tambah Kategori" class="btn btn-primary btn-sm form-control">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
