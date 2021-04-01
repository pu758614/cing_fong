@extends('layouts.cing_fong')

@section('title', '客戶資料')

@section('content')
<style>

</style>
<div class="pcoded-inner-content">
        <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class=row>
                    <div class=col-md-3 m-b-10">
                        <div class="input-group">

                            <input type="text" class="form-control" style="width: 200px;">
                            <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                        </div>
                    </div>

                    <div class=col-md-3 m-b-10">
                    <button class="btn btn-primary waves-effect waves-light" id="add_company" onclick="add_company()" >新增</button><p>
                    </div>
                </div>



                <div class="card">
                    <div class="card-header">
                        <h5 >公司客戶資料</h5>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>名稱</th>
                                        <th>統編</th>
                                        <th>電話</th>
                                        <th>備註</th>
                                        <th style="text-align:center">動作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>台積電</td>
                                        <td>123456789</td>
                                        <td>07-3419215</td>
                                        <td>XX</td>
                                        <td  style="text-align:center">
                                            <div class="">
                                                <a class="dropdown-toggle dropdown" data-toggle="dropdown" href="#" data-dropup-auto="false">
                                                    <span class="pcoded-micon"><i class="ti-pencil"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item waves-light waves-effect" href="company_info">編輯</a>
                                                    <a class="dropdown-item waves-light waves-effect" href="#">待出貨</a>
                                                    <a class="dropdown-item waves-light waves-effect" href="#">待收款</a>
                                                    <a class="dropdown-item waves-light waves-effect" href="#">待收款</a>
                                                </div>
                                            </div>

                                        </td>

                                    </tr>
                                    <tr><a href=""></a>
                                        <th scope="row">2</th>
                                        <td>聯發科</td>
                                        <td>555444321</td>
                                        <td>07-1234567</td>

                                        <td></td>
                                        <td  style="text-align:center">
                                            <div class="">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" data-dropup-auto="false">
                                                    <span class="pcoded-micon"><i class="ti-pencil"></i></span>
                                                </a>
                                                <div class="dropdown-menu" data-dropup-auto="false">
                                                    <a class="dropdown-item waves-light waves-effect" href="company_info">編輯</a>
                                                    <a class="dropdown-item waves-light waves-effect" href="#">待出貨</a>
                                                    <a class="dropdown-item waves-light waves-effect" href="#">待收款</a>
                                                    <a class="dropdown-item waves-light waves-effect" href="#">待維修</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>慶豐電機</td>
                                        <td>654321987</td>
                                        <td>0987654321</td>
                                        <td>OOOOOOOOO</td>
                                        <td  style="text-align:center">
                                                <div class="">
                                                <a class="dropdown-toggle dropdown" data-toggle="dropdown" href="#" data-dropup-auto="false">
                                                    <span class="pcoded-micon"><i class="ti-pencil"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown">
                                                    <a class="dropdown-item waves-light waves-effect" href="company_info">編輯</a>
                                                    <a class="dropdown-item waves-light waves-effect" href="#">待出貨</a>
                                                    <a class="dropdown-item waves-light waves-effect" href="#">待收款</a>
                                                    <a class="dropdown-item waves-light waves-effect" href="#">待維修</a>
                                                </div>
                                                <p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br><br><br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-icon show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id='modal_add_company' style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" >
                <h4 class="modal-title"  id="myModalLabel">新增</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 m-b-10">
                        <label class="from-label">名稱：*
                        </label>
                        <input type="text" class="from-control"  value="" >
                    </div>
                    <div class="col-md-2 m-b-10">

                    </div>
                    <div class="col-md-4 m-b-10">
                        <label class="from-label">統編：*
                        </label>
                        <input type="text" class="from-control"  value="" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 m-b-10">
                        <label class="from-label">電話：
                        </label>
                        <input type="text" class="from-control"  value="" >
                    </div>
                    <div class="col-md-2 m-b-10">

                    </div>
                    <div class="col-md-4 m-b-10">
                        <label class="from-label">備註：
                        </label>
                        <input type="text" class="from-control"  value="" >
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">確定</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
            </div>
        </div>
    </div>
</div>

<script>
    function add_company() {
        $('#modal_add_company').modal('show');
    }

</script>
@endsection
