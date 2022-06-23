<?=$this->extend('/template/index')?>

<?=$this->section('content')?>

    <h1>User List</h1>
<?php d($user)?>
      
<?=$this->endSection()?>