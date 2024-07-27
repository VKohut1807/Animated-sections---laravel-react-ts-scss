document.addEventListener('DOMContentLoaded', () => {
    if (typeof scrollProgress === 'function') {
        scrollProgress("[data-scroll-progress]", "#circle_progress path");
    }
});

document.addEventListener('scroll', () => {
    if (typeof scrollProgress === 'function') {
        scrollProgress("[data-scroll-progress]", "#circle_progress path");
    }
});

window.addEventListener('resize', () => {
    if (typeof scrollProgress === 'function') {
        scrollProgress("[data-scroll-progress]", "#circle_progress path");
    }
});

function scrollProgress(sectionSelector: string, circleSelector: string): void {
    const sectionPath = document.querySelector<HTMLElement>(sectionSelector);
    const circlePath = document.querySelector<SVGPathElement>(circleSelector);

    if (!sectionPath || !circlePath) return;

    const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrollPercentage = (window.scrollY / totalHeight) * 100;
    const newStrokeDashoffset = circlePath.getTotalLength() * (1 - scrollPercentage / 100);

    sectionPath.style.opacity = scrollPercentage ? "1" : "0";
    sectionPath.style.visibility = scrollPercentage ? "visible" : "hidden";
    circlePath.style.strokeDashoffset = `${newStrokeDashoffset}px`;

    sectionPath.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}
