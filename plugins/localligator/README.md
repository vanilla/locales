# Localligator

Works with four different configuration-type files to manage translations.

In the locales repo's tx-source:

`dash_core`: Contains translations for the Dashboard application.
`site_core`: Contains translations for everything else.

In the Localligator plugin strings directory:

`ignore`: Contains the translations marked as ignore.
`untranslated`: Contains a list of translation codes we've encountered that are not in any of the above files.

Using the settings page (/settings/localligator), you can choose from any of the unstranslated strings to
automatically add to either Vanilla (`site_core`) or Dashboard (`dash_core`) or Ignore (`ignore`).

It's up to the developer to make a PR to add their strings to the locale repo tx-source files.

Future improvements to this plugin could include:
* Giving the dev the ability to manually add a definition.
* Giving the dev the ability to change a definition/default translation before adding.

---
Copyright &copy; 2016 Vanilla Forums. Licensed under the terms of the [MIT License](LICENSE.md).
