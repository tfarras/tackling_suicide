@extends('layouts.app')

@section('page-title',env('APP_NAME'))

@section('css')
    <link rel='stylesheet' id='slickquiz_css-css'  href='http://goldbergdepressiontest.com/wp-content/plugins/slickquiz/slickquiz/css/slickQuiz.css?ver=4.4.11' type='text/css' media='all' />
    <link rel='stylesheet' id='slickquiz_front_css-css'  href='http://goldbergdepressiontest.com/wp-content/plugins/slickquiz/css/front.css?ver=4.4.11' type='text/css' media='all' />
    <style>
        .main {
            margin-left: 30%;
            margin-top: 10%;
            width: 30%;
            display: table;

        }
        .slickQuizWrapper {
            display: table-cell;
            vertical-align: middle;
            color: white;
        }

        @media screen and (max-width: 1024px) {
            .main {
                width: 100% !important;
                margin-right: 0 !important;
                margin-left: 0 !important;
            }
        }
    </style>
    @stop

@section('content')
    <div class="main">
            <div class="slickQuizWrapper" id="slickQuiz1">
                <h2 class="quizName"></h2>

                <div class="quizArea">
                    <div class="quizHeader" >
                        <div class="buttonWrapper" style="text-align: center"><a class="button startQuiz" onclick="$('#quizDescription').fadeOut(500);" href="#">Begin</a></div>
                    </div>
                </div>

                <div class="quizResults">
                    <div class="quizResultsCopy">
                        <h3 class="quizScore">Your Score: <span>&nbsp;</span></h3>
                        <h3 class="quizLevel">Your Level of Depression: <span>&nbsp;</span></h3>
                    </div>
                </div>
            </div>
    </div>

    @stop

