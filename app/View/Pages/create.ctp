<div data-role="content">

    <?php

    echo $this->Form->create('Create', array('url' => 'wait_opponent'));

    echo '<div data-role="fieldcontain">';

    echo $this->Form->input('game',
        array('type' => 'hidden',
            'value' => $this->params['named']['game']));

    echo $this->Form->input('title',
        array('label' => __('Game Title'),
            'placeholder' => __('Game Title'),
            'required'));


    echo '<br /><fieldset data-role="controlgroup" data-type="horizontal">';

    echo '<legend>' . __('Color') . '</legend>';

    echo $this->Form->radio('color',
        array('black' => __('Black'),
            'white' => __('White')), array('fieldset' => false,
            'legend' => false,
            'hiddenField' => false,
            'default' => 'black'));

    echo '</fieldset>';

    echo '<br /><fieldset data-role="controlgroup" data-type="horizontal">';

    echo '<legend>' . __('Mode') . '</legend>';

    echo $this->Form->radio('mode',
        array('regular' => __('Regular'),
            'blitz' => __('Blitz')), array('fieldset' => false,
            'legend' => false,
            'hiddenField' => false,
            'default' => 'regular'));

    echo '</fieldset>';

    echo '<br /><fieldset data-role="controlgroup" data-type="horizontal">';

    echo '<legend>' . __('Type') . '</legend>';

    echo $this->Form->radio('type',
        array('realtime' => __('Real time'),
            'delayed' => __('Delayed'),
            'ia' => __('Versus IA')), array('fieldset' => false,
            'legend' => false,
            'hiddenField' => false,
            'default' => 'realtime'));

    echo '</fieldset>';

    echo '<br /></div>';

    echo $this->Form->end(__('Create'));

    ?>

</div>

<div data-role="footer" class="ui-bar"
     style="position: absolute; bottom: 0; width: 100%; margin-left:auto; margin-right:auto; align:center; text-align:center;">
    <div data-role="controlgroup" data-type="horizontal">
        <a href="#">About</a>
    </div>
</div>