# 100% Front-end Interview Practical

## Instructions

We have set up this new Laravel project to act as the back-end. A "posts" table *migration*, and Post *model* have been added. 

Please refer to [https://laravel.com/docs/9.x/installation](https://laravel.com/docs/9.x/installation) for more details on setting up a Laravel project. If you're stuck, feel free to also let us know, and we'll help you out!

## Notes

- Please clone this repository, and perform the tasks below.
- You can perform the tasks in any order.
- Use VueJS v3's composition API, with a Vuex/Pinia for the store - and use NPM to install packages.
- Please make the layout look respectable (you can use CDNs to bring in 3rd party CSS frameworks if you like - Tailwind is a bonus).
- Feel free to add any other niceties for the *user experience*.
- ***Please commit your changes and send us a .zip copy (including the .git directory).***

## Task

- Create a basic form for adding a new post. Include a title, body &amp; published field. Title and body fields are required.
- When submitted, save the new post to the database via an API call (routes for the Laravel API code can be found inside `routes/api.php` directly).
- Handle validation response if missing data for creating/editing post
- List all posts below the form, via an API call.
- Have ability to edit post.
- Have ability to delete a post.
- Have a search field that filters the post entries.

*NOTE: `published` does *NOT* hide the post in the list. 

## Information
### Posts Table fields
- `id`
- `title` (required string, 64 characters max)
- `body` (required)
- `published` (boolean - not required and defaults to false)

### API Routes
- `/posts/list` *(GET - all posts)*
- `/posts/create` *(POST - create new post)*
- `/posts/edit/{id}` *(GET - get the post via id)*
- `/posts/update` *(POST - update a post. Id is required to update correct post)*
- `/posts/search/{searchTerm}` *(GET - search/filter posts)*
- `/posts/delete` *(POST - id to delete post)*
