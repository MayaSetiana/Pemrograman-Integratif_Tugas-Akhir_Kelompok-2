@extends('layouts.master')

@section('content')
<main>
    <section class="section-details-header mb-5"></section>
    <section class="section-details-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class=" mt-5 card card-details">
                        <h1 class="mt-3 mb-4">
                            Add Item
                        </h1>
                        <div class="row">
                            <div class="col-lg-4 col-12 mb-4">
                                <a class="btn btn-primary text-white text-center" href="{{url('/')}}">
                                    <span class="align-middle">Backto Home</span>
                                </a>
                            </div>
                            <div class="col-12">
                                <form class="w-100 p-0" action="{{url('/add')}}" method="post">
                                    @csrf
                                    <label class="form-label" for="nama">Nama Barang<span class="text-danger">*</span>
                                    </label>
                                    <input id="nama" class="w-100 py-2 form-control mb-2" type="text" name="nama"
                                        value="" required>
                                    <label class="form-label" for="berat">Berat Barang<span class="text-danger">*</span>
                                    </label>
                                    <input id="berat" pattern="[0-9]+([,\.][0-9]+)?" class="w-100 py-2 form-control mb-2" type="number" name="berat"
                                        value="" required>
                                    <label class="form-label" for="qty">Qty<span class="text-danger">*</span> </label>
                                    <input id="qty" class="w-100 py-2 form-control mb-2" type="number" name="qty"
                                        value="" required>
                                    <label class="form-label" for="kode-barang">Kode Barang<span
                                            class="text-danger">*</span> </label>
                                    <input id="kode-barang" class="w-100 py-2 form-control mb-2" type="number"
                                        name="kode" value="" required>
                                    <div class="d-flex mt-4">
                                        <input
                                            class="mx-auto w-25 btn btn-primary align-self-center bg-primer rounded-3"
                                            type="submit" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
@endsection