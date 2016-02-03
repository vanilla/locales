<?php

$Definition['EmailConfirmEmail'] = 'You need to confirm your email address before you can continue. Please confirm your email address by clicking on the following link: {/entry/emailconfirm,exurl,domain}/{User.UserID,rawurlencode}/{EmailKey,rawurlencode}';
$Definition['EmailPassword'] = '%2$s has reset your password at %3$s. Your login credentials are now:

  Email: %6$s
  Password: %5$s
  Url: %4$s';
$Definition['EmailStoryNotification'] = '%1$s

%3$s

---
Follow the link below to check it out:
%2$s

Have a great day!';
$Definition['EmailWelcome'] = '%2$s has created an account for you at %3$s. Your login credentials are:

  Email: %6$s
  Password: %5$s
  Url: %4$s';
$Definition['EmailWelcomeConnect'] = 'You have successfully connected to {Title}. Here is your information:

  Username: {User.Name}
  Connected With: {ProviderName}

You can access the site at {/,exurl,domain}.';
$Definition['EmailWelcomeRegister'] = 'You have successfully registered for an account at {Title}. Here is your information:

  Username: {User.Name}
  Email: {User.Email}

You can access the site at {/,exurl,domain}.';
$Definition['EmbeddedDiscussionFormat'] = '<div class="EmbeddedContent">{Image}<strong>{Title}</strong>
<p>{Excerpt}</p>
<p><a href="{Url}">Read the full story here</a></p><div class="ClearFix"></div></div>';
$Definition['EmbeddedNoBodyFormat'] = '{Url}';
$Definition['EmbededDiscussionFormat'] = '<div class="EmbeddedContent">{Image}<strong>{Title}</strong>
<p>{Excerpt}</p>
<p><a href="{Url}">Read the full story here</a></p><div class="ClearFix"></div></div>';
$Definition['ErrorBadInvitationCode'] = 'The invitation code you supplied is not valid.';
$Definition['ErrorCredentials'] = 'Sorry, no account could be found related to the email/username and password you entered.';
$Definition['ErrorPermission'] = 'Sorry, permission denied.';
$Definition['ErrorPluginDisableRequired'] = 'You cannot disable the {0} plugin because the {1} plugin requires it in order to function.';
$Definition['ErrorPluginEnableRequired'] = 'This plugin requires that the {0} plugin be enabled before it can be enabled itself.';
$Definition['ErrorPluginVersionMatch'] = 'The enabled {0} plugin (version {1}) failed to meet the version requirements ({2}).';
$Definition['ErrorRecordNotFound'] = 'The requested record could not be found.';
$Definition['ErrorTermsOfService'] = 'You must agree to the terms of service.';

$Definition['FollowOnly'] = 'Follow the link below to check it out:';

$Definition['Garden.Email.SupportAddress'] = 'Support email';
$Definition['Garden.Email.SupportName'] = 'Support name';
$Definition['Garden.Registration.DefaultRoles'] = 'default role';
$Definition['GroupEmptyAnnouncements'] = 'Important stuff will go here one day.';
$Definition['GroupEmptyDiscussions'] = 'Awfully quiet in here, isn&rsquo;t it?';
$Definition['GroupEmptyEvents'] = 'Aw snap, no events are coming up.';
$Definition['GroupMembersEmpty'] = 'No one has joined yet. Spread the word!';
$Definition['GuestModule.Message'] = 'It looks like you\'re new here. If you want to get involved, click one of these buttons!';

$Definition['HeadlineFormat.Badge'] = '{ActivityUserID,You} earned the <a href="{Url,html}">{Data.Name,text}</a> badge.';
$Definition['HeadlineFormat.Ban'] = '{RegardingUserID,You} banned {ActivityUserID,you}.';
$Definition['HeadlineFormat.Comment'] = '{ActivityUserID,user} commented on <a href="{Url,html}">{Data.Name,text}</a>';
$Definition['HeadlineFormat.ConversationMessage'] = '{ActivityUserID,User} sent you a <a href="{Url,html}">message</a>';
$Definition['HeadlineFormat.Discussion'] = '{ActivityUserID,user} Started a new discussion. <a href="{Url,html}">{Data.Name,text}</a>';
$Definition['HeadlineFormat.Mention'] = '{ActivityUserID,user} mentioned you in <a href="{Url,html}">{Data.Name,text}</a>';
$Definition['HeadlineFormat.PictureChange.ForUser'] = '{RegardingUserID,You} changed the profile picture for {ActivityUserID,user}.';
$Definition['HeadlineFormat.Registration'] = '{ActivityUserID,You} joined.';
$Definition['HeadlineFormat.Unban'] = '{RegardingUserID,You} unbanned {ActivityUserID,you}.';
$Definition['HeadlineFormat.Warning'] = '{ActivityUserID,You} warned {RegardingUserID,you}.';

$Definition['I confirm that I have received consent to join this community.'] = 'Since I\'m under %d years old, I confirm that I have received consent to join this community.';
$Definition['Invalid password.'] = 'The password you entered was incorrect. Remember that passwords are case-sensitive.';
$Definition['InviteErrorPermission'] = 'Sorry, permission denied.';

$Definition['MyBadgesModuleTitle'] = 'My Badges';

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

$Definition['ValidateTime'] = '%s is not a valid time.';

$Definition['WarningTitleFormat.Notice'] = '{InsertUserID,User} warned {WarnUserID,User} for {Points,plural,%s points} (just a notice).';
$Definition['We\'ve received a request to change your password.'] = 'We\'ve received a request to change your password at %s. If you didn\'t make this request, please ignore this email.';

$Definition['You\'ve asked questions that have now been answered'] = '<a href="{/discussions/mine?qna=Answered,url}">You\'ve asked questions that now have answers</a>. Make sure you accept/reject the answers.';
$Definition['You can either ask a question or start a discussion.'] = 'You can either ask a question or start a discussion. Choose what you want to do below.';
$Definition['You can remove or ban this member from the group.'] = 'You can remove or ban this member from the group. Banned members won\'t be able to join the group again.';
$Definition['You can use HTML in your signature.'] = 'You can use <b><a href="http://htmlguide.drgrog.com/cheatsheet.php" target="_new">Simple HTML</a></b> in your signature.';
$Definition['YouEarnedBadge'] = 'You earned this badge';
$Definition['You need to confirm your email address.'] = 'You need to confirm your email address. Click <a href="{/entry/emailconfirmrequest,url}">here</a> to resend the confirmation email.';
$Definition['Your request has been sent.'] = 'Your request has been sent. Check your email for further instructions.';
$Definition['You were added to a conversation.'] = '{InsertUserID,user} added {NotifyUserID,you} to a <a href="{Url,htmlencode}">conversation</a>.';
