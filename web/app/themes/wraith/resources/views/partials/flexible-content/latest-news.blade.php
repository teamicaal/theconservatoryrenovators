@query([
  'post_type'      => 'post',
  'posts_per_page' => '2'
])
<div class="py-12">
  <div class="container mx-auto">
    <h2 class="text-center text-4xl">Latest News</h2>
    @hasposts($query)
      <div class="flex flex-wrap md:-mx-4 mb-4">
        @posts($query)
          <article class="w-full lg:w-1/2 p-4">
            <div class="w-full flex flex-col sm:flex-row py-6 relative h-full">
              <div class="w-full sm:w-2/3 pr-4 py-4 h-full items-start flex-col flex">
                <div class="relative">
                  <a href="@permalink"><h2 class="entry-title">@title</h2></a>
                </div>
                <p class="text-sm post-copy">{!! the_excerpt() !!}</p>
                <a href="@permalink" class="uppercase font-display text-sm tracking-widest text-primary hover:text-black">View Post</a>
              </div>
              <div class="w-full sm:w-1/3 md:mr-4 relative rounded-sm overflow-hidden" style="min-height: 200px;">
                <img data-src="@thumbnail('4by3-md', false)" src="@thumbnail('lozad', false)" width="100%" height="auto" alt="@title" class="lozad object-cover-absolute w-full h-full absolute">
              </div>
            </div>
          </article>
        @endposts
      </div>
      <div class="text-center">
        <a href="{{ get_permalink( get_option('page_for_posts') ) }}" class="btn btn-gray-darker">View All Posts</a>
      </div>
    @endhasposts
    @noposts
      <p>
        Sorry, no posts could be found
      </p>
    @endnoposts
  </div>
</div>
