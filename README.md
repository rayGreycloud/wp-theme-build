## WP-THEME-BUILD
### Building WordPress Theme

#### Course Project - WordPress Development, Luis Ramirez, Jr

### Lecture Notes
#### Exploring WordPress & Configuring the wp-config.php File

- The wp-config.php file contains all your settings from database login details to debug settings and hashes.
- You’re free to modify the wp-config.php file without having to worry about it being overwritten in future updates.
- The wp-includes folder contains functions and classes used throughout WordPress. The wp-admin file handles everything on the admin side of WordPress.
- The wp-content folder contains all content created by the user and also stores all plugins and themes.

#### File Headers

- The absolute minimum requirement for WordPress to recognize your theme officially is by creating 2 files named style.css and index.php along with a file header.
- A file header is a block comment placed at the top of your files to let WordPress know more about your theme/plugin.
- The information presented in a file header called meta-information. Meta-informat is formatted as name: value
- A Text Domain is a unique ID for your translations.

#### Functions File & Action Hooks

- WordPress will search for a file called functions.php. This file is completely optional. You can add logic to do heavy lifting behind the scenes.
- The developer tools allow you to diagnose and debug your site. The console tab will output any messages and errors related to your site.
- Action hooks allow you to hook into certain events. If an event occurs, then any functions that hook into the event will be triggered.
- It’s important that you prefix your functions, classes and variables so you can avoid any naming conflicts with other code from plugins and the WordPress core.

#### Loading Styles & Scripts with Enqueues

- It’s always important to register scripts/stylesheets before enqueueing them. Registering will let WordPress know about your files while enqueueing will instruct WordPress to lose the files.
- Prefix your file handle names to avoid collision and naming conflicts with other plugins/themes.
- Use the wp_head and wp_footer functions to instruct WordPress where to load your files.
- It’s important that you never override WordPress’ default scripts such as jQuery.

#### Adding Dummy Content

- FakerPress allows you to generate fake content. Make sure you create fake users, terms and posts.

#### Menu Support

- You can use WordPress’ built-in features by calling the add_theme_support() function and pass in the feature you’d like to take advantage of.
- Once the menu feature is active, then you can register a menu using the register_nav_menu() function.
- After a menu has been registered you can display it using the wp_nav_menu() function. If you have a menu with CSS classes for each item, then you’ll need to use a custom walker to output those classes.
- WordPress provides a few functions for translating strings. If WordPress doesn’t find a translation, then WordPress will return the string as is.

#### Creating Header & Footer Areas

- Use the get_header() and get_footer() functions to load the header and footer sections of your template respectively.
- WordPress requires a certain naming convention for the header (header.php) and footer (footer.php) files.
- If you have multiple header/footer files, then you can pass in an extension. WordPress
- The body_class() function  will load additional classes to the <body> tag.

#### Creating Sidebar and Widget Areas

- Sidebars can be placed inside their own template files called sidebar.php. You can grab a sidebar using the function get_sidebar().
- Sidebars also follow the same naming conventions as the header and footer.
- It’s important that you keep your HTML/CSS for the widgets minimal as it can be hard to maintain with WordPress.
- Make sure to check if a sidebar is active using the is_active_sidebar() function.

#### Formatting the Search Form

- WordPress will search for a file called searchform.php and use it as a template for the search form displayed inside the search widget.
- If the template is not found WordPress will automatically call the function get_search_form() which will generate a search form.
- It’s important that you set the method to GET and that the input field has a name of s.

#### The Loop

- The Loop is a way to allow developers to loop through an array of posts. The number posts in an array varies from page to page.
- In order to use post thumbnails you have to add support for it by calling add_theme_support( ‘post-thumbnails’ );
- Template tags are functions that will retrieve information about the current page or post. They can be used inside or outside a loop.
- Beware of using the_date() inside the loop. There are a lot of problems that come with this function. It’s better to use the get_the_date() function instead.
- Post thumbnails come in various sizes. By default there 4 size aliases that WordPress defines for you. The original size of an image can be grabbed by using the full size alias.

#### Pagination

- WordPress provides 2 functions for pagination which are the previous_posts_link() and next_posts_link() functions.

#### Template Hierarchy & Single Post Template

- The template hierarchy is what WordPress uses to determine what template file to load. The default template is the index.php file.
- WordPress theme development codex provides recommendations for what each template should have.
- Quick tags allow you to insert code into a post that will be dynamically changed depending on the quick tag used.
- The <!—nextpage quick tag allows you to paginate a post.

#### Comments Template

- You can create a template for comments by creating a file called comments.php
- It’s important to check if the current post is password protected using the post_password_required()  function.
- The comment_form() function will display a form while also taking the time to perform additional checks before displaying the form.
- WordPress saves all comments inside a global variable named comments which is available for access inside a loop.

