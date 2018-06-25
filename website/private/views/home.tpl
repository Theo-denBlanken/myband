<h1 class="twocolumns page_title">10 Latest articles</h1>
{foreach from=$articles item=article}
<div class="twocolumns">
    <h2 class="article_title">{$article[0]}</h2>
    <h5 class="article_info">Publish Date: {$article[2]}</h5>
    <h5 class="article_info"> Author: {$article[3]}</h5>
    <p class="article_content">{$article[1]|truncate:500:"... </br><a href='index.php?page=article&articleid={$article[4]}'>Read more</a>"}</p>
    <p class </p>
    <br />
</div>
{/foreach}
<div class="onecolumn rowthree">
</div>
