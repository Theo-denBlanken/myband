<h1 class="centered_text twocolumns ">Our latest and greatest news!</h1>
{foreach from=$articles item=article}
    <div class="twocolumns">
    <h2 class="article_title">{$article[0]}</h2>
    <h5 class="article_content">Author: {$article[4]}</h5>
    <h5 class="article_content">Date of publication: {$article[3]}</h5>
    <img class="article_content" src="{$article[2]}">
    <p class="article_content">{$article[1]}</p>
    </div>
{/foreach}


<div class="twocolumns centered_text centered_block">
<table>
    <tr>
        <td id="left">
            {if $pagenumber > 1}
                <a class="navigation_arrows fas fa-arrow-left" href="index.php?page=news&pagenumber={$pagenumber-1}"></a>
                {else}
                <a class="disabled_navigation_arrows fas fa-arrow-left"></a>
            {/if}
        </td>
        <td>
            <p class="pagenumber">Page {$pagenumber}</p>
        </td>
        <td id="right">
            {if $pagenumber < $numberOfPages}
                <a class="navigation_arrows fas fa-arrow-right" href="index.php?page=news&pagenumber={$pagenumber+1}"></a>
                {else}
                <a class="disabled_navigation_arrows fas fa-arrow-right"></a>
            {/if}
        </td>
    </tr>
</table>
</div>