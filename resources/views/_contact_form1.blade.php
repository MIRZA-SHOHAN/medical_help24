
<div class="contact_form">
    <div id="message"></div>
    <h2 style="color: #000">Message Us</h2>
    <form action="" method="post">
      @csrf
      <input type="hidden" name="source" id="source" value="contact1">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email" class="form-control" required name="email" id="email" placeholder="Email Address">
          <input type="hidden" class="form-control" name="phone" id="phone" placeholder="Phone">
        </div>
        <div class="form-group">
          <label for="">Subject</label>
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">   
        </div>
       
        <div class="form-group">
          <label for="">Message</label>
          <textarea class="form-control" name="message" id="message" required rows="3" placeholder="Message"></textarea>
        </div>
        <div class="form-group">
         <button class="btn btn-block cbtn" type="submit" id="contactFormBtn" style="">Submit</button>
        </div>
      </form>

</div>

