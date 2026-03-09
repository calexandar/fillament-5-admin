03 — Services Section (Dark Section)

Your screenshot shows a dark background + project/service cards.

<section class="bg-neutral-950 py-28 text-white">

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="flex justify-between items-end mb-16">

            <div>
                <span class="text-sm tracking-widest text-neutral-400">
                    03 / SERVICES
                </span>

                <h2 class="mt-4 text-4xl font-semibold">
                    Expert guidance and solutions
                    for your project stages
                </h2>
            </div>

            <a href="#"
               class="border border-white/30 px-6 py-3 rounded-lg text-sm hover:bg-white hover:text-black transition">
               View all services
            </a>

        </div>


        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

            @foreach(range(1,4) as $service)

            <div class="group">

                <div class="overflow-hidden rounded-xl">

                    <img
                        src="{{ asset('images/service-'.$service.'.jpg') }}"
                        class="w-full h-[280px] object-cover transition duration-700 group-hover:scale-110"
                    >

                </div>

                <h3 class="mt-4 text-lg font-medium">
                    Interior Design
                </h3>

                <p class="text-neutral-400 text-sm">
                    Thoughtfully crafted interiors.
                </p>

            </div>

            @endforeach

        </div>

    </div>

</section>