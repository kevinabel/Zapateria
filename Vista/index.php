
<?php
include 'header.php';
?>
<div id="inicio">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Sales Data</h3>
    </div>
    <div class="panel-body">
        <div id="shieldui-chart3"></div>
    </div>
</div>
<div id="marca">
    <?php
    include 'Marca.php';
    ?>
</div>
<script>
    $('#marca').hide();
    function Marca() {
        $('#inicio').hide();
        $('#marca').show();
    }
</script>
<?php
include 'foot.php';
?>