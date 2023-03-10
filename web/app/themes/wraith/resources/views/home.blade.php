@extends('layouts.app')

@section('content')
@php
    $title = get_field('news_title', 'option');
    $body = get_field('news_body', 'option');
@endphp
<div class="container mx-auto py-8 sm:py-12 lg:pt-20 mt-16 lg:mt-32">
  @if( $title )
    <h1 class="py-3">
      {{ $title }}
    </h1>
  @else
    @include('partials.page-header')
  @endif 
  <p class="mb-0 font-medium">
    {!! $body ?
      $body :
      'The latest news from '. get_bloginfo('name')
    !!}
  </p>
  @noposts
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endnoposts
</div>
  <div class="container mx-auto">
    <div class="flex flex-wrap md:-mx-4">
      @posts
        <article class="w-full lg:w-1/2 p-4">
          <div class="w-full flex flex-col sm:flex-row py-6 relative h-full">
            <div class="w-full sm:w-2/3 pr-4 py-4 h-full items-start flex-col flex">
              <div class="relative">
                <a href="@permalink"><h2 class="text-2xl">@title</h2></a>
              </div>
              <div class="text-sm">@excerpt</div>
              <a href="@permalink" class="uppercase font-display text-sm tracking-widest text-primary hover:text-black">View Post</a>
            </div>
            <div class="w-full sm:w-1/3 md:mr-4">
              <div class="embed-4by3 rounded-sm overflow-hidden">
                <img data-src="@thumbnail('4by3-md', false)" src="@thumbnail('lozad', false)" width="100%" height="auto" alt="@title" class="lozad object-fit-cover">
              </div>
            </div>
          </div>
        </article>
      @endposts
    </div>
  </div>
  {!! get_the_posts_navigation() !!}
@endsection
