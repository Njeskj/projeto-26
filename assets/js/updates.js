function toggleUpdateContent() {
    var updateContent = document.getElementById('updateContent');
    if (updateContent.style.display === 'block') {
        // Se estiver visível, esconde de forma suave
        slideUp(updateContent);
    } else {
        // Se estiver oculto, exibe de forma suave
        slideDown(updateContent);
    }
}

function slideDown(element) {
    element.style.display = 'block';
    var height = element.clientHeight;
    element.style.height = '0px';

    setTimeout(function () {
        element.style.transition = 'height 0.5s ease';
        element.style.height = height + 'px';
    }, 10);

    setTimeout(function () {
        element.style.transition = '';
    }, 500);
}

function slideUp(element) {
    element.style.height = element.clientHeight + 'px';

    setTimeout(function () {
        element.style.transition = 'height 0.5s ease';
        element.style.height = '0px';
    }, 10);

    setTimeout(function () {
        element.style.transition = '';
        element.style.display = 'none';
    }, 500);
}