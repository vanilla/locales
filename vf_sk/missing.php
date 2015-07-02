<?php

$Definition['BanReason.1'] = 'Banned by a community manager.';
$Definition['BanReason.2'] = 'Banned by IP address, email, or name.';
$Definition['BanReason.4'] = 'Temporarily banned by a community manager.';
$Definition['BanReason.8'] = 'Banned by warnings.';

$Definition['default type'] = 'default';

$Definition['EmailWelcomeRegister'] = 'You have successfully registered for an account at {Title}. Here is your information:

  Username: {User.Name}
  Email: {User.Email}

You can access the site at {/,exurl,domain}.';

$Definition['Garden.Import.Continue.Description'] = 'It appears as though you are in the middle of an import.
   Please choose one of the following options.';
$Definition['Garden.Import.InputInstructions'] = 'Enter the email and password of the admin user from the data being imported.';
$Definition['Garden.Import.Merge'] = 'Merge with this forum.';
$Definition['Garden.Import.Merge.Description'] = 'This will merge all of the user and discussion data from the import into this forum.
<b>Warning: If you merge the same data twice you will get duplicate discussions.</b>';
$Definition['Garden.Import.Overwrite'] = 'Overwrite this forum.';
$Definition['Garden.Import.Overwrite.Description'] = 'Warning: All data in this forum will be overwritten.';
$Definition['Garden.StatisticsDisabled'] = 'You have specifically disabled Vanilla Statistics in your configuration file.';
$Definition['Garden.StatisticsLocal.Explain'] = 'This forum appears to be running in a test environment, or is otherwise reporting a private IP. By default, forums running on private IPs are not tracked.';
$Definition['Garden.StatisticsLocal.Resolve'] = 'If you\'re sure your forum is accessible from the internet you can force it to report statistics here:';
$Definition['Garden.StatisticsReadonly.Explain'] = 'Your config.php file appears to be read-only. This means that Vanilla will be unable to automatically register your forum\'s InstallationID and InstallationSecret.';
$Definition['Garden.StatisticsReadonly.Resolve'] = 'To solve this problem, assign file mode 777 to your conf/config.php file.';
$Definition['Guest roles'] = 'Check all roles that should be applied to guests.';

$Definition['HeadlineFormat.AddUser'] = '{ActivityUserID,user} added an account for {RegardingUserID,user}.';
$Definition['HeadlineFormat.ConversationMessage'] = '{ActivityUserID,User} sent you a <a href="{Url,html}">message</a>';
$Definition['HeadlineFormat.PictureChange'] = '{RegardingUserID,You} changed {ActivityUserID,your} profile picture.';
$Definition['HeadlineFormat.RegistrationApproval'] = '{ActivityUserID,user} approved the applications for {RegardingUserID,user}.';
$Definition['HeadlineFormat.Status'] = '{ActivityUserID,user}';
$Definition['HeadlineFormat.WallPost'] = '{RegardingUserID,you} &rarr; {ActivityUserID,you}';

$Definition['I confirm that I have received consent to join this community.'] = 'Since I\'m under %d years old, I confirm that I have received consent to join this community.';
$Definition['Invitations can be sent from users\' profile pages.'] = 'When you use registration by invitation users will have a link called <a href="%s" class="Popup">My Invitations</a> on their profile pages.';

$Definition['Locales allow you to support other languages on your site.'] = 'Locales allow you to support other languages on your site. Enable and disable locales you want to make available here.';
$Definition['Locales are in your %s folder.'] = 'Locales allow you to support other languages on your site. Once a locale has been added to your %s folder, you can enable or disable it here.';
$Definition['LogoDescription'] = 'The banner logo appears at the top of your site. Some themes may not display this logo.';

$Definition['Make sure you click View Page'] = 'Make sure you click <a href="%s">View Page</a> to see what your categories page looks like after saving.';
$Definition['Member roles'] = 'Check all roles that should be applied to new/approved users.';
$Definition['Messages can appear anywhere in your application.'] = 'Messages can appear anywhere in your application, and can be used to inform your users of news and events. Use this page to re-organize your messages by dragging them up or down.';

$Definition['NewApplicantEmail'] = 'New applicant:';
$Definition['No results for %s.'] = 'No results for <b>%s</b>.';
$Definition['NotifyApplicant'] = 'Notify me when anyone applies for membership.';
$Definition['Null Date'] = '-';

