When we receive graphics assets, we are looking for an easy way to rename files. Using utilities like [pngquant](http://pngquant.org/) we may want to delete some versions generated.
This scripts provides an easy way to:
- rename assets, first parameter is the string to match, second one is the replacing (it may be empty).
- delete assets, every assets matching the first string parameter will be deleted.

Be careful with those operations, the deleting one doesn't move your assets to the folder, it removes them totally from your computer. You should create a bacukup of your files each time before running those scripts.

Copy & paste your files inside the scripts directory. Then run the [CLI](http://en.wikipedia.org/wiki/Command-line_interface), examples:
- `cd` in the script directory then `php renamer.php -img _image`
- `cd` in the script directory then `php eraser.php _image`
