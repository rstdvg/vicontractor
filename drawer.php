<div class="demo-drawer mdl-layout__drawer mdl-color--teal-900 mdl-color-text--blue-grey-50 mdl-color-text--white">
    <header class="demo-drawer-header">
        <img src="images/user.jpg" class="demo-avatar">
        <div class="demo-avatar-dropdown">
            <span>hello@example.com</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">arrow_drop_down</i>
                <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                <li class="mdl-menu__item">hello@example.com</li>
                <li class="mdl-menu__item">info@example.com</li>
                <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
            </ul>
        </div>
    </header>
    <nav class="demo-navigation mdl-navigation mdl-color--teal mdl-color-text--white">
        <a id="site_creation" class="mdl-navigation__link mdl-color-text--white" href="#"><i
                class="mdl-color-text--white material-icons" role="presentation">border_color</i>Site Creation</a>
        <!-- sub menu only visible when clicked on the link above -->
            <div class="custmenu">       
              <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="site_creation">
                  <li class="mdl-menu__item">Some Action</li>
                  <li class="mdl-menu__item">Another Action</li>
                  <li disabled class="mdl-menu__item">Disabled Action</li>
                  <li class="mdl-menu__item">Yet Another Action</li>
              </ul>
            </div>  
        <a class="mdl-navigation__link mdl-color-text--white" href="#"><i class="mdl-color-text--white material-icons"
                role="presentation">supervisor_account</i>Supervisor Registration</a>
        <a class="mdl-navigation__link mdl-color-text--white" href=""><i class="mdl-color-text--white material-icons"
                role="presentation">library_add</i>Material Registration</a>
        <a id="stock_reports" class="mdl-navigation__link mdl-color-text--white" href="#"><i
                class="mdl-color-text--white material-icons" role="presentation">file_copy</i>Stock Reports</a>
        <div class="mdl-tooltip" data-mdl-for="stock_reports">Follow</div>

        <!-- sub menu only visible when clicked on the link above -->
        <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="stock_reports">
            <li class="mdl-menu__item">Some Action</li>
            <li class="mdl-menu__item">Another Action</li>
            <li disabled class="mdl-menu__item">Disabled Action</li>
            <li class="mdl-menu__item">Yet Another Action</li>
        </ul>

        <a class="mdl-navigation__link mdl-color-text--white" href=""><i class="mdl-color-text--white material-icons"
                role="presentation">pie_chart</i>Expenses</a>
        <a class="mdl-navigation__link mdl-color-text--white" href=""><i class="mdl-color-text--white material-icons"
                role="presentation">person_add</i>Labour / Employee details</a>
    </nav>
</div>