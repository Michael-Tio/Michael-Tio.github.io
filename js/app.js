function scrollToPage2() {
    const targetSection = document.getElementById('page-2');
    targetSection.scrollIntoView({ behavior: 'smooth' });
}

function openURLInNewTab(url) {
    window.open(url, '_blank');
}