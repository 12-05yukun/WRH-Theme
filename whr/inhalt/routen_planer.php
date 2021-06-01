<div class='row routen-planer'>
 <div class='routen-planer-box'>
        <h1>Routenplaner</h1>
        <input placeholder='Ihre Adresse' id='start-place' />
        <div id='google-map'>Berechnen</div>
</div>
</div>

<script>
         jQuery(document).ready(function ($) {
                 $('#google-map').click(function(){
                         let start=$('#start-place').val();
                         window.open('https://www.google.com/maps/dir/?api=1&origin='+start+'&destination=Weinromantikhotel Richtershof Hauptstraße 81-8354486 Mülheim Deutschland&travelmode=car')
                 })
         })
</script>