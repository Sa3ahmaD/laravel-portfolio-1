@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12">           
            <div class="bg-white p-6 rounded-lg mb-5">
                <h2 class="text-5xl capitalize mb-7">{{ $user->name}}</h2>
                <p>Posted: {{$posts->count()}} {{Str::plural('post',$posts->count())}} and received {{$user->receivedLikes()->count()}} {{Str::plural('like',$user->receivedLikes()->count())}}</p>
            </div>
            <div class="bg-white p-6 rounded-lg">
                
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <x-post :post="$post"/>                
                    @endforeach
                    {{$posts->links()}}
                @else
                    <p>{{ $user->name}} does not have any posts to display.</p>
                @endif
            </div>
        </div>
    </div>
@endsection