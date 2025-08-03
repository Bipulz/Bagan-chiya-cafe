// Smooth scrolling for scroll indicator
document.querySelector('.scroll-indicator').addEventListener('click', () => {
    document.querySelector('.story-content').scrollIntoView({
        behavior: 'smooth'
    });
});