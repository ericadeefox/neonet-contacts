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
  <h4>
    <?= h($contact->dbTitle); ?>
    <?= h($contact->dbFirstName); ?>
    <?= h($contact->dbLastName); ?><?php echo ($contact->dbBusinessTitle) ? ', ' : ''; ?><?= h($contact->dbBusinessTitle); ?><?php echo ($contact->dbCompany) ? ', ' : ''; ?><?= h($contact->dbCompany); ?>
	</h4>
  <table class="vertical-table">
    <tr>
      <th scope="row"><?= __('Address') ?></th>
      <td>
        <?= h($contact->dbAddress); ?>
      </td>
    </tr>
    <tr>
      <th scope="row"><?= __('Address') ?></th>
      <td>
        <?= h($contact->dbCity); ?><?php echo ($contact->dbState) ? ', ' : ' '; ?><?= h($contact->dbState); ?><?php echo ($contact->dbCountry) ? ', ' : ' '; ?><?= h($contact->dbCountry); ?>
      </td>
    </tr>
    <tr>
      <th scope="row"><?= __('Email Address') ?></th>
      <td><?= $this->Text->autoLinkEmails($contact->dbPrimaryEmail) ?></td>
    </tr>
    <tr>
      <th scope="row"><?= __('Phone Number') ?></th>
      <td><?= h($contact->dbPhone); ?></td>
    </tr>
  </table>
  <h4><?= __('Sales Information') ?></h4>
  <table class="vertical-table">
      <tr>
          <th scope="row"><?= __('How did they find out about Neoteric?') ?></th>
          <td>
            <?= h($contact->dbHowFind); ?>
            <?= h($contact->dbHowInterest); ?>
          </td>
      </tr>
      <tr>
          <th scope="row"><?= __('Where will they primarily be using their hovercraft?') ?></th>
          <td><?= h($contact->dbWhereUse); ?></td>
      </tr>
      <tr>
          <th scope="row"><?= __('Do they have other recreational vehicles?') ?></th>
          <td><?= h($contact->dbVehicles); ?></td>
      </tr>
      <tr>
          <th scope="row"><?= __('What type of hovercraft are they interested in?') ?></th>
          <td><?= h($contact->dbType); ?></td>
      </tr>
      <tr>
          <th scope="row"><?= __('Notes') ?></th>
          <td>
            <?= h($contact->dbAddNotes); ?>
            <?= h($contact->dbOtherComments); ?>
          </td>
      </tr>
  </table>
  <h4><?= __('Web & Office Information') ?></h4>
  <table class="vertical-table">
      <tr>
          <th scope="row"><?= __('Contact Number') ?></th>
          <td><?= $this->Number->format($contact->dbContactNumber); ?></td>
      </tr>
      <tr>
          <th scope="row"><?= __('Date Added') ?></th>
          <td><?= h($contact->dbDate); ?></td>
      </tr>
      <tr>
          <th scope="row"><?= __('Username') ?></th>
          <td><?= h($contact->dbUsr); ?></td>
      </tr>
      <tr>
          <th scope="row"><?= __('IP Address') ?></th>
          <td><?= h($contact->dbIP); ?></td>
      </tr>
      <tr>
          <th scope="row"><?= __('Secondary Email') ?></th>
          <td><?= h($contact->dbSecondaryEmail); ?></td>
      </tr>
      <tr>
          <th scope="row"><?= __('Web Address') ?></th>
          <td><?= $this->Html->link(__($contact->dbWebAddress), ($contact->dbWebAddress), ['_full' => true]) ?></td>
      </tr>
      <tr>
          <th scope="row"><?= __('Mailing Label?') ?></th>
          <td><?= h($contact->dbMailingLabel); ?></td>
      </tr>
      <tr>
          <th scope="row"><?= __('Registration Complete?') ?></th>
          <td><?= h($contact->dbRegistrationComplete); ?></td>
      </tr>
  </table>
</div>
