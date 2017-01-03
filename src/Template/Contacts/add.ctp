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
            echo $this->Form->input('dbDate', ['label'=>'Current Date', 'type'=>'datetime']);
            echo $this->Form->input('dbLastName', ['label'=>'Last Name']);
            echo $this->Form->input('dbFirstName', ['label'=>'First Name']);
            echo $this->Form->input('dbCompany', ['label'=>'Company']);
            echo $this->Form->input('dbTitle', ['label'=>'Title']);
            echo $this->Form->input('dbBusinessTitle', ['label'=>'Business Title']);
            echo $this->Form->input('dbPrimaryEmail', ['label'=>'Email']);
            echo $this->Form->input('dbSecondaryEmail', ['label'=>'Secondary Email']);
            echo $this->Form->input('dbWebAddress', ['label'=>'Web Address']);
            echo $this->Form->input('dbMailingLabel', ['label'=>'Mailing Label?', 'type'=>'checkbox']);
            echo $this->Form->input('dbRegistrationComplete', ['label'=>'Registration Complete?', 'type'=>'checkbox']);
            echo $this->Form->input('dbOtherComments', ['label'=>'Notes']);
            echo $this->Form->input('dbPhone', ['label'=>'Phone Number']);
            echo $this->Form->input('dbAddress', ['label'=>'Address']);
            echo $this->Form->input('dbCity', ['label'=>'City']);
            echo $this->Form->input('dbState', ['label'=>'State']);
            echo $this->Form->input('dbCountry', ['label'=>'Country']);
            echo $this->Form->input('dbZip', ['label'=>'Zip Code']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
