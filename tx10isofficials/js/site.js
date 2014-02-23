//begin document ready function
$(document).ready(function () {
//begin date dropdown listener
	    $("#date_dropdown").live("change", function (e) {
                var self = this;
		var objRequest = {date: $(this).val()};
        	$.get('ajax/dates.php',
                	objRequest,
			function (aoData) {
				$("#location").remove();
				var ddHTML = '<div id="location">Please select a class location from the list below:<br><br><select name="location" id="select_location">';
				ddHTML += '<option value="none">none</option>';
				$.each(aoData, function(e){ddHTML += '<option value="' + this.city + '">' + this.city + '</option>';});
                                ddHTML += '</select><br><br><br></div>';
				$("#infodiv").append(ddHTML);
                    	}
            	);
	});
//end date dropdown listener
//classdate dropdown listener
		$("#class_date").live("change",function (c) {
			var self = this;
			var objRequest = {date: $(this).val()};
			$.get('ajax/dates.php',
				objRequest,
				function (aoData) {
                                $("#classlocation").remove();
                                var ddHTML = '<div id="classlocation">Please select a class location from the list below:<br><br><select name="classlocation" id="classselect_location">';
                                ddHTML += '<option value="none">none</option>';
                                $.each(aoData, function(e){ddHTML += '<option value="' + this.city + '">' + this.city + '</option>';});
                                ddHTML += '</select><br><br><br>'
				ddHTML += '</div>';
                                $("#infodiv").append(ddHTML);
                        }
                );
        });
//end classdate dropdown listener
//begin new function

            $("#select_location").live("change", function (l) {
			$("#getclass").remove();
		       	       var ddFORM = '<div id="registration" class="registration">';
				//ddFORM += '<font face="courier new">';
				ddFORM += 'First Name: <input type="text" name="first" /><br><br>';
                               ddFORM += 'Last Name: &nbsp<input type="text" name="last" /><br><br>';
			       ddFORM += 'USTA #:     &nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="USTA" /><br><br>';
                               ddFORM += 'Email:      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="email" /><br><br>';
                               ddFORM += 'Phone:      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="phone" /><br><br>';
                               ddFORM += 'Address:    &nbsp;&nbsp;&nbsp<input type="text" name="street1" /><br><br>';
                               ddFORM += 'Line 2:     &nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="street2" /><br><br>';
                               ddFORM += 'City:       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="city" /><br><br>';
                               ddFORM += 'State:      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="state" maxlength=2 /><br><br>';
                               ddFORM += 'Zip:        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="postcode" /><br><br>';
                               //ddFORM += '</font>';
                               //ddFORM += '<font face="verdana">Please check the class(es) you will be attending:<br><br>';
                              ddFORM += 'Please check the class(es) you will be attending:<br><br>';
				 ddFORM += '<input type="checkbox" name="new_official"/>USTA (New Officials or less than 3 years experience)<br>';
                               ddFORM += '<input type="checkbox" name="three"/>USTA<br>';
                               ddFORM += '<input type="checkbox" name="ita"/>ITA (Must attend USTA class)<br>';
                               ddFORM += '<input type="checkbox" name="referee"/>Referee (Must attend USTA class)<br><br>';
				//ddFORM += '</font>';
				ddFORM += '<br>Please indicate the approximate number of Officiating days or number of chairs you work in each category - in a calendar year:<br><br>';
				//ddFORM += '<font face="courier new">';
				ddFORM += 'USTA Roving:  &nbsp;&nbsp;&nbsp<input type="text" name="roving" maxlength=3 /><br><br>';
				ddFORM += 'USTA Line:   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="line" maxlength=3 /><br><br>';
				ddFORM += 'USTA Chair:  &nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="chair" maxlength=3 /><br><br>';
				ddFORM += 'USTA Referee: &nbsp;&nbsp<input type="text" name="refereenum" maxlength=3 /><br><br>';
				ddFORM += 'ITA Chair: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="text" name="itachair" maxlength=3 /><br><br>';
			//	ddFORM += 'Under 18? &nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" name="under18"/><br><br>';
                                //ddFORM += '</font>';
				ddFORM += '<input type=submit value="Register" />';
                               ddFORM += '<br><br></div>';
                               $("#location").append(ddFORM);
							   }
        );

//end new function
//select location function for get class list page
            $("#classselect_location").live("change", function (z) {
			var self = this;
			var objRequest = {city: $(this).val()};
			$.get('ajax/classlist.php',
				objRequest,
				function (aoData) {
				$("#registration").remove();
                                var ddFORM = '<div id="getclass">';
                                ddFORM += '<input type=submit value="Get List"/><br><br>';
				$.each(aoData,function(z) {ddFORM += "  Class list for coordinator " + this.firstname + " " + this.lastname + " in " + this.city + "." ;});
                                ddFORM += '</div>';
                                $("#classlocation").append(ddFORM);
                        }
		);
	});
}); //end document ready function

function formValidation() {
        var ref_email = $('input[name="ref_email"]');
	var tournament = $('input[name="tournament"]');
        var tcity = $('input[name="tcity"]');
	var tid = $('input[name="tid"]');
	var site = $('input[name="site"]');
	var oname = $('input[name="name"]');
	var email = $('input[name="email"]');
	var phone = $('input[name="phone"]');
	var odate = $('input[name="date"]');
	var oname = $('input[name="name"]');
	var time = $('input[name="time"]');
	var player = $('input[name="player"]');
	var opponent = $('input[name="opponent"]');
	var division = $('input[name="division"]');
        var code = $('input[name="code"]');
	var penalty = $('input[name="penalty"]');
	var court = $('input[name="court"]');
	var description = $('textarea[name="description"]');

        if(notEmpty(ref_email, "Please enter the referee's email address")){
          if(notEmpty(tournament, "Please enter the tournament name")){
            if(notEmpty(tid,"Please enter the tournament id")){
             if(notEmpty(tcity,"Please enter the tournament city")){
             if(notEmpty(site,"Please enter the site name")){
               if(notEmpty(oname,"Please enter your name")){
                 if(notEmpty(email,"Please enter your email address")){
                   if(notEmpty(phone,"Please enter your phone number")){
                     if(notEmpty(odate,"Please enter the date of the offense")){
                       if(notEmpty(time,"Please enter the time of the offense")){
                         if(notEmpty(player,"Please enter the name of the player committing the offense")){
                           if(notEmpty(opponent,"Please enter the name of the opposing player")){
                             if(notEmpty(division,"Please enter the division")){
                               if(notEmpty(code,"Please enter the code violation")){
                                 if(notEmpty(penalty,"Please enter the penalty")){
                                   if(notEmpty(court,"Please enter the court number")){
                                     if(notEmpty(description,"Please enter the description of the offense")){
					document.forms[0].submit();
                                       return true;{
                                     }
                                   }
                                 }
                               }
                             }
                           }
                         }
                       }
                     }
                   }
                 }
               }
             }
             }
            }
          }
        }
}
        return false;
}

function notEmpty(elem, helperMsg){
//console.log("name: " +elem.attr('name'));
        if(elem.val().length < 0 || elem.val() == null || elem.val() == ''){
                alert(helperMsg);
                return false;
        }else{
		return true;
	}
}