#### Author Template Tags

- It’s important to format text using the nl2br() function. This will make long user bio’s readable.
- The get_avatar() function accepts a user ID, email or comment object as it’s first parameter.

#### Related Posts using the WP_Query Class

- The WP_Query class allows you to query the database for posts. The query is automatically created and executed for you.
There are 2 kinds of loops. Main loops and secondary loops. Main loops are generated by WordPress. Secondary loops are created by you.
- It’s important that you manage your loops carefully. If you have to use the loop multiple times, then you should make sure to reset it after you’re finished.
- The WP_Query class is very powerful. It’s used in many themes and plugins multiple times. It’s important that you make sure it’s perfect for the job.

#### Page Template

- WordPress will load a template called page.php for page templates.
- Page templates tend to be a more minimal version of a single post template, but it’s completely up to the developer/designer.
- If you use the main loop multiple times, then you need to reset the loop every time using the rewind_posts() function.
- If you plan on integrating other plugins then it’s always good to check if their activated. One way of checking is by using the function_exists() function.

#### 404 & Category Template

- The official templates for the 404 and category templates are the 404.php and category.php files respectively.
- To reuse the searchform template you can call the function get_search_form().
- If you have elements that are the same across various templates then you may want to consider putting that code in it’s own template.
- To grab a reusable template you can call the function get_template_part().

#### Search & Custom Templates

- The search.php file is for search templates. It’s important that you provide a form with the searched term.
- Custom template files allow you to give users the choice to choose different template designs.
- You can name your templates whatever you want. It’s best to keep the names short and concise.
- Custom templates can be applied to multiple post types. This is a new feature in versions 4.7 and above.

#### Completing the Header, Title and Ad Sections

- WordPress will generate the <title> tags for each page. You need to call the add_theme_support() function. Do not use the wp_title() function as it is deprecated.
- WordPress will also handle processing the logo image upload. You need to add support for it using the add_theme_support() function.
- WP Quads is a plugin that will manage and display ads for you. Bundling plugins with your theme can increase the value and flexibility of your theme.

#### Theme Customizer API

- The WordPress customizer allows users to modify a theme while also previewing those changes in real time.
- The customizer is growing in popularity. A lot of developers are opting to use it because it’s very easy to extend.
- There are 3 steps you’ll go through when working with the customizer. The first step is to create a setting database value. The second step is creating a section that will contain all the controllers. The third step is to create a controller that is assigned under a section and updates a setting.
- To use a setting on your theme you need to call the function get_theme_mod() with the name of the setting passed in as the first parameter. The setting will be returned so you will need to echo it out if you need to display it.

#### Dropdown & Checkboxes using the Customizer API

- You can create checkbox fields by setting the type key to checkbox.
- The choices key is used to set the values for checkbox. The key will be the value of the checkbox itself. The value will be the human readable text.
- The dropdown-pages will create a dropdown of all published paged on your WordPress site.
- You can set the value to 0 to tell WordPress you don’t want to select a page.

#### Customizer Transport and Overriding Existing Settings

- The order WordPress organizes the customizer is Panels > Sections > Controller
- You are allowed to modify the current existing customizer by simply grabbing what you want to modify with the appropriate get method and then changing the properties.
- You can var_dump() the wp_customize object. It’s a great way to learn and understand what’s being used inside the customizer.
- Setting the transport to postMessage WordPress will let you handle how content is reflected in the preview through JavaScript.

#### More Theme Support & Starter Content

- RSS feeds are a way for users to grab the latest content from your site without having to read it.
- If you plan on taking advantage of HTML5 features, then you’ll need to add support for it and pass in what tags you’d like to add support for.
- The starter content feature allows you to create dummy content for the customizer for users who are installing your theme on a fresh installation of WordPress.
- To simulate a fresh site, you can change the fresh_site value to 1. You can find this option inside the wp_options table.

#### Templates for Post Formats

- Post formats are a way to specify what kind of content is inside the post. It is up to the developer to decide what happens when a specific post format is selected.
- Call the function get_post_format() to grab the current selected format for a post.
You do not have to use every format. - However, it’s recommended you make every format available as plugins are also able to extend and use formats.
- oEmbed is a standard for embedded content. It’s not a WordPress standard, but more of a web standard.

#### Displaying Popular Posts & Conditional Tags

- Conditional tags are a way to check what kind of page is being displayed.
- WordPress popular posts is a plugin that keeps track of how many views a post is and will help display the most popular posts.

#### Finishing Touches

- The dir attribute determines the direction text is displayed. Left-to-right is the default for most browsers.
- The lang attribute will determine the language used for the site.
- The meta charset determines  the character set that should be used for displaying the content of the site.
- The post_class() function will output classes for the current post. It’s also a good idea to give each post a unique ID.
