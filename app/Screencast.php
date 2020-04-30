<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Screencast extends Model
{
    use Sushi;

    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    public function getNextAttribute()
    {
        return static::find($this->id + 1);
    }

    public function getPrevAttribute()
    {
        return static::find($this->id - 1);
    }

    protected $rows = [
        [
            'title' => 'Installation',
            'slug' => 'installation',
            'description' => <<<EOT
                Installing Livewire is so simple, this 2.5 minute video feels like overkill. Composer require, and two little lines added to your layout file, and you are fully set up and ready to rumble!
            EOT,
            'url' => 'https://player.vimeo.com/video/396617270',
            'code_url' => null,
            'duration_in_minutes' => '2:32',
            'series_id' => 1,
            'is_paid' => false,
        ],
        [
            'title' => 'Data Binding',
            'slug' => 'data-binding',
            'description' => <<<EOT
                The first and most important concept to understand when using Livewire is "data binding". It's the backbone of page reactivity in Livewire, and it'll be your first introduction into how Livewire works under the hood. Mandatory viewing.
            EOT,
            'url' => 'https://player.vimeo.com/video/398003880',
            'code_url' => null,
            'duration_in_minutes' => '9:11',
            'series_id' => 1,
            'is_paid' => false,
        ],
        [
            'title' => 'Actions',
            'slug' => 'actions',
            'description' => <<<EOT
                Building off the data-binding concept, "actions" in Livewire (the word we use for component methods) is the final piece of the "reactivity" puzzle. Easily trigger back-end code from front-end actions. No endpoints, no controllers, just plain PHP methods.
            EOT,
            'url' => 'https://player.vimeo.com/video/396766334',
            'code_url' => null,
            'duration_in_minutes' => '4:17',
            'series_id' => 1,
            'is_paid' => false,
        ],
        [
            'title' => 'Lifecycle Hooks',
            'slug' => 'hooks',
            'description' => <<<EOT
                When you interact with a Livewire component, a request undergoes a "lifecycle". Understanding the available lifecycle "hooks" allows you to attach behavior conventiently to different phases of an interaction.
            EOT,
            'url' => 'https://player.vimeo.com/video/396767157',
            'code_url' => null,
            'duration_in_minutes' => '4:43',
            'series_id' => 1,
            'is_paid' => false,
        ],
        [
            'title' => 'Nesting',
            'slug' => 'nesting',
            'description' => <<<EOT
                Like any good "component-based" framework, Livewire components are nestable. However, there are a few important caveats to understand about seperating components into "parents" and "children". We'll cover all the ins and outs in this video.
            EOT,
            'url' => 'https://player.vimeo.com/video/396767274',
            'code_url' => null,
            'duration_in_minutes' => '11:28',
            'series_id' => 1,
            'is_paid' => false,
        ],
        [
            'title' => 'Events',
            'slug' => 'events',
            'description' => <<<EOT
                When it comes to "inter-component" communication, Livewire offers a singular, simple, but powerful pattern: Events. You will learn how to use them to make two or more components talk to each other, or even how they can talk to third-party javascript code.
            EOT,
            'url' => 'https://player.vimeo.com/video/396766827',
            'code_url' => null,
            'duration_in_minutes' => '9:44',
            'series_id' => 1,
            'is_paid' => false,
        ],
        [
            'title' => 'Introduction',
            'slug' => 's1-introduction',
            'description' => <<<EOT
                In this video, we get a glimpse of where we're headed in the series and what it will look like.
            EOT,
            'url' => 'https://player.vimeo.com/video/408128508',
            'code_url' => null,
            'duration_in_minutes' => '1:47',
            'series_id' => 2,
            'is_paid' => false,
        ],
        [
            'title' => 'Setting Up The Component',
            'slug' => 's1-setting-up-the-component',
            'description' => <<<EOT
                In this video, we'll set up our first real Livewire component in "Surge", and learn a few handy tricks along the way to reduce boilerplate and manipulate components more efficiently.
            EOT,
            'url' => 'https://player.vimeo.com/video/408118751',
            'code_url' => 'https://github.com/livewire/surge/commit/7a05a339439586143b1c16d89589b4124b64c236',
            'duration_in_minutes' => '6:43',
            'series_id' => 2,
            'is_paid' => false,
        ],
        [
            'title' => 'Setting Up The Form',
            'slug' => 's1-setting-up-the-form',
            'description' => <<<EOT
                In this video, we scaffold out the HTML for the "Registration Form" and give it it's most basic behavior: Creating a user.
            EOT,
            'url' => 'https://player.vimeo.com/video/408118829',
            'code_url' => 'https://github.com/livewire/surge/commit/d57eac13b8f2a5e2127cb6cdf02255a7f26818be',
            'duration_in_minutes' => '8:47',
            'series_id' => 2,
            'is_paid' => true,
        ],
        [
            'title' => 'Adding Validation',
            'slug' => 's1-adding-validation',
            'description' => <<<EOT
                In this video, we finish out the basic feature with form validation. We'll protect against creating multiple users with the same email address and see what validation looks like inside a Livewire component.
            EOT,
            'url' => 'https://player.vimeo.com/video/408118925',
            'code_url' => 'https://github.com/livewire/surge/commit/c7eab961021796b4722161777255b62b14efbad8',
            'duration_in_minutes' => '7:18',
            'series_id' => 2,
            'is_paid' => true,
        ],
        [
            'title' => 'Writing Tests',
            'slug' => 's1-writing-tests',
            'description' => <<<EOT
                Now that we have the basic behavior nailed down, we'll write automated tests against it. This way, going forward, we can run a test suite quickly and easily and be confident everything works!
            EOT,
            'url' => 'https://player.vimeo.com/video/408119012',
            'code_url' => 'https://github.com/livewire/surge/commit/995c2d462f1e0beff6c99f96bbf3d09917f764d3',
            'duration_in_minutes' => '14:51',
            'series_id' => 2,
            'is_paid' => true,
        ],
        [
            'title' => 'Real-Time Validation (TDD)',
            'slug' => 's1-real-time-validation',
            'description' => <<<EOT
                Thus far, we haven't really seen the full advantages of writing a form like this in Livewire. In this video, we'll look at how easy it is to add dynamic behavior like real-time validation to a component. The work is already done for us!
            EOT,
            'url' => 'https://player.vimeo.com/video/408119216',
            'code_url' => 'https://github.com/livewire/surge/commit/5078b3f8057b48c1398dfd574793ddef01b3aa9a',
            'duration_in_minutes' => '7:02',
            'series_id' => 2,
            'is_paid' => true,
        ],
        [
            'title' => 'Styling With Tailwind UI',
            'slug' => 's1-styling',
            'description' => <<<EOT
                Now that we're happy with the way our component WORKS, let's make it LOOK good. We'll use Tailwind & Tailwind UI to make a fantastic looking interface and review some other stylistic things along the way.
            EOT,
            'url' => 'https://player.vimeo.com/video/408118568',
            'code_url' => 'https://github.com/livewire/surge/commit/64d0007a56e9ad90d0718124a3f2b35dd8537139',
            'duration_in_minutes' => '13:19',
            'series_id' => 2,
            'is_paid' => true,
        ],
        /**
         * Profile Page
         */
        [
            'title' => 'Introduction',
            'slug' => 's2-intro',
            'description' => <<<EOT
                My face talking about all the fun and exciting things we’re going to build in this course. My beard is growing long.
            EOT,
            'url' => 'https://player.vimeo.com/video/413629785',
            'code_url' => '',
            'duration_in_minutes' => '1:01',
            'series_id' => 3,
            'is_paid' => true,
        ],
        [
            'title' => 'TDDing A Profile Form',
            'slug' => 's2-tdding-the-profile-page',
            'description' => <<<EOT
                We’ll kick off the course by TDDing out the Livewire component for the profile page form in the backend. It’s way more fun than it sounds.
            EOT,
            'url' => 'https://player.vimeo.com/video/413628748',
            'code_url' => 'https://github.com/livewire/surge/commit/76873cb17e3b4c9691a8da6912513cf5754be485',
            'duration_in_minutes' => '16:21',
            'series_id' => 3,
            'is_paid' => true,
        ],
        [
            'title' => 'Building The Frontend w/ Tailwind UI',
            'slug' => 's2-building-the-frontend-w-tailwind-ui',
            'description' => <<<EOT
                Now we can take our hard work from the TDD video and bring it to life in the browser using Tailwind UI.
            EOT,
            'url' => 'https://player.vimeo.com/video/413628917',
            'code_url' => 'https://github.com/livewire/surge/commit/dc8e729b731008719ffbae0663f1fce6dce7814e',
            'duration_in_minutes' => '10:16',
            'series_id' => 3,
            'is_paid' => true,
        ],
        [
            'title' => 'Alert Message On Save',
            'slug' => 's2-alert-message',
            'description' => <<<EOT
                We’ll add a Livewire-only “saved” alert that will display when the user clicks the “Save” button. This is a clean, reliable, and simple way to get the job done.
            EOT,
            'url' => 'https://player.vimeo.com/video/413629060',
            'code_url' => 'https://github.com/livewire/surge/commit/dc8e729b731008719ffbae0663f1fce6dce7814e',
            'duration_in_minutes' => '12:04',
            'series_id' => 3,
            'is_paid' => true,
        ],
        [
            'title' => 'Toaster Notification On Save',
            'slug' => 's2-toaster-notifications',
            'description' => <<<EOT
                This is our first encounter with the JavaScript framework “AlpineJS”. We’ll use it to build a toaster notification system that we can use throughout the entire app and trigger from any Livewire component. Fantastic stuff.
            EOT,
            'url' => 'https://player.vimeo.com/video/413629233',
            'code_url' => 'https://github.com/livewire/surge/commit/3bbb942c9eeff5ac1146e6241ac7b16715df69aa',
            'duration_in_minutes' => '17:07',
            'series_id' => 3,
            'is_paid' => true,
        ],
        [
            'title' => 'Inline Message On Save',
            'slug' => 's2-inline-message',
            'description' => <<<EOT
                If a toaster notification is too intrusive for you, in this video, we’ll create a subtle but pretty inline “Saved” message that will fade out after 2.5 seconds. This will be our most hardcore usage of Livewire and Alpine together. Buckle up.
            EOT,
            'url' => 'https://player.vimeo.com/video/413629507',
            'code_url' => 'https://github.com/livewire/surge/commit/67909ffe8055fad15d8764e848739a43ef9041e1',
            'duration_in_minutes' => '19:19',
            'series_id' => 3,
            'is_paid' => true,
        ],
    ];
}
