<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800" style="font-family: optima;"><i class="fas fa-users"></i> Casos Sociales</h1>
   
        <a href="../registrar" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
            <i class=" fa-sm text-white-50"></i>
            Registrar Caso Sosial
        </a>
   
</div>

<div class="row">

    <div class="col-md-12">

        <?php
            display_flash_message();
        ?>

    </div>
    
    <div class="col-md-12">
    <?php require "tabla.php"; ?>
    </div>

        
</div>



