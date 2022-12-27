@extends('template/templateAdmin')

@section('content')
<br><br>
<h3 style="margin-top: 40px;margin-left: 40px;">Setting</h3>
    <section class="page-section" id="masterService">
        <section class="page-section" id="tambahCustomer">
        <div class="d-flex justify-content-around px-5 py-4">
            <div class="container shadow p-5 m-0 bg-body rounded" style="width:450px;">
                
                    <table class="table">
                    <tr>
                    <form action="/konversiPoin" method="post">
                    @csrf
                    
                        <th>Konversi Point</th>
                        <th><input class="form-control" name="konversi" id="konversi" type="number"/></th>
                        <th><input type="submit" name="btnCust" class="btn btn-primary" value="Ubah"></th>
                    </form>
                    </tr>
                    <tr>
                    <form action="/masaBerlaku" method="post">
                    @csrf
                        <th>Masa Berlaku</th>
                        <th><input class="form-control" name="masaBerlaku" id="masaBerlaku" type="number"/></th>
                        <th><input type="submit" name="btnMasaBerlaku" class="btn btn-primary" value="Ubah"></th>
                        </form>  
                    </tr>
                    </table>
            </div>
        </div>
    </section>
@endsection