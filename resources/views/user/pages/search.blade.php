@extends('user.main')

@section('title', 'Search')

@section('content')
        <br/>
        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800">Search Results</h1>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        @if(count($students) >0)
                            <thead>
                            <tr>
                                    <th>Name</th>
                                    <th>DOB</th>
                                    <th>Point 1</th>
                                    <th>Point 2</th>
                                    <th>Point 3</th>
                                </tr>
                            </thead>
                            @foreach($students as $student)
                                @foreach($student->testScores as $testScore)
                                    <tbody>
                                        <tr>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->dob }}</td>
                                            <td>{{ $testScore->point_1 }}</td>
                                            <td>{{ $testScore->point_2 }}</td>
                                            <td>{{ $testScore->point_3 }}</td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            @endforeach

                            @elseif(count($classrooms) >0)
                                @foreach($classrooms as $classroom)
                                    <tr>
                                        <th>Name: <a href="#">{{ $classroom->name }}</a></th>
                                    </tr>
                                @endforeach

                            @else
                            <tr>
                                <td>Result not found</td>
                            </tr>
                            @endif
                    </table>
                </div>
            </div>
        </div>
@endsection
