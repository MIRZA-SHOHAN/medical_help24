<div class="contact_form">
    <div id="message"></div>
    <h2 style="color: #fff">Message Us</h2>
    <form action="" method="post">
      @csrf
      <input type="hidden" name="source" id="source" value="contact2">
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
         <button class="btn btn-block cbtn" type="submit" id="contactFormBtn" style="background: #fac420;">Submit</button>
        </div>
      </form>
</div>


<style>
  .location_area label {
      display: none;
  }
  .contact_form .form-control {
      display: block;
      width: 100%;
      padding: .375rem .75rem;
      font-size: 1rem;
      line-height: 2.0;
  }
  
  .contact_form .form-control {
      display: block;
      width: 100%;
      padding: .375rem .75rem;
      font-size: 1rem;
      line-height: 2.0;
      color: #495057;
      background-color: #4ca5f3;
      background-clip: padding-box;
      border: 1px solid #4ca5f3;
      border-radius: .25rem;
      transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
  }
  
  .contact_form {
      background: #389BF2;
      padding: 50px;
      border-right: 30px solid #FAC420;
  }
  
  label {
      display: none;
  }
</style>