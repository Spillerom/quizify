$( document ).ready(function() {
    // 
    var totalScoreMatrix = [0,0,0,0,0,0,0,0,0,0,0,0,0];

	var currentQuestion = 1;
    var numQuestions = 5;

    var questionAnswerDelay = 0.1
    var questionFeedbackDelay = 0.1


    // WRAPPER FOR GETTING CURRENT QUESTION NODE:
    function questionNode() {
	    return $('#question-' + currentQuestion);
    }

    // INITIALIZE FIRST QUESTION:
	questionNode().show();


    // FACEBOOK SHARE:
    $('.btnShare').click(function(){
        elem = $(this);
        postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'), elem.data('image'));
        return false;
    });


    // HANDLE ALTERNATIVE CLICKING:
    $('.alternative').click(function() {
        var currentAlternativeNode = $(this);
        var currentAlternative = currentAlternativeNode.index();

        currentAlternativeNode.parent().find(".alternative").addClass('remove-alternative');
        currentAlternativeNode.removeClass('remove-alternative');

        currentAlternativeNode.find(".custom-radio").addClass("active-alernative");

        // HANDELING SCORE SUMERIZATION:
        var scoreMatrix = $(this).find('.metadata').text().split(',');

        // 
        for( i=0; i<scoreMatrix.length; i++ ) {
            var score = parseFloat(totalScoreMatrix[i])
            totalScoreMatrix[i] = score + parseFloat(scoreMatrix[i]);
        }

        //
        var feedbacks = $('#feedbacks');
        feedbacks.css("visibility", 0);
        feedbacks.show();

        $('.feedback-container').hide();
        currentFeedback = $('#feedback-' + currentQuestion + '-' + (currentAlternative + 1));     
        currentFeedback.show();

        TweenMax.to(feedbacks, .3, {alpha:1, delay:questionAnswerDelay, onComplete: nextQuestion});

        // 
        function nextQuestion() {
            // 
            if( currentQuestion >= numQuestions ) {          
                // CALCULATE RECOMENDED PROGRAM:
                var score = 0;
                var program = 0;
                for( i=0; i<totalScoreMatrix.length; i++ ) {
                    if( totalScoreMatrix[i]>=score ) {
                        score = totalScoreMatrix[i]
                        program = i;
                    }
                }

                // 
                window.location = 'result.php?program=' + program;
            } else {
                questionNode().hide();

                currentQuestion++;

                questionNode().show();

                TweenMax.to(feedbacks, .3, {alpha:0, delay:questionFeedbackDelay, onComplete: function() {feedbacks.hide();}});
            }
        }
    });
});
