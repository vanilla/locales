<?php

$Definition['FullAnonymization.Description'] = '<strong>Full Anonymization</strong> replaces every single IP address with 0.0.0.0 effectively denying the application any access to work with IP addresses. IP ban rules will not work at all in this case.';

$Definition['Garden.Privacy.IPs.Description'] = 'User IP addresses are typically collected for automated ban rules';

$Definition['PartialAnonymization.Description'] = '<strong>Partial Anonymization</strong> anonymizes only the last octet of the IP address. For example 254.230.05.153 would become 254.230.05.0. This provides some anonymization while still allowing IP ban rules to function.';
$Definition['PreferenceGroupNewDiscussionEmail'] = 'Notify me of new discussions in groups I am a member of.';
$Definition['PreferenceGroupNewDiscussionPopup'] = 'Notify me of new discussions in groups I am a member of.';

$Definition['SignIn.LockoutTime'] = 'The amount of time a user is blocked from logging in after exceeding the number of login attempts.';
