@extends('layouts.top')

@section('content')
<div class="container">
    <div id="main">
      <div id="serach-nav">
       <h2>様々な分野で活躍するドローン。<br>
       これからの生活に欠かせなくなる技術です。<br>
        静岡に設立されたドローンスクールをまとめてみました。<br>
       あなたも学んでみませんか？
          <a href="{{route('top',['address'=> '静岡'])}}">静岡市</a>
          <a href="#">清水市</a>
          <a href="#"></a>
          <a href="#"></a>
        </nav>
        <h3>西部</h3>
        <h3>東部</h3>
        <h3>伊豆</h3> 
      </div>
      <div id="main-img">
        <img src ="C:\Users\Javas\Downloads\drone-g63519b0f4_1280.jpg" width="100%">
      </div>
    </div>
    <div id="sub-visual">
      <div id="sub-img">
        <img class="Mthuji" src="C:\Users\Javas\Downloads\mount-fuji-g3650f82e7_1280.jpg" width="100%">
      </div>       
      <div class="passing">
          <div class="passing-box">
            <div class="passing-bar">
              <div class="passing-txt">
                ”未来”を”今”へ<br>静岡から
              </div>
            </div>
          </div>
      </div>
    <form action="#" class="search-form-005">
    <label>
        <input type="text" placeholder="キーワードを入力">
    </label>
    <button type="submit" aria-label="検索"></button>
</form>
  </div>
@endsection

