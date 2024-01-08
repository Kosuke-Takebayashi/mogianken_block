/**
 * ハンバーガーメニューを開閉します
 */
window.addEventListener("load", function () {
    const hamburger_button = document.getElementById('hamburger-button');
    const hamburger_menu = document.getElementById('hamburger-menu-wrapper');

    hamburger_button.addEventListener("click", function () {
        this.classList.toggle("is-active");
        hamburger_menu.classList.toggle("is-open");
    });
});
