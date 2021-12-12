@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Datang Barang') }}</div>

                <div class="card-body">
                    <form class="form-item" method="post" action="{{route('updatebarang.page')}}">
                    @csrf
                    <input type="hidden" value="{{$barang->id}}" name="id">
                    <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Barang') }}</label>
                            <div class="col-md-6">
                                <input id="namabarang" type="text" class="form-control @error('name') is-invalid @enderror" name="namabarang" value="{{ $barang->namabarang }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sku" class="col-md-4 col-form-label text-md-right">{{ __('SKU Barang') }}</label>
                            <div class="col-md-6">
                                <input id="sku" type="text" class="form-control @error('name') is-invalid @enderror" name="sku" value="{{$barang->sku }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga Barang') }}</label>
                            <div class="col-md-6">
                                <input id="namabarang" type="text" class="form-control @error('name') is-invalid @enderror" name="harga" value="{{ $barang->harga }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="kategori" class="col-md-4 col-form-label text-md-right">{{ __('Kategori Barang') }}</label>
                            <div class="col-md-6">
                                <select name="kategori" class="form-control">
                                    @foreach($kategori as $kat)
                                    <option value="{{$kat->id}}" >{{$kat->namakategori}}</option>
                                    @endforeach
                                </select>


                            </div>
                        </div>
                        <div class="row mb-3">
                            <input type="submit" name="tambah" value="Tambah Barang" class="btn btn-primary btn-sm form-control">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
