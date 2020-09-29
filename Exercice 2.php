<?php
require './Exercice 1.php';
?>
<script>
    document.querySelectorAll("input").forEach(input => {
        if (input.hasAttribute('required')) { input.onblur = validate; }
    });

    function validate() {
        if (!this.value) { alert(`Veuillez compléter le champs "${this.name}"`); }
    }
</script>