$Definition['OldPassword'] = 'Old password';

$Definition['ParticipatedHomepageTitle'] = 'Participated Discussions';
$Definition['Password Contains Username'] = 'Contains Username';
$Definition['Password Good'] = 'Good';
$Definition['Password Ok'] = 'Ok';
$Definition['PasswordRequest'] = 'Someone has requested to reset your password at %2$s. To reset your password, follow this link:

  %3$s

If you did not make this request, disregard this email.';
$Definition['Password Strong'] = 'Strong';
$Definition['Password Too Short'] = 'Too Short';
$Definition['Password Very Weak'] = 'Very Weak';
$Definition['Password Weak'] = 'Weak';
$Definition['PermissionErrorMessage'] = 'You don\'t have permission to do that.';
$Definition['PermissionErrorTitle'] = 'Permission Problem';
$Definition['PermissionRequired.Garden.Moderation.Manage'] = 'You need to be a moderator to do that.';
$Definition['PermissionRequired.Garden.Settings.Manage'] = 'You need to be an administrator to do that.';
$Definition['PermissionRequired.Javascript'] = 'You need to enable javascript to do that.';
$Definition['Please join my group.'] = 'Please join my <a href="{Url,html}">group</a>.';
$Definition['PluginHelp'] = 'Plugins allow you to add functionality to your site.<br />Once a plugin has been added to your %s folder, you can enable or disable it here.';
$Definition['Pockets.BetweenDiscussions.Description'] = 'The pocket is displayed between each discussion on the main discussion list. Since discussions are usually in &lt;li&gt;..&lt;/li&gt; tags, you\'ll need to wrap your pocket in those tags too.';
$Definition['Posts.Plural: %s'] = 'Posts: %s';
$Definition['Posts.Singular: %s'] = 'Posts: %s';
$Definition['PreferenceBadgeEmail'] = 'Notify me when I earn a badge.';
$Definition['PreferenceBadgePopup'] = 'Notify me when I earn a badge.';
$Definition['Private group.'] = 'Anyone can see the group, but only members can see its content. People must apply or be invited to join.';
$Definition['ProfileFieldsCustomDescription'] = 'Use these fields to create custom profile information. You can enter things like "Relationship Status", "Skype", or "Favorite Dinosaur". Be creative!';
$Definition['ProxyConnect.NoAuthenticate'] = 'It doesn\'t seem like we were
               able to retrieve a logged-in session from the AuthenticateURL you
               specified. Please make sure you are logged in to your remote application
               before performing this test.';
$Definition['ProxyConnect.RimBlurb'] = 'If you are using ProxyConnect with an officially supported remote application plugin such as our wordpress-proxyconnect plugin, these values will be available in that plugin\'s configuration screen.';
$Definition['ProxyConnect.TestIntro'] = 'This interface will allow you to test your configuration and ensure that
   ProxyConnect is working.';
$Definition['ProxyConnect.TestSettings'] = 'Once you have configured ProxyConnect below, <b>and saved your changes</b>, you can test your new settings by pressing \'Test ProxyConnect Settings\'';
$Definition['Public group.'] = 'Anyone can see the group and its content. Anyone can join.';

$Definition['Q&A Accepted'] = 'Answered ✓';
$Definition['Q&A Answered'] = 'Answered';
$Definition['Q&A Question'] = 'Question';
$Definition['QnA Accepted Answer'] = 'Answer ✓';
$Definition['QnA Rejected Answer'] = 'Rejected Answer';
$Definition['Quote on'] = 'on';
$Definition['Quote wrote'] = 'wrote';

$Definition['Ranks.ActivityFormat'] = '{ActivityUserID,user} {ActivityUserID,plural,was,were} promoted to {Data.Name,plaintext}.';
$Definition['Ranks.NotificationFormat'] = 'Congratulations! You\'ve been promoted to {Data.Name,plaintext}.';
$Definition['RecipientUserID'] = 'recipient';
$Definition['Record Content'] = 'Content';
$Definition['ReplyOnly'] = 'You can reply to this email directly to follow up. Sent from {/,exurl}.';
$Definition['ReplyOrFollow'] = 'Reply to this email directly or follow the link below to check it out:';
$Definition['Report Notes'] = 'Notes';
$Definition['Report Reason'] = 'Reason';
$Definition['Restoring your selection removes the items from this list.'] = 'When you restore, the items are removed from this list and put back into the site.';
$Definition['RoleID'] = 'role';

