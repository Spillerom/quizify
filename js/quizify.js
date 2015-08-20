$( document ).ready(function() {
    var totalScoreMatrix = [0,0,0,0,0,0,0,0,0,0,0,0,0];

	var currentQuestion = 1;

    // WRAPPER FOR GETTING CURRENT QUESTION NODE:
    function questionNode() {
	    return $('#question-' + currentQuestion);
    }

    // INITIALIZE FIRST QUESTION:
	questionNode().show();


    // HANDLE ALTERNATIVE CLICKING:
    $('.alternative').click(function() {
        var currentAlternativeNode = $(this);
        var currentAlternative = currentAlternativeNode.index();

        currentAlternativeNode.parent().find(".alternative").addClass('remove-alternative');
        currentAlternativeNode.removeClass('remove-alternative');
//console.log(currentAlternativeNode);

        currentAlternativeNode.find(".custom-radio").addClass("active-alernative");

        // HANDELING SCORE SUMERIZATION:
        var scoreMatrix = $(this).find('.metadata').text().split(',');

        // 
        for( i=0; i<scoreMatrix.length; i++ ) {
            totalScoreMatrix[i] += scoreMatrix[i];
        }

        //
        var feedbacks = $('#feedbacks');
        feedbacks.css("visibility", 0);
        feedbacks.show();

        $('.feedback-container').hide();
        currentFeedback = $('#feedback-' + currentQuestion + '-' + (currentAlternative + 1));     
        currentFeedback.show();

        TweenMax.to(feedbacks, .3, {alpha:1, delay:1.5, onComplete: nextQuestion});

        // 
        function nextQuestion() {
            questionNode().hide();
            currentQuestion++;
            questionNode().show();

            TweenMax.to(feedbacks, .3, {alpha:0, delay:3.5, onComplete: function() {feedbacks.hide();}});
        }
    });
});
