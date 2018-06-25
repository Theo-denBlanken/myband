<?php

function makeConnection() {
    require ('db.php'); //FIX THIS
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
function getUsername(){
 $username = 'Tigo';
 return $username;
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
        $article[] = $articleTitle;
        $article[] = $articleContent;
        $article[] = $articleImage;
        $article[] = $articlePublishDate;
        $article[] = $articleAuthor;
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
?>