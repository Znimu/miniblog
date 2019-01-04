function editComment() {
    var author = document.getElementById("author").value;
    var comment = document.getElementById("comment").value;

    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'commentUpdate.php?id=' + encodeURIComponent(id) + '&author=' + encodeURIComponent(author) + '&comment=' + encodeURIComponent(comment));
    xhr.addEventListener('readystatechange', function() { // On gère ici une requête asynchrone
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) { // Si le fichier est chargé sans erreur
            //alert(xhr.responseText);
            window.location = "?action=post&id=" + post_id;
        }
    });
    xhr.send(null);
}