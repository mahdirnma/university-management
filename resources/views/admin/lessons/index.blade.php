@extends('layout.app')
@section('title')
    lessons
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('lessons.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add lesson +</a>
                <h2 class="text-xl">lessons</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">default semester</td>
                        <td class="text-center">prerequisite course</td>
                        <td class="text-center">course</td>
                        <td class="text-center">unit_number</td>
                        <td class="text-center">title</td>
                        <td class="text-center">id</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lessons as $lesson)
                        <tr>
                            <td class="text-center">{{$lesson->default_semester}}</td>
                            <td class="text-center">
                                @if($lesson->lesson)
                                    {{$lesson->lesson->title}}
                                @endif
                            </td>
                            <td class="text-center">{{$lesson->course->title}}</td>
                            <td class="text-center">{{$lesson->unit_number}}</td>
                            <td class="text-center">{{$lesson->title}}</td>
                            <td class="text-center">{{$lesson->id}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">{{$lessons->links()}}</div>
        </div>
@endsection
