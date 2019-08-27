@extends('layouts.main')
@section("title")
更新
@endsection

@section("content")
<div class="container">
  <h1>更新</h1>
  <form method="post" action="{{ route('books.update',$book->id) }}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label for="title">タイトル</label>
      <input type="text" class="form-control" name="title" id="title" value="{{ old('title',$book->title) }}">
    </div>
    <div class="form-group">
      <label for="memo">内容</label>
      <textarea class="form-control" rows="3" name="memo" id="memo">{{ old('memo',$book->memo) }}</textarea>
    </div>
    <div class="form-group">
      <label for="author">著者</label>
      @foreach( $authors as $key => $author)
      @php
        $bCheck = false;
        if ( isset($book->authors) && $book->authors->contains($key)) {
          $bCheck=true;
        }
      @endphp
        <label class="checkbox-inline">
          <input type="checkbox" name="author_id[]" value="{{ $key }}" @if ($bCheck==true) checked @endif>{{ $author }}
        </label>
      @endforeach
    </div>
    <input type="submit" class="btn btn-primary" value="登録">
    <a href="{{ route('books.index') }}" class="btn btn-default">一覧へ</a>
  </form>
</div>
@endsection
