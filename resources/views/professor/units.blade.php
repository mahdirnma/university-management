@extends('layout.app2')
@section('title')
    units
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">units</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">students</td>
                        <td class="text-center">course</td>
                        <td class="text-center">lesson</td>
                        <td class="text-center">id</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($units as $unit)
                        <tr>
                            <td class="text-center">
                                <form action="{{--{{route('master.unit.student',compact('unit'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">students</button>
                                </form>
                            </td>
                            <td class="text-center">{{$unit->course->title}}</td>
                            <td class="text-center">{{$unit->lesson->title}}</td>
                            <td class="text-center">{{$unit->id}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
{{--            <div class="mt-5">{{$units->links()}}</div>--}}
        </div>
@endsection
