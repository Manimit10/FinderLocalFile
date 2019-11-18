<!--Form-->
<div class="container-fluid">
    <div class="row mt-3 mb-3">
        <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-10 offset-1 box-principal "> 
           <form autocomplete="off" method="GET" >
                <div class="autocomplete" style="width:300px;">
                    <input id="myInput" type="text" name="myCountry" placeholder="Country">
                    <input type="submit" >
                </div>
            </form>
        </div>
    </div>
</div>

<?php
     include "view/Content/map.php";
?>