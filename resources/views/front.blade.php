@extends('layouts.admin')

@section('title','しずおかドローンスクール検索')

@section('header')
<header class ="page-header wrapper">
      <h1 class="title"><small>しずおか</small><br>ドローンスクール検索</h1>
      <nav class="header-nav">
        <ul class="nav_items nav-items">
          <li class="nav-items_items"><a href="#">ドローンスクールと資格</a>></li>
          <li class="nav-items_items"><a href="#">費用と時間</a></li>
          <li class="nav-items_items"><a href="#">検索</a></li>
          <li class="nav-items_items"><a href="#">マイページ</a></li>
        </ul>
      </nav>

      <button class="hamburger" id="js-hamburger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </button>
    </header>

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
      <div class="passing">
          <div class="passing-box">
            <div class="passing-bar">
              <div class="passing-txt">
                ”未来”を”今”へ<br>静岡から
              </div>
            </div>
          </div>
      </div>
  </div>
@endsection

