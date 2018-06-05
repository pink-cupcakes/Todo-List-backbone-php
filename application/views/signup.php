<?php echo validation_errors(); ?>

<div class="header">
  <h3>Welcome to KYC's to-do list. Get started by logging in</h3>
  <?php echo form_open('Login/addUser'); ?>

  Username: <br/>
  <input type="text" name="username"/><br/><br/>

  Password: <br/>
  <input type="text" name="password"/><br/>  

  <input type="submit" value="Sign Up" name="submit"/>

  </form>
  <a href="<?php echo site_url('Login/index'); ?>">Login</a>
</div>