global.jQuery = require('jquery');
let $ = global.jQuery;
require('bootstrap');
       
       $('#add-image').click(function () { // Je récupère le numéro des futurs champs que je vais créer
const index = +$('#widgets-counter').val();

// Je récupère le prototype des entrées
const tmpl = $('#ad_images').data('prototype').replace(/_name_/g, index);

// J'injecte ce code au sein de la div
$('#ad_images').append(tmpl);

$('#widgets-counter').val(index +1);

console.log(index);

// Je gère le button supprimer
handleDeleteButtons();


});

function handleDeleteButtons() {
$('button[data-action="delete"]').click(function () {
const target = this.dataset.target;
$(target).remove();
});
}

function updateCounter(){
    const count = +$('#ad_images div.form-group').length;
    
    $('#widgets-counter').val(count);
}

updateCounter();
handleDeleteButtons();