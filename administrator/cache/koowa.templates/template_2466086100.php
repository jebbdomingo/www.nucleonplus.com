<div class="well">
    <h3 class="page-header"><?php echo $this->translate('Account Details'); ?></h3>
    <table class="table table-condensed">
        <tbody>
            <tr>
                <td><label><strong><?php echo $this->translate('Member') ?></strong></label></td>
                <td><?php echo $order->name ?></td>
            </tr>
            <tr>
                <td><label><strong><?php echo $this->translate('Account Number'); ?></strong></label></td>
                <td><?php echo $order->account_number ?></td>
            </tr>
            <tr>
                <td><label><strong><?php echo $this->translate('Account Status'); ?></strong></label></td>
                <td>
                    <span class="label label-<?php echo ($order->status == 'new') ? 'default' : 'info' ?>"><?php echo ucwords($this->escape($order->status)) ?></span>
                </td>
            </tr>
            <tr>
                <td><label><strong><?php echo $this->translate('Member Since'); ?></strong></label></td>
                <td>
                    <?php echo $this->helper('date.format', array('date' => $order->account_created_on)) ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>