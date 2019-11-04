window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("navbar").classList.add('shrink');

    } else {
        document.getElementById("navbar").classList.remove('shrink');

    }
}