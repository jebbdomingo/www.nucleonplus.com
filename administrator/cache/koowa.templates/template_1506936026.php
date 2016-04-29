<form action="<?php echo $this->route('view=reward&id='.$order->_reward_id) ?>" method="post">

    <input type='hidden' name="_action" value="activate" />

    <div class="well">
        <h3 class="page-header"><?php echo $this->translate('Reward Details'); ?></h3>
        <table class="table table-condensed">
            <tbody>
                <tr>
                    <td><label><strong><?php echo $this->translate('Product Package') ?></strong></label></td>
                    <td><?php echo $order->_reward_product_name ?></td>
                </tr>
                <tr>
                    <td><label><strong><?php echo $this->translate('Slots'); ?></strong></label></td>
                    <td><?php echo $order->_reward_slots ?></td>
                </tr>
                <tr>
                    <td><label><strong><?php echo $this->translate('Reward Status'); ?></strong></label></td>
                    <td>
                        <span class="label label-<?php echo ($order->_reward_status == 'pending') ? 'default' : 'info' ?>"><?php echo ucwords($this->escape($order->_reward_status)) ?></span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</form>