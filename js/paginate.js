(function($){

       $.fn.customPaginate = function(options)
       {
           var paginationContainer = this;
           var itemsToPaginate;
           
            
           var defaults = {
       
                itemsPerPage : 3
           
           };
        
           var settings = {};
        
           $.extend(settings, defaults, options);
           
           var itemsPerPage = settings.itemsPerPage;
        
           itemsToPaginate = $(settings.itemsToPaginate);
           var numberOfPaginationLinks = Math.ceil((itemsToPaginate.length / itemsPerPage));
           
        
           $("<ul class='pagination modal-1'></ul>").prependTo(paginationContainer);
           
           for(var index = 0; index < numberOfPaginationLinks; index++)
           {
                paginationContainer.find("ul").append("<li><a href='#'>"+ (index+1) + "</a></li>");
           }
           
           itemsToPaginate.filter(":gt(" + (itemsPerPage - 1)  + ")").hide();
           
           paginationContainer.find("ul li").first().addClass(settings.activeClass).end().on('click', function(){
			   
			   var $this = $(this);
			   
			   $this.addClass(settings.activeClass);
			   
			   $this.siblings().removeClass(settings.activeClass);
           
               var linkNumber = $this.text();
               
                var itemsToHide = itemsToPaginate.filter(":lt(" + ((linkNumber-1) * itemsPerPage)  + ")");
                $.merge(itemsToHide, itemsToPaginate.filter(":gt(" + ((linkNumber * itemsPerPage) - 1)  + ")"));
                
                var itemsToShow = itemsToPaginate.not(itemsToHide);

                $("html,body").animate({scrollTop:"0px"}, function(){
                  itemsToHide.hide();
                  itemsToShow.show();
                });
           });
           
       }
            
}(jQuery));