@extends('template/templateAdmin')

@section('content')
<br><br>
<h3 style="margin-top: 40px;margin-left: 40px;">Add Bank</h3>
    <section class="page-section" id="masterService">
        <section class="page-section" id="tambahCustomer">
        <div class="d-flex justify-content-around px-5 py-4">
            <div class="container shadow p-5 m-0 bg-body rounded" style="width:450px;">
                <form action="/addBank" method="post">
                    @csrf
                    <p>Nomor Rekening </p> <input class="form-control" name="nomor_rekening" id="nomor_rekening" type="text"/><br>
                    <p>Nama Pemilik Rekening </p> <input class="form-control" name="nama_bank" id="nama_bank" type="text"/><br>
                    <input type="submit" name="btnCust" class="btn btn-primary" value="Tambah Bank">
                </form>
            </div>
        </div>
    </section>
@endsection