@section('js')

    {{Html::script('/js/quiz.js ')}}
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $("#slickQuiz1").slickQuiz({
                json:                         {"info":{"name":" Take The Goldberg Depression Test Now","main":"<p>The test is made up of eighteen questions. After completing all the questions you will be presented with your result, and your rank on the Goldberg Depression Scale.<\/p>\n<p>The 18 items below refer to how you have felt and behaved during the past week. For each item, indicate the extent to which it is true, by checking the appropriate box next to the item.<\/p>\n<p>Good luck.<\/p>\n","results":"<p>Thank you for taking the <a href=\"http:\/\/goldbergdepressiontest.com\">Goldberg Depression Test<\/a>. You have successfully completed the test. You now have your depression score, and can decide if your results warrant further investigation. <\/p>\n<p>Again, this is an online depression test, <strong>not a medical diagnosis<\/strong>. The results of this test are preliminary and inconclusive. Do not take any action based on this test without first consulting a medical doctor.<\/p>\n<p>If your results point to a probable or even possible depression diagnosis, we strongly encourage you to seek further counsel from a licensed psychologist or psychiatrist. Please see our <a href=\"http:\/\/goldbergdepressiontest.com\/what-to-do-if-youre-depressed\">What To Do If You&#8217;re Depressed<\/a> guide for further information on what next steps to take.<\/p>\n<p>For those of you with the slightly ambiguous &#8220;somewhat depressed&#8221; or &#8220;slightly depressed&#8221; results, we encourage you to consult your physician, or, at the very least, to reach out to loved ones to speak to them about your feelings. It is <strong>always<\/strong> better to open up about what you&#8217;re experiencing internally than to keep it closed away and concealed.\n<p>We hope that our test has been of some help to you. If you feel that it has, please share it with your friends by clicking the share buttons above.  And lastly, whatever your test result., we wish you good fortune going forward.<\/p>\n","level1":"Severe depression","level2":"Severe depression","level3":"Moderate to severe depression","level4":"Minor to moderate depression","level5":"Depression unlikely"},"questions":[{"a":[{"option":" Not at all"},{"option":"Only slightly"},{"option":"Partly","correct":"checked"},{"option":"A lot","correct":"checked"},{"option":"Quite a lot","correct":"checked"},{"option":"To a great extent ","correct":"checked"}],"q":"<p> I do everything slowly.<\/p>\n","correct":"<p>Ok<\/p>\n","incorrect":"<p>Ok<\/p>\n","select_any":true,"force_checkbox":false},{"a":[{"option":"Not at all"},{"option":"Only slightly"},{"option":"Partly","correct":"checked"},{"option":"A lot","correct":"checked"},{"option":"Quite a lot","correct":"checked"},{"option":"To a great extent","correct":"checked"}],"q":"<p>My future seems hopeless. <\/p>\n","correct":"<p>ok<\/p>\n","incorrect":"<p>ok<\/p>\n","select_any":true,"force_checkbox":false},{"a":[{"option":"Not at all"},{"option":"Only slightly"},{"option":"Partly","correct":"checked"},{"option":"A lot","correct":"checked"},{"option":"Quite a lot","correct":"checked"},{"option":"To a great extent","correct":"checked"}],"q":"<p>I find it hard to concentrate when I read. <\/p>\n","correct":"<p>ok<\/p>\n","incorrect":"<p>ok<\/p>\n","select_any":true,"force_checkbox":false},{"a":[{"option":"Not at all"},{"option":"Only slightly"},{"option":"Partly","correct":"checked"},{"option":"A lot","correct":"checked"},{"option":"Quite a lot","correct":"checked"},{"option":"To a great extent","correct":"checked"}],"q":"<p>All joy and pleasure seem to have disappeared from my life. <\/p>\n","correct":"<p>ok<\/p>\n","incorrect":"<p>ok<\/p>\n","select_any":true,"force_checkbox":false},{"a":[{"option":"Not at all"},{"option":"Only slightly"},{"option":"Partly"},{"option":"A lot","correct":"checked"},{"option":"Quite a lot","correct":"checked"},{"option":"To a great extent","correct":"checked"}],"q":"<p>I find it hard to make decisions. <\/p>\n","correct":"<p>ok<\/p>\n","incorrect":"<p>ok<\/p>\n","select_any":true,"force_checkbox":false},{"a":[{"option":"Not at all"},{"option":"Only slightly","correct":"checked"},{"option":"Partly","correct":"checked"},{"option":"A lot","correct":"checked"},{"option":"Quite a lot","correct":"checked"},{"option":"To a great extent","correct":"checked"}],"q":"<p> I have lost interest in things that used to mean a lot to me. <\/p>\n","correct":"<p>ok<\/p>\n","incorrect":"<p>ok<\/p>\n","select_any":true,"force_checkbox":false},{"a":[{"option":"Not at all"},{"option":"Only slightly"},{"option":"Partly","correct":"checked"},{"option":"A lot","correct":"checked"},{"option":"Quite a lot","correct":"checked"},{"option":"To a great extent","correct":"checked"}],"q":"<p>I feel sad, depressed and unhappy. <\/p>\n","correct":"<p>ok<\/p>\n","incorrect":"<p>ok<\/p>\n","select_any":true,"force_checkbox":false},{"a":[{"option":"Not at all"},{"option":"Only slightly"},{"option":"Partly"},{"option":"A lot","correct":"checked"},{"option":"Quite a lot","correct":"checked"},{"option":"To a great extent","correct":"checked"}],"q":"<p> I feel restless and cannot relax.<\/p>\n","correct":"<p>ok<\/p>\n","incorrect":"<p>ok<\/p>\n","select_any":true,"force_checkbox":false},{"a":[{"option":"Not at all"},{"option":"Only slightly"},{"option":"Partly"},{"option":"A lot","correct":"checked"},{"option":"Quite a lot","correct":"checked"},{"option":"To a great extent","correct":"checked"}],"q":"<p>I feel tired. <\/p>\n","correct":"<p>ok<\/p>\n","incorrect":"<p>ok<\/p>\n","select_any":true,"force_checkbox":false},{"a":[{"option":"Not at all"},{"option":"Only slightly"},{"option":"Partly"},{"option":"A lot","correct":"checked"},{"option":"Quite a lot","correct":"checked"},{"option":"To a great extent","correct":"checked"}],"q":"<p>I find it hard to do even trivial things. <\/p>\n","correct":"<p>ok<\/p>\n","incorrect":"<p>ok<\/p>\n","select_any":true,"force_checkbox":false},{"a":[{"option":"Not at all"},{"option":"Only slightly"},{"option":"Partly","correct":"checked"},{"option":"A lot","correct":"checked"},{"option":"Quite a lot","correct":"checked"},{"option":"To a great extent","correct":"checked"}],"q":"<p>I feel guilty and deserve to be punished. <\/p>\n","correct":"<p>ok<\/p>\n","incorrect":"<p>ok<\/p>\n","select_any":true,"force_checkbox":false},{"a":[{"option":"Not at all"},{"option":"Only slightly"},{"option":"Partly"},{"option":"A lot","correct":"checked"},{"option":"Quite a lot","correct":"checked"},{"option":"To a great extent","correct":"checked"}],"q":"<p>I feel like a failure. <\/p>\n","correct":"<p>ok<\/p>\n","incorrect":"<p>ok<\/p>\n","select_any":true,"force_checkbox":false},{"a":[{"option":"Not at all"},{"option":"Only slightly","correct":"checked"},{"option":"Partly","correct":"checked"},{"option":"A lot","correct":"checked"},{"option":"Quite a lot","correct":"checked"},{"option":"To a great extent","correct":"checked"}],"q":"<p>I feel empty &#8211; more dead than alive. <\/p>\n","correct":"<p>ok<\/p>\n","incorrect":"<p>ok<\/p>\n","select_any":true,"force_checkbox":false},{"a":[{"option":"Not at all"},{"option":"Only slightly"},{"option":"Partly"},{"option":"A lot","correct":"checked"},{"option":"Quite a lot","correct":"checked"},{"option":"To a great extent","correct":"checked"}],"q":"<p>My sleep is disturbed: too little, too much or disturbed sleep. <\/p>\n","correct":"<p>ok<\/p>\n","incorrect":"<p>ok<\/p>\n","select_any":true,"force_checkbox":false},{"a":[{"option":"Not at all"},{"option":"Only slightly"},{"option":"Partly"},{"option":"A lot","correct":"checked"},{"option":"Quite a lot","correct":"checked"},{"option":"To a great extent","correct":"checked"}],"q":"<p>I wonder HOW I could commit suicide. <\/p>\n","correct":"<p>ok<\/p>\n","incorrect":"<p>ok<\/p>\n","select_any":true,"force_checkbox":false},{"a":[{"option":"Not at all"},{"option":"Only slightly"},{"option":"Partly"},{"option":"A lot","correct":"checked"},{"option":"Quite a lot","correct":"checked"},{"option":"To a great extent","correct":"checked"}],"q":"<p>I feel confined and imprisoned. <\/p>\n","correct":"<p>ok<\/p>\n","incorrect":"<p>ok<\/p>\n","select_any":true,"force_checkbox":false},{"a":[{"option":"Not at all"},{"option":"Only slightly"},{"option":"Partly","correct":"checked"},{"option":"A lot","correct":"checked"},{"option":"Quite a lot","correct":"checked"},{"option":"To a great extent","correct":"checked"}],"q":"<p>I feel down even when something good happens to me. <\/p>\n","correct":"<p>ok<\/p>\n","incorrect":"<p>ok<\/p>\n","select_any":true,"force_checkbox":false},{"a":[{"option":"Not at all"},{"option":"Only slightly"},{"option":"Partly"},{"option":"A lot","correct":"checked"},{"option":"Quite a lot","correct":"checked"},{"option":"To a great extent","correct":"checked"}],"q":"<p>I have lost or gained weight without being on a diet. <\/p>\n","correct":"<p>ok<\/p>\n","incorrect":"<p>ok<\/p>\n","select_any":true,"force_checkbox":false}],"extra":null},
                questionCountText:            "Question %current of %total",
                questionTemplateText:         "%count. %text",
                scoreTemplateText:            "%score",
                checkAnswerText:              "Check My Answer!",
                nextQuestionText:             "Next »",
                completeQuizText:             "Get Your Results",
                backButtonText:               "« Back",
                tryAgainText:                 "",
                numberOfQuestions:            null,
                skipStartButton:              false,
                randomSortQuestions:          true,
                randomSortAnswers:            true,
                preventUnanswered:            true,
                perQuestionResponseMessaging: false,
                perQuestionResponseAnswers:   false,
                completionResponseMessaging:  false,
                displayQuestionCount:         true,
                displayQuestionNumber:        true,
                disableScore:                 false,
                disableRanking:               false,
                scoreAsPercentage:            true
            });
        });
    </script>
    @stop
