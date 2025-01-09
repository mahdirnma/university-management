@extends('layout.app3')
@section('title')
    profile
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">profile</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">level</td>
                        <td class="text-center">field</td>
                        <td class="text-center">phone number</td>
                        <td class="text-center">student number</td>
                        <td class="text-center">name</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">{{$student->level}}</td>
                        <td class="text-center">{{$student->field}}</td>
                        <td class="text-center">{{$student->phone_number}}</td>
                        <td class="text-center">{{$student->student_number}}</td>
                        <td class="text-center">{{$student->name}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
@endsection
