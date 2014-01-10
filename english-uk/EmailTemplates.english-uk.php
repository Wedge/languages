<?php
// Version: 2.0; EmailTemplates

// Since all of these strings are being used in emails, numeric entities should be used.

// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.

$txt['emailtemplate_report_to_moderator'] = array(
	'desc' => 'The email notification sent to moderators when a post is reported.',
	'subject' => 'Reported post: {TOPICSUBJECT} by {POSTERNAME}',
	'body' => 'The following post, "{TOPICSUBJECT}" by {POSTERNAME} has been reported by {REPORTERNAME} on a board you moderate:

The topic: {TOPICLINK}
Moderation centre: {REPORTLINK}

The reporter has made the following comment:
{COMMENT}

{REGARDS}',
);
