# Gravity Forms Blacklist

This hook was created for the WP Gravity Forms Plugin. It will use the WordPress Comment Blacklist to validate the value of the form fields in a Gravity Form. If a field value contains any of the words in the blacklist, validation will fail and the form will not be submitted.

## How to Use

Add the filter to your WordPress theme's 'functions.php' file.

In your WordPress dashboard go to 'Settings > Discussion > Comment Blacklist'. Add the words you would like blacklisted, one per line.

That's all! Now when a field value contains a match to any of the lines in the blacklist, the form submission will fail.

### More Documentation

* [Using the Gravity Forms "gform_validation" Hook](https://docs.gravityforms.com/using-gform-validation-hook/) - I based my code off this example

```

### Installing

A step by step series of examples that tell you how to get a development env running

Say what the step will be

```
Give the example
```

And repeat

```
until finished
```

End with an example of getting some data out of the system or using it for a little demo

## Running the tests

Explain how to run the automated tests for this system

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc