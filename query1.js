$(document).ready(function() {
    $('#mik').hide();
    $('#mie').hide();
    $('#ni').hide();
    //Fonction champObligatoire()
});
/*  function inscription(prenom, nom, login, password) {
      var membre = {
          init: function(prenom, nom, login, password) {
              this.nom = nom;
              this.prenom = prenom
              this.login = login
              this.password = password
          }
      }
      var user = Object.create(membre);
      user.init(nom, prenom, login, password);
      tabuser.push(user)
      console.log(tabuser)
  }

  function champObligatoire(champ) {
      if (champ.val() == "") {

          return "Veuillez Remplir le champ " + champ.attr("val-champ");
      } else

          return "";
  }*/
/**
 * Nous reprenons notre exemple de formulaire de connexion
 *
 */

/*
    $('#ki').click(function() {
        var champs = $("#con input:text,#con input:password");
        $.each(champs, function() {
            var error = (champObligatoire($(this)));
            if (error != "") {
                // $("#ni ul").html("");
                //$('#ki').attr('href', "accueiluser.php");
                $("#ni ul").append("<li>" + error + "</li>");

                $("#ni ul li").css("color", "black");

            } else {


                $("#mina").load("accueiluser.php", function() {


                    consol.log("accueiluser.php");

                })
            }


        });


    });*/
/* var lesInfos = new Array();

 function ecrire(e) {
     $("input[type=text],input[type=password]").each(function() {
         lesInfos.push($(this).val());
     });

     function lire(e) {
         alert(JSON.stringify(lesInfos));
     }

     $(".test").ready(function() {
         $('.form-control').click(ecrire);
         $('.btn').click(lire);
     });
 }*/
/* jQuery.validator.addMethod(
     "password",
     function(value, element) {
         return /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/.test(value);
     },
     ' Le mot de passe doit contenir•Au moins une lettre minuscule• Au moins une lettre majuscule• Au moins un chiffre• Au moins huit caractères '
 );*/
/*});


function alphanum(id) {
    if (!id.val().match(/^[a-zA-Z0-9]|\s+$/i)) {
        return "Caractéres incorrectes " + id.attr("val-champ");
    } else
        return "";
}
$('.log').keyup(function() {
    var champs = $(".log");
    // $.each(champs, function() {
    var error = (alphanum($(this)));
    if (error != "") {
        $("#ni ul").html("");
        $("#ni ul").append("<li>" + error + "</li>");
        $("#ni ul li").css("color", "black");
    } else {
        $("#ni").hide();
    }
});

$('.btn').click(function() {
    var champs = $(".log");
    // $.each(champs, function() {
    var error = (alphanum($(this)));
    if (error != "")
        $("#ni ul").html("");
    $("#ni ul").append("<li>" + error + "</li>");
    $("#ni ul li").css("color", "black");

});

$('#ki').click(function() {
    if ($('#control').val() == "") {
        $('#ni').show();
    } else {
        $('#ni').hide();
    }
});
$(document).ready(function() {
    $("#ki").on('click', function() {
        $logu = $("#form input[type='text'], #control input[type='password']").val()

        if ($(logu).val() == "") {
            var tab = ['Login', 'password'];
            for (var i = 0; i < tab.length; i++) {
                alert(tab[i]);
            }
        }

    });

});
$(document).ready(function() {
    $tab = ("#con input[type='text'], #con input[type='password']");
    console.log();
});
$('#tik').click(function() {
    //  if ($('#control').val() == "") {
    //  } else {
    $('#con').hide();
    $('#mik').show();

});
$('#li').click(function() {
    //  if ($('#control').val() == "") {
    //  } else {
    $('#mik').hide();
    $('#con').show();

});
$('#pwd').click(function() {
    //  if ($('#control').val() == "") {
    //  } else {
    $('#mik').hide();
    $('#con').hide();
    $('#mie').show();



});
//  });
// notre code ici


$('#control').keyup(function() {
    if ($(this).val().length < 5) { // si la chaîne de caractères est inférieure à 5
        $("#ni ul li").css("color", "black");
        $('#ni').show();
        $(this).css({ // on rend le champ rouge

            borderColor: 'red',

            color: 'red'

        });
        $('.vat').html("Login trop courts");
        $('.vat').css({ // on rend le champ rouge

            borderColor: 'red',

            color: 'red'

        });
        $('#ni').show();

    } else

    {
        $('#ni').show();
        $(this).css({ // on rend le champ rouge

            borderColor: 'green',

            color: 'green'

        });
        $('.vat').html("Parfait");
        $('.vat').css({ // on rend le champ rouge

            borderColor: 'green',

            color: 'green'

        });
        $('#ni').show();


        // $(this).css({});

    }
});


$(document).ready(function() {
    $('#form').keyup(function() {

        if ($(this).val().length < 5) { // si la chaîne de caractères est inférieure à 5

            $(this).css({ // on rend le champ rouge

                borderColor: 'red',

                color: 'red'

            });
            $('#ni').show();
            $('.va').css({ // on rend le champ rouge

                borderColor: 'red',

                color: 'red'

            });
            $('.va').html("Mot de passe trop court");
        } else {
            // $(this).css({});
            $(this).css({ // si tout est bon, on le rend vert

                borderColor: 'green',

                color: 'green'

            });
            $('.va').html("Parfait !");
            $('.va').css({ // on rend le champ rouge

                borderColor: 'green',

                color: 'green'

            });
            $('#ni').hide();

        }

    });
    $(function() {
        $("#i").click(function() {*/

