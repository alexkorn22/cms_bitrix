CalculatorPayback = function (urlAjax, productId) {
    this.cmServings = $('#cmServings');
    this.priceCofee = $('#priceCofee');
    this.priceSale = $('#priceSale');
    this.productId = $('#productId');
    this.urlAjax = urlAjax;
    var self = this;

    this.constructor = function () {
        self.priceSale.on('change',self.changeValue);
        self.priceCofee.on('change',self.changeValue);
        self.cmServings.on('change',self.changeValue);
        self.productId.on('change', self.changeProduct);
    };

    this.changeProduct = function (e) {
        self.cmServings.val( self.productId.find(':selected').data('servings'));
        self.changeValue(e)
    };

    this.changeValue  = function (e) {
        $.ajax({
            url : self.urlAjax,
            type: 'POST',
            data: {
                action : 'recalculate',
                priceSale : self.priceSale.val(),
                priceCofee : self.priceCofee.val(),
                cmServings : self.cmServings.val(),
                productId : self.productId.val()
            },
            success : function (html) {
                $("#result").html(html)
            }
        });
    };
    this.constructor();
};