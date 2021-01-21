@extends('layouts.cing_fong')

@section('title', '出貨紀錄')

@section('content')
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="card">
                    <div class="card-header container">
                        <h5 >訂單編號：000002</h5>
                        <label class="label label-primary card-header-right" style="padding:-7px;">已交代</label>
                        <div class="dropdown-primary dropdown open card-header-right">
                            <button class="btn btn-primary dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">已交代</button>
                            <div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <a class="dropdown-item waves-light waves-effect" href="#">已交代</a>
                                <a class="dropdown-item waves-light waves-effect" href="#">已出貨</a>
                                <a class="dropdown-item waves-light waves-effect" href="#">未出貨</a>
                                <a class="dropdown-item waves-light waves-effect" href="#">未交代</a>
                                <div class="dropdown-divider"></div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item waves-light waves-effect" href="#" onclick="del()">刪除</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-block table-border-style">           
                        <div class="row">
                            <div class="col-sm-12">
                                <div id='user_info'>
                                    <div class="sub-title">
                                        <label class="label label-inverse-success">客戶基本資料</label>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 ">
                                            <span class="" style="font-size:14px;font-weight:bold;">單位名稱</span>
                                            <span style="padding-left: 10px;">adasas</span>
                                        </div>
                                        <div class="col-sm-4  ">
                                            <span class="" style="font-size:14px;font-weight:bold;">統編</span>
                                            <span style="padding-left: 10px;">adasas</span>
                                        </div>
                                        <div class="col-sm-4">                                                                    
                                            <span class="" style="font-size:14px;font-weight:bold;">聯絡人</span>
                                            <span style="padding-left: 10px;">adasas</span>                                                                   
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <span style="font-size:14px;font-weight:bold;">電話</span>
                                            <span class="" style="padding-left: 10px;">adasas</span>                                                                  
                                        </div>
                                        <div class="col-sm-4">
                                            <span class="" style="font-size:14px;font-weight:bold;">手機</span>
                                            <span style="padding-left: 10px;">0987654321</span>
                                        </div>
                                        <div class="col-sm-4">
                                            <span class="" style="font-size:14px;font-weight:bold;">傳真</span>
                                            <span style="padding-left: 10px;">07-1234567</span>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                            <div class="col-sm-4">
                                            <span class="" style="font-size:14px;font-weight:bold;">LINE</span>
                                            <span style="padding-left: 10px;">123456789</span>
                                        </div>
                                        <div class="col-sm-8">
                                            <span class="" style="font-size:14px;font-weight:bold;">地址</span>
                                            <span style="padding-left: 10px;">高雄市左營區重立路232巷2號</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <span class="" style="font-size:14px;font-weight:bold;">備註</span>
                                            <span style="padding-left: 10px;">xxxxxxxxxxxx</span>
                                        </div>
                                    </div>
                                </div>
                                <div id='shipping_data'>
                                    <div class="sub-title"></div>
                                    <div class="sub-title">
                                        <label class="label label-inverse-success">出貨資料</label>
                                    </div>
                                    <div class='shipping_show'>
                                        <div class="form-group row">
                                            <div class="col-sm-4">                                                                    
                                                <span class="" style="font-size:14px;font-weight:bold;">聯絡人</span>
                                                <span style="padding-left: 10px;">adasas</span>                                                                   
                                            </div>
                                            <div class="col-sm-4">
                                                <span style="font-size:14px;font-weight:bold;">電話</span>
                                                <span class="" style="padding-left: 10px;">adasas</span>                                                                  
                                            </div>
                                            <div class="col-sm-4">
                                                <span class="" style="font-size:14px;font-weight:bold;">手機</span>
                                                <span style="padding-left: 10px;">0987654321</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <span class="" style="font-size:14px;font-weight:bold;">傳真</span>
                                                <span style="padding-left: 10px;">07-1234567</span>
                                            </div>
                                            <div class="col-sm-4">
                                                <span class="" style="font-size:14px;font-weight:bold;">LINE</span>
                                                <span style="padding-left: 10px;">123456789</span>
                                            </div>
                                            <div class="col-sm-4">
                                                <span class="" style="font-size:14px;font-weight:bold;">地址</span>
                                                <span style="padding-left: 10px;">高雄市左營區重立路232巷2號</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <span class="" style="font-size:14px;font-weight:bold;">備註</span>
                                                <span style="padding-left: 10px;">xxxxxxxxxxxx</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shipping_edit" style="display: none;">
                                        <form class="form-material col-sm-12">
                                            <div class="form-group row">
                                                <div class="col-sm-12">
                                                    <label><input type="checkbox" name="color1" value="" checked>  與客戶相同</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                
                                                
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" required="">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">聯絡人</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text"  class="form-control" required="">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">電話</label>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" required="">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">手機</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                
                                                <div class="col-sm-4">
                                                    <input type="text"  class="form-control" required="">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">傳真</label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <input type="text"  class="form-control" required="">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">地址</label>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <input type="text"  class="form-control" required="">
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">LINE</label>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group row">
                                                
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" required=""></textarea>
                                                    <span class="form-bar"></span>
                                                    <label class="float-label">備註</label>
                                                </div>
                                                
                                            </div>
                                        </form>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="button" onclick="edit_shipping()" class="btn btn-primary btn-round waves-effect waves-light shipping_show"  value="編輯" />
                                            <input type="button" onclick="save()" class="btn btn-success  btn-round waves-effect waves-light shipping_edit" style="display: none;" value="儲存" />
                                            <input type="button" onclick="save()" class="btn btn-inverse btn-round waves-effect waves-light shipping_edit" style="display: none;" value="取消" />
                                        </div>
                                    </div>
                                </div>
                                <div id='shipping_detail'>
                                    <div class="sub-title"></div>
                                    <div class="sub-title"></div>
                                    <div class="sub-title">
                                        <label class="label label-inverse-success">出貨明細</label>
                                        <span class="" style="float:right;font-weight:bold;">總金額: 12300 元</span>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>日期</th>
                                                        <th style="text-align: center;">產品名稱</th>
                                                        <th>收貨人</th>
                                                        <th>售價</th>
                                                        <th>備註</th>
                                                        <th>詳細</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>103/6/25</td>
                                                        <td>24吋 強力 工業立扇 6極 三段變速 銑殼馬達 (鋁葉) 安全網 (32殼)</td>
                                                        <th>A先生</th>
                                                        <td>2600元</td>
                                                        <td>到付</td>
                                                        <td>
                                                            <a  href="javascript: void(0)" onclick="$('#modal_edit').modal('show');">
                                                                <span class="pcoded-micon"><i class="ti-pencil"></i></span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>103/6/25</td>
                                                        <td>24吋 強力 工業立扇 6極 三段變速 銑殼馬達 (鋁葉) 安全網 (32殼)</td>
                                                        <th>B小姐</th>
                                                        <td>1900</td>
                                                        <td>到付</td>
                                                        <td>
                                                            <a  href="javascript: void(0)" onclick="$('#modal_edit').modal('show');">
                                                                <span class="pcoded-micon"><i class="ti-pencil"></i></span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>103/7/2</td>
                                                        <td>24吋 強力 工業立扇 6極 三段變速 銑殼馬達 (鋁葉) 安全網 (32殼)</td>
                                                        <th>C小姐</th>
                                                        <td>2600元</td>
                                                        <td>多付一組開關 不含線</td>
                                                        <td>
                                                            <a  href="javascript: void(0)" onclick="$('#modal_edit').modal('show');">
                                                                <span class="pcoded-micon"><i class="ti-pencil"></i></span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>103/8/22</td>
                                                        <td>24吋 工業立扇 6極 三段變速 銑殼馬達 (鋁葉) 安全網 (32殼)CF-2403A2S</td>
                                                        <th>D小姐</th>
                                                        <td>2600元</td>
                                                        <td>多付一組開關 不含線</td>
                                                        <td>
                                                            <a  href="javascript: void(0)" onclick="$('#modal_edit').modal('show');">
                                                                <span class="pcoded-micon"><i class="ti-pencil"></i></span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>103/8/22</td>
                                                        <td>24吋 工業立扇 6極 三段變速 銑殼馬達 (鋁葉) 安全網 (32殼)CF-2403A2S</td>
                                                        <th>E小姐</th>
                                                        <td>2600元</td>
                                                        <td>多付一組開關 不含線</td>
                                                        <td>
                                                            <a  href="javascript: void(0)" onclick="$('#modal_edit').modal('show');">
                                                                <span class="pcoded-micon"><i class="ti-pencil"></i></span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>  
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <input type="button" onclick="add()" class="btn btn-primary btn-round waves-effect waves-light align-self-center "  value="新增" />
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                    <!-- Color Open Accordion start -->
            </div>       
        </div>
    </div>
