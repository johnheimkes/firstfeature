     </div>
      <div id="mast-footer">
        <div id="footer">
          <div id="foot-contact">
            <div class="foot-block">
              <h3>Mark Mazur</h3>
              <img src="http://placekitten.com/165/280" alt="kitty!!!!!!!!" />
              <a href="#">email@email.com</a>
              <a href="http://twitter.com/markdmazur" target="_blank">@markdmazur</a>
            </div>
            <div class="foot-block">
              <h3>Trent Hilborn</h3>
              <img src="http://placekitten.com/165/280" alt="kitty!!!!!!!!" />
              <a href="#">email@email.com</a>
              <a href="#" target="_blank">@twitter</a>
            </div>
            <div class="foot-block">
              <h3>Lorem Ipsum</h3>
              <img src="http://placekitten.com/165/280" alt="kitty!!!!!!!!" />
              <a href="#">email@email.com</a>
              <a href="#" target="_blank">@twitter</a>
            </div>
            <div id="foot-form">
              <a href="#" target="_blank" id="twitter">Twitter</a>
              <a href="#" target="_blank" id="facebook">Facebook</a>
              <a href="#" target="_blank" id="donate">Donate</a>
              <?php
                if($_GET['success'] == true) {
                  echo "<p class='return_pass'>Thanks! We'll get back to you soon.</p>";
                } elseif($_GET['error'] == true) {
                  echo "<p class='return_fail'>Error! Did you forget something?</p>";
                }
              ?>
              <fieldset>
                <form action="form.php" method="post">
                  <label for="name"></label><input type="text" name="name" value="Name" id="name" class="clearit" />
                  <label for="email"></label><input type="text" name="email" value="Email" id="email" class="clearit" />
                  <label for="message"></label><textarea name="message" id="message" class="clearit">Message</textarea>
                  <label for="submit"></label><input type="submit" name="submit" value="Send" id="submit" />
                </form>
              </fieldset>
            </div>
          </div>
          <p class="copy">&copy; 2011 The First Feature</p>
        </div>
      </div>  
    </div>
  </body>
</html>