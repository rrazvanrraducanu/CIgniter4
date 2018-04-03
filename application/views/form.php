<?php

$this->load->helper('form');
echo form_open();
$data = ['name'          => 'text1',
        'id'            => 'text1',
        'value'         => $var1,
        'maxlength'     => '100',
        'size'          => '30',
       ];
echo form_input($data);
echo form_submit('submit', 'Submit!');
echo $var2;

