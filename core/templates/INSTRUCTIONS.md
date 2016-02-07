# INSTRUCTIONS

* Run all the `output/scripts/*` in your database
* Copy all `output/Models/*` files to your `app/Models` folder
* Copy the `output/Cms` folder to your `app/Plugin` folder
* Activate the `Cms` plugin in `app/Config/bootstrap.php`: 
```
CakePlugin::load('Cms', ['routes' => true]);
```