<?php $this->layout('layout', ['title' => 'Utilisateur']) ?>

<?php $this->start('main_content') ?>
    <h2> Veuillez remplir les champs </h2>
<form class="form">
    <input class ="email" type="email" name="email" method="post">
    <input class ="pseudo" type="text" name="pseudo" method="post">
    <input class ="password" type="password" name="password" method="post">
</form>
<?php $this->stop('main_content') ?>