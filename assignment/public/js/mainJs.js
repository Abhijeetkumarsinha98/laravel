/*
 * Document      : MainEngine.blade.php
 * Created By    : Sonu Verma
 * Created Date  : 31/12/2019
 * Modified By    : N/A
 * Modified Date : N/A
 * Description   : This is the main engine for the test template which handle 
                    all the requests & functionalities of the test template.
 */


/*
 * Define/declare the global variables here
 */

var current_question = 1;
var current_section = 1;
var section_locked = false;
var section_timer_enabled = false;
var enabled_question_timer = false;
var question_timer = 0;
var countOpen = 0;
/*
 * End here the global variables declaration
 */



/*
 * Define the test engine methods/functionalities here
 */


/*
 * Save the current question resposense into database
 * 
 * @param {int} questionNumber
 * @returns 
 */
function saveNext(questionNumber){
    
}


/*
 * Clear the current question submitted response and update into database
 * 
 * @param {int} questionNumber
 * @returns 
 */
function clearResponses(questionNumber){
    
}

/*
 * Mark & review the specified question
 * 
 * @param {int} questionNumber
 * @returns 
 */

function markReview(questionNumber){
    
}


/*
 * Load the next question
 * 
 * @param {int} questionNumber
 * @returns 
 */
function loadQuestion(questionNumber){
  
}

/*
 * Change the specified section
 * 
 * @param {int} sectionNumber
 * @returns 
 */

function changeSection(sectionNumber){
    
}

function change_language(language){
    
    if(language == 'English'){
        $('.hindi-lang').removeClass('hindi-enabled');
        $('.hindi-lang').addClass('hindi-disabled');
        $('.english-lang').removeClass('english-disabled');
        $('.english-lang').addClass('english-enabled');
    }
    else if(language == 'Hindi'){

        $('.hindi-lang').addClass('hindi-enabled');
        $('.hindi-lang').removeClass('hindi-disabled');
        $('.english-lang').addClass('english-disabled');
        $('.english-lang').removeClass('english-enabled');
    }
}

/*
 * Accept the duration in seconds
 * DivId = The div where timer will display
 */
function startTimer(duration){
    /*
     * convert the duration into integer if not
     */
    duration = parseInt(duration);
    
    var hours = parseInt(duration/3600);
    var minutes = parseInt((duration%3600)/60);
    var seconds = parseInt(duration%3600)%60;
    var tst = 0 ;
    $('#timerCountdown').countdowntimer({ hours : hours, minutes : minutes, seconds : seconds, size : "lg", timeUp : examTimeUp});
    
}

function examTimeUp () {
    
    update_response(eccid, 'timeupsubmission', currentQuestion)
    $('#autoexamsubmitmodal').modal({backdrop: 'static', keyboard: false}) 
}

/*
 * Reload or refrsh the web-page
 */
function refreshpage(){
     
    window.location.reload();
     return ;
}

/*
 * Check for number key
 */
