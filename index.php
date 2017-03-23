<?php include('inc/contact_form.php'); ?>
<?php include('inc/application_top.php'); ?>
    <div class="homepage" id="top">
      <div class="jumbotron">
        <div class="scroll-speed fade-in" data-scroll-speed="3">
          <h1 class="lead"><span class="left-scroll">Kirsten</span> <span class="right-scroll">Dodd</span></h1>
          <p class="tagline">Web <em>Designer</em> <strong>Developer</strong> <span>Extraordinaire</span></p>
        </div>        
        <!-- header -->
        <?php include('inc/header.php'); ?>
      </div>
      <div class="section" id="section-about">
        <div class="fc wrapper">
          <div class="container-box type-1" id="about">
            <div class="container-img">
              <img src="images/me2.jpg" src="picture of me" />
            </div>
            <h2>who</h2>
            <div class="container-copy">
              <p>A unicorn <strong>Web Designer and Developer</strong>. An entrepreneurial spirit with a passion for <strong>photography</strong>. A detail oriented trendsetter.  A <strong>mentor</strong>. And above all a <strong>dog lover.</strong></p>
            </div>
          </div>          
          <div class="container-box type-2 where">
            <div class="container-img">
              <img src="images/map.jpg" src="map" />
            </div>
            <h2>where</h2>
            <div class="container-copy">
              <p>Lived in cities across North America, always finding new sources of creativity and innovation in each. Today she calls <strong>Victoria, BC</strong> home.</p>
            </div>
          </div>
          <div class="container-box type-3">
            <h2>when</h2>
            <div class="container-copy">
              <p> 2006 - 2011 <strong>Multi Media BA</strong> - University of New Brunswick<br />
                  2011 - 2012 <strong>Web Design, Development, and Maintenance</strong> - Humber College<br />
                  2012 - 2016 <strong>Climax Media</strong> - Front End Developer<br />
                  2011 - 2017 <strong>Freelance</strong> Design and Development<br />
                  2016 - Present <strong>PurposeSocial</strong>  - Technical Lead</p>
            </div>
          </div>     
          <div class="container-box type-2" id="section-work">
            <div class="container-img">
              <a href="http://dev.portal.esidev.ca/" target="_blank">
                <img src="images/work_example.jpg" src="Demo site image" />
              </a>
            </div>
            <div class="container-img-2">
              <a href="https://dev.nxlregistration.com/" target="_blank">
                <img src="images/work_example2.jpg" src="paintball site image" />
              </a>
            </div>
            <h2>what</h2>
            <div class="container-copy">
              <p>Kirsten worked as a Front End Web Developer for Toronto Web Agency <a href="http://www.climaxmedia.com" target="_blank">Climax Media</a>. She was lead <strong>Front-End Developer</strong> on the recent redesign of <a href="http://www.honda.ca" target="_blank">Honda Canada's</a> home and models pages.  She was also lead Front-End Developer on projects such as <a href="http://brookfieldhomes.ca/community/treetops/new-homes" target="_blank">Brookfield Homes Community</a>, <a href="http://www.scoutt.com" target="_blank">Scoutt</a>, and others. As a <strong>freelance artist</strong> she was bcontracted by a Microsoft partner to Design and Develop a CRM <a href="http://dev.portal.esidev.ca/" target="_blank">demo site</a> for potential clients, a student portal for non-profit organization Women Building Futures <em>(in progress)</em>, and a registration system for worldwide pro <a href="https://dev.nxlregistration.com/" target="_blank">Paintball</a> players. Core mentor for Ladies Learning Code. Currently the <strong>Technical Lead and Senior Mentor</strong> for start-up <a href="http://www.kirstendodd.com">PurposeSocial</a>, a Victoria based Web Agency and Junior Dev Accelorator.</p>  
            </div>
          </div>
          <div class="container-box type-1 how">
            <h2>how</h2>
            <div class="container-copy">
              <p>
                <strong>Photography, Design, and Multi Language Dev</strong><br />
                As a design inclined developer Kirsten understands that form and function are not mutually exclusive and refuses to sacrifice one for the other. Combining her background in development and lifelong passion in digital media, photography, and design; she breathes life into every project she takes on. 
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="section contact-form">
        <div class="wrapper">
        <h2 id="section-contact">Get in touch</h2>    
        <a href="mailto:kirstenjvd@gmail.com" class="email-address">info@kirstendodd.com</a>
          <form class="form-horizontal" role="form" method="post" action="index.php">
            <div class="clr">
              <div class="form-group name-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                  <?php echo "<p class='text-danger'>$errName</p>";?>
                </div>
              </div>
              <div class="form-group email-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                  <?php echo "<p class='text-danger'>$errEmail</p>";?>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="message" class="col-sm-2 control-label">Message</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="4" name="message" placeholder=""><?php echo htmlspecialchars($_POST['message']);?></textarea>
                <?php echo "<p class='text-danger'>$errMessage</p>";?>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2">
                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2">
                <?php echo $result; ?>  
              </div>
            </div>
          </form> 
          <ul class="social">
            <li><a href="mailto:kirstenjvd@gmail.com" target="_blank"><img src="images/mail.svg" alt="Email" /></a></li>
            <li><a href="https://twitter.com/kirstenjvd" target="_blank"><img src="images/twitter.svg" alt="twitter" /></a></li>
            <li><a href="https://ca.linkedin.com/in/kirsten-dodd-582b373b" target="_blank"><img src="images/linkedin.svg" alt="linkedIn" /></a></li>
          </ul>
          <p class="copyright">&copy;copyright <script type="text/javascript">document.write(new Date().getFullYear());</script></p>
        </div>
      </div>
    </div>
    <div class="bg-container-bottom scroll-speed" data-scroll-speed="9"><div class="image"></div></div>
<?php include('inc/application_bottom.php'); ?>
