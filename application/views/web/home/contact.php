<?php include 'header.php';?>

<style>
.contact_icon_box{
  position: relative;
}
.contact_icon_box .icon{
  background-color: rgba(0, 97, 223, .03);
  border-radius: 50%;
  height: 70px;
  line-height: 70px;
  margin-right: 20px;
  text-align: center;
  width: 70px;
}
.contact_icon_box .icon span{
  color: #0061DF;
  font-size: 24px;
}
.contact_icon_box .details .title{
  font-size: 16px;
  line-height: 24px;
  font-weight: 600;
}
.contact_icon_box .details p{
  font-size: 14px;
  line-height: 30px;
}
</style>

  <!-- Inner Page Breadcrumb -->
  <section class="inner_page_breadcrumb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6">
          <div class="breadcrumb_content">
            <h2 class="breadcrumb_title">Contact Us</h2>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Contact -->
  <section class="our-contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>We're always eager to hear from you!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 col-xl-3 pr0 pl0 plpr15-lg">
          <div class="contact_icon_box mb50">
            <div class="icon float-left"><span class="flaticon-map"></span></div>
            <div class="details">
              <h5 class="title">Address</h5>
              <p>Office # 29, Ground Floor. Heena Arcade 1 Business Premises, S. V. Road, Jogeshwari (W), Mumbai - 400102.</p>
              <!-- <p>329 Queensberry Street, North<br>Melbourne VIC 3051, Australia.</p> -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="contact_icon_box mb50">
            <div class="icon float-left"><span class="flaticon-phone"></span></div>
            <div class="details">
              <h5 class="title">Contact</h5>
              <p>Mobile: <a href="tel:<?php echo ADMIN_CONTACT; ?>"><?php echo ADMIN_CONTACT; ?></a><br>Mail:  <a href="mailto:<?php echo ADMIN_EMAIL; ?>"><?php echo ADMIN_EMAIL; ?></a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 pr0 pl0 plpr15-lg">
          <div class="contact_icon_box mb50">
            <div class="icon float-left"><span class="flaticon-clock"></span></div>
            <div class="details">
              <h5 class="title">Hour of operation</h5>
              <p>Monday - Friday: 09:00 - 20:00<br>Sunday & Saturday: 10:30 - 22:00</p>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-12">
          <div class="h550" id="map-canvas"></div>
        </div> -->
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="form_grid mt100">
              <div class="alert alert-success alert-dismissible" style="display: none;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> Thank you for contacting us our team will connect with you soon!
              </div>
            <h2 class="text-center mb50">Contact Us</h2>
            <form class="contact_form" name="contact_form" id="contact_form" method="post" onsubmit="return send_enquiry(event)">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="name" id="name" class="form-control"  type="text" placeholder="Name">
                    <p style="color: red;display: none;" id="name_error">Name is required.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="contact" id="contact" class="form-control required email"  type="number" placeholder="Contact">
                    <p style="color: red;display: none;" id="contact_error">Contact is required.</p>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <textarea name="message" id="message" class="form-control required" rows="6"  placeholder="Enter Your Message"></textarea>
                  </div>
                  <div class="form-group mb0 text-center">
                    <button type="submit" class="btn btn-thm">SUBMIT</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'contact_footer.php';?>  