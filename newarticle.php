<?php
$pageTitle  = "New article";
$current    = "new";
include("inc/page/header.php");
include("inc/data.php");
include("inc/page/navigation.php");
?>

<div class="column75 wrapping">
    <form>
        <article contenteditable="true">
            <?php echo $article; ?>
        </article>
        <div class="actions">
            <input type="submit" value="Publish" class="large awesome green primary" />
            <input type="button" value="Save" class="medium awesome blue primary" />
            <input type="button" value="Cancel" class="small awesome yellow secondary" />
        </div>
    </form>
</div>

<div class="column25">
    <?php
        include("inc/interestedIn.php");
        include("inc/relatedTweets.php");
        include("inc/peopleNearby.php");
        include("inc/relatedArticles.php");        
    ?>
</div>

<?php
include("inc/page/footer.php");
?>