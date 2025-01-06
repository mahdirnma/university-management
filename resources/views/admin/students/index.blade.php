@extends('layout.app')
@section('title')
    students
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-between items-center border-b">
                <a href="{{route('students.create')}}" class="px-10 py-3 rounded-xl font-light text-white bg-gray-800">add student +</a>
{{--
                <form action="{{route('student.index')}}" method="get" class="w-3/6 h-14 flex flex-row-reverse items-center">
                    <input type="text" name="field" value="{{old('field')}}" id="field" placeholder="field" class="w-1/4 h-8 rounded outline-0 p-2 border border-gray-400 ml-3">
                    <input type="number" name="student_number" step="0" value="{{old('student_number')}}" min="0" id="student_number" placeholder="student number" class="w-1/3 h-8 rounded outline-0 p-2 border border-gray-400 ml-3">
                    <button type="submit" class="w-1/6 h-10 border rounded border-gray-500 text-gray-600 mr-5">search</button>
                </form>
--}}
                <h2 class="text-xl">students</h2>
            </div>
            <div class="w-[90%] h-3/5 flex flex-col justify-center">
                <table class="w-full min-h-full border border-gray-400">
                    <thead>
                    <tr class="h-12 border border-gray-400 border-b-2 border-b-gray-400">
                        <td class="text-center">delete</td>
                        <td class="text-center">update</td>
                        <td class="text-center">registration in the course</td>
                        <td class="text-center">level</td>
                        <td class="text-center">field</td>
                        <td class="text-center">phone number</td>
                        <td class="text-center">student number</td>
                        <td class="text-center">name</td>
                        <td class="text-center">id</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td class="text-center">
                                <form action="{{route('students.destroy',compact('student'))}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-green-600">delete</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{route('students.edit',compact('student'))}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-cyan-600">update</button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="{{--{{route('students.registration.create',compact('student'))}}--}}" method="get">
                                    @csrf
                                    <button type="submit" class="text-amber-700">registration</button>
                                </form>
                            </td>
                            <td class="text-center">{{$student->level}}</td>
                            <td class="text-center">{{$student->field}}</td>
                            <td class="text-center">{{$student->phone_number}}</td>
                            <td class="text-center">{{$student->student_number}}</td>
                            <td class="text-center">{{$student->name}}</td>
                            <td class="text-center">{{$student->id}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-5">{{$students->links()}}</div>
        </div>
@endsection
