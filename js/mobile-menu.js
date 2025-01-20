// Shows a message if the page is successfully loaded
window.onload = function () {
    console.log("This page has been successfully loaded!");
};

/**
 * @function handleResponsiveMenu
 *
 * Toggles the visibility of the responsive menu and updates the button content with SVGs.
 *
 * @author Moisés Moreira Reis
 * @since 1.0.0
 * @version 1.0.0
 */

const OPEN_RESPONSIVE_MENU_BUTTON = document.getElementById("trigger-button");
const RESPONSIVE_MENU = document.getElementById("mobile-menu");

// Ensure the menu is hidden initially
RESPONSIVE_MENU.style.display = "none";

// Define SVGs
const OPEN_ICON = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>`;
const CLOSE_ICON = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>`;

// Set initial button content
OPEN_RESPONSIVE_MENU_BUTTON.innerHTML = OPEN_ICON;

// Define the function to handle the menu toggle
function handleResponsiveMenu() {
    if (RESPONSIVE_MENU.style.display === "none") {
        // Show the menu
        RESPONSIVE_MENU.style.display = "block";
        // Update button content to close icon
        OPEN_RESPONSIVE_MENU_BUTTON.innerHTML = CLOSE_ICON;
        console.log("Menu is now open");
    } else {
        // Hide the menu
        RESPONSIVE_MENU.style.display = "none";
        // Update button content to open icon
        OPEN_RESPONSIVE_MENU_BUTTON.innerHTML = OPEN_ICON;
        console.log("Menu is now closed");
    }
}

// Attach the click event listener to the button
OPEN_RESPONSIVE_MENU_BUTTON.addEventListener("click", handleResponsiveMenu);
