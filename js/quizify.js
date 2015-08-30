$( document ).ready(function() {
    // 
    var totalScoreMatrix = [0,0,0,0,0,0,0,0,0,0,0,0,0];

	var currentQuestion = 1;
    var numQuestions = 7;

    var questionAnswerDelay = 1.0;
    var questionFeedbackDelay = 3.0;

    var backgroundClasses = ['spm-1','spm-2','spm-3','spm-4','spm-5','spm-1','spm-2'];


    // WRAPPER FOR GETTING CURRENT QUESTION NODE:
    function questionNode() {
	    return $('#question-' + currentQuestion);
    }

    // INITIALIZE FIRST QUESTION:
	questionNode().show();

    // FACEBOOK SHARE:
    $('#share-button').click(function(e) {
        e.preventDefault();

        // 
        var metadata = $(this).find('.metadata');

        var name = metadata.find('.name').text();
        var link = metadata.find('.link').text();
        var picture = metadata.find('.image').text();
        var caption = metadata.find('.caption').text();
        var description = metadata.find('.description').text();

        //
        FB.ui(
        {
            method: 'feed',
            name: name,
            link: link,
            picture: picture,
            caption: caption,
            description: description,
            message: ''
        });
        return false;
    });


    // HANDLE ALTERNATIVE CLICKING:
    $('.alternative').click(function() {
        // 
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

                TweenMax.to(feedbacks, .3, {alpha:1, delay:questionFeedbackDelay, onComplete: function() {window.location = 'result.php?program=' + program;}});
            } else {
                // 
                questionNode().hide();

                // CHANGE BACKGROUND:
                for( i=0; i<backgroundClasses.length; i++ ) {
                    $('body').removeClass(backgroundClasses[i]);
                }
                $('body').addClass(backgroundClasses[currentQuestion]);

                // RESET NAVIGATION:
                $('nav.text ul li:nth-child(' + (currentQuestion) + ') span').css('visibility','hidden');
                $('nav.symbols ul li:nth-child(' + (currentQuestion) + ') div').css('visibility','hidden');

                currentQuestion++;

                questionNode().show();

                // 
                TweenMax.to(feedbacks, .3, {alpha:0, delay:questionFeedbackDelay, onComplete: function() {
                    feedbacks.hide();

                    // 
                    var navSymbol = $('nav.symbols ul li:nth-child(' + currentQuestion + ') div');
                    TweenMax.to(navSymbol, .3, {alpha:.5, delay:0});

                    if( currentQuestion < numQuestions ) {
                        var navText = $('nav.text ul li:nth-child(' + currentQuestion + ') span');
                        TweenMax.to(navText, .3, {alpha:1, delay:.4444});
                    }
                }});
            }
        }
    });
});
