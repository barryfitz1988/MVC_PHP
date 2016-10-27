
$(document).ready(

function() {

	$('#datepicker').datepicker({
		changeYear : true,
		dateFormat : 'dd-mm-yy',
		defaultDate : +0,

		beforeShow : function(textbox, instance) {

			instance.dpDiv.css({
				marginTop : (-textbox.offsetHeight) + 'px',
				marginLeft : textbox.offsetWidth + 'px',

			});

		}
	})
});

