<?
/**
 * Nucleon Plus
 *
 * @package     Nucleon Plus
 * @copyright   Copyright (C) 2015 - 2020 Nucleon Plus Co. (http://www.nucleonplus.com)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        https://github.com/jebbdomingo/nucleonplus for the canonical source repository
 */
?>

<? foreach ($salesreceipts as $salesreceipt): ?>
    <tr>
        <td style="text-align: center;">
            <?= helper('grid.checkbox', array('entity' => $salesreceipt)) ?>
        </td>
        <td class="deskman_table__title_field">
            <a href="<?= route('view=salesreceipt&id='.$salesreceipt->id); ?>">
                <?= $salesreceipt->id ?>
            </a>
        </td>
        <td><?= $salesreceipt->qbo_salesreceipt_id ?>
        <td>
            <span class="label <?= ($salesreceipt->synced == 'no') ? 'label-default' : 'label-info' ?>"><?= ucwords(escape(($salesreceipt->synced == 'no') ? 'No' : 'Yes')) ?></span>
        </td>
        <td><?= $salesreceipt->DepositToAccountRef ?></td>
        <td><?= $salesreceipt->DocNumber ?></td>
        <td><?= $salesreceipt->CustomerRef ?></td>
        <td><?= $salesreceipt->DepartmentRef ?></td>
        <td>
            <?= helper('date.format', array('date' => $salesreceipt->TxnDate)) ?>
        </td>
    </tr>
<? endforeach; ?>