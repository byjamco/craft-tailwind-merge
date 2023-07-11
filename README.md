# TailwindMerge

Tailwind Merge Utility for Twig. This is a wrapper around

## Usage

```
<a href="" class="{{ twMerge('rounded-full px-2 font-semibold border-4', 'font-bold border-6') }}">
</a>
```

Will return

```
<a href="" class="rounded-full px-2 font-bold border-6"></a>
```

For full usage take a look at https://github.com/gehrisandro/tailwind-merge-php

## Requirements

This plugin requires Craft CMS 4.4.0 or later, and PHP 8.0.2 or later.

## Installation

You can install this plugin from the Plugin Store or with Composer.

#### From the Plugin Store

Go to the Plugin Store in your project’s Control Panel and search for “TailwindMerge”. Then press “Install”.

#### With Composer

Open your terminal and run the following commands:

```bash
# go to the project directory
cd /path/to/my-project.test

# tell Composer to load the plugin
composer require byjam/craft-tailwind-merge

# tell Craft to install the plugin
./craft plugin/install tailwind-merge
```
