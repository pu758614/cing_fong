@extends('layouts.cing_fong')

@section('title', '客戶資訊')

@section('content')

<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="card">
                    <div class="card-header">
                        <h5 >基本資料</h5>
                    </div>
                    <div class="card-block table-border-style">           
                        <div class="row">
                            <form class="form-material col-sm-12">

                                <div class="edit_basic" style="display: none;">
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <input type="text"  class="form-control" required="" value="123456">
                                            <span class="form-bar"></span>
                                            <label class="float-label" >名稱</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text"  class="form-control" required="" disabled="disabled">
                                            <span class="form-bar"></span>
                                            <label class="float-label">統編</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">聯絡人</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
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
                                        <div class="col-sm-4">
                                            <input type="text"  class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">傳真</label>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <input type="text"  class="form-control" required="">
                                            <span class="form-bar"></span>
                                            <label class="float-label">LINE</label>
                                        </div>
                                        <div class="col-sm-8">
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
                                        <div class="col-sm-4 ">
                                            <span class="" style="font-size:14px;font-weight:bold;">名稱</span>
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
                                <div id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="accordion-panel">
                                        <div class="accordion-heading" role="tab" id="headingOne">
                                            <h3 class="card-title accordion-title">
                                                <a class="accordion-msg waves-effect waves-dark" data-toggle="collapse"
                                                    data-parent="#accordion" href="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    110年
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="accordion-content accordion-desc">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>訂單編號</th>
                                                        <th>日期</th>
                                                        <th>收貨人</th>
                                                        <th>名稱</th>
                                                        <th>狀態</th>
                                                        <th>檢視</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <th>000005</th>
                                                        <td>01/01</td>
                                                        <td> 甲先生</td>
                                                        <td>24吋 強力 工業立扇 6極 三段變速 銑殼馬達 (鋁葉) 安全網 (32殼)</td>
                                                        <td><label class="label label-success">已出貨</label></td>
                                                        <td><span class="pcoded-micon"><i class="ti-eye"></i></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <th>000005</th>
                                                        <td>06/15</td>
                                                        <td> 乙先生</td>
                                                        <td>12吋 強力 工業立扇 3極 三段變速 銑殼馬達 (鋁葉) 安全網 (32殼)</td>
                                                        <td><label class="label label-danger">已出貨</label></td>
                                                        <td><span class="pcoded-micon"><i class="ti-eye"></i></span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <th>000008</th>
                                                        <td>12/01</td>
                                                        <td>丙小姐</td>
                                                        <td>6吋 強力 工業立扇 2極 三段變速 銑殼馬達 (鋁葉) 安全網 (32殼)</td>
                                                        <td><label class="label label-default">未交代</label></td>
                                                        <td><span class="pcoded-micon"><i class="ti-eye"></i></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-panel">
                                    <div class="accordion-heading" role="tab" id="headingTwo">
                                        <h3 class="card-title accordion-title">
                                                <a class="accordion-msg waves-effect waves-dark" data-toggle="collapse"
                                                    data-parent="#accordion" href="#collapseTwo"
                                                    aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    109年
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="accordion-content accordion-desc">
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-panel">
                                <div class=" accordion-heading" role="tab" id="headingThree">
                                    <h3 class="card-title accordion-title">
                                            <a class="accordion-msg waves-effect waves-dark" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseThree"
                                            aria-expanded="false"
                                            aria-controls="collapseThree">
                                            108年
                                        </a>
                                    </h3>
                                </div>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="accordion-content accordion-desc">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                                        survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </p>
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