@extends('layout.app')
@section('title')
    semesters
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('semesters.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add semesters +</a>
                <h2 class="text-xl">semesters</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">units offered</td>
                        <td class="text-center">half year</td>
                        <td class="text-center">year</td>
                        <td class="text-center">title</td>
                        <td class="text-center">id</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($semesters as $semester)
                        <tr>
                            <td class="text-center">
                                <form action="{{--{{route('units.index',compact('semester'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-green-600">units</button>
                                </form>
                            </td>
                            <td class="text-center">{{$semester->half_year}}</td>
                            <td class="text-center">{{$semester->year}}</td>
                            <td class="text-center">{{$semester->title}}</td>
                            <td class="text-center">{{$semester->id}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">{{$semesters->links()}}</div>
        </div>
@endsection
