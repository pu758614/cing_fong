@extends('layouts.cing_fong')

@section('title', '客戶資訊')

@section('content')
<style>
    span{
        color: 000000;
    }
</style>
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="card">
                    <div class="card-header">
                        <h5 >公司客戶基本資料</h5>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="row">
                            <form class="form-material col-sm-12">

                                <div class="edit_basic" style="display: none;">
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <input type="text"  class="form-control" required="" value="123456">
                                            <span class="form-bar"></span>
                                            <label class="float-label" >名稱</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text"  class="form-control" required="" disabled="disabled">
                                            <span class="form-bar"></span>
                                            <label class="float-label">統編</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text"  class="form-control" required="" disabled="disabled">
                                            <span class="form-bar"></span>
                                            <label class="float-label">電話</label>
                                        </div>
                                        <div class="col-sm-3">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <input type="text"  class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">聯絡人</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">分機</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">手機 </label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text"  class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">傳真</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <input type="text"  class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">採購</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">分機</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">手機</label>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text"  class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">傳真</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <input type="text"  class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">LINE</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="text"  class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">購買方式</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="text"  class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">地址</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <textarea class="form-control" required=""></textarea>
                                            <span class="form-bar"></span>
                                            <label class="float-label">備註</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="show_basic">
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <span class="" style="font-size:14px;font-weight:bold;">名稱：</span>
                                            <span style="">adasas</span>
                                        </div>
                                        <div class="col-sm-3">
                                            <span class="" style="font-size:14px;font-weight:bold;">統編：</span>
                                            <span style="">adasas</span>
                                        </div>
                                        <div class="col-sm-3">
                                            <span class="" style="font-size:14px;font-weight:bold;">電話：</span>
                                            <span style="">adasas</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <span style="font-size:14px;font-weight:bold;">聯絡人：</span>
                                            <span class="" style="">adasas</span>
                                        </div>
                                        <div class="col-sm-3">
                                            <span class="" style="font-size:14px;font-weight:bold;">分機：</span>
                                            <span style="">0987654321</span>
                                        </div>
                                        <div class="col-sm-3">
                                            <span class="" style="font-size:14px;font-weight:bold;">手機：</span>
                                            <span style="">07-1234567</span>
                                        </div>
                                        <div class="col-sm-3">
                                            <span class="" style="font-size:14px;font-weight:bold;">傳真：</span>
                                            <span style="">07-1234567</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <span style="font-size:14px;font-weight:bold;">採購：</span>
                                            <span class="" style="">adasas</span>
                                        </div>
                                        <div class="col-sm-3">
                                            <span class="" style="font-size:14px;font-weight:bold;">分機：</span>
                                            <span style="">0987654321</span>
                                        </div>
                                        <div class="col-sm-3">
                                            <span class="" style="font-size:14px;font-weight:bold;">手機：</span>
                                            <span style="">07-1234567</span>
                                        </div>
                                        <div class="col-sm-3">
                                            <span class="" style="font-size:14px;font-weight:bold;">傳真：</span>
                                            <span style="">07-1234567</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <span style="font-size:14px;font-weight:bold;">LINE：</span>
                                            <span class="" style="">adasas</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <span style="font-size:14px;font-weight:bold;">購買方式：</span>
                                            <span class="" style="">adasas</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <span style="font-size:14px;font-weight:bold;">地址：</span>
                                            <span class="" style="">adasas</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <span class="" style="font-size:14px;font-weight:bold;">備註：</span>
                                            <span style="">xxxxxxxxxxxx</span>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="button" onclick="edit()" class="btn btn-primary btn-round waves-effect waves-light show_basic"  value="編輯" />
                                        <input type="button" onclick="save()" class="btn btn-success  btn-round waves-effect waves-light edit_basic" style="display: none;" value="儲存" />
                                        <input type="button" onclick="save()" class="btn btn-inverse btn-round waves-effect waves-light edit_basic" style="display: none;" value="取消" />
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Color Open Accordion start -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-header-text">客戶出貨紀錄</h5>
                            </div>
                            <div class="card-block accordion-block">
                                <div class="sub-title">110年</div>
                                <div class="card">
                                    <div class="card-block">

                                        <div class="page-header-breadcrumb">
                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <span class="" style="font-size:14px;font-weight:bold;"><label class="badge badge-inverse-info">000005</label></span>
                                                </div>
                                                <div class="col-sm-4">

                                                </div>
                                                <div class="col-sm-4">
                                                    <span  style="font-size:14px;font-weight:bold;float:right;">建單日期：110/01/01</span>
                                                </div>
                                                <div class="col-sm-12">
                                                    <table RULES=ALL class="table table-hover" style="border:3px #cccccc solid;">
                                                    <thead>
                                                        <tr>
                                                            <th width="10%">日期</th>
                                                            <th></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">103/6/25
                                                            </th>
                                                            <td>
                                                                <div class="card">
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                品名:20吋【8極110V溫6】工業排風機【4葉鋁葉1.2mm】 CF-2018-3
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                原價:  88888  元    優惠價  666666  元      數量  6   台
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                    加購配件:  XXXXXCCCCC
                                                                            </div>
                                                                            <div class="col-sm-12"><br>
                                                                                <button class="btn btn-primary btn-round waves-effect waves-light">編輯</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                品名:20吋【8極110V溫6】工業排風機【4葉鋁葉1.2mm】 CF-2018-3
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                原價:  88888  元    優惠價  666666  元      數量  6   台
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                    加購配件:  XXXXXCCCCC
                                                                            </div>
                                                                            <div class="col-sm-12"><br>
                                                                                <button class="btn btn-primary btn-round waves-effect waves-light">編輯</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12"><br>
                                                                    <button class="btn waves-effect waves-light btn-success btn-square">新增</button>
                                                                </div>

                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">103/5/10
                                                            </th>
                                                            <td>
                                                                <div class="card">
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                品名:20吋【8極110V溫6】工業排風機【4葉鋁葉1.2mm】 CF-2018-3
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                原價:  88888  元    優惠價  666666  元      數量  6   台
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                    加購配件:  XXXXXCCCCC
                                                                            </div>
                                                                            <div class="col-sm-12"><br>
                                                                                <button class="btn btn-primary btn-round waves-effect waves-light">編輯</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12"><br>
                                                                    <button class="btn waves-effect waves-light btn-success btn-square">新增</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="card">
                                    <div class="card-block">

                                        <div class="page-header-breadcrumb">
                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <span class="" style="font-size:14px;font-weight:bold;"><label class="badge badge-inverse-info">000004</label></span>
                                                </div>
                                                <div class="col-sm-4">

                                                </div>
                                                <div class="col-sm-4">
                                                    <span  style="font-size:14px;font-weight:bold;float:right;">建單日期：110/01/01</span>
                                                </div>
                                                <div class="col-sm-12">
                                                    <table RULES=ALL class="table table-hover" style="border:3px #cccccc solid;">
                                                    <thead>
                                                        <tr>
                                                            <th width="10%">日期</th>
                                                            <th></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">103/6/25
                                                            </th>
                                                            <td>
                                                                <div class="card">
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                品名:20吋【8極110V溫6】工業排風機【4葉鋁葉1.2mm】 CF-2018-3
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                原價:  88888  元    優惠價  666666  元      數量  6   台
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                    加購配件:  XXXXXCCCCC
                                                                            </div>
                                                                            <div class="col-sm-12"><br>
                                                                                <button class="btn btn-primary btn-round waves-effect waves-light">編輯</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card">
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                品名:20吋【8極110V溫6】工業排風機【4葉鋁葉1.2mm】 CF-2018-3
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                原價:  88888  元    優惠價  666666  元      數量  6   台
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                    加購配件:  XXXXXCCCCC
                                                                            </div>
                                                                            <div class="col-sm-12"><br>
                                                                                <button class="btn btn-primary btn-round waves-effect waves-light">編輯</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12"><br>
                                                                    <button class="btn waves-effect waves-light btn-success btn-square">新增</button>
                                                                </div>

                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">103/5/10
                                                            </th>
                                                            <td>
                                                                <div class="card">
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                品名:20吋【8極110V溫6】工業排風機【4葉鋁葉1.2mm】 CF-2018-3
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                原價:  88888  元    優惠價  666666  元      數量  6   台
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                    加購配件:  XXXXXCCCCC
                                                                            </div>
                                                                            <div class="col-sm-12"><br>
                                                                                <button class="btn btn-primary btn-round waves-effect waves-light">編輯</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12"><br>
                                                                    <button class="btn waves-effect waves-light btn-success btn-square">新增</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="sub-title">109年</div>
                                <div class="card">
                                    <div class="card-block">

                                        <div class="page-header-breadcrumb">
                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <span class="" style="font-size:14px;font-weight:bold;"><label class="badge badge-inverse-info">000001</label></span>
                                                </div>
                                                <div class="col-sm-4">

                                                </div>
                                                <div class="col-sm-4">
                                                    <span  style="font-size:14px;font-weight:bold;float:right;">建單日期：110/01/01</span>
                                                </div>
                                                <div class="col-sm-12">
                                                    <table RULES=ALL class="table table-hover" style="border:3px #cccccc solid;">
                                                    <thead>
                                                        <tr>
                                                            <th width="10%">日期</th>
                                                            <th></th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">103/6/25
                                                            </th>
                                                            <td>
                                                                <div class="card">
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                品名:20吋【8極110V溫6】工業排風機【4葉鋁葉1.2mm】 CF-2018-3
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                原價:  88888  元    優惠價  666666  元      數量  6   台
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                    加購配件:  XXXXXCCCCC
                                                                            </div>
                                                                            <div class="col-sm-12"><br>
                                                                                <button class="btn btn-primary btn-round waves-effect waves-light">編輯</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <th scope="row">103/5/10
                                                            </th>
                                                            <td>
                                                                <div class="card">
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                品名:20吋【8極110V溫6】工業排風機【4葉鋁葉1.2mm】 CF-2018-3
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                原價:  88888  元    優惠價  666666  元      數量  6   台
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                    加購配件:  XXXXXCCCCC
                                                                            </div>
                                                                            <div class="col-sm-12"><br>
                                                                                <button class="btn btn-primary btn-round waves-effect waves-light">編輯</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12"><br>
                                                                    <button class="btn waves-effect waves-light btn-success btn-square">新增</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- Row end -->
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    function edit() {
        $('.show_basic').hide();$('.edit_basic').show();
    }
    function save() {
        $('.show_basic').show();$('.edit_basic').hide();
    }

</script>