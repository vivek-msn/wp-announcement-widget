Widget Development

This repository demonstrates the creation of a custom WordPress widget. The widget is designed to showcase how to build, customize, and register a widget in WordPress, providing a functional and clean example for developers.

Features

Fully functional WordPress widget.

Includes a backend form for user input.

Outputs dynamic content on the frontend.

Implements WordPress coding standards.

Securely sanitizes and validates user input.

Installation

Clone the repository to your WordPress theme or plugin directory:

git clone https://github.com/vivek-msn/wp-announcement-widget.git

Include the widget file in your theme's functions.php or in your plugin file.

include_once 'path-to-widget-file.php';

Go to your WordPress admin panel and navigate to Appearance > Widgets.

Add the "Simple Widget" to any widget area.

Usage

The widget includes a title field in the admin panel, where you can set a custom title.

It outputs the title and a simple message: "Hello, this is my first widget!"

Code Structure

The widget class consists of the following key methods:

__construct(): Initializes the widget with an ID, name, and description.

widget($args, $instance): Renders the widget on the frontend.

form($instance): Generates the form fields for the widget settings in the admin area.

update($new_instance, $old_instance): Handles saving the widget settings.

Example Code