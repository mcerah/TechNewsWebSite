
 <div class="modal fade" id="sendNote" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Send Note</h4>
        </div>
          <div class="modal-body" style="float: left; display: flex; padding-top: 30px;padding-bottom: 30px;">
                              <div style="display: block; margin-left: 20px;">
                                  <div style="height: 50px; padding: 5px;"> E - mail:</div>
                   <div  style="height: 50px; padding: 5px;"> Name:</div>
                   <div style="height: 50px; padding: 5px;">  Subject:</div>
                    <div style="height: 50px; padding: 5px;">  Note:</div>
                </div>
               <div style="display: block; text-align: center;">
            <form action="#" method="Post">
    
                <input type="email" id="emailTextbox"  name="email" class="textBox" placeholder="example@mailservice.com" autofocus="true" autocomplete="false" oninput="emailOnChangeFunc()" onfocus="emailOnFocusFunc()" onblur="emailOnBlurFunc()" required>
                <input type="text" id="NameTextbox"  name="firstname" class="textBox" placeholder="Sender Name"  autocomplete="false">
                <input type="text" id="SubjectTextbox" name="" class="textBox" placeholder="What is the note about" oninvalid="this.setCustomValidity('Please Write a Subject')" onchange="try{setCustomValidity('')}catch(e){}" oninput="textOnChangeFunc(this.id)" onfocus="textOnFocusFunc(this.id)" onblur="textOnBlurFunc(this.id)"  autocomplete="false" required>
                <textarea type="textarea" rows="10" id="NoteAreaTextbox"  name="firstname" placeholder="Please Write Here ..."  oninvalid="this.setCustomValidity('Please Write Your Note')" onchange="try{setCustomValidity('')}catch(e){}" class="textBox"  oninput="textOnChangeFunc(this.id)" onfocus="textOnFocusFunc(this.id)" onblur="textOnBlurFunc(this.id)" required></textarea>
                     <input type="submit" class="btn btn-info btn-md" style="width: 30%; font-weight: 600; float: left; margin-left: 22px;" value="Submit">
             
</form>   </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
