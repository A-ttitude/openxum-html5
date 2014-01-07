<div data-role="content">
    <ul data-role="listview" data-inset="true" class="data-split-icon"
        style="width: 90%; margin-left:auto; margin-right:auto; padding: 5px; align:center; text-align:center;">

        <?php

        $game = $this->request->data['Create']['game'];
        $title = $this->request->data['Create']['title'];
        $color = $this->request->data['Create']['color'];
        $mode = $this->request->data['Create']['mode'];
        $type = $this->request->data['Create']['type'];

        if ($type == 'ia') { ?>

            <script language="javascript">
                location.href = "<?php echo $game . '/color:' . $color . '/mode:' . $mode . '/type:' . $type; ?>";
            </script>

        <?php } else {

            echo 'Vous êtes le joueur ' . __($color) . '<br />';
            echo $this->Html->image(($color == 'black') ? 'black.png' : 'white.png', array('width' => '128px', 'height' => '128px', 'margin' => 'auto'));
            echo '<br /><br />' . __('Waiting for an opponent ...');

            echo '<br /><br />' . $this->Html->link('Test', array(
                    'controller' => 'pages',
                    'action' => 'display',
                    $game,
                    'color' => $color,
                    'mode' => $mode,
                    'type' => $type));
        }
        ?>

    </ul>
</div>

<div data-role="footer" class="ui-bar"
     style="position: absolute; bottom: 0; width: 100%; margin-left:auto; margin-right:auto; align:center; text-align:center;">
    <div data-role="controlgroup" data-type="horizontal">
        <a href="#">About</a>
    </div>
</div>