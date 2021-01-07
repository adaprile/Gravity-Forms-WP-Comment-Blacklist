# Gravity Forms Blacklist

This filter was created to help combat SPAM for the WP Gravity Forms Plugin. It will use the WordPress Disallowed Comment Keys to validate the fields in a Gravity Form. If a field value contains any of the words in the blacklist, validation will fail and the form will not be submitted.

## How to Use

* Add the filter to your WordPress theme's 'functions.php' file.

* In your WordPress dashboard go to 'Settings > Discussion > Disallowed Comment Keys' (formerly known as 'Comment Blacklist' and 'Comment Blocklist' in WP versions < 5.5). Add the words you would like blacklisted, one per line. 
    * You can use the primitive list I provided in this repository, or consider using [Wordpress Comment Blacklist by splorp](https://github.com/splorp/wordpress-comment-blacklist) - This is a regularly updated blacklist with over 42,000 entries.

* That's all! Now when a field value contains a match to any of the lines in the blacklist, the form submission will fail.

### Extra Notes

**BE CAREFUL!** It is very easy to add things to the blacklist that could accidentally block legitimate form submissions. [Here's a great article explaining this](https://perishablepress.com/wordpress-spam-battle-3-seconds-that-will-save-you-hours-of-time/).

This filter will apply the blacklist validation for all fields in a Gravity Form. 

You can customize the validation message by editing *line 31*. I have it set to 'This field contains bad words!'.

### More Documentation

* [Using the Gravity Forms "gform_validation" Hook](https://docs.gravityforms.com/using-gform-validation-hook/) - I based my code off this example from the official GF docs.
* [WP Codex - Comment Blacklist](https://codex.wordpress.org/Combating_Comment_Spam#Comment_Blacklist) - WP Codex Comment Blacklist info
* [Wordpress Comment Blacklist by splorp](https://github.com/splorp/wordpress-comment-blacklist) - Regularly updated blacklist with over 42,000 entries.
* [Codebase language improvements in 5.5](https://make.wordpress.org/core/2020/07/23/codebase-language-improvements-in-5-5/) - Explains updates to Option Key Names in WP v5.5

## Author

* **Anthony D'Aprile** - [Ney](https://github.com/adaprile/)

## Acknowledgments

[PurpleBooth](https://github.com/PurpleBooth) - Thanks for the awesome [README Template](https://gist.github.com/PurpleBooth/109311bb0361f32d87a2).