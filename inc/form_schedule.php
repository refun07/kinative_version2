<form>
                          <div class="row">
                              <div class="col-md-4 bg-grey form-padd-left">
                                  <div class="radio-section">
                                     <div class="radio">
                                         <p class="kinative_para black">How do you prefer to do the meeting?</p>                                    
                                          <input type="radio" id="test1" onclick="radioOne()" name="optradio" class="radio-one" checked>
                                          <label class="kinative_para" for="test1">Face to face</label>
                                         </div>
                                         <div class="radio">
                                          <input type="radio" id="test2" onclick="radioTwo()" name="optradio" class="radio-two">
                                          <label class="kinative_para" for="test2">Skype</label>
                                         </div>
                                         <div class="radio">
                                             <input type="radio" id="test3" onclick="radioThree()" name="optradio" class="radio-three">
                                            <label class="kinative_para" for="test3">Phone</label>
                                         </div>
                                   </div>
            
                                    <hr>
                                   
                                   <div class="radio-section radio-one-show">
                                          <div class="radio">
                                            <img src="images/form_icon_coffee.png" alt="coffe mug"/>
                                             <p class="kinative_para black">Tell us which coffe you would like to have at our office?</p>
                                             
                                           </div>
                                           <div class="radio">
                                              <input type="radio" id="capacino"  name="coffee" checked>
                                              <label class="kinative_para" for="capacino">Capachino</label>
                                             </div>
                                           <div class="radio">
                                              <input type="radio" id="expresso"  name="coffee">
                                              <label class="kinative_para" for="expresso">Expresso</label>
                                             </div>
                                             <div class="radio">
                                                <input type="radio" id="latte" name="coffee">
                                                <label class="kinative_para" for="latte">Latte</label>
                                               </div>
                                             
                                               <p class="kinative_para black margin-t25">Meeting Time</p>
                                               <div class="form-group">
                                                  <input type="text" name="date_id1" value="pick a date please" class="form-control form-white" id="datepicker"/>
                                               </div>
                                     </div>
                                     
                                     <div class="radio-section radio-two-show" style="display:none">
                                        <div class="radio">
                                            <img src="images/form_icon_coffee.png" alt="coffe mug"/>
                                             <p class="kinative_para black">Speak up which coffe you would like to have at our office?</p>
                                             
                                           </div>
                                           <div class="radio">
                                              <input type="radio" id="capacino2"  name="coffee2">
                                              <label class="kinative_para" for="capacino2">Capachino</label>
                                             </div>
                                           <div class="radio">
                                              <input type="radio" id="expresso2"  name="coffee2" checked>
                                              <label class="kinative_para" for="expresso2">Expresso</label>
                                             </div>
                                             <div class="radio">
                                                <input type="radio" id="latte2" name="coffee2">
                                                <label class="kinative_para" for="latte2">Latte</label>
                                               </div>
                                             
                                               <p class="kinative_para black margin-t25">Meeting Time</p>
                                               <div class="form-group">
                                                  <input type="text" name="date_id2" value="pick a date please" class="form-control form-white" id="datepicker2"/>
                                               </div>
                                      </div>

                                     <div class="radio-section radio-three-show" style="display:none">
                                        <div class="radio">
                                            <img src="images/form_icon_coffee.png" alt="coffe mug"/>
                                             <p class="kinative_para black">Say us which coffe you would like to have at our office?</p>
                                             
                                           </div>
                                           <div class="radio">
                                              <input type="radio" id="capacino3"  name="coffee3">
                                              <label class="kinative_para" for="capacino3">Capachino</label>
                                             </div>
                                           <div class="radio">
                                              <input type="radio" id="expresso3"  name="coffee3">
                                              <label class="kinative_para" for="expresso3">Expresso</label>
                                             </div>
                                             <div class="radio">
                                                <input type="radio" id="latte3" name="coffee3" checked>
                                                <label class="kinative_para" for="latte3">Latte</label>
                                               </div>
                                             
                                               <p class="kinative_para black margin-t25">Meeting Time</p>
                                               <div class="form-group">
                                                  <input type="text" name="date_id3" value="pick a date please" class="form-control form-white" id="datepicker3"/>
                                               </div>
                                     </div>
                                   </div>  
         
                                     <div class="col-md-8 form-padd-right">
                                        
                                             <div class="form-group">
                                               <label for="exampleInputUsername" class="kinative_para black">Your name</label>
                                               <input type="text" name="client_name" class="form-control" id="" placeholder=" Enter Name">
                                             </div>
                                             <div class="form-group">
                                               <label for="exampleInputEmail" class="kinative_para black">Your Email</label>
                                               <input type="email" name="client_email" class="form-control" id="exampleInputEmail" placeholder="murray@gmail.com">
                                             </div>	
                                             <div class="form-group">
                                               <label for="telephone" class="kinative_para black">Your Phone</label>
                                               <input type="text" name="client_phn" class="form-control" id="telephone" placeholder="+088019213812">
                                             </div>
                                          
                                        
                                             <div class="form-group">
                                               <label for ="description" class="kinative_para black">About the project</label>
                                                <textarea  class="form-control" name="client_des" id="description" placeholder="Tell us about the project,scope,budget etc"></textarea>
                                             </div>
                                            
                                             
                                             <div class="modal-btn" style="margin-top:45px">
                                                <button type="submit" style="width:100%" class="btn hvr-bounce-to-right">START A PROJECT</button>
                                             </div>
                                              
                                           </div>
                                         </div>              
                                </form>  