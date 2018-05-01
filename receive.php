<?php
// Connect to gmail
$hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
$username = 'gmail';
$password = 'gmail password';

// try to connect
$inbox = imap_open($hostname,$username,$password,NULL,1) or die('Cannot connect to Gmail: ' . print_r(imap_errors()));

// search and get unseen emails, function will return email ids
$emails = imap_search($inbox,'ALL');

rsort($emails);

echo "<table border='1' width='100%'>
  <tr>
	<th>Subject</th>
	<th>Name</th>
	<th>Email</th>
	<th>Date</th>
	<th>Message</th>
	<th>status</th>
  </tr>";

foreach($emails as $mail) {

$headerInfo = imap_headerinfo($inbox,$mail);
$overview = imap_fetch_overview($inbox,$mail,0);
$message = imap_fetchbody($inbox,$mail,2);
    echo "<tr>";
    echo "<td>" . $headerInfo->subject . "</td>";
    echo "<td>" . $headerInfo->reply_toaddress . "</td>";
    echo "<td>" . $headerInfo->reply_to[0]->mailbox.'@'.$headerInfo->reply_to[0]->host . "</td>";
    echo "<td>" . $headerInfo->date . "</td>";
    echo "<td>" . $message . "</td>";
    echo "<td>" . ($overview[0]->seen ? 'read' : 'unread') . "</td>";
    echo "</tr>";
}
  echo "</table>";

// colse the connection
imap_expunge($inbox);
imap_close($inbox);
?>