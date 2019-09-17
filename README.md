Locales for Vanilla Forums 
=======

The locales in this repository are periodically generated from the [Vanilla Transifex account](https://www.transifex.com/projects/p/vanilla/). They are compatible with all versions of Vanilla Forums since 2.0.18.

To install a locale, simply copy its folder into the `locales` folder in your Vanilla installation. Then go to `Locales` in the Dashboard to enable it. You may also be interested in the [Multilingual addon](https://open.vanillaforums.com/addon/multilingual-plugin).

We changed many locale names in 2014 to discard the country code where it wasn't necessary to simplify translating.

### Contributing

To contribute, please create an account on Transifex.com and request access to a team via the [Vanilla Forums Community Forum](https://open.vanillaforums.com/discussions). We'd love your help!

We [moved our Transifex project](https://open.vanillaforums.com/discussion/28108/vanillas-transifex-moved-rejoin-your-team#latest) in October 2014. This removed all contributors _automatically_. Please rejoin your teams! We apologize for the inconvenience and definitely didn't intend to remove you.

Our contributors have given Vanilla terrific international language support. Thanks for your support!

### Updating locales with transifex translations

Translations made in Transifex are automatically added to the **transifex** branch. You'll need to create a pull request to merge the transifex branch to master. Make sure the transifex branch does not get deleted so that it can continue to be used by Transifex.

If you make changes to source strings you should make a PR against the transifex branch rather than master so that they will be automatically synchronized with Transifex. If you accidentally add new source strings to master, just merge master back into the transifex branch.