function isNumberKey(evt){
    
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function submitPaper() {

    let osc = "{{$opt_sec_check}}", ostac = "{{$opt_sec_to_attempt}}",sosc = $('#sos').val();
    
    if (osc) {
        if (parseInt(sosc.split(',').length) > parseInt(ostac)) {
            alert('You can select only ' + ostac + ' section out of the given list.')
        } 
        else if (parseInt(sosc.split(',').length) < parseInt(ostac)) {
        alert('Please select ' + ostac + ' section out of the given list to submit.')
        } 
        else {
            
            sendReponseOnServer(paper_id, sos);
            
        }
    } 
    else{
    
        $('#autoexamsubmitmodal').modal('hide');
        $('#sectiondetails').modal('hide');
        $('#loader').modal({backdrop: 'static', keyboard: false, show : true});
        
        sendReponseOnServer(paper_id, sos);
        
    }

 }
 
 
function sendReponseOnServer(paper_id, sos){
    
    $.ajax({
            
        url:'/student/onlineexam/student/submit_exam',
        method: 'POST',
        data: {'_token' : "{{ csrf_token() }}",
                'paper_content_id' : paper_id,
                'sos' : sosc
        },
        
        success : function(response){

            var obj = JSON.parse(response);
            window.opener.location.href = obj.url;
            window.close();
        },

        complete : function(){
            $('#loader').modal('hide');
        },

        error : function (err) {
            console.log(err)
        }
    });
}

function update_response(eccid, action, currentQuestion ) {

    var qpsqid = $('.qdiv'+currentQuestion).attr('id');
    var qtype = $('.qtype'+currentQuestion).val();
    var time_taken = cal_timetaken_by_eachquestion(currentQuestion);
    var response;

                   
    if (parseInt(qtype) != 3 && parseInt(qtype) != 5) {

        var st_selected_opt = [];
        var allOptionsDiv = $('.qdiv'+currentQuestion).find('.option');
        $(allOptionsDiv).find('input:radio, input:checkbox, select.matrixselect').each(function() {

            if (qtype == 4) {
                var value2 = $(this).val();
                if (value2 != "") {
                    st_selected_opt.push(value2);    
                }

            }else{
               if($(this).is(':checked')){
                    var value2 = $(this).val();
                    st_selected_opt.push(value2);
                } 
            }

        });
        response = st_selected_opt;

    }else{
        response = $('.optinput'+qpsqid).val();
    }  
               

               
                $.ajax({


            type:'POST',
            url: '/student/update/student_response',
            data: {
                '_token' : "{{ csrf_token() }}",
                eccid : eccid,
                qpsqid : qpsqid,
                response : response,
                time : time_taken,
                action : action
            },
           
            success: function(res) {
                var failed_question = '';
                for(i in failed_question_json){
                    update_response(failed_question_json[i]['eccid'], failed_question_json[i]['action'], failed_question_json[i]['currentQuestion']);

                    //remove the question from queue;
                    delete failed_question_json[i];
                    failed_question += '<button style="padding: unset; width: 40px; height: 30px; margin: 5px;" class="btn search'+i+ ' btn-danger" value="'+i+ '">'+i+ '</button>';
                    
                }
                $('.faild-question').html(failed_question);
                $('.internet-disconnect').css('display', 'none');

            },
            error : function(err){


                //update failed question
                if(action != 'cques' && failed_question_json.qno != currentQuestion){

                    failed_question_json[currentQuestion] = {eccid : eccid, action : action, currentQuestion : currentQuestion};
                }
                var failed_question = '';
                var is_failed = 0;
                for(i in failed_question_json){


                    failed_question += '<button style="padding: unset; width: 40px; height: 30px; margin: 5px;" class="btn btn-travers search'+i+ ' btn-danger" value="'+i+ '">'+i+ '</button>';
                    is_failed = 1;
                   
                }
                
                if(failed_question_json.length != 0)
                    $('.internet-disconnect').css('display', 'block');
                else
                    $('.internet-disconnect').css('display', 'none');
                 $('.faild-question').html(failed_question);
                
            }


                });

}

function hideQuestionNumberPanel() {
    if (countOpen == 0) {
        $("#hideQuestionPanel").html("<");
        $("#questionNumberPanel").hide();
        $("#questionDisplayPanel").removeClass("col-md-9");
        $("#questionDisplayPanel").removeClass("col-xs-9");
        $("#questionDisplayPanel").addClass("col-xs-12");
        $("#questionDisplayPanel").addClass("col-md-12");
        countOpen = 1;
    } else if (countOpen == 1) {
        $("#hideQuestionPanel").html(">");
        $("#questionNumberPanel").show();
        $("#questionDisplayPanel").removeClass("col-md-12");
        $("#questionDisplayPanel").removeClass("col-xs-12");
        $("#questionDisplayPanel").addClass("col-xs-9");
        $("#questionDisplayPanel").addClass("col-md-9");
        countOpen = 0;
    }
}




