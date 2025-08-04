let currentImageIndex = 0;
let allImages = [];
let currentFilter = 'all';
const photosPerPage = 10;

document.addEventListener('DOMContentLoaded', function() {
    initializeGallery();
    addAnimationDelays();
});

function initializeGallery() {
    const galleryItems = document.querySelectorAll('.photo-gallery__item');
    allImages = Array.from(galleryItems).map((item, index) => ({
        src: item.querySelector('img').src,
        alt: item.querySelector('img').alt,
        title: item.querySelector('h3').textContent,
        description: item.querySelector('p').textContent,
        index: index,
        category: item.dataset.category
    }));

    // Show only the first 10 photos initially
    galleryItems.forEach((item, index) => {
        if (index >= photosPerPage) {
            item.classList.add('hidden');
        }
    });

    // Add click events to gallery items
    galleryItems.forEach((item, index) => {
        item.addEventListener('click', () => openLightbox(index));
    });

    // Add filter functionality
    const filterBtns = document.querySelectorAll('.photo-gallery__filter-btn');
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => filterGallery(btn.dataset.filter, btn));
    });

    // Check if there are more photos to load
    updateLoadMoreButton();
}

function addAnimationDelays() {
    const galleryItems = document.querySelectorAll('.photo-gallery__item:not(.hidden)');
    galleryItems.forEach((item, index) => {
        item.style.animationDelay = `${index * 0.1}s`;
    });
}

function filterGallery(filter, btn) {
    currentFilter = filter;

    // Update active button
    document.querySelectorAll('.photo-gallery__filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    // Filter items
    const galleryItems = document.querySelectorAll('.photo-gallery__item');
    let visibleCount = 0;
    galleryItems.forEach((item, index) => {
        const category = item.dataset.category;
        if (filter === 'all' || category === filter) {
            if (visibleCount < photosPerPage) {
                item.classList.remove('hidden');
                item.style.display = 'block';
                item.style.animationDelay = `${visibleCount * 0.05}s`;
                visibleCount++;
            } else {
                item.classList.add('hidden');
                item.style.display = 'none';
            }
        } else {
            item.classList.add('hidden');
            item.style.display = 'none';
        }
    });

    // Update load more/unload button visibility
    updateLoadMoreButton();
}

function openLightbox(index) {
    currentImageIndex = index;
    const image = allImages[index];

    document.getElementById('photo-gallery-lightbox-img').src = image.src;
    document.getElementById('photo-gallery-lightbox-title').textContent = image.title;
    document.getElementById('photo-gallery-lightbox-description').textContent = image.description;

    document.getElementById('photo-gallery-lightbox').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    document.getElementById('photo-gallery-lightbox').classList.remove('active');
    document.body.style.overflow = 'auto';
}

function changeImage(direction) {
    const visibleImages = allImages.filter((_, index) => {
        const item = document.querySelector(`[data-index="${index}"]`);
        return item && !item.classList.contains('hidden');
    });

    const currentVisibleIndex = visibleImages.findIndex(img => img.index === currentImageIndex);
    let newIndex = currentVisibleIndex + direction;

    if (newIndex >= visibleImages.length) newIndex = 0;
    if (newIndex < 0) newIndex = visibleImages.length - 1;

    openLightbox(visibleImages[newIndex].index);
}

function loadMorePhotos() {
    const loadBtn = document.querySelector('.photo-gallery__load-more-btn');
    const unloadBtn = document.querySelector('.photo-gallery__unload-btn');
    loadBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';
    loadBtn.disabled = true;

    setTimeout(() => {
        const galleryItems = document.querySelectorAll('.photo-gallery__item');
        let visibleCount = 0;
        galleryItems.forEach((item, index) => {
            if ((currentFilter === 'all' || item.dataset.category === currentFilter) && item.classList.contains('hidden')) {
                item.classList.remove('hidden');
                item.style.display = 'block';
                item.style.animationDelay = `${visibleCount * 0.05}s`;
                visibleCount++;
            }
        });

        updateLoadMoreButton();
        unloadBtn.classList.remove('hidden');
    }, 1000);
}

function unloadPhotos() {
    const unloadBtn = document.querySelector('.photo-gallery__unload-btn');
    const loadBtn = document.querySelector('.photo-gallery__load-more-btn');
    unloadBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Unloading...';
    unloadBtn.disabled = true;

    setTimeout(() => {
        const galleryItems = document.querySelectorAll('.photo-gallery__item');
        let visibleCount = 0;
        galleryItems.forEach((item, index) => {
            if (currentFilter === 'all' || item.dataset.category === currentFilter) {
                if (visibleCount < photosPerPage) {
                    item.classList.remove('hidden');
                    item.style.display = 'block';
                    item.style.animationDelay = `${visibleCount * 0.05}s`;
                    visibleCount++;
                } else {
                    item.classList.add('hidden');
                    item.style.display = 'none';
                }
            } else {
                item.classList.add('hidden');
                item.style.display = 'none';
            }
        });

        updateLoadMoreButton();
        unloadBtn.classList.add('hidden');
        loadBtn.classList.remove('hidden');
    }, 1000);
}

function updateLoadMoreButton() {
    const loadBtn = document.querySelector('.photo-gallery__load-more-btn');
    const unloadBtn = document.querySelector('.photo-gallery__unload-btn');
    const hiddenItems = document.querySelectorAll(`.photo-gallery__item.hidden${currentFilter === 'all' ? '' : `[data-category="${currentFilter}"]`}`);
    const visibleItems = document.querySelectorAll(`.photo-gallery__item:not(.hidden)${currentFilter === 'all' ? '' : `[data-category="${currentFilter}"]`}`);

    if (hiddenItems.length === 0) {
        loadBtn.innerHTML = '<i class="fas fa-check"></i> All Photos Loaded';
        loadBtn.classList.add('disabled');
        loadBtn.disabled = true;
        unloadBtn.classList.remove('hidden');
        unloadBtn.innerHTML = '<i class="fas fa-minus"></i> Unload Photos';
        unloadBtn.disabled = false;
    } else {
        loadBtn.innerHTML = '<i class="fas fa-plus"></i> Load More Photos';
        loadBtn.classList.remove('disabled');
        loadBtn.disabled = false;
        if (visibleItems.length > photosPerPage) {
            unloadBtn.classList.remove('hidden');
            unloadBtn.innerHTML = '<i class="fas fa-minus"></i> Unload Photos';
            unloadBtn.disabled = false;
        } else {
            unloadBtn.classList.add('hidden');
        }
    }
}

// Keyboard navigation
document.addEventListener('keydown', function(e) {
    if (document.getElementById('photo-gallery-lightbox').classList.contains('active')) {
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') changeImage(-1);
        if (e.key === 'ArrowRight') changeImage(1);
    }
});

// Close lightbox when clicking outside image
document.getElementById('photo-gallery-lightbox').addEventListener('click', function(e) {
    if (e.target === this) {
        closeLightbox();
    }
});