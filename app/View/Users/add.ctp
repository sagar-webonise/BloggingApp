<h3>Registration</h3>
<?php
echo $this->Form->create("User");
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('email');
echo $this->Form->end('Register');
?>