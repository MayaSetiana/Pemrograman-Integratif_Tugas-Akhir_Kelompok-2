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
                            Daftar Ongkir {{$barang->nama}}
                        </h1>
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-4">
                                <a class="btn btn-primary text-white text-center" href="{{url('/')}}">
                                    <span class="align-middle">Backto Home</span>
                                </a>
                            </div>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        {{-- <th scope="col">Nama Barang</th> --}}
                                        <th scope="col">Jasa</th>
                                        <th scope="col">Layanan</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Estimasi Barang Sampai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $count = 1;
                                    @endphp
                                    @forelse ($data as $ongkir => $n)
                                    @foreach ($n as $name =>$b)
                                    <tr>
                                        <th scope="row">{{$count}}</th>
                                        <td>{{strtoupper($ongkir)}}</td>
                                        <td>{{$b->description}}</td>
                                        <td>{{$b->biaya}}</td>
                                        <td>{{$b->etd}}</td>
                                    </tr>
                                    @php
                                        $count++;
                                    @endphp
                                    @endforeach
                                    @empty
                                    <td colspan="6" class="text-center">Belum Ada Data Untuk JNE</td>
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