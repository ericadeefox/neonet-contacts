<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contacts index large-9 medium-8 columns content">
    <h3><?= __('Contacts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('dbContactNumber', 'Contact Number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dbLastName', 'Last Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dbFirstName', 'First Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dbCompany', 'Company') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dbPrimaryEmail', 'Email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?= $this->Number->format($contact->dbContactNumber) ?></td>
                <td><?= h($contact->dbLastName) ?></td>
                <td><?= h($contact->dbFirstName) ?></td>
                <td><?= h($contact->dbCompany) ?></td>
                <td><?= h($contact->dbPrimaryEmail) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contact->dbContactNumber]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->dbContactNumber]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->dbContactNumber], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->dbContactNumber)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
