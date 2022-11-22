$('.modif').click(function (e) { //Au click on cible l'evennement
  e.preventDefault(); //Annule le comportement de base du boutton
  $id_adherent = e.target.name; //Ici, l'evennement c'est le click, le target c'est le boutton et le name c'est l'attribvt cibler, le name contient l'id de l'adherent (voir page inscrire.php)

  $('#nom_'+$id_adherent+'').prop('disabled', false); //On cible l'input avec l'id de l'adherent, puis on change l'attribue disabled de l'input en enabled
  $('#prenom_'+$id_adherent+'').prop('disabled', false);
  $('#date_naissance_'+$id_adherent+'').prop('disabled', false);
  $('#mail_'+$id_adherent+'').prop('disabled', false);
  $('#rue_'+$id_adherent+'').prop('disabled', false);
  $('#ville_'+$id_adherent+'').prop('disabled', false);
  $('#code_postal_'+$id_adherent+'').prop('disabled', false);
  $('#numero_tel_'+$id_adherent+'').prop('disabled', false);
});

