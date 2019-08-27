@extends('layouts.main')
@section("title")
追加
@endsection

@section("content")
<div class="container">
  <h1>追加</h1>
  <form method="post" action="{{ route('books.store') }}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label for="title">タイトル</label>
      <input type="text" class="form-control" name="title" id="title">
    </div>
    <div class="form-group">
      <label for="memo">内容</label>
      <textarea class="form-control" rows="3" name="memo" id="memo"></textarea>
    </div>
    <div class="form-group">
      <label for="author">著者</label>
      @foreach( $authors as $key => $author)
        <label class="checkbox-inline">
          <input type="checkbox" name="author_id[]" value="{{ $key }}">{{ $author }}
        </label>
      @endforeach
    </div>
    <input type="submit" class="btn btn-primary" value="登録">
    <a href="{{ route('books.index') }}" class="btn btn-default">一覧へ</a>
  </form>
</div>
@endsection
