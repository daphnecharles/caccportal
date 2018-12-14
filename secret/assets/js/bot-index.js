"use strict";

var outputArea = $("#chat-output");

$("#user-input-form").on("submit", function (e) {

  e.preventDefault();

  var message = $("#user-input").val();

  outputArea.append("\n    <div class='bot-message'>\n      <div class='message'>\n        " + message + "\n      </div>\n    </div>\n  ");

  $("#chat-output").scrollTop($("#chat-output")[0].scrollHeight);		
	  
	var xmlObj = new XMLHttpRequest();
	
	xmlObj.open("POST","https://westus.api.cognitive.microsoft.com/qnamaker/v1.0/knowledgebases/98871163-dd1a-4f20-9f08-b017a39dea48/generateAnswer",true);
	xmlObj.setRequestHeader("Content-Type","application/json");
	xmlObj.setRequestHeader("Ocp-Apim-Subscription-Key","651122592c9f49059efc7acc977bdd6f");
	
	xmlObj.onreadystatechange = function (){
			
			if(xmlObj.readyState == 4 && xmlObj.status == 200){
			try{
				var response = xmlObj.responseXML;
				
				var answerresponse = response.getElementsByTagName("AnswerResponse");
				var answers = answerresponse[0].getElementsByTagName("Answer");
				
				var returnobj = answers[0].childNodes[0].nodeValue
			
			var returntext = returnobj.replace(/\n/g, "<br />");
			
			if(returntext.search("No good match found in the KB") != -1)
			{returntext = "I don't know the answer for that question. Did you check if it is on consultant wiki?<br>You can help me learn faster by filling out this form:<br>http://bit.ly/2k09lX8";}
		
			
	  
			outputArea.append("\n			<div class='user-message'>\n			<div class='message'>\n"+returntext +"\n			</div>\n			</div>\n			");

			}
			catch(err) {
				
				var response = xmlObj.responseText;
				var jsonobj = jQuery.parseJSON(response);
				
			var returntext = jsonobj.answer.replace(/\n/g, "<br />");
			if(returntext.search("No good match found in the KB") != -1)
			{returntext = "I don't know the answer for that question. Did you check if it is on consultant wiki?<br>You can help me learn faster by filling out this form:<br>http://bit.ly/2k09lX8";}
			outputArea.append("\n			<div class='user-message'>\n			<div class='message'>\n"+returntext +"\n			</div>\n			</div>\n			");

				
			}
			
			$("#chat-output").scrollTop($("#chat-output")[0].scrollHeight);		
			}
			
	}
	message = message.replace(/["']/g, "");
	var question = "{question: '"+message+"'}";
	xmlObj.send(question);  
	  
	  

  $("#user-input").val("");
});
