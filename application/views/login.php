<?php echo validation_errors(); ?>

<div class="col-xs-1" align="center">
  <h3>Welcome to KYC's to-do list. Get started by logging in</h3>
  <?php echo form_open('Login/validateLogin'); ?>

  Username: <br/>
  <input type="text" name="username"/><br/><br/>

  Password: <br/>
  <input type="text" name="password"/><br/>  

  <input type="submit" value="Login" name="submit"/>

  </form>
  <a href="<?php echo site_url('Login/signup'); ?>">Sign Up</a>

</div>