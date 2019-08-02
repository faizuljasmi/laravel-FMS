# Laravel-FMS

This is a project-in-progress to develop a Feedback Management System.
Some of the planned features/modules are:
<ul>
<li>Multiple user levels: visitor(complainer), employee (complainee), admin</li>
<li>Visitor dashboard</li>
<li>Employee/Admin dashboard</li>
<li>Create, edit, reply, delete a complaint</li>
<li>Complaint listing, sorting and pagination.</li>
<li>more will be decided soon</li>
</ul>

As of now (August 2) this system is able to:
<ul>
<li>Simple user(one level) registration and login</li>
<li>User specific complaints listing (will only display complaint made by that user)</li>
<li>Create, edit, and delete complaint</li>
<li>Fully functioning database with correct relations</li>
<li>Complaint status (open,pending,completed)</li>
<li>Complaints sorting, on the display table</li>
</ul>

Features that are planned to be implemented soon/are being worked on:
<ul>
<li>User levels</li>
<li>Reply/feedback on complaints</li>
<li>Replies ownership</li>
<li>Assigning complaints to certain department/employee</li>
</ul>

This readme will be updated in a timely basis.

# Setup & Installation

First, make sure you have Composer and Laravel installed. To do so, refer [here](https://laravel.com/docs/5.8/installation#installation)

Then, clone the repo

`git clone https://github.com/faizuljasmi/laravel-FMS.git`

Then, rename ".env.example" to ".env". Configure the file according to your local databse config.

Create a database locally and add it into the database configuration in the .env file </br>

Once you have it configured, run:

`php artisan key:generate`

`php aritsan migrate`

This will populate your database with all appropriate tables

Then, run:

` php artisan db:seed`

This will populate your tables with fake data, which is sweet for testing, developing and viewing purposes.

Lastly, run:

 `php artisan serve`
 
 ## Admin account:
 
 email: faizul@rocketweb.my
 
 pswd: secret
