@extends('layouts.cing_fong')

@section('title', '客戶資料')

@section('content')
<div class="pcoded-inner-content">
        <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="card">
                    <div class="card-header">
                        <h5 >個人客戶資料</h5>
                    </div>
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>名稱</th>
                                        <th>聯絡人</th>
                                        <th>電話</th>
                                        
                                        <th>備註</th>
                                        <th style="text-align:center">編輯</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>黃小姐</td>
                                        <td>黃小姐</td>
                                        <td>07-3419215</td>
                                        <td>XX</td>
                                        <td  style="text-align:center">
                                            <a href="user_info" >
                                                <span class="pcoded-micon"><i class="ti-pencil"></i></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr><a href=""></a>
                                        <th scope="row">2</th>
                                        <td>林先生</td>
                                        <td>慶豐電機</td>
                                        <td>07-1234567</td>
                                        
                                        <td></td>
                                        <td  style="text-align:center">
                                            <a href="user_info">
                                                <span class="pcoded-micon"><i class="ti-pencil"></i></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>慶豐電機</td>
                                        <td></td>
                                        <td>0987654321</td>
                                        <td>OOOOOOOOO</td>
                                        <td  style="text-align:center">
                                            <a href="user_info"">
                                                <span class="pcoded-micon"><i class="ti-pencil"></i></span>
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