<div>
	<p class="col-xs-1" align="center">Click here to see more details on what to do today:</p>
  <div class="col-xs-1" align="center">
    <a href="<?php echo site_url('chores/home'); ?>">Chores</a>
    <a href="<?php echo site_url('chores/logout')?>">Logout</a>
  </div>
  <form>
    <label for='Name'> Name </label>
    <input type='text' name='name' id='name' size='30'/><br>

    <label for='Address'> Date </label>
    <input type='date' name='date' id='date' size='30'/><br>

    <input type='submit' value='Create' id='create'/>
  </form>
</div>