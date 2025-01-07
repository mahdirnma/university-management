@extends('layout.app')
@section('title')
    add semester
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">add semester</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('semesters.store')}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="year" class="font-semibold ml-5">: year</label>
                            <select name="year" id="year" class="cursor-pointer w-2/5 h-8 rounded outline-0 pl-2 border border-gray-400">
                                @for($i=2020 ; $i<=2040; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                            @error('year')
                            <p class="text-red-700">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="w-5/6 h-auto flex flex-row-reverse justify-between pt-4 mb-6">
                            <label for="half_year" class="font-semibold ml-5">: half year</label>
                            <select name="half_year" id="half_year" class="cursor-pointer w-2/5 h-8 rounded outline-0 pl-2 border border-gray-400">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            @error('half_year')
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
