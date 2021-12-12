@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Isi Datang Barang') }}</div>

                <div class="card-body">
                    <form class="form-item" method="post" action="{{route('tambahbarang.page')}}">
                    @csrf
                    <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Barang') }}</label>
                            <div class="col-md-6">
                                <input id="namabarang" type="text" class="form-control @error('name') is-invalid @enderror" name="namabarang" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sku" class="col-md-4 col-form-label text-md-right">{{ __('SKU Barang') }}</label>
                            <div class="col-md-6">
                                <input id="sku" type="text" class="form-control @error('name') is-invalid @enderror" name="sku" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga Barang') }}</label>
                            <div class="col-md-6">
                                <input id="namabarang" type="text" class="form-control @error('name') is-invalid @enderror" name="harga" value="{{ old('name') }}" required autocomplete="name" autofocus>
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
        <div class="col-md-12">
            &nbsp;
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('List Barang') }}</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead  class="">
                            <tr align="center" >
                                <td scope="col"><b>Nama Barang</b></td>
                                <td scope="col"><b>SKU</b></td>
                                <td scope="col"><b>Harga</b></td>
                                <td scope="col"><b>Kategori</b></td>
                                <td scope="col"><b>Action</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barang as $b)
                            <tr>
                                <td>{{$b->namabarang}}</td>
                                <td>{{$b->sku}}</td>
                                <td>{{$b->harga}}</td>
                                <td>
                                {{$b->getKategori->namakategori}}
                                </td>
                                <td align="center">
                                    <a href="{{route('editbarang.page',['id'=>$b->id])}}" class="btn btn-warning btn-sm">Edit </a>
                                    <a href="{{route('hapusbarang.page',['id'=>$b->id])}}" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
