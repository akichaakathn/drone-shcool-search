@extends('layouts.admin')

@section('title','ドローンスクール登録')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ドローンスクール登録</h2>
                <form action="{{ route('admin.school.create') }}" method="post" enctype="multipart/form-date">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">スクール名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="school" value="{{ old('school') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">認定資格</label>
                        <div class="col-md-10">
                            <input type="radio" name="qualification" valu="JUIDA">JUIDA
                            <input type="radio" name="qualification" valu="DPA">DPA
                            <input type="radio" name="qualification" valu="DJI">DJI
                            <input type="radio" name="qualification" valu="JDA">JDA
                            <input type="radio" name="qualification" valu="others">その他
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">ホームページ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="URL" value="{{ old('URL') }}">
                        </div>
                    </div>
                    <div class="form-grop row">
                        <label class="col-md-2">住所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">地区</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="area" value="{{ old('area') }}">
                        </div>
                    </div>
                    @csrf
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection

@section('header')
<header class ="page-header wrapper">
        <h1 class="title"><small>しずおか</small>ドローンスクール検索</h1>
          <nav>
            <ul class="main-nav">
              <li><a href="#">ドローンスクールって？</a></li>
              <li><a href="#">ドローン免許の費用と期間</a></li>
             <li><a href="#">検索</a></li>
            </ul>
          </nav> 
      </header>
@endsection