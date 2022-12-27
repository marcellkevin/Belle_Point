@extends('template/templateMarketing')

@section('content')
<br><br>
<h3 style="margin-top: 40px;margin-left: 40px;">Add User</h3>
            <section class="page-section" id="masterService">
                <section class="page-section" id="tambahCustomer">

                <div class="d-flex justify-content-around px-5 py-4">
                    <div class="container shadow p-5 m-0 bg-body rounded" style="width:450px;">

                        <form action="/addUser" method="post">
                            @csrf
                            
                            <p>Nama Customer </p> <input class="form-control" name="nama" id="nama" type="text"/><br>
                            <p>Alamat Customer </p> <textarea class="form-control" name="alamat" id="alamat" type="text"></textarea><br>
                            <p>Nomor HP Customer</p> <input class="form-control" name="nomor_hp" id="nomor_hp" type="number"/><br>
                            <input type="submit" name="btnCust" class="btn btn-primary" value="Tambah User">
                        </form>
                    </div>
                </div>
            </section>
            @endsection