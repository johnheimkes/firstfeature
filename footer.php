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
            <div id="foot-contact">
              <a href="#" target="_blank">Twitter</a>
              <a href="#" target="_blank">Facebook</a>
              <a href="#" target="_blank">Donate</a>
              <?php
                if($_GET['success'] == true) {
                  echo "<p class='return_pass'>Thanks! We'll get back to you soon.</p>";
                } elseif($_GET['error'] == true) {
                  echo "<p class='return_fail'>Error! Did you forget something?</p>";
                }
              ?>
              <fieldset>
                <form action="form.php" method="post">
                  <input type="text" name="name" value="Name" id="name" class="clearit" />
                  <input type="text" name="email" value="Email" id="email" class="clearit" />
                  <textarea name="message" id="message" value="Message" class="clearit"></textarea>
                  <input type="submit" name="submit" value="Send" id="submit" />
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