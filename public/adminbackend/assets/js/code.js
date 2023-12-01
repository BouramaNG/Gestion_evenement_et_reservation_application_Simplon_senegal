$(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");


                  Swal.fire({
                    title: 'Etes vous sure?',
                    text: "de vouloir supprimer votre marque?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Oui ,je veux bien mercie!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'Supprimé!',
                        'Ok fichier supprimé !.',
                        'success'
                      )
                    }
                  })


    });

  });


/// Confirm Order
$(function(){
    $(document).on('click','#confirm',function(e){
        e.preventDefault();
        var link = $(this).attr("href");


        Swal.fire({
            title: 'Etes vous sure de vouloir confirmer la commande?',
            text: "Une fois confirmé, vous ne pourrez plus attendre?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, Confirmer!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link
                Swal.fire(
                    'Confirmer!',
                    'Confirmer en cours',
                    'succee'
                )
            }
        })


    });

});
/// Eend Confirm Order

/// Processing Order
$(function(){
    $(document).on('click','#processing',function(e){
        e.preventDefault();
        var link = $(this).attr("href");


        Swal.fire({
            title: 'Etes vous sure de vouloir supprimer?',
            text: "Une fois le traitement effectué, vous ne pourrez plus mettre en attente?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, Traitement!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link
                Swal.fire(
                    'En cours!',
                    'Changement en cours',
                    'succee'
                )
            }
        })


    });

});
/// Eend Processing Order


/// Deliverd Order
$(function(){
    $(document).on('click','#delivered',function(e){
        e.preventDefault();
        var link = $(this).attr("href");


        Swal.fire({
            title: 'Etes vous sure de vouloir Livré?',
            text: "Une fois Livré, Vous ne pourrez plus attendre?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, Livré!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link
                Swal.fire(
                    'Livre!',
                    'Livraison en cours',
                    'succee'
                )
            }
        })


    });

});
/// End Deliverd Order


/// Return Approved Order
$(function(){
    $(document).on('click','#approved',function(e){
        e.preventDefault();
        var link = $(this).attr("href");


        Swal.fire({
            title: 'Etes vous sure de vouloir approuvé cette demande?',
            text: "Retour commande approuvé avec succee",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Oui, Approuvé!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link
                Swal.fire(
                    'Approuvé!',
                    'Changer approuvé',
                    'succee'
                )
            }
        })


    });

});
/// End Deliverd Order
