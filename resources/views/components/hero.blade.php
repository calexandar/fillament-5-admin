<section class="relative h-screen w-full overflow-hidden">

    {{-- Background Image --}}
    @if($hero?->background_image)
        <img 
            src="{{ Storage::url($hero->background_image) }}" 
            alt="Interior design"
            class="absolute inset-0 w-full h-full object-cover"
        />
    @else
        <img 
            src="{{ asset('images/hero.jpg') }}" 
            alt="Interior design"
            class="absolute inset-0 w-full h-full object-cover"
        />
    @endif

    {{-- Dark Gradient Overlay --}}
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/30 to-black/60"></div>

    {{-- Content --}}
    <div class="relative z-10 flex flex-col items-center justify-center text-center h-full px-6">

        <h1 class="text-white text-4xl md:text-6xl font-semibold max-w-3xl leading-tight">
            {{ $hero?->title ?? 'We are experts elevating lives' }}
        </h1>

        <p class="text-white/80 mt-6 max-w-xl text-lg">
            {{ $hero?->subtitle ?? 'Creating spaces that inspire comfort, elegance, and functionality for modern living.' }}
        </p>

        <a href="{{ $hero?->button_link ?? '#contact' }}"
           class="mt-8 inline-block bg-white text-black px-6 py-3 rounded-md font-medium hover:bg-neutral-200 transition">
            {{ $hero?->button_text ?? 'Start Your Project' }}
        </a>

    </div>

    {{-- Stats --}}
    <div class="absolute bottom-10 left-0 right-0 z-10">
        <div class="max-w-6xl mx-auto grid grid-cols-3 text-center text-white">

            <div>
                <p class="text-3xl font-semibold">{{ $hero?->stat_1_value ?? '250' }}</p>
                <p class="text-sm text-white/70 mt-1">{{ $hero?->stat_1_label ?? 'Projects Completed' }}</p>
            </div>

            <div>
                <p class="text-3xl font-semibold">{{ $hero?->stat_2_value ?? '90' }}</p>
                <p class="text-sm text-white/70 mt-1">{{ $hero?->stat_2_label ?? 'Expert Designers' }}</p>
            </div>

            <div>
                <p class="text-3xl font-semibold">{{ $hero?->stat_3_value ?? '150' }}</p>
                <p class="text-sm text-white/70 mt-1">{{ $hero?->stat_3_label ?? 'Happy Clients' }}</p>
            </div>

        </div>
    </div>

</section>
