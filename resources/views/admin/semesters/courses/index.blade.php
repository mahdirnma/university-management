@extends('layout.app')
@section('title')
    courses
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <h2 class="text-xl">please select course : </h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">units offered</td>
                        <td class="text-center">title</td>
                        <td class="text-center">id</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td class="text-center">
                                <form action="{{route('courses.show',compact('course'))}}" method="get">
                                    @csrf
                                    <input type="hidden" name="semester" value="{{$semester->id}}">
                                    <button type="submit" class="text-green-600">units</button>
                                </form>
                            </td>
                            <td class="text-center">{{$course->title}}</td>
                            <td class="text-center">{{$course->id}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">{{$courses->links()}}</div>
        </div>
@endsection