$Definition['Saved'] = 'Your changes have been saved.';
$Definition['SaveLocalePack'] = 'Save';
$Definition['SearchBoxPlaceHolder'] = 'Search';
$Definition['Search by user or role.'] = 'Search for users by name or enter the name of a role to see all users with that role.';
$Definition['Search for a tag.'] = 'Search for all or part of a tag.';
$Definition['sep and'] = 'and';
$Definition['Show all possible pocket locations.'] = 'Turn this option on to show all possible pocket locations. Turning on this option will only show the locations to users that can manage pockets.';
$Definition['SignedOut'] = 'You are signed out.';
$Definition['SignIn'] = 'Sign In';
$Definition['SigningOut'] = 'Hang on a sec while we sign you out.';
$Definition['Sign In or Register to Comment.'] = '<a href="{SignInUrl,html}"{Popup}>Sign In</a> or <a href="{RegisterUrl,html}">Register</a> to comment.';
$Definition['Source Code'] = 'Code';
$Definition['Spend a little time thinking about how you describe your site here.'] = 'Spend a little time thinking about how you describe your site here. Giving your site a meaningful title and concise description could help your position in search engines.';
$Definition['Start a New Conversation'] = 'New Message';
$Definition['Start a New Discussion'] = 'New Discussion';

$Definition['TagHint'] = 'Start to type...';
$Definition['TermsOfService'] = 'Terms of Service';
$Definition['TermsOfServiceText'] = 'You agree, through your use of this service, that you will not use this
community to post any material which is knowingly false and/or defamatory,
inaccurate, abusive, vulgar, hateful, harassing, obscene, profane, sexually
oriented, threatening, invasive of a person\'s privacy, or otherwise violative
of any law. You agree not to post any copyrighted material unless the
copyright is owned by you.

We at this community also reserve the right to reveal your identity (or
whatever information we know about you) in the event of a complaint or legal
action arising from any message posted by you. We log all internet protocol
addresses accessing this web site.

Please note that advertisements, chain letters, pyramid schemes, and
solicitations are inappropriate on this community.

We reserve the right to remove any content for any reason or no reason at
all. We reserve the right to terminate any membership for any reason or no
reason at all.

You must be at least 13 years of age to use this service.';
$Definition['Test Mode'] = 'Test Mode: The pocket will only be displayed for pocket administrators.';
$Definition['TextEnterEmails'] = 'Type email addresses separated by commas here';
$Definition['The banner title appears on your site\'s banner and in your browser\'s title bar.'] = 'The banner title appears on your site\'s banner and in your browser\'s title bar. It should be less than 20 characters. If a banner logo is uploaded, it will replace the banner title on user-facing forum pages. Also, keep in mind some themes may also hide this title.';
$Definition['The banner title appears on your site\'s banner and in your browswer\'s title bar.'] = 'The banner title appears on your site\'s banner and in your browswer\'s title bar. It should be less than 20 characters. If a banner logo is uploaded, it will replace the banner title on user-facing forum pages. Also, keep in mind some themes may also hide this title.';
$Definition['The basic registration form requires that new users copy text from a "Captcha" image to help prevent spam.'] = '<strong>The basic registration form requires</strong> that new users copy text from a "Captcha" image to keep spammers out of the site. You need an account at <a href="http://recaptcha.net/">recaptcha.net</a>. Signing up is FREE and easy. Once you have signed up, come back here and enter the following settings:';
$Definition['The client ID uniqely identifies the site.'] = 'The client ID uniqely identifies the site. You can generate a new ID with the button at the bottom of this page.';
$Definition['The Disqus plugin allows users to sign in using their Disqus account.'] = 'The Disqus plugin allows users to sign in using their Disqus account. <b>You must register your application with Disqus for this plugin to work.</b>';
$Definition['The homepage title is displayed on your home page.'] = 'The homepage title is displayed on your home page. Pick a title that you would want to see appear in search engines.';
$Definition['ThemeHelp'] = 'Themes allow you to change the look &amp; feel of your site.<br />Once a theme has been added to your %s folder, you can enable it here.';
$Definition['The quote had to be converted from %s to %s.'] = 'The quote had to be converted from %s to %s. Some formatting may have been lost.';
$Definition['There\'s already a %s with the name %s.'] = 'There\'s already a %1$s with the name %2$s.';
$Definition['The secret secures the sign in process.'] = 'The secret secures the sign in process. Do <b>NOT</b> give the secret out to anyone.';
$Definition['The site description usually appears in search engines.'] = 'The site description usually appears in search engines. You should try having a description that is 100–150 characters long.';
$Definition['The text of the pocket.'] = 'Enter the text of the pocket. This will be output exactly as you type it so make sure that you enter valid HTML.';
$Definition['The user isn\'t banned.'] = 'The user isn\'t banned or is banned by some other function.';
$Definition['The Vanilla Statistics plugin turns your forum\'s dashboard into an analytics reporting tool'] = 'Vanilla Statistics turns your forum\'s dashboard into an analytics reporting tool, allowing you to review activity on your forum over specific time periods. You can <a href="http://vanillaforums.org/docs/vanillastatistics">read more about Vanilla Statistics</a> in our documentation.';
$Definition['This option shows/hides the locations where pockets can go.'] = 'This option shows/hides the locations where pockets can go, but only for users that have permission to add/edit pockets. Try showing the locations and then visit your site.';
$Definition['This theme has additional options.'] = 'This theme has additional options on the %s page.';
$Definition['This theme has customizable text.'] = 'This theme has text that you can customize.';
$Definition['Twitter Connect allows users to sign in using their Twitter account.'] = 'Twitter Connect allows users to sign in using their Twitter account. <b>You must register your application with Twitter for this plugin to work.</b>';

