# Use finisher variable provider of EXT:form in TYPO3

Shows the usage and implementation of finisher variable providers.

## What does it do?

Adds an example finisher that adds a variable "salutation" to the finisher variables which can be used in the email template later.

## Installation

Add repository to your composer.json:

    "repositories": {
        "codebreak": {
            "type": "vcs",
            "url": "https://github.com/passionweb-manuel-schnabel/finisher-variable-provider.git"
        }
    }

Add via composer:

    composer require "passionweb/finisher-variable-provider"

* Install the extension via composer
* Flush TYPO3 and PHP Cache

## Requirements

This example uses no 3rd party libraries.

## Extension settings

There are no extension settings available.

## Extension configuration (TypoScript)

All necessary configurations are read in using the [ext\_typoscript\_setup.typoscript](./ext_typoscript_setup.typoscript) file.

```

plugin.tx_form.settings.yamlConfigurations {
    1709276020 = EXT:finisher_variable_provider/Configuration/Yaml/BaseSetup.yaml
}

module.tx_form.settings.yamlConfigurations {
    1709276020 = EXT:finisher_variable_provider/Configuration/Yaml/BaseSetup.yaml
    1709276021 = EXT:finisher_variable_provider/Configuration/Yaml/FormEditorSetup.yaml
}

```

## Troubleshooting and logging

If something does not work as expected take a look at the log file.
Every problem is logged to the TYPO3 log (normally found in `var/log/typo3_*.log`)

## Achieving more together or Feedback, Feedback, Feedback

I'm grateful for any feedback! Be it suggestions for improvement, requests or just a (constructive) feedback on how good or crappy this snippet/repo is.

Feel free to send me your feedback to [service@passionweb.de](mailto:service@passionweb.de "Send Feedback") or [contact me on Slack](https://typo3.slack.com/team/U02FG49J4TG "Contact me on Slack")
