<?php include('inc/contact_form.php'); ?>
<?php include('inc/application_top.php'); ?>

    <div class="homepage">
      <div class="bg-container"><div class="inner-container"></div></div>

      <div class="jumbotron">
        <div class="scroll-speed fade-in" data-scroll-speed="2">
          <h1 class="lead"><span class="left-scroll">Kirsten</span> <span class="right-scroll">Dodd</span></h1>
          <p class="tagline">Web <em>Designer</em> <strong>Developer</strong> <span>Extraordinaire</span></p>
        </div>  
      </div>
      <?php include('inc/header.php'); ?>
      <div class="section" id="section-about">
        <div class="fc wrapper">
          <div class="container-box type-1" id="about">
            <div class="container-img">
              <img src="images/me.jpg" src="picture of me" />
            </div>
            <h2>who</h2>
            <div class="container-copy">
              <p>A Freelance <strong>Web Designer and Developer</strong>. An entrepreneurial spirit with a passion for <strong>photography</strong>. A detail oriented trendsetter.  A <strong>mentor</strong>. And above all a <strong>dog lover.</strong></p>
            </div>
          </div>
          
          <div class="container-box type-2" id="work">
            <div class="container-img">
              <a href="http://dev.portal.esidev.ca/" target="_blank">
                <img src="images/work_example.jpg" src="Demo site image" />
              </a>
            </div>
            <div class="container-img-2">
              <a href="http://dev.wpbo.info/" target="_blank">
                <img src="images/work_example2.jpg" src="paintball site image" />
              </a>
            </div>
            <h2>what</h2>
            <div class="container-copy">
              <p>Kirsten worked as a Senior Web Developer for Toronto Web Agency <a href="http://www.climaxmedia.com" target="_blank">Climax Media</a>. She was lead <strong>Front-End Developer</strong> on the recent redesign of <a href="http://www.honda.ca" target="_blank">Honda Canada's</a> home and models pages.  She was also lead Front-End Developer on projects such as <a href="http://brookfieldhomes.ca/community/treetops/new-homes" target="_blank">Brookfield Homes Community</a>, <a href="http://www.scoutt.com" target="_blank">Scoutt</a>, <a href="http://www.nerdblock.com" target="_blank">Nerd Block</a>, and others. Recently as a <strong>freelance artist</strong> she has been contracted by a Microsoft partner to Design and Develop a <a href="http://dev.portal.esidev.ca/" target="_blank">demo site</a> for potential clients, a student portal for non-profit organization Women Building Futures <em>(in progress)</em>, and a registration system for worldwide pro <a href="http://dev.wpbo.info" target="_blank">Paintball</a> players. In addition, she is currently working with up-and-coming Musicians in Victoria, BC to improve their marketing and branding through Photography, Digital Design, Social Media Presence, and Website Development.</p>  
            </div>
          </div>
          <div class="container-box type-3">

            <h2>when</h2>
            <div class="container-copy">
              <p> 2006 - 2011 <strong>Multi Media BA</strong> - <em>University of New Brunswick</em><br />
                  2011 - 2012 <strong>Web Design, Development, and Maintenance</strong> - <em>Humber College</em><br />
                  2012 - 2016 <strong>Climax Media</strong> - <em>Toronto based Web Agency</em><br />
                  2011 - 2016 Part-time <strong>Freelance</strong> extraordinaire <br />
                  Present day Full-time <strong>Freelance</strong>  extraordinaire</p>
            </div>
          </div>
          
          <div class="container-box type-2 where">
            <div class="container-img">
              <img src="images/map.jpg" src="map" />
            </div>
            <h2>where</h2>
            <div class="container-copy">
              <p>A true gypsy soul; Kirsten has lived in cities across North America, always finding new sources of creativity and innovation in each. Today she calls <strong>Victoria, BC</strong> home.</p>
            </div>
          </div>
          <div class="container-box type-1 how">
            <h2>how</h2>
            <div class="container-copy">
              <p>
                <strong>Photography, Photoshop, HTML, CSS, Jquery, JavaScript</strong><br />
                As a design inclined developer Kirsten understands that form and function are not mutually exclusive and refuses to sacrifice one for the other. Combining her background in development and lifelong passion in digital media, photography, and design; she breathes life into every project she takes on. 
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="section contact-form">
        <div class="wrapper">
        <h2>Drop Me a Line</h2>
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
            <div class="form-group test-group">
              <label for="human" class="col-sm-2 control-label">1 + 2 = ?</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                <?php echo "<p class='text-danger'>$errHuman</p>";?>
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
        </div>
      </div>
      <div class="section career-tout">
        <div class="wrapper">
          <h2>Your business lacking a website or your current website need a facelift? </h2>
           <a href="mailto:kirsten.jvd@gmail.com" class="btn-primary">Contact kirstenjvd@gmail.com</a>
          <footer class="fc">
            <p class="copyright">&copy;copyright 2016</p>
          </footer>
        </div>
      </div>
    </div>  

<?php include('inc/application_bottom.php'); ?>