$Definition['Unanswered Questions'] = 'Unanswered';
$Definition['UrlCode'] = 'Url code';
$Definition['Use delta indexes'] = 'Use delta indexes (recommended for massive sites)';
$Definition['User Count'] = 'Users';
$Definition['UserDelete'] = 'Remove User Content';
$Definition['UserDeleteMessage'] = 'Delete the user and completely remove all of the user\'s content. This may cause discussions to be disjointed. Best option for removing spam.';
$Definition['UserKeep'] = 'Keep User Content';
$Definition['UserKeepMessage'] = 'Delete the user but keep the user\'s content.';
$Definition['UsernameError'] = 'Username can only contain letters, numbers, underscores, and must be between 3 and 20 characters long.';
$Definition['User not found.'] = 'Sorry, no account could be found related to the email/username you entered.';
$Definition['UserWipe'] = 'Blank User Content';
$Definition['UserWipeMessage'] = 'Delete the user and replace all of the user\'s content with a message stating the user has been deleted. This gives a visual cue that there is missing information.';
$Definition['Use the content at this url as your homepage.'] = 'Choose the page people should see when they visit: <strong style="white-space: nowrap;">%s</strong>';
$Definition['Use the plugin for WordPress or our universal code for any other platform'] = 'Use the WordPress plugin to set up Vanilla Comments on your blog, or use the universal code to set up Vanilla Comments on any other platform.';

