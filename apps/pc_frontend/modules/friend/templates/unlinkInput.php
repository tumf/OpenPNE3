<?php
op_include_parts('yesNo', 'unlinkConfirmForm', array(
  'title' => __('Do you delete %0% from my friend?', array('%0%' => $member->getName())),
  'yes_form' => new sfForm(),
  'no_method' => 'get',
  'no_url' => url_for('friend/manage')
)) ?>
