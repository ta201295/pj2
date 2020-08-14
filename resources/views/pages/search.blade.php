@extends('main')

@section('title', 'Search')

@section('content')
        <br/>
        <table class="table table-bordered">
            @if(count($students) >0)
                @foreach($students as $student)
                <tr>
                    <th>Name: <a href="#">{{ $student->name }}</a></th>
                </tr>
                @endforeach
            @else
            <tr>
                <td>Result not found</td>
            </tr>
            @endif
        </table>
@endsection