$Definition['ValidateBanned'] = 'That %s is not allowed.';
$Definition['ValidateBoolean'] = '%s is not a valid boolean.';
$Definition['ValidateConnection'] = 'The connection parameters you specified failed to open a connection to the database. The database reported the following error: <code>%s</code>';
$Definition['ValidateDate'] = '%s is not a valid date.';
$Definition['ValidateDecimal'] = '%s is not a valid decimal.';
$Definition['ValidateEmail'] = '%s does not appear to be valid.';
$Definition['ValidateEnum'] = '%s is not valid.';
$Definition['ValidateFormat'] = 'You are not allowed to post raw html.';
$Definition['ValidateInteger'] = '%s is not a valid integer.';
$Definition['ValidateIntegerArray'] = '%s must be a comma-delimited list of numbers.';
$Definition['ValidateLength'] = '%1$s is %2$s characters too long.';
$Definition['ValidateMatch'] = 'The %s fields do not match.';
$Definition['ValidateMinimumAge'] = 'You are not old enough to join this community.';
$Definition['ValidateOneOrMoreArrayItemRequired'] = 'You must select at least one %s.';
$Definition['ValidateRegex'] = '%s does not appear to be in the correct format.';
$Definition['ValidateRequired'] = '%s is required.';
$Definition['ValidateRequiredArray'] = 'You must select at least one %s.';
$Definition['ValidateString'] = '%s is not a valid string.';
$Definition['ValidateTag'] = 'Tags cannot contain spaces.';
$Definition['ValidateTime'] = '%s is not a valid time.';
$Definition['ValidateTimestamp'] = '%s is not a valid timestamp.';
$Definition['ValidateUrl'] = 'The %s field is not a valid url.';
$Definition['ValidateUrlStringRelaxed'] = '%s can not contain slashes, quotes or tag characters.';
$Definition['ValidateUsername'] = 'Usernames must be 3-20 characters and consist of letters, numbers, and underscores.';
$Definition['ValidateVersion'] = 'The %s field is not a valid version number. See the php version_compare() function for examples of valid version numbers.';
$Definition['Vanilla.Archive.Description'] = 'You can choose to archive forum discussions older than a certain date. Archived discussions are effectively closed, allowing no new posts.';
$Definition['Vanilla.Categories.MaxDisplayDepth'] = 'Place nested categories in a comma-delimited list when they are %1$s';
$Definition['Video embedding has been disabled.'] = 'Video embedding has been disabled. URLs will not translate to their embedded equivalent.';

$Definition['Warning: deleting is permanent'] = 'WARNING: deleted items are removed from this list and cannot be brought back.';
$Definition['Warning: Loading tables can be slow.'] = '<b>Warning</b>: Your server configuration does not support fast data loading.
If you are importing a very large file (ex. over 200,000 comments) you might want to consider changing your configuration. Click <a href="http://vanillaforums.com/porter">here</a> for more information.';
$Definition['Warning: This is for advanced users.'] = '<b>Warning</b>: This is for advanced users and requires that you make additional changes to your web server. This is usually only available if you have dedicated or vps hosting. Do not attempt this if you do not know what you are doing.';
$Definition['WarningTitleFormat'] = '{InsertUserID,User} warned {WarnUserID,User} for {Points,plural,%s points}.';
$Definition['WarningTitleFormat.Notice'] = '{InsertUserID,User} warned {WarnUserID,User} for {Points,plural,%s points} (just a notice).';

$Definition['You\'ve asked questions that have now been answered'] = '<a href="{/discussions/mine?qna=Answered,url}">You\'ve asked questions that now have answers</a>. Make sure you accept/reject the answers.';
$Definition['You can also ban the users that posted the spam and delete all of their posts.'] = 'Check the box next to the user that posted the spam to also ban them and delete all of their posts. <b>Only do this if you are sure these are spammers.</b>';
$Definition['You can always use your password at<a href="%1$s">%1$s</a>.'] = 'If you are ever locked out of your forum you can always log in using your original Vanilla email and password at <a href="%1$s">%1$s</a>';
$Definition['You can either ask a question or start a discussion.'] = 'You can either ask a question or start a discussion. Choose what you want to do below.';
$Definition['You can make the categories page your homepage.'] = 'You can make your categories page your homepage <a href="%s">here</a>.';
$Definition['You can place files in your /uploads folder.'] = 'If your file is too
		large to upload directly to this page you can place it in your /uploads
		folder. Make sure the filename begins with the word <b>export</b> and ends
		with one of <b>.txt, .gz</b>.';
$Definition['You can remove or ban this member from the group.'] = 'You can remove or ban this member from the group. Banned members won\'t be able to join the group again.';
$Definition['You can use HTML in your signature.'] = 'You can use <b><a href="http://htmlguide.drgrog.com/cheatsheet.php" target="_new">Simple Html</a></b> in your signature.';
$Definition['YouEarnedBadge'] = 'You earned this badge';
$Definition['You need to confirm your email address.'] = 'You need to confirm your email address. Click <a href="{/entry/emailconfirmrequest,url}">here</a> to resend the confirmation email.';
$Definition['Your default locale won\'t display properly'] = 'Your default locale won\'t display properly until it is enabled below. Please enable the following: %s.';
$Definition['Your request has been sent.'] = 'Your request has been sent. Check your email for further instructions.';
$Definition['You were added to a conversation.'] = '{InsertUserID,user} added {NotifyUserID,you} to a <a href="{Url,htmlencode}">conversation</a>.';
