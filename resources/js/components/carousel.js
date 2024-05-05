import { Carousel } from 'flowbite';

const carouselElement = document.getElementById('default-carousel');

const optionItems  = []

var children = document.getElementById("carousel-indicators").children;
for (var i = 0; i < children.length; i++) {
    var child = children[i];
    optionItems[i] =   {
        position: i,
        el: child
    }
}

const carouselItems = []
var carouselChildren = document.getElementById("carousel-items").children;
for (var j = 0; j < carouselChildren.length; j++) {
    var carouselChild = carouselChildren[j];
    carouselItems[j] =   {
        position: j,
        el: carouselChild
    }
}

// options with default values
const options = {
    defaultPosition: 0,
    interval: 3000,

    indicators: {
        activeClasses: 'bg-blue-500 dark:bg-white',
        inactiveClasses:
            'bg-gray-800/50 dark:bg-gray-400 hover:bg-white dark:hover:bg-gray-800',
        items: optionItems,
    },

    // callback functions
    onNext: () => {},
    onPrev: () => {},
    onChange: () => {},
};

// instance options object
const instanceOptions = {
    id: 'carousel-example',
    override: true
};

const carousel = new Carousel(carouselElement, carouselItems, options, instanceOptions);
carousel.cycle()

const $prevButton = document.getElementById('data-carousel-prev');
const $nextButton = document.getElementById('data-carousel-next');

$prevButton.addEventListener('click', () => {
    carousel.prev();
});

$nextButton.addEventListener('click', () => {
    carousel.next();
});


