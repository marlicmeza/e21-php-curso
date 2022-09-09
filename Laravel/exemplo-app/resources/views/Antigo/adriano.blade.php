
<?php 
if ($records > 0 ) {?>
Ok eu tenho alguns registros
<php } else { ?>
    erro eu nao tenho nenhum registro 
<?php } ?>


@if(count($records)>0)
ok, eu tenho alguns registros
@else
err nao tenho nenhum registro
@endif 

