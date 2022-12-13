@extends('layouts.master')
{{-- @section('header')
    @include('layouts.navbar')
@endsection --}}

@section('content')
<main>
    <section class="section-details-header mb-5"></section>
    <section class="section-details-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class=" mt-5 card card-details">
                        <h1 class="mt-3 mb-5 text-center">
                            Daftar Barang
                        </h1>
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-4">
                                <a class="btn btn-success text-white text-center" href="{{url('/add-form')}}">
                                    <span class="align-middle">Add Data</span>
                                </a>
                            </div>

                            @if ($message = Session::get('success'))
                            <div class="col-12 p-0 m-0">
                                <div class="alert alert-success alert-block m-0">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                            @endif

                            @if ($message = Session::get('error'))
                            <div class="col-12 p-0 m-0">
                                <div class="alert alert-danger alert-block m-0">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            </div>
                            @endif

                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Berat (KG)</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Kode</th>
                                        <th scope="col">Cek Ongkir</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($barang as $b)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$b->nama}}</td>
                                        <td>{{$b->berat}}</td>
                                        <td>{{$b->qty}}</td>
                                        <td>{{$b->kode}}</td>
                                        <td class="mx-auto"> <a class="btn btn-primary text-white"
                                                href="{{url('/cek-ongkir/'.$b->id)}}">Cek Ongkir</a></td>
                                        <td> <a class="btn btn-success text-white"
                                                href="{{url('/edit/'.$b->id)}}">Edit</a></td>
                                        <td> <a class="btn btn-danger text-white"
                                                href="{{url('/delete/'.$b->id)}}">Delete</a></td>
                                    </tr>
                                    @empty
                                    <td colspan="7" class="text-center">Belum Ada Data</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
@endsection