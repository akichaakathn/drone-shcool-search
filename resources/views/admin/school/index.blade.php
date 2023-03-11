@extends('layouts.admin')
@section('title','登録済みのスクール一覧')

@section('content')
<div class="container">
        <div class="row">
            <h2>スクール一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('admin.school.add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ route('admin.school.index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">スクール名</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_school" value="{{ $cond_school }}">
                        </div>
                        <div class="col-md-2">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="20%">スクール名</th>
                                <th width="20%">資格</th>
                                <th width="20%">URL</th>
                                <th wigth="20%">住所</th>
                                <th wigth="20%">地域</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $school)
                                <tr>
                                    <th>{{ $school->school}}</th>
                                    <th>{{ $school->qualification}}</th>
                                    <th>{{ $school->qualification2}}</th>
                                    <th>{{ $school->URL}}</th>
                                    <th>{{ $school->address}}</th>
                                    <th>{{ $school->area}}</th>
                                    <td>{{ Str::limit($school->addres, 30) }}</td>
                                </tr>
                                <td>
                                    <div>
                                        <a href="{{ route('admin.school.edit', ['id' => $school->id]) }}">編集</a>
                                    </div>
                                    <div>
                                        <a href="{{ route('admin.school.delete', ['id' => $school->id]) }}">削除</a>
                                    </div>
                                </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection