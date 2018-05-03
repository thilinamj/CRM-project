

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<body>


<form>
<?php
// Connect to gmail
$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
$username = 'chamikajayasundara2@gmail.com';
$password = '12ab@#BC';

// try to connect
$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . print_r(imap_errors()));

/* ALL - return all messages matching the rest of the criteria
ANSWERED - match messages with the \\ANSWERED flag set
BCC "string" - match messages with "string" in the Bcc: field
BEFORE "date" - match messages with Date: before "date"
BODY "string" - match messages with "string" in the body of the message
CC "string" - match messages with "string" in the Cc: field
DELETED - match deleted messages
FLAGGED - match messages with the \\FLAGGED (sometimes referred to as Important or Urgent) flag set
FROM "string" - match messages with "string" in the From: field
KEYWORD "string" - match messages with "string" as a keyword
NEW - match new messages
OLD - match old messages
ON "date" - match messages with Date: matching "date"
RECENT - match messages with the \\RECENT flag set
SEEN - match messages that have been read (the \\SEEN flag is set)
SINCE "date" - match messages with Date: after "date"
SUBJECT "string" - match messages with "string" in the Subject:
TEXT "string" - match messages with text "string"
TO "string" - match messages with "string" in the To:
UNANSWERED - match messages that have not been answered
UNDELETED - match messages that are not deleted
UNFLAGGED - match messages that are not flagged
UNKEYWORD "string" - match messages that do not have the keyword "string"
UNSEEN - match messages which have not been read yet*/

// search and get unseen emails, function will return email ids
$emails = imap_search($inbox,'ALL');

$output = '';
rsort($emails);

foreach($emails as $mail) {

$headerInfo = imap_headerinfo($inbox,$mail);
$overview = imap_fetch_overview($inbox,$mail,0);
$message = imap_fetchbody($inbox,$mail,2);
$output .= ($overview[0]->seen ? 'read' : 'unread').'
';
$output .= $headerInfo->subject.'
';
$output .= $headerInfo->toaddress.'
';
$output .= $headerInfo->date.'
';
$output .= $headerInfo->reply_to[0]->mailbox.'@'.$headerInfo->reply_to[0]->host.'
';
$output .= $headerInfo->reply_toaddress.'
';
$output.= '
'.$message.'

';

$emailStructure = imap_fetchstructure($inbox,$mail);

if(!isset($emailStructure->parts)) {
$output .= imap_body($inbox, $mail, FT_PEEK);
} else {

}
echo $output;
$output = '';
}

// colse the connection
imap_expunge($inbox);
imap_close($inbox);
?>
   
</form> 
</body>
</html>