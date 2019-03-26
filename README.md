# Craft 3 Unique Field Plugin

> Adds a plain text field type that requires input to be unique.

## Requirements

This plugin requires Craft CMS 3.0.0 or later.

## Installation

To install this plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

```sh
cd /path/to/project
```

2. Tell Composer to require the plugin:

```sh
composer require enovate/craft-unique
```

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Unique Field.

## Usage

Simply create a new field type and select *Unique Plain Text* as the Field Type.

You will then recieve an error if you try to add the same value to this field in multiple entries.
