@extends('layouts.admin')

@section('title','しずおかドローンスクール検索')

@section('content')
<div class="container">
    <div id="main">
      <div id="serach-nav">
        <h2><span class ="line-cblue">ドローン技術を静岡県で学ぼう！</span></h2>
        <h4>エリア別に検索できます</h4>
        
        <h3>中部</h3>
        <nav>
          <a href="#">静岡市</a>
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
      <div class="copy">
        <p class="copy-black">”未来”を”今”へ</p>
        <p class="copy-black">静岡から</p>
      </div>
    </div>
</div>
@endsection
