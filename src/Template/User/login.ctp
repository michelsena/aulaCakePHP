<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="user form">
<?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Por favor, entre com seu nome de usuário e senha') /* "Please enter your username and password" */ ?></legend>
        <?= $this->Form->control('email') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    <?= $this->Form->end() ?>
</div>
