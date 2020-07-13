Guide for Transifex translators
===============================

Here are some additional guidelines we’d like you to consider while translating:

- Do not translate company names such as ‘Facebook’, ‘Google’ or ‘Twitter’.
- Please be case sensitive and follow the capitalization of the source file – unless it is inappropriate to do so in your language (for example languages aren’t capitalized in French).
- `&amp;` is the ‘&’ symbol. So if the ‘&’ symbol isn’t required in the translation, there is no need to include it, if you do need the ‘and’ symbol, please use the same code as in the English string.
- Please copy over any other HTML characters that appear in the source file, e.g. `&bull;` is the code for a bullet point, so this will be needed in the translation otherwise the bullet point will be missing!
- Please do not enter any translations that would not be appropriate to publish directly on the site. E.g. if there are two words that could be used, don’t include both with a / separating them. Please choose the best word and then leave a comment if you are unsure. The reason for this is to avoid translations filtering to the website that aren’t intended to.
- Where there is a blank (e.g. “{0}”) please copy that bit over and translate the rest. Same with “{1}”. It indicates a field that will be automatically populated on the site (usually with the user’s search query)
- Please do not translate anything in angular brackets, `< >`, as that is a style instruction for the developers. You can copy across the `<strong>, <b>, <a>, etc.` in English and translate the rest.
- Please do not translate anything in curly braces, `{ }`, as that is an instruction for the developers.
- The exception to this rule is when you see a string like `{Points,plural,%s points,%s point}`. The last two strings (ie. "%s points" and "%s point") should be translated, but nothing else.
- Where there are characters such as %s please copy that bit over and translate the rest. Same with %1$s, %2$s etc. These indicate a field that will be automatically populated by other translations or data.
- As we can’t preview translations on the page, be aware that there might be an impact on the site design if the translation is much longer than source language – please flag any translated strings if they are 50% longer than the source string, by using the tag ‘length’.