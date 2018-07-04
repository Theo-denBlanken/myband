<?php
function processLogin()
{
    $username = $_POST['email'];
    $password = $_POST['password'];

    $hashedpw = hash('sha512', $password);
    echo $hashedpw;
    $mysqli = makeConnection();

    $query = "SELECT user_id, user_hash FROM users WHERE user_email = ? AND user_password = ?";
    $stmt = $mysqli->prepare($query) or die ('Failed querying [processLogin]');
    $stmt->bind_param('ss', $username, $hashedpw);
    $stmt->bind_result($userId, $userHash);
    $stmt->execute();
    if ($stmt->fetch() == 1) {
        setcookie('userId', $userId, time() + (3600 * 24 * 7));
        setcookie('userHash', $userHash, time() + (3600 * 24 * 7));
        header('Location: admin.php?page=dashboard');
        }

}
function processLogout()
{
    setcookie('userId', '', time() - (3600 * 24 * 7));
    setcookie('userHash', '', time() - (3600 * 24 * 7));
    header('Location: admin.php?page=login');
}

function setLanguage()
{
    $mysqli = makeConnection();
    return $siteLanguageSatus;
}

function setSettings()
{
    $mysqli = makeConnection();
    return $siteSettingsStatus;
}

function getUsername()
{
    $mysqli = makeConnection();
    $query = "SELECT user_id user_username, user_username, user_profilepicture, user_email, user_hash FROM users WHERE user_id = ? AND user_hash = ?";
    $stmt = $mysqli->prepare($query) or die ('Failed querying [getLanguage]');
    $stmt->bind_param('ss',$_COOKIE['userId'], $_COOKIE['userHash']);
    $stmt->bind_result($user_id, $user_username, $user_profilepicture, $user_email, $user_hash);
    $stmt->execute();
    $user = array();
    if ($stmt->fetch() == 1) {
        $user['username'] = $user_username;
        $user['useremail'] = $user_email;
        $user['userpicture'] = $user_profilepicture;
        return $user;
    } else {
        header('Location: admin.php?page=login');
    }

}

function getArticleCount()
{
    $mysqli = makeConnection();
    $query = "SELECT article_id FROM articles";
    $result = $mysqli->query($query) or die ('Failed querying [getArticleCount]');
    $rows = $result->num_rows;
    return $rows;
}

function getCalendarContentAdmin()
{
    $mysqli = makeConnection();

    $query = "SELECT event_id, event_title, event_start, event_end FROM events"; //MAKE DATABASE AND CONFIGURE IT

    $stmt = $mysqli->prepare($query) or die ('Failed preparing [getCalendarContent]');
    $stmt->bind_result($eventID, $eventTitle, $eventStart, $eventEnd) or die ('Failed binding results [getCalendarContent]');
    $stmt->execute() or die ('Failed executing [getCalendarContent]');

    // Returning array
    $events = array();

    // Fetch results
    while ($row = $stmt->fetch()) {

        $e = array();
        $e['id'] = $eventID;
        $e['title'] = $eventTitle;
        $e['start'] = $eventStart;
        $e['end'] = $eventEnd;
        $e['color'] = 'gold';
        $e['allDay'] = false;

        // Merge the event array into the return array
        array_push($events, $e);

    }

    return $events;
}

function getUserCount()
{
    $mysqli = makeConnection();
    $query = "SELECT user_id FROM users";
    $result = $mysqli->query($query) or die ('Failed querying [getUserCount]');
    $rows = $result->num_rows;
    return $rows;
}

function getMissedMessagesCount()
{
    $mysqli = makeConnection();
    $query = "SELECT message_id FROM messages WHERE read_status = 0";
    $result = $mysqli->query($query) or die ('Failed querying [getMissedMessagesCount]');
    $rows = $result->num_rows;
    return $rows;
}

function getAllMessages()
{
    $mysqli = makeConnection();

    $query = "SELECT message_id, sender_name, sender_email, message_subject, message_content, send_date, read_status FROM messages"; //MAKE DATABASE AND CONFIGURE IT

    $stmt = $mysqli->prepare($query) or die ('Failed preparing [getAllMessages]');
    $stmt->bind_result($messageID, $senderName, $senderEmail, $messageSubject, $messageContent, $dateSend, $readStatus) or die ('Failed binding results [getAllMessages]');
    $stmt->execute() or die ('Failed executing [getAllMessages]');

    // Returning array
    $mails = array();

    // Fetch results
    while ($row = $stmt->fetch()) {

        $e = array();
        $e['id'] = $messageID;
        $e['sendername'] = $senderName;
        $e['senderemail'] = $senderEmail;
        $e['subject'] = $messageSubject;
        $e['content'] = $messageContent;
        $e['readstatus'] = $readStatus;
        $e['received'] = $dateSend;

        // Merge the event array into the return array
        array_push($mails, $e);

    }

    return $mails;
}

?>