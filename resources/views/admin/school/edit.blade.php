@extends('layouts.admin')
@section('title', 'スクールの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>スクールの編集</h2>
                <form action="{{ route('admin.school.update') }}" method="post" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" name="school" value="{{ $school_form->school }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">認定資格</label>
                        <div class="col-md-13">
                            <input type="checkbox" name="qualification" value="JUIDA"{{ old('qualification'=='JUIDA'?'checked':'')}}><label for="JUIDA">JUIDA</label>
                            <input type="checkbox" name="qualification" value="DPA"{{ old('qualification'=='DPA'?'checked':'')}}><label for="DPA">DPA</label>
                            <input type="checkbox" name="qualification" value="DJI"{{ old('qualification'=='DJI'?'checked':'')}}><label for="DJI">DJI</label>
                            <input type="checkbox" name="qualification" value="JDA"{{ old('qualification'=='JDA'?'checked':'')}}><label for="JDA">JDA</label>
                            <input type="checkbox" name="qualification" value="IAU"{{ old('qualification'=='IAU'?'checked':'')}}><label for='IAU'>IAU</label>
                            <input type="checkbox" name="qualification" value="others"{{ old('qualification'=='others'?'checked':'')}}><label for="その他">その他</label>
                        </div>
                    <div class="form-group row">
                        <label class="col-md-2">認定資格</label>
                        <div class="col-md-10">
                            <input type="checkbox" name="qualification" value="JUIDA"{{ old('qualification'=='JUIDA'?'checked':'')}}><label for="JUIDA">JUIDA</label>
                            <input type="checkbox" name="qualification" value="DPA"{{ old('qualification'=='DPA'?'checked':'')}}><label for="DPA">DPA</label>
                            <input type="checkbox" name="qualification" value="DJI"{{ old('qualification'=='DJI'?'checked':'')}}><label for="DJI">DJI</label>
                            <input type="checkbox" name="qualification" value="JDA"{{ old('qualification'=='JDA'?'checked':'')}}><label for="JDA">JDA</label>
                            <input type="checkbox" name="qualification" value="IAU"{{ old('qualification'=='IAU'?'checked':'')}}><label for='IAU'>IAU</label>
                            <input type="checkbox" name="qualification" value="others"{{ old('qualification'=='others'?'checked':'')}}><label for="その他">その他</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">ホームページ</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="URL" value="{{ $school_form->URL }}">
                        </div>
                    </div>
                    <div class="form-grop row">
                        <label class="col-md-2">住所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="address" value="{{ $school_form->address }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">地区</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="area" value="{{ $school_form->area }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $school_form->id }}">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>編集履歴</h2>
                        <ul class="list-group">
                            @if ($school_form->histories != NULL)
                                @foreach ($school_form->histories as $history)
                                    <li class="list-group-item">{{ $history->edited_at }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection