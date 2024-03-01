document.addEventListener("alpine:init", () => {

    Alpine.data("panel", () => ({
        total: 3,
        next() {
            this.to((current, offset) => current + offset * this.total);
        },
        prev() {
            this.to((current, offset) => current - offset * this.total);
        },
        to(strategy) {
            let slider = this.$refs.slider;
            let current = slider.scrollLeft;
            let offset = slider.firstElementChild.getBoundingClientRect().width;
            slider.scrollTo({
                left: strategy(current, offset),
                behavior: "smooth",
            });
        }
    }));

    Alpine.data("panelClient", () => ({
        total: 1,
        next() {
            this.to((current, offset) => current + offset * this.total);
        },
        prev() {
            this.to((current, offset) => current - offset * this.total);
        },
        to(strategy) {
            let slider = this.$refs.slider;
            let current = slider.scrollLeft;
            let offset = slider.firstElementChild.getBoundingClientRect().width;
            slider.scrollTo({
                left: strategy(current, offset),
                behavior: "smooth",
            });
        }
    }));

    Alpine.bind("carrete", () => ({
        ["x-on:keydown.right"]() {
            this.next();
        },
        ["x-on:keydown.left"]() {
            this.prev();
        },
    }));
    
});
