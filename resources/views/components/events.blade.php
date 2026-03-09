<section class="py-28 bg-stone-100">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-16">

            <div>

                <span class="text-sm tracking-widest text-neutral-500">
                    04 / EVENTS
                </span>

                <h2 class="mt-6 text-4xl font-semibold text-neutral-900">
                    Discover our recent events
                    and achievements
                </h2>

                <p class="mt-6 text-neutral-600">
                    Stay updated with our latest projects,
                    collaborations and design milestones.
                </p>

            </div>


            <div class="space-y-8">

                @foreach(range(1,3) as $post)

                <div class="flex gap-6 items-center">

                    <img
                        src="{{ asset('images/event-'.$post.'.jpg') }}"
                        class="w-24 h-24 object-cover rounded-lg"
                    >

                    <div>

                        <p class="text-sm text-neutral-500">
                            {{ $post === 1 ? 'March 2026' : ($post === 2 ? 'February 2026' : 'January 2026') }}
                        </p>

                        <h4 class="text-lg font-medium text-neutral-900">
                            {{ $post === 1 ? 'Award-winning design excellence recognized' : ($post === 2 ? 'New luxury interior project completed' : 'Featured in top design magazine') }}
                        </h4>

                    </div>

                </div>

                @endforeach

            </div>

        </div>

    </div>

</section>
