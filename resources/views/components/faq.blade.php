<section class="py-28 bg-white">

<div class="max-w-4xl mx-auto px-6">

<span class="text-sm tracking-widest text-neutral-500">
05 / FAQ
</span>

<h2 class="mt-4 text-4xl font-semibold text-neutral-900">
Answers to Your Frequently Asked Questions
</h2>


<div class="mt-12 space-y-6">

@foreach([
'Do you offer custom interior concepts?',
'How long does a project take?',
'What services do you provide?',
'Can I schedule a consultation?'
] as $question)

<div x-data="{open:false}" class="border-b pb-4">

<button 
@click="open=!open"
class="w-full flex justify-between text-left text-lg font-medium"
>

{{ $question }}

<span x-text="open ? '-' : '+'"></span>

</button>

<p 
x-show="open"
x-transition
class="mt-3 text-neutral-600"
>

We provide tailored interior solutions including planning,
design consultation, and full project execution.

</p>

</div>

@endforeach

</div>

</div>
</section>
