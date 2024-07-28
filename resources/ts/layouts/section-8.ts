document.addEventListener('DOMContentLoaded', () => {
    handleScrollNr8 && handleScrollNr8("[data-run-y1]", "[data-run-y2]");
    percentBarsNr8 && percentBarsNr8("[data-percentage]");
});

document.addEventListener('scroll', () => {
    handleScrollNr8 && handleScrollNr8("[data-run-y1]", "[data-run-y2]");
    percentBarsNr8 && percentBarsNr8("[data-percentage]");
});

function handleScrollNr8(firstSelector: string, secondSelector: string): void {
    const firstImage = document.querySelector(firstSelector) as HTMLElement | null;
    const secondImage = document.querySelector(secondSelector) as HTMLElement | null;
    if (!firstImage || !secondImage) return;

    const windowHeight = window.innerHeight;
    const maxTranslateY = 100;
    const remToPx = 16;
    const threshold = 0.5 * remToPx;

    applyTransform(firstImage, windowHeight, maxTranslateY, threshold, true);
    applyTransform(secondImage, windowHeight, maxTranslateY, threshold, false);
}

function applyTransform(element: HTMLElement, windowHeight: number, maxTranslateY: number, threshold: number, invert: boolean): void {
    const rect = element.getBoundingClientRect();
    const topOffset = rect.top;
    const bottomOffset = rect.bottom;

    if (topOffset <= windowHeight + threshold && bottomOffset >= -threshold) {
        const translateY = Math.min((windowHeight - topOffset) * 0.01, maxTranslateY);
        const direction = invert ? -translateY : translateY;
        element.style.transform = `translateY(${direction}%)`;
    }
}


function percentBarsNr8(selector: string) {
    const percentSections = document.querySelectorAll(selector);
    const windowHeight = window.innerHeight;

    percentSections.forEach(section => {
        const rect = section.getBoundingClientRect();
        const line = section.querySelector("[data-line]") as HTMLElement;
        const percentage = (section as HTMLElement).dataset.percentage;

        if (rect.top <= windowHeight / 2 && rect.bottom >= 0) {
            if (percentage) line?.style.setProperty("--custom-width", `${percentage}%`);
        } else if (rect.top > windowHeight) {
            line.style.setProperty("--custom-width", `0%`);
        }
    });
}