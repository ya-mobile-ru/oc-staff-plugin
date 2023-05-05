# Staff plugin

Simple plugin for publishing staff of company for October CMS.

## Installation

Run the following to install this plugin:

```
php artisan plugin:install Yamobile.Staff
```

To uninstall this plugin:

```
php artisan plugin:remove Yamobile.Staff
```


## Using components

This plugin provides 5 components — `Member`,`Members`,`Categories`,`Settings`.
All Components allow you to output information about categories or services to your template.
Categories, Services and Prices added to the backend panel of your site will be available in the twig template.


### Categories


This component supports the `categoriesPerPage` property, which accepts a string.
This property is responsible for the number of categories displayed on the page.
If you need to display all categories, then you need to leave the line empty.

```Twig
[Categories]
categoriesPerPage = "10" or ""
==

{% set categories = Categories.categories %}

{% for category in categories %}

    <h1>{{ category.name }}</h1>
    
    {% for member in category.members %}
           {# any params member #}
           {{ member.name }}
    {% endfor %}
    
{% endfor %}
```

### Member

This component allows you to output information from the backend to your Twig template to display a specific member of organisation by url.
This component supports the `slug` property, for part of the url.
To use the component, you must enter `:slug` in the page url when creating the page.
This component provides 1 public variable - `member`.
This variable outputs all the information about the member of organisation.


```Twig
meta_title = {{ Member.member.meta_title }}
meta_description = {{ Member.member.meta_desctiption }}

[Member]
slug = "{{ :slug }}"
==

{% set staff_member = Member.member %}


<h1>{{ staff_member.name }}</h1>
<img scr="{{ staff_member.photo | media }}" />
<ul>
{% for position in staff_member.positions %}
    <li>{{ position }}</li>
{% endfor %}
</ul>
<p>{{ staff_member.description }}</p>

<div>
 {{ staff_member.content | raw }}
</div

```

### Members


This component supports the `membersPerPage` property, which accepts a string.
This property is responsible for the number of members displayed on the page.
If you need to display all members, then you need to leave the line empty.

```Twig
[Members]
membersPerPage = "20" or ""
==

{% set members = Members.members %}

{% for member in members %}
    <h1>{{ member.name }}</h1>
    <img scr="{{ member.photo | media }}" />
    <ul>
    {% for position in member.positions %}
        <li>{{ position }}</li>
    {% endfor %}
    </ul>
    <p>{{ member.description }}</p>
        
    <div>
     {{ members.content | raw }}
    </div
{% endfor %}

{{ members.render | raw }}

```


### Settings

This component provides 1 public variable - `settings`.
This variable outputs all the information from settings plugin.

It can be used for the main page of members of your organisation.
In the settings, you can enter the page metadata,
an image and a description of the page.

```Twig
meta_title = {{ Settings.settings.meta_title }}
meta_description = {{ Settings.settings.meta_description }}

[Settings]
==
{% set member_settings = Settings.settings %}
<h1>{{ member_settings.h1 }}</h1>
<p>{{ member_settings.description }}</p>
<img src="{{ member_settings.image | media }}" />
```