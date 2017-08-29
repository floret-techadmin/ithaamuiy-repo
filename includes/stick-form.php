<form onsubmit="" action="javascript: postContactToGoogle()" method="post" id="book_masterpiece" class="book_form cf" target="_self">          
  <div class="group">
    <input type="text" id="enq_name" name="enq_name" class="field" placeholder="Name" required />
  </div> 
  <div class="group pull-right">
    <input type="text" id="enq_mail" name="enq_mail" class="field" placeholder="Email" required />
  </div>
  <div class="group">
    <input type="text" id="enq_phone" name="enq_phone" class="field" placeholder="Phone" onkeypress="return isNumberKey(event)" required />
  </div>
  <div class="group pull-right">   
    <select id="floor" name="floor" class="field" required>
		  <option>Preferred Floors</option>
		  <option value="1">1</option>  
		  <option value="2">2</option>  
		  <option value="3">3</option>  
		  <option value="4">4</option>  
		  <option value="5">5</option>  
		  <option value="6">6</option>  
		  <option value="7">7</option>  
		  <option value="8">8</option>  
		  <option value="9">9</option>  
		</select>
  </div> 
  <div class="group pull-right">
    <select id="room" name="room" class="field" required>
		  <option>Preferred No of Rooms</option>
		  <option value="1">1</option> 
		  <option value="2">2</option>  
		  <option value="3">3</option>
		</select>
  </div>    
  <div class="group pull-right mb0">
    <input type="submit" value="BOOK NOW" class="submit" id="submit_enquiry"/>
  </div>
</form>
<script type="text/javascript">
  function postContactToGoogle()
  {
    $('#submit_enquiry').attr('value', 'PLEASE WAIT...');
      var name              = $('#enq_name').val();
      var email             = $('#enq_mail').val();
      var phone             = $('#enq_phone').val();
      var floor             = $('#floor').val();
      var room              = $('#room').val();
      $.ajax({
        url: "https://docs.google.com/forms/d/1yQcCEsJqpkBiYzZUjTt_Nko1EczIAR6_7RMlmfbM7aw/formResponse",
        data: {"entry.2077411787" : name, "entry.1074698799" : email, "entry.339897612": phone, "entry.2119673580": floor, "entry.796272151": room},
        type: "POST",
        dataType: "xml",
        statusCode: {
            0: function (){
                $('#enq_name').val("");
                $('#enq_mail').val("");
                $('#enq_phone').val("");
                $('#floor').val("").change();
                $('#room').val("").change;
                $('#submit_enquiry').attr('value', 'BOOK NOW');
                window.location.href = 'thanks.php';
                //Success message
            },
            200: function (){
                $('#enq_name').val("");
                $('#enq_mail').val("");
                $('#enq_phone').val("");
                $('#floor').val("").change();
                $('#room').val("").change;
                $('#submit_enquiry').attr('value', 'BOOK NOW');
                window.location.href = 'thanks.php';
            }
        }
      });
  }
</script>
