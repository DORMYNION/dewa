	/*  Wizard */
	jQuery(function ($) {
		"use strict";
		$('form#wrapped').attr('action', 'part/mail.php');
		$("#wizard_container").wizard({
			stepsWrapper: "#wrapped",
			submit: ".submit",
			beforeSelect: function (event, state) {
				if ($('input#website').val().length != 0) {
					return false;
				}
				if (!state.isMovingForward)
					return true;
				var inputs = $(this).wizard('state').step.find(':input');
				return !inputs.length || !!inputs.valid();
			}
		}).validate({
			errorPlacement: function (error, element) {
				if (element.is(':radio') || element.is(':checkbox')) {
					error.insertBefore(element.next());
				} else {
					error.insertAfter(element);
				}
			}
		});
		//  progress bar
		$("#progressbar").progressbar();
		$("#wizard_container").wizard({
			afterSelect: function (event, state) {
				$("#progressbar").progressbar("value", state.percentComplete);
				$("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
			}
		});
		// Validate select
		$('#wrapped').validate({
			ignore: [],
			rules: {
				select: {
					required: true
				}
			},
			errorPlacement: function (error, element) {
				if (element.is('select:hidden')) {
					error.insertAfter(element.next('.nice-select'));
				} else {
					error.insertAfter(element);
				}
			}
		});
	});

// Summary
function getVals(formControl, controlType) {
	switch (controlType) {

    case 'firstname':
      // Get the value for a input text
      var value = $(formControl).val();
      $("#firstname").text(value);
      break;

    case 'lastname':
      // Get the value for a input text
      var value = $(formControl).val();
      $("#lastname").text(value);
      break;

    case 'email':
      // Get the value for a input text
      var value = $(formControl).val();
      $("#email").text(value);
      break;

     case 'age':
      // Get the value for a select
      var value = $(formControl).val();
      $("#age").text(value);
      break;

    case 'gender':
			// Get the value for a radio
			var value = $(formControl).val();
			$("#gender").text(value);
			break;

      case 'telephone':
       // Get the value for a select
       var value = $(formControl).val();
       $("#telephone").text(value);
       break;

     case 'profession':
 			// Get the value for a radio
 			var value = $(formControl).val();
 			$("#profession").text(value);
 			break;

		// case 'question_2':
		// 	// Get name for set of checkboxes
		// 	var checkboxName = $(formControl).attr('name');
    //
		// 	// Get all checked checkboxes
		// 	var value = [];
		// 	$("input[name*='" + checkboxName + "']").each(function () {
		// 		// Get all checked checboxes in an array
		// 		if (jQuery(this).is(":checked")) {
		// 			value.push($(this).val());
		// 		}
		// 	});
		// 	$("#question_2").text(value.join(", "));
		// 	break;

		case 'status':
			// Get the value for a radio
			var value = $(formControl).val();
			$("#status").text(value);
			break;

		// case 'additional_message':
		// 	// Get the value for a textarea
		// 	var value = $(formControl).val();
		// 	$("#additional_message").text(value);
		// 	break;
	}
}
