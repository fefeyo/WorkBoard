@extends('main.master')

@section('content')
    @if(count($postlist) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>案件名</th>
                    <th>報酬</th>
                    <th>期日</th>
                </tr>
            </thead>
            @foreach($postlist as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->badget }}</td>
                    <td>{{ $post->due }}</td>
                </tr>
            @endforeach
        </table>
    @else
        まだ案件が登録されていません。
    @endif
@endsection

@section('add_js')

@endsection
