@query([
  'post_type'      => 'post',
  'posts_per_page' => '2'
])
<div class="md:py-24 py-20">
  <div class="container mx-auto">
    <h2 class="text-center text-4xl mb-8">Latest News</h2>
    @hasposts($query)
      <div class="flex flex-wrap md:-mx-4">
        @posts($query)
          <article class="w-full lg:w-1/2 px-4 mb-4 lg:mb-0">
            <div class="w-full flex flex-col sm:flex-row relative h-full">
              <div class="w-full sm:w-2/3 pr-4 py-4 h-full items-start flex-col flex">
                <div class="relative">
                  <a href="@permalink"><h2 class="text-2xl">@title</h2></a>
                </div>
                <div class="mb-4">
                  {!! the_excerpt() !!}
                </div>
                <a href="@permalink" class="uppercase font-display text-sm tracking-widest text-primary hover:text-black">View Post</a>
              </div>
              <div class="w-full sm:w-1/3 md:mr-4 relative rounded-sm overflow-hidden">
                <img data-src="@thumbnail(false)" src="@thumbnail('lozad', false)" width="100%" height="auto" alt="@title" class="lozad object-cover-absolute w-full h-full absolute">
              </div>
            </div>
          </article>
        @endposts
      </div>
      <div class="text-center mt-16">
        <a href="{{ get_permalink( get_option('page_for_posts') ) }}" class="btn bg-primary hover:bg-primary-dark text-white inline-block">View All Posts</a>
      </div>
    @endhasposts
    @noposts
      <p>
        Sorry, no posts could be found
      </p>
    @endnoposts
  </div>
</div>
