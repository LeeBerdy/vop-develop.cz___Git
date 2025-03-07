import "https://flackr.github.io/scroll-timeline/dist/scroll-timeline.js"

const scrollTracker = document.querySelector (".scroll-tracker");

const scrollTrackingTimeline = new ScrollTimeline({
    source: document.scrollingElement,
    orientation: block,
    scrollOffsets: [CSS.percent(0), CSS.percent(100)]
});

scrollTracker.animate(
    {
        transform: ["scale(0)", "sacle(1)"], 
    },
    {
        duration: 1,
        timeline: scrollTrackingTimeline,
    }
);
