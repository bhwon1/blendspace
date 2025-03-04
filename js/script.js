(function($, window) {
    const Obj = {
        init() {
            this.header();
        },
        header() {
            $('#laptop-nav-show').on('click', function() {
                $('#laptop-subnav').toggleClass('hidden');
            });
            
            $('#laptop-subnav').on('click', function(event) {
                event.stopPropagation(); // 메뉴 클릭 시 배경 클릭 이벤트가 발생하지 않도록 함
                $(this).toggleClass('hidden');
            });
            
            $('#background').on('click', function() {
                $('#laptop-subnav').addClass('hidden');
            });

            $('#mobile-nav-show').on('click',function(){
                $('#mobile-navsub').removeClass('hidden');
            })
            
            $('#mobile-nav-hide').on('click',function(){
                $('#mobile-navsub').addClass('hidden');
            })
        }
    };
    Obj.init();
})(jQuery, window);
