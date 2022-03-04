@extends('layouts.app')

@section('content')
<div class="container mx-auto py-2 sm:py-3 lg:pt-5">
  @include('partials.page-header')
  <p class="mb-0 font-medium">The latest news from {{ get_bloginfo('name') }}</p>
  @noposts
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endnoposts
</div>
  <div class="container mx-auto">
    <div class="flex flex-wrap md:-mx-1">
      @posts
        <article class="w-full lg:w-1/2 p-1">
          <div class="w-full flex flex-col sm:flex-row py-1-5 relative h-full" style="border-top: 1px solid #f7f7f7;">
            <div class="w-full sm:w-2/3 pr-1 py-1 h-full items-start flex-col flex">
              <div class="relative">
                <a href="@permalink"><h2 class="entry-title">@title</h2></a>
              </div>
              <p class="text-sm post-copy">@excerpt</p>
              <a href="@permalink" class="uppercase font-display text-sm tracking-widest text-primary hover:text-black">View Post</a>
            </div>
            <div class="w-full sm:w-1/3 md:mr-1 relative overflow-hidden rounded-sm" style="min-height: 200px;">
              <img data-src="@thumbnail(false)" src="@thumbnail('lozad', false)" width="100%" height="auto" alt="@title" class="lozad object-cover w-full h-full absolute">
            </div>
          </div>
        </article>
      @endposts
    </div>
  </div>
  {!! get_the_posts_navigation() !!}
@endsection
