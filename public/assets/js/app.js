import './main';
import './bootstrap';

// Import Bootstrap JS modules
import { bootstrap, enableTooltip, enablePopover } from "./bootstrap";

// Initialize Bootstrap
try {
    enableTooltip();
    enablePopover();
    window.bootstrap = bootstrap;
} catch (exception) {
    console.error(exception);
}