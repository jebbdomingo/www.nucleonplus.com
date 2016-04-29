<?php $locked = (is_null($order->id) || $order->invoice_status <> 'paid') ? false : true; ?>

<form method="post" class="-koowa-form">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $this->translate('Order Details'); ?></h3>
        </div>
        <table class="table">
            <tbody>
                <tr>
                    <td><label><strong><?php echo $this->translate('Order No.') ?></strong></label></td>
                    <td><?php echo $order->id ?></td>
                </tr>
                <tr>
                    <td><label><strong><?php echo $this->translate('Account Number.') ?></strong></label></td>
                    <td>
                        <?php echo $this->helper('listbox.accounts', array(
                            'name'     => 'account_id',
                            'selected' => ($account_id) ? $account_id : $order->account_id,
                            'attribs'  => ['disabled' => $locked],
                        )) ?>
                    </td>
                </tr>
                <tr>
                    <td><label><strong><?php echo $this->translate('Product Package') ?></strong></label></td>
                    <td>
                        <?php echo $this->helper('listbox.packages', array(
                            'name'     => 'package_id',
                            'selected' => $order->package_id,
                            'attribs'  => ['disabled' => $locked],
                        )) ?>
                    </td>
                </tr>
                <tr>
                    <td><label><strong><?php echo $this->translate('Order Status'); ?></strong></label></td>
                    <td>
                        <?php echo $this->helper('listbox.orderStatus', array(
                            'name'     => 'order_status',
                            'selected' => $order->order_status,
                            'attribs'  => ['disabled' => true],
                        )) ?>
                    </td>
                </tr>
                <tr>
                    <td><label><strong><?php echo $this->translate('Invoice Status'); ?></strong></label></td>
                    <td>
                        <?php echo $this->helper('listbox.invoiceStatus', array(
                            'name'     => 'invoice_status',
                            'selected' => $order->invoice_status,
                            'attribs'  => ['disabled' => true],
                        )) ?>
                    </td>
                </tr>
                <tr>
                    <td><label><strong><?php echo $this->translate('Payment Method'); ?></strong></label></td>
                    <td>
                        <?php echo $this->helper('listbox.paymentMethods', array(
                            'name'           => 'payment_method',
                            'selected'       => $order->payment_method,
                            'attribs'        => ['disabled' => true],
                            'paymentMethods' => [['label' => 'Bank Deposit', 'value' => 'deposit']]
                        )) ?>
                    </td>
                </tr>
                <tr>
                    <td><label><strong><?php echo $this->translate('Shipping Method'); ?></strong></label></td>
                    <td>
                        <?php echo $this->helper('listbox.shippingMethods', array(
                            'name'            => 'shipping_method',
                            'selected'        => $order->shipping_method,
                            'attribs'         => ['disabled' => true],
                            'shippingMethods' => [['label' => 'XEND', 'value' => 'xend']]
                        )) ?>
                    </td>
                </tr>
                <tr>
                    <td><label><strong><?php echo $this->translate('Tracking Reference'); ?></strong></label></td>
                    <td>
                        <textarea name="tracking_reference" id="tracking_reference"><?php echo $order->tracking_reference ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td><label><strong><?php echo $this->translate('Payment Reference'); ?></strong></label></td>
                    <td>
                        <textarea name="payment_reference" id="payment_reference" <?php echo ($locked) ? 'disabled="disabled"' : '' ?>><?php echo $order->payment_reference ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td><label><strong><?php echo $this->translate('Note'); ?></strong></label></td>
                    <td>
                        <textarea name="note" id="note" <?php echo ($locked) ? 'disabled="disabled"' : '' ?>><?php echo $order->note ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td><label><strong><?php echo $this->translate('Created On') ?></strong></label></td>
                    <td>
                        <div><?php echo $this->helper('date.humanize', array('date' => $order->created_on)) ?></div>
                        <div><?php echo $order->created_on ?></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</form>