/* VALUES */
/*  var UserName = $("#UserName").val();
  var Login = $("#Login").val();
  var Password = $("#Password").val();

  var dataString = 'UserName=' + UserName + '&Login=' + Login + '&Password=' + Password;*/



/* if (nom == '' || prenom == '') {
     $('.suc').fadeOut(200).hide();
     $('.error').fadeOut(200).show();
     /* UNCOMMNENT TO SEND TO CONSOLE */
/* console.log ("SOMETHING HAPPENS"); */
/*  } else {*/
/*     $.ajax({
         type: "POST",
         url: "ajoutuser.php",
         data: dataString,
         success: function() {
             $('.success').fadeIn(200).show();
             $('.error').fadeOut(200).hide();*/
/* UNCOMMNENT TO SEND TO CONSOLE */
/*  console.log(dataString);
                    console.log("AJAX DONE");
                }
            });
            //EOC
            // return false;
        }); //EOF



    });
});*/

/*$(document).ready(function() {


    $("#i").click(function() {


        $.post(

            'ajoutuser.php', // Un script PHP que l'on va créer juste après

            {

                Login: $("#Login").val(), // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php

                    Password: $("#Password").val(),
                    UserName: $('#UserName')
            },


            function(data) {
                $.ajax({
                    type: "POST",
                    url: "ajoutuser.php",
                    data: dataString,
                    /*uccess: function() {
                        $('.success').fadeIn(200).show();
                        $('.error').fadeOut(200).hide();*/
/* UNCOMMNENT TO SEND TO CONSOLE */
/* console.log (dataString); console.log ("AJAX DONE"); 


                });

                if (data == 'Success') 

                    // Le membre est connecté. Ajoutons lui un message dans la page HTML.
                    console.log(data);
                    //  $("#mina").html("<p>Vous avez été connecté avec succès !</p>");

                } else {

                    // Le membre n'a pas été connecté. (data vaut ici "failed")


                    $("#mina").html("<p>Erreur lors de la connexion...</p>");

                }



            },


            'text'

        );


    });


});*/


$(document).ready(function() {
    $("#i").click(function() {

        /* VALUES */
        //  Textes complets 	idUser 	Prenom 	Nom 	Login 	Password 	Profil 
        var Prenom = $("#Prenom").val();
        var Nom = $("#Nom").val();

        var Login = $("#Login").val();
        var Password = $("#Password").val();

        /* DATASTRING */
        var dataString = 'Prenom=' + Prenom + '&Nom=' + Nom + '&Login=' + Login + '&Password=' + Password;

        console.log(dataString);


        $.ajax({
            type: "POST",
            url: "ajoutuser.php",
            data: dataString,
            /* UNCOMMNENT TO SEND TO CONSOLE */
            /*
            console.log (dataString);	
            console.log ("AJAX DONE");
            */
            success: function(server_reponse) {
                console.log(server_reponse);
                /* UNCOMMNENT TO SEND TO CONSOLE */
                /*
                console.log (dataString);	
                console.log ("AJAX DONE");
                */
            }
        });
        //EOC

    }); //EOF



});