</div>
@endsection

<div class="modal fade modal-icon show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id='modal_add' style="display: none;">
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
                    <div class="col-md-6">
                        <div class="form-group">
                            序號
                            <input type="text" class="form-control" placeholder="Disabled text" value="系統自動產生" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            日期
                            <input class="form-control" type="text" id="name" value="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            產品名稱
                            <input class="form-control" type="text" id="name" value="">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            原價
                            <input class="form-control" type="text" id="name" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            售價
                            <input class="form-control" type="text" id="name" value="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            備註
                            <textarea class="form-control" required=""></textarea>
                            <span class="form-bar"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">確定新增</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade modal-icon show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id='modal_edit' style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" >
                <h4 class="modal-title"  id="myModalLabel">編輯</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            序號
                            <input type="text" class="form-control" placeholder="Disabled text" value="3" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            日期
                            <input class="form-control" type="text" id="name" value="103/6/25">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            收貨人
                            <input class="form-control" type="text" id="name" value="103/6/25">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            連絡電話
                            <input class="form-control" type="text" id="name" value="103/6/25">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            產品名稱
                            <input class="form-control" type="text" id="name" value="24吋 強力 工業立扇 6極 三段變速 銑殼馬達 (鋁葉) 安全網 (32殼)">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            原價
                            <input class="form-control" type="text" id="name" value="2600">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            售價
                            <input class="form-control" type="text" id="name" value="2600">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            備註
                            <textarea class="form-control" required="">多付一組開關 不含線</textarea>
                            <span class="form-bar"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer container">
                <dir class="container">
                    <button type="button" class="btn btn-danger flex-start" onclick="del()">刪除</button>
                </dir>
                <button type="button" class="btn btn-primary" data-dismiss="modal">儲存</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
            </div>
        </div>
    </div>
</div>
<script>
    function add() {
        $("#modal_add").modal('show');
    }
    function edit_shipping() {
       $('.shipping_show').hide();
       $('.shipping_edit').show();
    }
    function save() {
       $('.shipping_edit').hide();
       $('.shipping_show').show();
    }
    function del() {
        var result = confirm('確定要刪除嗎？');
        if(result){
            alert("已刪除");
            $('#modal_edit').modal('hide');
        }
    }
</script>