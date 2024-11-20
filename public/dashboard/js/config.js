(function () {
    var savedConfig = sessionStorage.getItem("__GUDPANDA_CONFIG__");
    var html = document.getElementsByTagName("html")[0];

    var defaultConfig = {
        theme: "light",             // ['light', 'dark']
        topbar: {
            color: "light",       // ['light', 'dark']
        },
        menu: {
            size: "sm-hover-active",   // [ 'default', 'sm-hover-active', 'sm-hover-active', 'condensed', 'full']
            color: "dark",            // ['light', 'dark']
        },
    };

    var config = Object.assign(JSON.parse(JSON.stringify(defaultConfig)), {});

    // Get theme configurations from HTML attributes
    config.theme = html.getAttribute('data-bs-theme') || defaultConfig.theme;
    config.topbar.color = html.getAttribute('data-topbar-color') || defaultConfig.topbar.color;
    config.menu.color = html.getAttribute('data-menu-color') || defaultConfig.menu.color;
    config.menu.size = html.getAttribute('data-menu-size') || defaultConfig.menu.size;

    window.defaultConfig = JSON.parse(JSON.stringify(config));

    // Load saved configuration from session storage if available
    if (savedConfig !== null) {
        config = JSON.parse(savedConfig);
    }

    window.config = config;

    if (config) {
        html.setAttribute("data-bs-theme", config.theme);
        html.setAttribute("data-topbar-color", config.topbar.color);
        html.setAttribute("data-menu-color", config.menu.color);

        if (window.innerWidth <= 1140) {
            html.setAttribute("data-menu-size", "hidden");
        } else {
            html.setAttribute("data-menu-size", config.menu.size);
        }
    }
})();
