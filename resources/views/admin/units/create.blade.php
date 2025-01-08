@extends('layout.app')
@section('title')
    add unit
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">add unit</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('units.store')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="lesson" class="font-semibold ml-5">: lesson</label>
                            <select name="lesson" id="lesson" class="cursor-pointer w-2/5 h-8 rounded outline-0 pl-2 border border-gray-400">
                                @foreach($lessons as $lesson)
                                    <option value="{{$lesson->title}}">{{$lesson->title}}</option>
                                @endforeach
                            </select>
                            @error('lesson')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="professor" class="font-semibold ml-5">: professor</label>
                            <select name="lesson" id="lesson" class="cursor-pointer w-2/5 h-8 rounded outline-0 pl-2 border border-gray-400">
                                @foreach($professors as $professor)
                                    <option value="{{$professor->name}}">{{$professor->name}}</option>
                                @endforeach
                            </select>
                            @error('professor')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="capacity" class="font-semibold ml-5">: capacity</label>
                            <input type="number" name="capacity" value="{{old('capacity')}}" id="capacity" class="w-2/5 h-8 rounded outline-0 p-2 border border-gray-400">
                            @error('capacity')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <input type="submit" value="Add" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                    <div class="w-1/2 h-full flex flex-col items-end pr-20">
                    </div>
                </form>
            </div>
        </div>
@endsection
