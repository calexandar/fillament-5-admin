<section class="bg-stone-100 py-24">
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="grid lg:grid-cols-2 gap-16 items-start">

            {{-- Left Content --}}
            <div class="max-w-xl">

                <span class="text-sm tracking-widest text-neutral-500">
                    01 / ABOUT US
                </span>

                <h2 class="mt-6 text-4xl md:text-5xl font-semibold text-neutral-900 leading-tight">
                    Design with purpose.  
                    style with heart.
                </h2>

                <p class="mt-6 text-neutral-600 leading-relaxed">
                    We create thoughtfully designed interiors that balance
                    aesthetics, comfort, and functionality. Our philosophy is
                    rooted in understanding how people live and transforming
                    spaces into meaningful environments that elevate everyday
                    life.
                </p>

                <p class="mt-4 text-neutral-600 leading-relaxed">
                    With a deep attention to detail and craftsmanship, our
                    team collaborates closely with clients to design timeless
                    interiors that reflect their vision and lifestyle.
                </p>

            </div>

            {{-- Right Images --}}
            <div class="grid grid-cols-2 gap-6">

                <img
                    src="{{ asset('images/about-1.jpg') }}"
                    alt="Interior design workspace"
                    class="rounded-xl object-cover w-full h-[320px]"
                />

                <img
                    src="{{ asset('images/about-2.jpg') }}"
                    alt="Modern kitchen design"
                    class="rounded-xl object-cover w-full h-[260px] mt-16"
                />

            </div>

        </div>

    </div>

</section>
