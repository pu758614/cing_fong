@extends('layouts.cing_fong')

@section('title', '出貨紀錄')

@section('content')
<div class="pcoded-inner-content">                         <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <nav class=" header-navbar " header-theme="theme1" pcoded-header-position="fixed">
                    <div class="navbar-wrapper">
                        <div class="row">
                            <div class="col-md-4">
                                <div class=" mobile-search waves-effect waves-light">
                                    <div class="header-search">
                                        <div class="main-search morphsearch-search open">
                                            <div class="input-group">
                                                
                                                <input type="text" class="form-control" placeholder="搜尋" style="width: 200px;">
                                                <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ml-auto">
                                <select name="select" class="form-control ">
                                    <option value="opt1" >全部</option>
                                    <option value="opt2">已出貨</option>
                                    <option value="opt3">未出貨</option>
                                    <option value="opt4">已交代</option>
                                    <option value="opt5">未交代</option>
                                </select>
                            </div>                                   
                        </div>     
                    </div>
                </nav>
                <div class="card">
                    
                    
                    <div class="card-header">
                        <h5>出貨紀錄</h5>

                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>訂購人</th>
                                        <th>電話</th>
                                        <th>訂購時間</th>
                                        <th>收貨人</th>
                                        <th>總金額</th>
                                        <th>狀態</th>
                                        <th style="text-align:center">詳細</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>黃小姐</td>
                                        <td>07-3419215</td>
                                        <td>2021-01-09 12:30:20</td>
                                        <td>甲先生、乙小姐</td>
                                        <td>6000</td>
                                        <td>
                                            <label class="label label-success">已出貨</label>
                                        </td>
                                        <td style="text-align:center">
                                            <a  href="shipping_edit">
                                                <span class="pcoded-micon"><i class="ti-eye"></i></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>林小姐</td>
                                        <td>07-1234567</td>
                                        <td>2021-01-09 12:30:20</td>
                                        <td>A先生</td>
                                        <td>2000</td>
                                        <td>
                                            <label class="label label-danger">未出貨</label>
                                        </td>
                                        <td style="text-align:center">
                                            <a  href="shipping_edit">
                                                <span class="pcoded-micon"><i class="ti-eye"></i></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>慶豐電機</td>
                                        <td>0987654321</td>
                                        <td>2021-01-09 12:30:20</td>
                                        <td></td>
                                        <td>2000</td>
                                        <td>
                                            <label class="label label-primary">已交代</label>
                                        </td>
                                        <td style="text-align:center">
                                            <a  href="shipping_edit">
                                                <span class="pcoded-micon"><i class="ti-eye"></i></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>張先生</td>
                                        <td>0987654321</td>
                                        <td>2021-01-09 12:30:20</td>
                                        <td></td>
                                        <td>2000</td>
                                        <td>
                                            <label class="label label-default">未交代</label>
                                        </td>
                                        <td style="text-align:center">
                                            <a  href="shipping_edit">
                                                <span class="pcoded-micon"><i class="ti-eye"></i></span>
                                            </a>
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
@endsection
