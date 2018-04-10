<h2>Greeting</h2>
<?php
//echo $this->Form->create('Flower', array('action'=>'index'));
echo $this->Form->create();
echo $this->Form->input('Nume', ['type'=>'text','name'=>'text1','value'=>$var1,'style'=>'width:400px; height:40px;']);
echo $this->Form->button('->', ['type' => 'submit']);
echo $var2;
echo $this->Form->end();
?>

