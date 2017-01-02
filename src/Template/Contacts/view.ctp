<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->dbContactNumber]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->dbContactNumber], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->dbContactNumber)]) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contacts view large-9 medium-8 columns content">
    <h4><?= h($contact->dbFirstName) ?> <?= h($contact->dbLastName) ?></h4>
	<?= $this->Text->autoParagraph(h($contact->dbPrimaryEmail)); ?>
	<?= $this->Text->autoParagraph(h($contact->dbAddress)); ?>
	<?= $this->Text->autoParagraph(h($contact->dbCity)); ?> <?= h($contact->dbState) ?>
	<?= $this->Text->autoParagraph(h($contact->dbCountry)); ?>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('DbMailingLabel') ?></th>
            <td><?= h($contact->dbMailingLabel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DbRegistrationComplete') ?></th>
            <td><?= h($contact->dbRegistrationComplete) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DbWebLook') ?></th>
            <td><?= h($contact->dbWebLook) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DbWantRec') ?></th>
            <td><?= h($contact->dbWantRec) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DbWantCom') ?></th>
            <td><?= h($contact->dbWantCom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DbWantRes') ?></th>
            <td><?= h($contact->dbWantRes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DbSelfAssembly') ?></th>
            <td><?= h($contact->dbSelfAssembly) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DbNeoAssembly') ?></th>
            <td><?= h($contact->dbNeoAssembly) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DbContactNumber') ?></th>
            <td><?= $this->Number->format($contact->dbContactNumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DbDate') ?></th>
            <td><?= h($contact->dbDate) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('DbCompany') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbCompany)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbTitle') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbTitle)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbBusinessTitle') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbBusinessTitle)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbSecondaryEmail') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbSecondaryEmail)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbWebAddress') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbWebAddress)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbAddNotes') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbAddNotes)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbSource') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbSource)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbCheck') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbCheck)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbPassword') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbPassword)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbSecurityQuestion') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbSecurityQuestion)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbSecurityAnswer') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbSecurityAnswer)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbHowFind') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbHowFind)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbWhereUse') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbWhereUse)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbVehicles') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbVehicles)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbHowMuch') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbHowMuch)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbOtherComments') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbOtherComments)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbHowInterest') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbHowInterest)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbUsr') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbUsr)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbIP') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbIP)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbPhone') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbPhone)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbAddress') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbAddress)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbCity') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbCity)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbState') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbState)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbCountry') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbCountry)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbZip') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbZip)); ?>
    </div>
    <div class="row">
        <h4><?= __('DbType') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->dbType)); ?>
    </div>
</div>
