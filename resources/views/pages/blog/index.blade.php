@extends('app')

@section('content')
<section class="bg-white">
    <div class="container pt-20 pb-20 lg:pb-40">
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 col-start-1 lg:col-span-3">
                <h1 class="mb-4 text-xl text-black">
                    {{ $blog->h1 }}
                </h1>
            </div>
            <div class="col-span-12 col-start-1 lg:col-start-4 lg:col-span-1">
                @include('partials.svg.icon-arrow-ttb')
            </div>
            <div class="col-span-12 col-start-1 lg:col-start-5 lg:col-span-8">
                <x-lit-image :image="$blog->image" class="w-full" />
            </div>
        </div>
        <div class="grid grid-cols-12 gap-5 mt-20 lg:mt-40">
            <div class="col-span-12 col-start-1 lg:col-span-7">
                <h2 class="h1">
                    {{ $blog->h2 }}
                </h2>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-5">
            <div class="col-span-12 col-start-1 text-xl md:col-span-6 lg:col-span-7">
                {!! $blog->text_intro !!}
            </div>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container pb-20 lg:pb-40">
        <div class="grid grid-cols-12 gap-10">
            {{-- {{$posts[0]->slug}} --}}
            @foreach($posts as $post)
            <div class="col-span-12 mt-6 lg:col-span-6 lg:mt-12">
                <x-post :post="$post" />
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection