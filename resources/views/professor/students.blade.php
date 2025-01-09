@extends('layout.app2')
@section('title')
    {{$unit->lesson->title}} students
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">{{$unit->lesson->title}} students</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">score</td>
                        <td class="text-center">phone number</td>
                        <td class="text-center">student number</td>
                        <td class="text-center">name</td>
                        <td class="text-center">id</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($registrations as $registration)
                        <tr>
                            <td class="text-center">
                                <form action="{{route('master.students.score',compact('unit','registration'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">score</button>
                                </form>
                            </td>
                            <td class="text-center">{{$registration->student->phone_number}}</td>
                            <td class="text-center">{{$registration->student->student_number}}</td>
                            <td class="text-center">{{$registration->student->name}}</td>
                            <td class="text-center">{{$registration->id}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
{{--            <div class="mt-5">{{$registrations->links()}}</div>--}}
        </div>
@endsection
