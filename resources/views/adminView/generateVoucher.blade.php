@extends('template/templateAdmin')

@section('content')
<br><br>
<h3 style="margin-top: 40px;margin-left: 40px;">Generate Voucher</h3>
            <section class="page-section" id="masterService">
                <section class="page-section" id="tambahCustomer">

                <div class="d-flex justify-content-around px-5 py-4">
                    <div class="container shadow p-5 m-0 bg-body rounded" style="width:450px;">

                        <form action="/generateVoucher" method="post">
                            @csrf
                            <p>Nama Voucher </p> <input class="form-control" name="nama_voucher" id="nama_voucher" type="text"/><br>
                            <p>Nilai Voucher </p> <input class="form-control" name="nilai_voucher" id="nilai_voucher" type="number"/><br>
                            <p>Masa Berlaku </p> <input class="form-control" name="masa_berlaku" id="masa_berlaku" type="date"/><br><br><br>
                            <input type="submit" name="btnCust" class="btn btn-primary" value="Generate Voucher">
                        </form>
                    </div>
                </div>
            </section>
            @endsection