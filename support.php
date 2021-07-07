<?php include("nav.inc.php"); ?>

<div class="container-fluid" id="supportbannercontainer">
<div class="row">
    <div class="col">
        
        <div id="supportbanneritem" class="container-fluid">
        <h1 class="display-2">How Can We Help You?</h1>
        <p class="display-4">Parrot Media Are Here For You!</p>
        
        </div>
        </div>
    </div>
    </div>

    
    <div class="container">
     <div class="row p-5">
    
        <div class="col-sm-6">
        <img class="img-fluid" src="assets/img/responsivedesign.png"/>
                </div>

                <div class="col-sm-6">
                   
                        <div>
                            <h2 style="font-weight:500">Do you need a fully responsive website that works on every device?</h2>
                            <p class="lead">we will work with you and develop a stunning website that will look amazing on every device. With the growing demand for mobile devices, it is  <strong>very</strong> important that your website works on every device.</p>
                        </div>
                </div>
    
      </div>
    </div>
    
    <div class="container">
     <div class="row p-5">
    
        <div class="col-sm-6">
        
                 
                    <h2 style="font-weight:500">Develop your social media presence with <span class="parrotname">Parrot </span><span class="medianame">Media </span></h2>
                <p class="lead">Getting your business online and noticed on Social Media does not have to be a difficult task. At <span class="parrotname">Parrot </span><span class="medianame">Media </span>we will work with you to develop your online presence.</p>
                
                </div>

                <div class="col-sm-6">
                <img class="img-fluid" src="assets/img/socialbanners.png"/>
                        
                </div>
    
      </div>
    </div>
    

</div>

<div class="container">

    <div class="row">
        <div class="col">
            <h1 class="display-3">Want to know more?</h1>
             <h2>Tell us how <span class="parrotname">Parrot </span><span class="medianame">Media </span>can help you</h2>
             <p class="lead">
                 Provide us with a bit of information below and we can start helping you to get your business online!
             </p>
        </div>     
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-7">
        <form action="contact.php" method="POST">
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-user-o"></i></span>
        </div>    
        <input type="text" id="fname" name="fname" placeholder="First Name" required class="form-control">
        </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-user-o"></i></span>
        </div> 
        <input type="text" id="sname" name="sname" placeholder="Surname" required class="form-control">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
        </div> 
        <input type="email" id="email" name="email" placeholder="Your Email Address" required class="form-control">
    </div>
    <div class="input-group">
        <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-question"></i></span>
        </div>

        <select id="howcanwehelp" name="howcanwehelp" class="form-control">
            <optgroup label="How Can We Help You?">
            <option value="I want a new website">I want a new website</option>
            <option value="I need help with my current website">I need help with my current website</option>
            <option value="It is Something else">It's Something else</option>
        </select>
        
    </div>
    <div class="form-group">
        <label for="message">Write your message</label>
        <textarea class="form-control" id="message" name="message" placeholder="Tell us a little more?" rows="10" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

        </div>

        <div class="col-md-5">
        <h4>You can also get in touch using these details</h4>
            <div class="row">
                <div class="col">
                    <p><i class="fas fa-paper-plane"> </i> sales@parrotmedia.co.uk</p>
                    <p><i class="fas fa-phone"> </i> 0800 000 000 000</p>
                    <p><i class="fas fa-location-arrow"> </i> Daniels Gate, Long Sutton, Lincolnshire</p>
                </div>
                
                
                   
                
                
            </div>
            
        </div> 
    </div>
    
</div>


<div id="bannertest">


</div>


                                            
    <div class="map-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Where are we?</h2>
                <p class="text-center"><span class="parrotname">Parrot </span><span class="medianame">Media </span> are based in Long Sutton, Lincolnshire. We aim to serve local businesses in the Lincolnshire area</p>
            </div>
        </div><iframe allowfullscreen="" frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB3trxMWZ4vwaNK1FHcVyvtAM2_JtLaoK0&amp;q=long+sutton%2C+lincolnshire&amp;zoom=15" width="100%" height="450"></iframe>
    </div>


    


    <?php include("footer.inc.php"); ?>