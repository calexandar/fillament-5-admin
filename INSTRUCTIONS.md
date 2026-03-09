# Filament CMS Integration Instructions for Laravel Landing Page

This guide explains how to implement **Filament CMS management** for the
landing page sections: - Hero - About - Metrics - Services - Events -
FAQ - CTA

The goal is to allow non‑developers to edit the landing page from the
**Filament Admin Panel**.

------------------------------------------------------------------------

# 1. Recommended Architecture

Use **one database table per section type** where dynamic content is
needed.

Suggested structure:

  Section    Table
  ---------- ----------------
  Hero       heroes
  About      about_sections
  Metrics    metrics
  Services   services
  Events     events
  FAQ        faqs
  CTA        ctas

Alternatively you can store everything inside a **landing_pages table
with JSON fields**, but separate tables are easier to maintain.

------------------------------------------------------------------------

# 2. Create Models and Migrations

Example for the Hero section.

``` bash
php artisan make:model Hero -m
```

Migration example:

``` php
Schema::create('heroes', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('subtitle')->nullable();
    $table->string('button_text')->nullable();
    $table->string('button_link')->nullable();
    $table->string('background_image')->nullable();
    $table->timestamps();
});
```

Run:

``` bash
php artisan migrate
```

------------------------------------------------------------------------

# 3. Create Filament Resource

Generate a resource:

``` bash
php artisan make:filament-resource Hero
```

Example form schema:

``` php
public static function form(Form $form): Form
{
    return $form
        ->schema([
            TextInput::make('title')
                ->required()
                ->maxLength(255),

            Textarea::make('subtitle'),

            TextInput::make('button_text'),

            TextInput::make('button_link'),

            FileUpload::make('background_image')
                ->image()
                ->directory('hero'),
        ]);
}
```

------------------------------------------------------------------------

# 4. Repeat for Other Sections

Example resources:

``` bash
php artisan make:filament-resource Service
php artisan make:filament-resource Event
php artisan make:filament-resource Faq
php artisan make:filament-resource Metric
```

Typical fields:

## Services

-   title
-   description
-   image

## Events

-   title
-   date
-   image
-   description

## FAQ

-   question
-   answer

## Metrics

-   label
-   value

------------------------------------------------------------------------

# 5. Connect Data to Blade Views

Example in controller:

``` php
public function __invoke()
{
    $hero = Hero::first();
    $services = Service::all();
    $events = Event::latest()->limit(3)->get();
    $faqs = Faq::all();

    return view('pages.home', compact(
        'hero',
        'services',
        'events',
        'faqs'
    ));
}
```

------------------------------------------------------------------------

# 6. Blade Hero Example

``` blade
<section class="relative h-screen">

<img src="{{ Storage::url($hero->background_image) }}" class="absolute inset-0 w-full h-full object-cover">

<div class="relative z-10 text-center text-white">

<h1>{{ $hero->title }}</h1>

<p>{{ $hero->subtitle }}</p>

<a href="{{ $hero->button_link }}">
{{ $hero->button_text }}
</a>

</div>

</section>
```

------------------------------------------------------------------------

# 7. Image Storage

Ensure Filament uploads work correctly.

Run:

``` bash
php artisan storage:link
```

Use in Blade:

``` php
Storage::url($model->image)
```

------------------------------------------------------------------------

# 8. Optional Improvements

## Repeater fields

For metrics or FAQ:

``` php
Repeater::make('items')
```

## Media Library

For advanced media management:

    spatie/laravel-medialibrary
    filament/spatie-laravel-media-library-plugin

## Page Builder

For a more flexible CMS:

    filament-fabricator

or

    awcodes/filament-curator

------------------------------------------------------------------------

# 9. Recommended Landing Page Workflow

1.  Designer builds Blade layout
2.  Developer connects fields to Filament
3.  Client edits content through admin
4.  Images and text update automatically

------------------------------------------------------------------------

# 10. Production Tips

-   Cache queries for homepage
-   Use eager loading
-   Optimize images
-   Use CDN for media

Example:

``` php
$services = Cache::remember(
    'homepage_services',
    3600,
    fn() => Service::all()
);
```

------------------------------------------------------------------------

# Result

After implementing this setup you will have:

-   Fully editable landing page
-   Admin controlled content
-   Clean Blade templates
-   Scalable CMS architecture
