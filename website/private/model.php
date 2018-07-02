<?php

function makeConnection() {
    require ('db.php');
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'MyBand';
    $mysqli = new mysqli($host,$username,$password,$database);
    if($mysqli->connect_errno) {
        die('Connection error: ' . $mysqli->mysqli_connect_errno() . '<br / >');
    }
    return $mysqli;
}

function getMailAddress () {
    $mysqli = makeConnection();
    $query = "SELECT email FROM ___"; //MAKE DATABASE AND CONFIGURE IT
    $stmt = $mysqli->prepare($query) or die ('Failed preparing [getMailAddress]');
    $stmt->bind_result($mailaddress) or die ('Failed binding results [getMailAddress]');
    $stmt->execute() or die ('Failed executing [getMailAddress]');
    $results = array();
    while ($stmt->fetch()){
        $results[] = $mailaddress;
    } //JOEY MAAKT HIER EEN FOUT GOED BLIJVEM OPLETTEN
    return $results;
}
function getArticles() {
    $mysqli = makeConnection();
    $query = "SELECT article_title, article_content, article_publishdate, author_id, article_id FROM articles ORDER BY article_id DESC LIMIT 10"; //MAKE DATABASE AND CONFIGURE IT
    $stmt = $mysqli->prepare($query) or die ('Failed preparing [getArticles]');
    $stmt->bind_result($articleTitle, $articleContent, $articlePublishDate, $articleAuthor, $articleID) or die ('Failed binding results [getArticles]');
    $stmt->execute() or die ('Failed executing [getArticles]');
    $results = array();
    while($stmt->fetch()) {
        $article = array();
        $article[] = $articleTitle;
        $article[] = $articleContent;
        $article[] = $articlePublishDate;
        $article[] = $articleAuthor;
        $article[] = $articleID;
        $results[] = $article;
    }
//    getCalendarContent();
    return $results;
}
function getSomeArticles() {
    global $pagenumber;

    $mysqli = makeConnection();
    $pages = calculatePages() or die ('Failed calculating [getSomeArticles]');
    $firstRow = ($pagenumber - 1) * ARTICLES_PER_PAGE;

    $query = "SELECT article_title, article_content, article_image, article_publishdate, author_id FROM articles ORDER BY article_id DESC LIMIT $firstRow, $pages"; //MAKE DATABASE AND CONFIGURE IT

    $stmt = $mysqli->prepare($query) or die ('Failed preparing [getSomeArticles]');
    $stmt->bind_result($articleTitle, $articleContent, $articleImage, $articlePublishDate, $articleAuthor) or die ('Failed binding results [getSomeArticles]');
    $stmt->execute() or die ('Failed executing [getSomeArticles]');
    $results = array();
    while($stmt->fetch()) {
        $article = array();
        $article['title'] = $articleTitle;
        $article['content'] = $articleContent;
        $article['image'] = $articleImage;
        $article['date'] = $articlePublishDate;
        $article['author'] = $articleAuthor;
        $results[] = $article;
    }
    return $results;

}
function calculatePages() {

    $mysqli = makeConnection();
    $query = "SELECT article_id FROM articles";
    $result = $mysqli->query($query) or die ('Failed querying [calculatePages]');
    $rows = $result->num_rows;
    $numberOfPages = ceil($rows / ARTICLES_PER_PAGE);
    return $numberOfPages;

}
function getSpecificArticle($articleID) {
    global $pagenumber;

    $mysqli = makeConnection();

    $query = "SELECT article_title, article_content, article_image, article_publishdate, author_id FROM articles WHERE article_id = $articleID "; //MAKE DATABASE AND CONFIGURE IT

    $stmt = $mysqli->prepare($query) or die ('Failed preparing [getSomeArticles]');
    $stmt->bind_result($articleTitle, $articleContent, $articleImage, $articlePublishDate, $articleAuthor) or die ('Failed binding results [getSomeArticles]');
    $stmt->execute() or die ('Failed executing [getSomeArticles]');
    while($stmt->fetch()) {
        $article = array();
        $article['title'] = $articleTitle;
        $article['content'] = $articleContent;
        $article['image'] = $articleImage;
        $article['date'] = $articlePublishDate;
        $article['author'] = $articleAuthor;
    }
    return $article;

}
function getLanguage() {
    $mysqli = makeConnection();
    $query = "SELECT * FROM language";
    $stmt = $mysqli->prepare($query) or die ('Failed querying [getLanguage]');
    $stmt->bind_result($languageItem, $languageValue);
    $stmt->execute();
    $siteLanguage = array();
    while ($stmt->fetch()) {
        $siteLanguage["$languageItem"] = $languageValue;
    }
    return $siteLanguage;
}
function getSettings() {
    $mysqli = makeConnection();
    $query = "SELECT * FROM settings";
    $stmt = $mysqli->prepare($query) or die ('Failed querying [getLanguage]');
    $stmt->bind_result($settingsItem, $settingsValue);
    $stmt->execute();
    $siteSettings = array();
    while ($stmt->fetch()) {
        $siteSettings["$settingsItem"] = $settingsValue;
    }
    return $siteSettings;
}
function getCalendarContent()
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

    // Output json for our calendar
    echo json_encode($events);
    die();
}
?>