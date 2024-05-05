// ToggleFunction

const DOCUMENTATION = function() {

    const DefaultFunction = {

        sidebar: () => {
            document.querySelector('.sidebar-menu').addEventListener('click', function() {
                document.body.classList.toggle('sidebar-show');
                document.querySelector('.site-overlay').classList.toggle('show');
            })
        },

        sidebarOverlay: () => {
            document.querySelector('.site-overlay').addEventListener('click', function() {
                this.classList.remove('show');
                document.body.classList.remove('sidebar-show');
            })
        },

        copyClipBoard: () => {
            new ClipboardJS('.jsclipboard');
        },

        sidebarScrollbar: () => {
            const ps = new PerfectScrollbar('.docs-list', {
                wheelSpeed:.5,
                swipeEasing:!0,
                minScrollbarLength:40,
                maxScrollbarLength:300,
                suppressScrollX : true
            });
        },

        themeSwtich: () => {
            document.body.classList.add('variant-toggle-theme');
            
            const toggleTheme = document.querySelector('.toggleTheme');
        
            toggleTheme.addEventListener('click', function() {
                
                const getbody = document.querySelector('body');
        
                if( getbody.classList.contains('dark')) {
                    getbody.classList.remove('dark');
                } else {
                    getbody.classList.add('dark')
                }
        
            })
        },

        tooltip: () => {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        },

        appDropdown: () => {
            var getDropdownElement = document.querySelectorAll('.custom-dropdown .dropdown-item');
            for (var i = 0; i < getDropdownElement.length; i++) {
                getDropdownElement[i].addEventListener('click', function(e) {

                    // if (this.parentNode.classList.contains('dropdown-item-collapsable')) {
                    //     console.log('comnsos')
                    //     e.stopPropagation();
                    //     $('.custom-dropdown-icon .collapse').collapse('toggle')
                    //     $('.custom-dropdown-icon .dropdown-item-collapsable').toggleClass('show')
                    // }
                    
                    document.querySelector('.custom-dropdown .dropdown-toggle > span.icon img').setAttribute('src', this.querySelector('img').getAttribute('src'));
                    document.querySelector('.custom-dropdown .dropdown-toggle > span.text').innerText = this.querySelector('.text').getAttribute('data-value');
                })
            }
        }
        

    }
    

    return {
        init: () => {
            DefaultFunction.sidebar();
            DefaultFunction.sidebarOverlay();
            DefaultFunction.copyClipBoard();
            DefaultFunction.sidebarScrollbar();
            DefaultFunction.themeSwtich();
            DefaultFunction.tooltip();
            DefaultFunction.appDropdown();
        }
    }    
    
}();


DOCUMENTATION.init();












