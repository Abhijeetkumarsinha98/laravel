
    var countOpen = 0;

    function openQuestionPallet() {
        if (countOpen == 0) {
            $('#questionPallet').show();
            countOpen = 1;
        } else {
            $('#questionPallet').hide();
            countOpen = 0;
        }
    }
    var qustionCountLoad = 20;

    function loadPreviousQues() {
        if (qustionCountLoad < 21) {

        } else {
            for (var i = qustionCountLoad; i < (qustionCountLoad - 20); i--) {
                $(".questionTag" + i).hide();
            }
            qustionCountLoad -= 20;
            for (var i = qustionCountLoad; i < (qustionCountLoad - 20); i--) {
                $(".questionTag" + i).show();
            }
        }
    }

    function loadNextQues() {
        if (qustionCountLoad + 20 > 201) {

        } else {
            for (var i = qustionCountLoad - 20; i < qustionCountLoad; i++) {
                $(".questionTag" + i).hide();
            }
            for (var i = qustionCountLoad; i < qustionCountLoad + 20; i++) {
                $(".questionTag" + i).show();
            }
            qustionCountLoad += 20;
        }
    }

    function showCurrentQuestion(id) {
        for (var i = 1; i <= 201; i++) {
            $('.questionTag' + i).hide();
        }
        $('.questionTag' + id).show();
    }

    function openAllCorrectQuestion() {
        //for(var i=1; i<= 201; i++){
        // if($('.questionTag'+i).hasClass('crtRsp')){
        //   $('.questionTag'+i).show();
        // }
        // else{
        //   $('.questionTag'+i).hide();
        // }
        $('.crtRsp').show();
        $('.incrtRsp').hide();
        $('.skpRsp').hide();
        $('#correctQuestionMarkC').show();
        $('#correctQuestionMarkIN').hide();
        $('#correctQuestionMarkS').hide();
        $('#correctQuestionMarkA').hide();
        //}
    }

    function openAllIncorrectQuestion() {
        //for(var i=1; i<= 201; i++){
        // if($('.questionTag'+i).hasClass('incrtRsp')){
        //   $('.questionTag'+i).show();
        // }
        // else{
        //   $('.questionTag'+i).hide();
        // }
        $('.crtRsp').hide();
        $('.incrtRsp').show();
        $('.skpRsp').hide();
        $('#correctQuestionMarkC').hide();
        $('#correctQuestionMarkIN').show();
        $('#correctQuestionMarkS').hide();
        $('#correctQuestionMarkA').hide();
        //}
    }

    function openAllSkippedQuestion() {
        // for(var i=1; i<= 201; i++){
        // if($('.questionTag'+i).hasClass('skpRsp')){
        //   $('.questionTag'+i).show();
        // }
        // else{
        //   $('.questionTag'+i).hide();
        // }
        $('.crtRsp').hide();
        $('.incrtRsp').hide();
        $('.skpRsp').show();
        $('#correctQuestionMarkC').hide();
        $('#correctQuestionMarkIN').hide();
        $('#correctQuestionMarkS').show();
        $('#correctQuestionMarkA').hide();
        // }
    }

    function openAllQuestion() {
        // for(var i=1; i<= 201; i++){      
        // $('.questionTag'+i).show();      
        $('.crtRsp').show();
        $('.incrtRsp').show();
        $('.skpRsp').show();
        $('#correctQuestionMarkC').hide();
        $('#correctQuestionMarkIN').hide();
        $('#correctQuestionMarkS').hide();
        $('#correctQuestionMarkA').show();
        // }
    }

    $(function() {
        $('#mainQuestionPalletDiv').slimScroll({
            height: '290px',
            width: '270px'
        });
    });
    //   window.addEventListener('click', function(e){   
    //   if (document.getElementById('mainQuestionPalletDiv').contains(e.target) || document.getElementById('questionPallet').contains(e.target)){
    //     $('#questionPallet').show();
    //       countOpen = 1;
    //   } else{
    //     $('#questionPallet').hide();
    //       countOpen = 0;
    //   }
    // });
