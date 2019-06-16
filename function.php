<?php
    //FUNCTIONS.PHP

    function checkForClickBait() {
        $clickBait = strtolower( $_POST["clickbait_headline"] );

        $a = array(
                "scientists",
                "doctors",
                "hate",
                "stupid",
                "weird",
                "simple",
                "trick",
                "shocking",
                "you'll never believe",
                "hack",
                "epic",
                "unbelievable",
                "will make you"
        );
        $b = array(
                "so-called scientists",
                "so-called doctors",
                "are not a fan of",
                "average",
                "typical",
                "ineffective",
                "method",
                "unsurprising",
                "you won't be suprised by",
                "slightly improved tactic",
                "casual",
                "normal",
                "will not really make you"
        );

        $honestHeadline = str_replace( $a, $b, $clickBait );   
        
        //return array to access globally in other functions
        return array( $clickBait, $honestHeadline );
    }

    function displayHonestHeadline( $clickBait, $honestHeadline ) {
        echo "<br><strong class='text-danger'>Original Headline</strong><h4>".ucwords($clickBait)."</h4><br><hr>";

        echo "<br><strong class='text-success'>Honest Headline</strong><h4>".ucwords($honestHeadline)."</h4>";
    }
?>
