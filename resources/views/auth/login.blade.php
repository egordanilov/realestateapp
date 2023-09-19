@extends('layouts.app')

@section('content')
<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-6/12 mx-auto mt-8" method="POST" action="{{route('login')}}">
    @csrf
    
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
          Email
      </label>
      <input class="@error('email') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" name="email" placeholder="Email" value="{{old('email')}}">
        @error('email')
            <div class="text-red-500">{{$message}}</div>
        @enderror
    </div>

    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="@error('password') border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" placeholder="Your password">
        @error('password')
            <div class="text-red-500">{{$message}}</div>
        @enderror
    </div>


    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" type="submit">
        Login
      </button>
    </div>
  </form>
@endsection