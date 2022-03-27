
function pupls()
{
  $('#pdp').bootstrapMaterialDatePicker
      ({
        time: true,
        clearButton: true,
        format: ' DD-MM-YYYY -HH:mm'
        
        
      });
      console.log('hiii');
}


function adddate()
{
  $('#startdatetime').bootstrapMaterialDatePicker
      ({
        time: true,
        clearButton: true,
        format: 'YYYY-MM-DD HH:mm:ss'
        
        
      });
      console.log('hiii');
}


function enddate()
{
  $('#enddatetime').bootstrapMaterialDatePicker
      ({
        time: true,
        clearButton: true,
        format: 'YYYY-MM-DD HH:mm:ss'
        
        
      });
      console.log('hiii');
}
function pupls()
{
  $('#pdp').bootstrapMaterialDatePicker
      ({
        time: true,
        clearButton: true,
        format: 'YYYY-MM-DD HH:mm:ss'
        
        
      });
      console.log('hiii');
}

$(document).ready(function()
		{
			$('#date').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true
			});
			$('#date1').bootstrapMaterialDatePicker 
			({
				time: false,
				clearButton: true
			});
				$('#year').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: 'YYYY'
			});
			$('#registration_date').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: 'DD-MM-YYYY',
			});
			$('#dateOfBirth').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: 'DD-MM-YYYY',
				maxDate : new Date()
	    		// endDate: new Date(),
			});
			$('#last_installment_date').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: 'DD-MM-YYYY',
				minDate : new Date()
			});

			$('#exp_date').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: 'DD-MM-YYYY'
				
				
			});
			$('#cheque').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: 'DD-MM-YYYY'
			});

			$('#followup_date').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: 'DD-MM-YYYY',
			});
			$('#followup_date').bootstrapMaterialDatePicker('setDate', new Date());
			$('#payment_date').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: 'DD-MM-YYYY',
			});
			$('#payment_date').bootstrapMaterialDatePicker('setDate', new Date());

			$('#modify_followup_date').bootstrapMaterialDatePicker
			({
				minDate: new Date(),
	    		// endDate: new Date(),
				time: false,
				clearButton: true,
				format: 'DD-MM-YYYY',
			});
			$('#modify_followup_date').bootstrapMaterialDatePicker('setDate', new Date());

			$('#followup_date_time').bootstrapMaterialDatePicker
			({
				minDate: new Date(),
	    		// endDate: new Date(),
				time: true,
				clearButton: true,
				format: 'DD-MM-YYYY h:m'
			});

			$('#start_time').bootstrapMaterialDatePicker
			({
				time: true,
				clearButton: true,
				format: 'DD-MM-YYYY HH:mm:ss'
				
			});
			$('#publish_date').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: 'DD-MM-YYYY',
				minDate:new Date()
				
				
			});
		
			$('#pdp').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: ' DD-MM-YYYY'
				
				
			});
			$('#course_start_date').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: 'DD-MM-YYYY',
				minDate:new Date()
				
				
			});
			$('#purchase').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: 'DD-MM-YYYY'
				
				
			});
			$('#expire').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: 'DD-MM-YYYY'
				
				
			});
			$('#enddate').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: 'DD-MM-YYYY'
				
				
			});

			$('#therapyDate').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true
			});
			
			$('#time').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			$('#time2').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});

			$('#date-format').bootstrapMaterialDatePicker
			({
				format: 'dddd DD MMMM YYYY - HH:mm'
			});
			$('#date-fr').bootstrapMaterialDatePicker
			({
				format: 'DD/MM/YYYY HH:mm',
				lang: 'fr',
				weekStart: 1, 
				cancelText : 'ANNULER',
				nowButton : true,
				switchOnClick : true
			});

			$('#date-end').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm'
			});
			$('#date-start').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm', shortTime : true
			}).on('change', function(e, date)
			{
				$('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
			});

			$('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });

			$('#discount_start_date').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: ' DD-MM-YYYY'
				
				
			});

			$('#discount_end_date').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: ' DD-MM-YYYY'
				
				
			});

			$('#batch_start_time').bootstrapMaterialDatePicker 
			({
				time: true,
				date: false,
				clearButton: true,
				format: 'HH:mm:ss'
			});

			$('#batch_end_time').bootstrapMaterialDatePicker 
			({
				time: true,
				date: false,
				clearButton: true,
				format: 'HH:mm:ss'
			});
                        
            $('.date').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true
			});

			// $('#class_demo').bootstrapMaterialDatePicker
			// ({
			// 	time: true,
			// 	clearButton: true,
			// 	format: ' DD-MM-YYYY HH:mm'
				
				
			// });

			$('.dateclass').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: 'DD-MM-YYYY'
				
				
			});

			$('.dateOfBirth').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: 'DD-MM-YYYY'
				
				
			});

			$('#batch_strt_dt').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true,
				format: 'DD-MM-YYYY',
				minDate : new Date()
	    		// endDate: new Date(),
			});
			
		});