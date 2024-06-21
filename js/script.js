window.onload = function() {
    // Sélectionnez l'élément que vous souhaitez souligner
    let elementUnderline = document.getElementById('skill-html');
    if (elementUnderline) {
        // Ajoutez la classe 'underline' pour appliquer le soulignement
        elementUnderline.querySelector('p').classList.add('underline');
    }
};
