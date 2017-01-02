<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contacts form large-9 medium-8 columns content">
    <?= $this->Form->create($contact) ?>
    <fieldset>
        <legend><?= __('Add Contact') ?></legend>
        <?php
            echo $this->Form->input('dbDate', ['empty' => true]);
            echo $this->Form->input('dbLastName');
            echo $this->Form->input('dbFirstName');
            echo $this->Form->input('dbCompany');
            echo $this->Form->input('dbTitle');
            echo $this->Form->input('dbBusinessTitle');
            echo $this->Form->input('dbPrimaryEmail');
            echo $this->Form->input('dbSecondaryEmail');
            echo $this->Form->input('dbWebAddress');
            echo $this->Form->input('dbAddNotes');
            echo $this->Form->input('dbSource');
            echo $this->Form->input('dbCheck');
            echo $this->Form->input('dbMailingLabel');
            echo $this->Form->input('dbPassword');
            echo $this->Form->input('dbSecurityQuestion');
            echo $this->Form->input('dbSecurityAnswer');
            echo $this->Form->input('dbRegistrationComplete');
            echo $this->Form->input('dbHowFind');
            echo $this->Form->input('dbWebLook');
            echo $this->Form->input('dbWantRec');
            echo $this->Form->input('dbWantCom');
            echo $this->Form->input('dbWantRes');
            echo $this->Form->input('dbWhereUse');
            echo $this->Form->input('dbVehicles');
            echo $this->Form->input('dbHowMuch');
            echo $this->Form->input('dbSelfAssembly');
            echo $this->Form->input('dbNeoAssembly');
            echo $this->Form->input('dbOtherComments');
            echo $this->Form->input('dbHowInterest');
            echo $this->Form->input('dbUsr');
            echo $this->Form->input('dbIP');
            echo $this->Form->input('dbPhone');
            echo $this->Form->input('dbAddress');
            echo $this->Form->input('dbCity');
            echo $this->Form->input('dbState');
            echo $this->Form->input('dbCountry');
            echo $this->Form->input('dbZip');
            echo $this->Form->input('dbType');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
