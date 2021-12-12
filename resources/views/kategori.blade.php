@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Kategori Barang') }}</div>

                <div class="card-body">
                    <form class="form-item" method="post" action="{{route('tambahkategori.page')}}">
                    @csrf
                    <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama Kategori') }}</label>
                            <div class="col-md-6">
                                <input id="namabarang" type="text" class="form-control @error('name') is-invalid @enderror" name="namakategori" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sku" class="col-md-4 col-form-label text-md-right">{{ __('Keterangan') }}</label>
                            <div class="col-md-6">
                                <input id="sku" type="text" class="form-control @error('name') is-invalid @enderror" name="keterangan" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <input type="submit" name="tambah" value="Tambah Kategori" class="btn btn-primary btn-sm form-control">
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
                <div class="card-header">{{ __('List Kategori') }}</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead  class="">
                            <tr align="center" >
                                <td scope="col"><b>Kategori</b></td>
                                <td scope="col"><b>Keterangan</b></td>
                                <td scope="col"><b>Total Barang</b></td>
                                <td scope="col"><b>Action</b></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kategori as $b)
                            <tr>
                                <td>{{$b->namakategori}}</td>
                                <td>{{$b->keterangan}}</td>
                                <td>{{$b->barang->count()}}</td>
                                <td align="center">
                                    <a href="{{route('editkategori.page',['id'=>$b->id])}}" class="btn btn-warning btn-sm">Edit </a>

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
